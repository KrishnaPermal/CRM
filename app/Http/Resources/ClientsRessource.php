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
        $adresse = new AdressesRessource($this->whenLoaded('adresse')); // Ici nous utilisons cette méthode pour renvoyer un "array" solo
        $contacts = ContactsRessource::collection($this->whenLoaded('contacts')); // Ici nous utilisons cette méthode pour renvoyer un ensemble de ressources

        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'adresse' => $adresse,
            'contacts' => $contacts,
        ];
    }
}
