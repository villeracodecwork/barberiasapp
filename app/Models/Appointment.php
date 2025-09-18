<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "barbershop_id",
        "barber_id",
        "person_id",
        "appointment_date",
        "status",
        "service_id",
        "price",
        "notes",
        "rating",
        "review",
        "cancellation_reason",
        "canceled_at",
        "completed_at",
        "start_time",
        "end_time",
        "duration_minutes",
        "payment_method",
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($appointment) {
            AppointmentLog::create([
                'loggable_id' => $appointment->id,
                'loggable_type' => Appointment::class,
                'user_id' => Auth::id(),
                'action' => 'created',
                'old_data' => null,
                'new_data' => $appointment->toArray(),
            ]);
        });

        static::updated(function ($appointment) {
            $changes = $appointment->getChanges();
            AppointmentLog::create([
                'loggable_id' => $appointment->id,
                'loggable_type' => Appointment::class,
                'user_id' => Auth::id(),
                'action' => 'updated',
                'old_data' => json_encode($appointment->getOriginal()),
                'new_data' => json_encode($changes),
            ]);
        });

        static::deleted(function ($appointment) {
            AppointmentLog::create([
                'loggable_id' => $appointment->id,
                'loggable_type' => Appointment::class,
                'user_id' => Auth::id(),
                'action' => 'deleted',
                'old_data' => $appointment->toArray(),
                'new_data' => null,
            ]);
        });
    }
}
