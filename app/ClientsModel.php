<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = "clients";

    protected $fillable = ["id", "nom_entreprise"];

    public $timestamps = false;

    //Relation  one to one -> adresses

    public function adresse()
    {
        return $this->belongsTo(AdressesModel::class, 'id_adresse');
    }

    /**
     * Retourne la liste des contacts donc ont utilise "hasMany" retourne un array (collection);
     */
    public function contacts()
    {
        return $this->hasMany(ContactsModel::class, 'id_client');
    }
}
