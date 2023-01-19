<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        $accessToken = $user->createToken('authToken')->plainTextToken;

        return response()->json([ 'user' => $user, 'access_token' => $accessToken,'token_type'=>'Bearer']);

    }

    public function login(Request $request)
    {
       $data = $request->all();

        $validator = Validator::make($data, [
            'name'=>'required|max:55',
            'email' => 'required|email',
            'password' => 'required|min:6',
                        
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()]);
        }

        if (!auth()->attempt($data)) {
            return response()->json(['message' => 'Login credentials are invaild'],401);
        }

        $user = User::where('email',$request['email'])->firstOrFail();

        $accessToken = $user->createToken('authToken')->plainTextToken;

        return response()->json(['message'=>'Welcome '.$user->name.' to Your profile','access_token'=>$accessToken,'token_type'=>'Bearer']);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['obrisano' => true]);
    }


}
