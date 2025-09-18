<?php

namespace App\Models;

use App\Enums\DayOfWeek;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Schedule extends Model
{
    use HasFactory, Notifiable;


    protected $table = 'schedules';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "barbershop_id",
        "barber_id",
        "day_of_week",
        "start_time",
        "end_time",
        "slot_duration_minutes",
        "is_active",
    ];


    protected $casts = [
        'slot_duration_minutes' => 'integer',
        'is_active' => 'boolean',
        "day_of_week" => DayOfWeek::class,
    ];

    /**
     * barberia
     */
    public function barbershop(): BelongsTo
    {
        return $this->belongsTo(Barbershop::class);
    }

    /**
     * barbero
     */
    public function barber(): BelongsTo
    {
        return $this->belongsTo(Barber::class);
    }

}
