<?php

namespace App\Models;

use App\Models\commandes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class produits extends Model
{
    use HasFactory;

    public function commande():BelongsToMany{
        return $this->belongsToMany(commandes::class)
        ->withPivot('prix_total','quantite_total');
    }
}
