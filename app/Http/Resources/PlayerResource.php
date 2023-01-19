<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'player';
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'firstname'=>$this->resource->firstname,
            'lastname'=>$this->resource->lastname,
            'age'=>$this->resource->age,
            'height'=>$this->resource->height,
            'position'=>$this->resource->position,
        ];
    }
}
