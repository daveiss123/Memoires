<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory; protected $fillable = ['nom_filiere',
    'departement_id',];

public function departement(){
return $this->belongsTo(departement::class);
}

public function memoires(){
return $this->hasMany(memoire::class);
}
}
