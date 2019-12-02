<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $adresse = new AdressesRessource($this->whenLoaded('adresse'));
        $contacts = ContactsRessource::collection($this->whenLoaded('contacts'));
        return [
            'id' => $this->id,
            'nomClient' => $this->nomClient,
            'adresse' =>$adresse,
            'contacts' =>$contacts
        ];
    }
}
