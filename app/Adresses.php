<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    protected $table = "adresses";

    protected $fillable = ["id", "adresse", "code_postal", "ville"];

    public $timestamps = false;
    
    public function client()
    {
      return  $this->belongsTo(Clients::class, 'id_adresse');
    }
}
