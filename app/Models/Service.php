<?php

namespace App\Models;


use App\Enums\IdentificationType;
use App\Enums\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    protected $casts = [
        'duration_minutes' => 'integer',
        'price' => 'float',
        'is_active' => 'boolean',
        "category" => ServiceCategory::class,
    ];

    /**
     * Get the barbershop that owns the service.
     */
    public function barbershop()
    {
        return $this->belongsTo(Barbershop::class);
    }

    /**
     * The barbers that belong to the service.
     */
    public function barbers(): BelongsToMany
    {
        return $this->belongsToMany(Barber::class, 'services_barbers', 'service_id', 'barber_id');
    }

}
