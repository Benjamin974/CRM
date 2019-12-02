<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "contacts";

    protected $fillable = ["id", "nom", "prenom", "tel", "email", "poste", "id_client"];

    public $timestamps = false;
    
    public function client()
    {
      return  $this->belongsTo(Clients::class, 'id');
    }
    
}
