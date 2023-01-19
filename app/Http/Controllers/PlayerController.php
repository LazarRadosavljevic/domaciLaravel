<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Resources\PlayerResource;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();

        return $players;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'age' => 'required|integer',
            'height' => 'required|integer',
            'position'=>'required|string',
            'team_id'=>'required'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors(), 'Validation Error']);
        }

        $player = Player::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'age'=>$request->age,
            'height'=>$request->height,
            'position'=>$request->position,
            'team_id'=>Auth::team()->id 
        ]);

        return response()->json(['player' => new PlayerResource($player), 'message' => 'Player created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return new PlayerResource($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'age'=>$request->age,
            'height'=>$request->height,
            'position'=>$request->position,
            'team_id'=>Auth::team()->id 
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors(), 'Validation Error']);
        }

        $player->update($data);

        return response()->json(['player' => new PlayerResource($player), 'message' => 'Player updated successfully']);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return response()->json(['message' => 'Player deleted successfully']);
    
    }
}
