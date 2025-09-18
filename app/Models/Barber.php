<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Barber extends Model
{
    use HasFactory, Notifiable;


    protected $table = 'barbers';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "person_id",
        "nickname",
        "profile_picture",
    ];


   
}
