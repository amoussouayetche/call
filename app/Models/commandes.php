<?php

namespace App\Models;

use App\Models\produits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class commandes extends Model
{
    use HasFactory;

    public function produits():BelongsToMany{
        return $this->belongsToMany(produits::class)
        ->withPivot('prix_total','quantite_total');
    }
}
