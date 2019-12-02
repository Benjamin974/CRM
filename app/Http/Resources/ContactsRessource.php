<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $client = new ClientsRessource($this->whenLoaded('client'));
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'tel' => $this->tel,
            'email' => $this->email,
            'poste' => $this->poste,
            'client'=> $client
        ];
    }
}
