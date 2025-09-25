<?php

namespace App\Models;

use App\Enums\DayOfWeek;
use Carbon\Carbon;
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
        "type_owner",
    ];


    protected $casts = [
        'slot_duration_minutes' => 'integer',
        'is_active' => 'boolean',
        "day_of_week" => DayOfWeek::class,

    ];

    // Accessor para darlo ya en AM/PM
    public function getStartTimeFormattedAttribute()
    {
        return Carbon::createFromFormat('H:i:s', $this->start_time)
            ->format('h:i A');
    }

    // Accessor para darlo ya en AM/PM
    public function getEndTimeFormattedAttribute()
    {
        return Carbon::createFromFormat('H:i:s', $this->end_time)
            ->format('h:i A');
    }



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

    /**
     * crear horarios para los dias seleccionados
     * @param array $daysOfWeek
     */
    public static function createOrUpdateForDays(Barbershop $barbershop, array $data): void
    {

        foreach ($data['day_of_week'] as $day) {

            $barbershop->schedules()->updateOrCreate([

                'day_of_week' => $day,
            ], [
                'barber_id' => $data['barber_id'] ?? null,
                'start_time' => $data['start_time'],
                'end_time' => $data['end_time'],
                'is_active' => $data['is_active'] ?? true,
            ]);
        }
    }
}
