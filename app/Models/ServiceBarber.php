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

    /**
     * Get the service that owns the ServiceBarber.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Get the barber that owns the ServiceBarber.
     */
    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

}
