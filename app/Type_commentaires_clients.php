<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_commentaires_clients extends Model
{
    protected $table = "types_commentaires_clients";

    protected $fillable = ["id", "type"];

    public $timestamps = false;
    
    public function commentaires()
    {
      return  $this->hasMany(Commentaires_clients::class, 'id');
    }
}
