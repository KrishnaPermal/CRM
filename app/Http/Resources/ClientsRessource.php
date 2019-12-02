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
        $contact = new ContactsRessource($this->whenLoaded('contact'));

        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'tel' => $this->tel,
            'email' => $this->email,
            'poste' => $this->poste,
            'adresse' => $this->adresse,
            'code_postal' => $this->code_postal,
            'villes' => $this->villes,
            
            // 'status' => $status,
            'adresse' => $adresse,
            'contact' => $contact,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
