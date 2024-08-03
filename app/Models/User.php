<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profil(): HasMany
    {
        return $this->hashMany(Profil::class);
    }

    public function halaman(): HasMany
    {
        return $this->hashMany(Halaman::class);
    }

    public function post(): HasMany
    {
        return $this->hashMany(Post::class);
    }

    public function galeri(): HasMany
    {
        return $this->hashMany(Galeri::class);
    }

    public function iklan(): HasMany
    {
        return $this->hashMany(Iklan::class);
    }

    public function pengurus(): HasMany
    {
        return $this->hashMany(Pengurus::class);
    }

    public function slider(): HasMany
    {
        return $this->hashMany(Slider::class);
    }

    public function layanan(): HasMany
    {
        return $this->hashMany(Layanan::class);
    }

    public function kas(): HasMany
    {
        return $this->hashMany(Kas::class);
    }

    public function menu(): HasMany
    {
        return $this->hashMany(Menu::class);
    }
}
