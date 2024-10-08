<?php

namespace App\Models;

use App\Models\achat;
use App\Models\panier;
use App\Models\favorie;
use App\Models\meilleure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produit extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = ["images" => 'array'];

    public function categorie()
    {
        return $this->belongsToMany(categorie::class);
    }
    public function favorie()
    {
        return $this->belongsToMany(favorie::class);
    }
    public function acheter()
    {
        return $this->belongsToMany(achat::class);
    }
    public function note()
    {
        return $this->belongsToMany(meilleure::class);
    }
    public function panier()
    {
        return $this->belongsToMany(panier::class);
    }
}
