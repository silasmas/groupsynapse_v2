<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\role;
use App\Models\achat;
use App\Models\panier;
use App\Models\favorie;
use App\Models\addresse;
use App\Models\meilleure;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
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
    public function role()
    {
        return $this->belongsToMany(role::class);
    }
    public function adresse()
    {
        return $this->hasMany(addresse::class);
    }
}
