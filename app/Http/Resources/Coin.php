<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Coin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
        [
            'id'=> $this->id,
            'name'=> $this->name,
            'market_cap'=> $this->market_cap,
            'price'=> $this->price,
            'volume_24h'=> $this->volume_24h,
            'percent_change_24h'=> $this->percent_change_24h,
        ];
    }
}
