<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires_clients extends Model
{
    protected $table = "commentaires_clients";

    protected $fillable = ["id", "commentaire", "id_client", "id_types_commentaire"];

    public $timestamps = false;
    
    public function client()
    {
      return  $this->belongsTo(Clients::class, 'id');
    }

    public function type()
    {
      return  $this->belongsTo(Type_commentaires_clients::class, 'id');
    }
}
