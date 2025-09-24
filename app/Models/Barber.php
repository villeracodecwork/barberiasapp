<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Barber extends Model
{
    use HasFactory, Notifiable;


    protected $table = 'barbers';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "person_id",
        "barbershop_id",
        "nickname",
        "profile_picture",
        "is_active",
        "description"
        
    ];

    /**
     * nombre para mostrar
     */
    public function getNameForDisplayAttribute(): string
    {
        return $this->person->full_name;
    }

    /**
     * persona
     */
    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class, 'person_id', 'id');
    }


    /**
     * barbershop
     */
    public function barbershop(): BelongsTo
    {
        return $this->belongsTo(Barbershop::class, 'barbershop_id', 'id');
    }


    /**
     * crear barbero
     */
    public static function createBarber(Barbershop $barbershop, array $data): Barber
    {

        // Create a new Person
        $person = Person::firstOrCreate([
            'phone' => $data['phone'],
        ], [
            'identification_type' => $data['identification_type'],
            'identification_number' => $data['identification_number'],
            'name' => $data['name'],
            'last_name' => $data['last_name'],

            'verification_code' => null,
            'email' => $data['email'] ?? null,
            'email_verified_at' => null,
            'is_enabled' => true,
            'birth_date' => $data['birth_date'] ?? null,
            'address' => $data['address'] ?? null,
            'profile_picture' => $data['profile_picture'] ?? null
        ]);

        //crear barbero
        return self::create([
            'nickname' => $data['nickname'] ?? null,
            'profile_picture' => $data['profile_picture'] ?? null,
            'person_id' => $person->id,
            'barbershop_id' => $barbershop->id,
            'is_active' =>  true,
            'description' => $data['description'] ?? null,
        ]);
    }

    /**
     * actualizar barbero
     */
    public static function updateBarber(array $data, self $barber): bool
    {

        //si el telefono es distinto
        if ($data['phone'] ?? null != $barber->person->phone) {
            $data['verification_code'] = null;
        }

        // Update the Person model
        $barber->person->update($data);

        // Update the Barber model
        return $barber->update([
            'nickname' => $data['nickname'] ?? $barber->nickname,
            'profile_picture' => $data['profile_picture'] ?? $barber->profile_picture,
            'is_active' => $data['is_active'] ?? $barber->is_active,
            'description' => $data['description'] ?? $barber->description,
        ]);
    }
}
