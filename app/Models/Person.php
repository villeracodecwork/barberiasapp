<?php

namespace App\Models;


use App\Enums\IdentificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Person extends Model
{
    use HasFactory, Notifiable;


    protected $table = 'people';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'identification_type',
        'identification_number',
        'name',
        'last_name',
        'phone',
        'verification_code',
        'email',
        'email_verified_at',
        'is_enabled',
        'birth_date',
        'address',
        'profile_picture'
    ];


    protected $casts = [
        'identification_type' => IdentificationType::class,
        'email_verified_at' => 'datetime',
        'is_enabled' => 'boolean',
        'birth_date' => 'date',
    ];

    /**
     * nombre completo
     */
    public function getFullNameAttribute(): string
    {
        return "{$this->name} {$this->last_name}";
    }

}
