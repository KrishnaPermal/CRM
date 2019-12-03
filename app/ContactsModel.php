<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = "contacts";

    protected $fillable = ["id", "nom", "prenom", "tel", "email", "post"];

    public $timestamps = false;

    //Relation  one to one -> clients

    public function client ()
    {
        return $this->belongsTo(ClientsModel::class, 'id_client');
    }
}
