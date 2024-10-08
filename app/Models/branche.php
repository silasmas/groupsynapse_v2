<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class branche extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categorie()
    {
        return $this->hasMany(categorie::class);
    }
}
