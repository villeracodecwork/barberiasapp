<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBarber extends Model
{
    use HasFactory;

    protected $table = 'services_barbers';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "service_id",
        "barber_id",
    ];


   
}
