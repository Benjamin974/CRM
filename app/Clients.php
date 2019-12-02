<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = "clients";

    protected $fillable = ["id", "nomClient", "id_adresse"];

    public $timestamps = false;
    
    public function adresse()
    {
      return  $this->belongsTo(Adresses::class, 'id_adresse');
    }

    public function contacts()
    {
      return  $this->hasMany(Contacts::class, 'id_client');
    }

}
