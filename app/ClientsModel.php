<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = "clients";

    protected $fillable = ["id", "nom"];

    public $timestamps = false;

    //Relation  one to one -> adresses

    public function adresses()
    {
        return $this->belongsTo(AdressesModel::class, 'id_adresse');
    }
}
