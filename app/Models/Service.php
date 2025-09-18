<?php

namespace App\Models;


use App\Enums\IdentificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "barbershop_id",
        "category",
        "name",
        "description",
        "duration_minutes",
        "profile_picture",
        "price",
        "is_active",
    ];


   
}
