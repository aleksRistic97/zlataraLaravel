<?php

namespace App\Http\Resources;

use App\Models\Kategorija;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class NakitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'opis' => $this->resource->opis,
            'boja_zlata' => $this->resource->boja_zlata,
            'cena' => $this->resource->cena,
           
            'kategorija' => new kategorijaResource(Kategorija::find( $this->resource->kategorija_id))







        ];
    }
}
