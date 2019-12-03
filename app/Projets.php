<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    protected $table = "projets";

    protected $fillable = ["id", "nom", "id_client"];

    public $timestamps = false;
    
    public function client()
    {
      return  $this->belongsTo(Clients::class, 'id');
    }
}
