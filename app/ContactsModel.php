<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = "contacts";

    protected $fillable = ["id", "nom", "prenom", "tel", "email", "poste"];

    public $timestamps = false;

    //Relation  one to one -> clients

    public function clients ()
    {
        return $this->belongsTo(Clients::class, 'id_client');
    }
}
