<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdressesModel extends Model
{
    protected $table = "adresses";

    protected $fillable = ["id", "adresse", "code-postal", "villes"];

    public $timestamps = false;

    public function client(){
    
        return $this->hasOne(ClientsModel::class, 'id_adresse');

}

}
