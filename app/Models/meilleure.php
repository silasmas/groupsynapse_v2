<?php

namespace App\Models;

use App\Models\User;
use App\Models\produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class meilleure extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
