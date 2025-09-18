<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarbershopSetting extends Model
{
    use HasFactory;

    protected $table = 'barbershop_settings';

    protected $fillable = [
        'barbershop_id',
        'key',
        'value',
        'description',
    ];

    public function barbershop()
    {
        return $this->belongsTo(Barbershop::class);
    }
}
