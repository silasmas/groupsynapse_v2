<?php

namespace App\Models;

use App\Models\branche;
use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function branche()
    {
        return $this->belongsTo(branche::class);
    }
    public function produit()
    {
        return $this->belongsToMany(produit::class);
    }
}
