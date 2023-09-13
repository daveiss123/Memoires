<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memoire extends Model
{
    use HasFactory;

    protected $fillable = ['theme',
                        'date_de_soutenance',
                        'fichier_pdf',
                        'users_id',
                        'niveau_id',
                        'filiere_id',
                    ];

public function filiere(){
                        return $this->belongsTo(filiere::class);
                    }
                    
public function etudiant(){
                    return $this->belongsTo(user::class,'etudiant_id');
                    }
                    
                    // Mutateur pour stocker le fichier
public function setFichierPdfAttribute($value)
                    {
                    $fileName = time() . '_' . $value->getClientOriginalName();
                    $value->storeAs('memoires', $fileName, 'public');
                    $this->attributes['fichier_pdf'] = $fileName;
                    }
                    
                    // Accesseur pour récupérer le lien vers le fichier
public function getFichierPdfAttribute($value)
                    {
                    return Storage::disk('public')->url('memoires/' . $value);
                    }
                    
                    }


