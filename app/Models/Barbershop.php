<?php

namespace App\Models;


use App\Enums\IdentificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    use HasFactory;


    protected $table = 'barbershops';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "name",
        "profile_picture",
        "municipality_code",
        "latitude",
        "longitude",
        "address",
        "phone",
        "email",
    ];


    protected $casts = [
        'identification_type' => IdentificationType::class,
        'email_verified_at' => 'datetime',
        'is_enabled' => 'boolean',
        'birth_date' => 'date',
    ];

   
}
