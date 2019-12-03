<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentairesRessource extends JsonResource
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
        $type = new TypeCommentairesRessource($this->whenLoaded('type'));
        return [
            'id' => $this->id,
            'commentaire' => $this->commentaire,
            'client'=> $client,
            'type' => $type
        ];
    }
}
