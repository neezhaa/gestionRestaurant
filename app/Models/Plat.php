<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable = [
        'categorie_id',
        'intitulé',
        'description',
        'prix',
        'photo'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function composants()
    {
        return $this->belongsToMany(Composant::class)->withPivot('quantite', 'unité');
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class)->withPivot('nombre');
    }
}
