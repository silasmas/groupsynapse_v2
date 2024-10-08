<?php

namespace App\Models;

use App\Models\produit;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorieProduit extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
}
