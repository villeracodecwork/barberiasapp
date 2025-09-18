<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarbershopPayment extends Model
{
    use HasFactory;

    protected $table = 'barbershop_payments';

    protected $fillable = [
        'barbershop_id',
        'amount',
        'payment_date',
        'end_date',
        'payment_method',
        'status',
        'notes',
        'plan_type',
        'plan_duration_months',
    ];

    // Relaciones, scopes, etc. pueden agregarse aquí
}
