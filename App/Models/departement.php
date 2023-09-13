<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    use HasFactory;

    protected $fillable = ['nom_departement'];
public function filiere(){
        return $this->hasMany(filiere::class);
}
}
