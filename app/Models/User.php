<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\IdentificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'phone',
        'verification_code',
        'person_id',
        'identification_type',
        'identification_number',
        'is_enabled',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
            'identification_type' => IdentificationType::class,
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_enabled' => 'boolean',
        ];
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('SuperAdmin');
    }


    public function routeNotificationForHablame()
    {
        return $this->phone; // número en formato internacional (57300xxxxxxx)
    }
}
