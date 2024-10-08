<?php

namespace App\Models;

use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class achat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produit()
    {
        return $this->belongsToMany(produit::class);
    }
}
