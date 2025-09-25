<?php

namespace App\Models;

use App\Enums\BarbershopStatus;
use App\Enums\IdentificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barbershop extends Model
{
    use HasFactory;


    protected $table = 'barbershops';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "name",
        "slug",
        "description",
        "profile_picture",
        "municipality_code",
        "latitude",
        "longitude",
        "neighborhood",
        "address",
        "phone",
        "email",
        "status",
        "website",
        "instagram",
        "facebook",
        "twitter",
        "tiktok",
        "youtube",
        "whatsapp",
        "operation_key",
        "admin_id",

    ];
    


    protected $casts = [
        'identification_type' => IdentificationType::class,
        'email_verified_at' => 'datetime',
        'is_enabled' => 'boolean',
        'birth_date' => 'date',
        'status' => BarbershopStatus::class,
    ];


    /**
     * municipio
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class, 'municipality_code', 'code');
    }

    /**
     * Relación con las barberos
     */
    public function barbers(): HasMany
    {
        return $this->hasMany(Barber::class);
    }

    /**
     * Relación con los servicios
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * crear una barberia
     * @param array $data
     * @return Barbershop
     */
    public static function createBarbershop(array $data): Barbershop
    {

        $department_municipality = $data['department_municipality'] ?? null;
        $data['status'] = $data['status'] ?? BarbershopStatus::Registered;
        

        if ($department_municipality) {
            $parts = explode(' - ', $department_municipality);
            if (count($parts) === 2) {
                $department = trim($parts[0]);
                $municipality = trim($parts[1]);

                $municipalityNorm = self::normalize($municipality);
                $departmentNorm = self::normalize($department);

                $municipio = Municipality::whereRaw("LOWER(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(name, 'á','a'),'é','e'),'í','i'),'ó','o'),'ú','u'),'ñ','n')) = ?", [$municipalityNorm])
                    ->whereHas('department', function ($query) use ($departmentNorm) {
                        $query->whereRaw("LOWER(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(name, 'á','a'),'é','e'),'í','i'),'ó','o'),'ú','u'),'ñ','n')) = ?", [$departmentNorm]);
                    })
                    ->first();
                if ($municipio) {
                    $data['municipality_code'] = $municipio->code;
                }
            }
        }
        return self::create($data);
    }

    public static function normalize($string)
    {
        $string = strtolower($string);
        $string = str_replace(
            ['á', 'é', 'í', 'ó', 'ú', 'ñ'],
            ['a', 'e', 'i', 'o', 'u', 'n'],
            $string
        );
        return $string;
    }


    public static function createSlug($name): string
    {
       //en minusculas y sin tildes ni ñ
        $slug = strtolower(str_replace(' ', '-', self::normalize($name)));

        //como las barberias pueden tener el mismo nombre, se agrega un numero al final del slug
        $counts = self::where('slug', $slug)->count();
        if ($counts > 0) {
            $slug .= '-' . ($counts + 1);
        }
        return $slug;
    }
}
