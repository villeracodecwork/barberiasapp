<?php

namespace App\Models;

use App\Enums\PaymentStatus;
use App\Enums\PlanType;
use Faker\Provider\ar_EG\Payment;
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

    protected $casts = [
        'payment_date' => 'datetime',
        'end_date' => 'datetime',
        'status' => PaymentStatus::class,
        'plan_type' => PlanType::class,
    ];
}
