<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\App;
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


    protected $casts = [
        'appointment_date' => 'date',
        'canceled_at' => 'datetime',
        'completed_at' => 'datetime',
        "status" => AppointmentStatus::class,
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

    /**
     * barberia
     */
    public function barbershop():BelongsTo
    {
        return $this->belongsTo(Barbershop::class, 'barbershop_id', 'id');
    }

    /**
     * barber
     */
    public function barber():BelongsTo
    {
        return $this->belongsTo(Barber::class, 'barber_id', 'id');
    }

    /**
     * person
     */
    public function person():BelongsTo
    {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }

    /**
     * service
     */
    public function service():BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }   

}

