<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{
    use HasFactory;    protected $fillable = ['nom_niveau'];
    public function role(){
            return $this->hasOne(role::class);
    }
}
