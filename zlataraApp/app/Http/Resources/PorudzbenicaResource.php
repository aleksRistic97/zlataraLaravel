<?php

namespace App\Http\Resources;

use App\Models\Nakit;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class PorudzbenicaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->resource->id,
            'adresa' => $this->resource->adresaDostave,
            'vreme' => $this->resource->vreme,
           
            'nakit' =>new NakitResource(Nakit::find( $this->resource->nakit_id)),
            'user' =>new UserResource(User::find( $this->resource->user_id))
             
    ];
    }
}
