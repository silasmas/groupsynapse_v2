<?php

namespace App\Models;

use App\Models\achat;
use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function achat()
    {
        return $this->belongsTo(achat::class);
    }
    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
}
