<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->integer('code')->primary();
            $table->integer('department_code');
            $table->string('name');
            $table->timestamps();
            $table->foreign('department_code')->references('code')->on('departments');
        });

        $municipalities = json_decode('[
  {
    "code": "5001",
    "department_code": "5",
    "name": "MEDELLÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5002",
    "department_code": "5",
    "name": "ABEJORRAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5004",
    "department_code": "5",
    "name": "ABRIAQUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5021",
    "department_code": "5",
    "name": "ALEJANDRÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5030",
    "department_code": "5",
    "name": "AMAGÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5031",
    "department_code": "5",
    "name": "AMALFI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5034",
    "department_code": "5",
    "name": "ANDES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5036",
    "department_code": "5",
    "name": "ANGELÓPOLIS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5038",
    "department_code": "5",
    "name": "ANGOSTURA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5040",
    "department_code": "5",
    "name": "ANORÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5042",
    "department_code": "5",
    "name": "SANTA FÉ DE ANTIOQUIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5044",
    "department_code": "5",
    "name": "ANZÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5045",
    "department_code": "5",
    "name": "APARTADÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5051",
    "department_code": "5",
    "name": "ARBOLETES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5055",
    "department_code": "5",
    "name": "ARGELIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5059",
    "department_code": "5",
    "name": "ARMENIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5079",
    "department_code": "5",
    "name": "BARBOSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5086",
    "department_code": "5",
    "name": "BELMIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5088",
    "department_code": "5",
    "name": "BELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5091",
    "department_code": "5",
    "name": "BETANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5093",
    "department_code": "5",
    "name": "BETULIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5101",
    "department_code": "5",
    "name": "CIUDAD BOLÍVAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5107",
    "department_code": "5",
    "name": "BRICEÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5113",
    "department_code": "5",
    "name": "BURITICÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5120",
    "department_code": "5",
    "name": "CÁCERES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5125",
    "department_code": "5",
    "name": "CAICEDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5129",
    "department_code": "5",
    "name": "CALDAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5134",
    "department_code": "5",
    "name": "CAMPAMENTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5138",
    "department_code": "5",
    "name": "CAÑASGORDAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5142",
    "department_code": "5",
    "name": "CARACOLÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5145",
    "department_code": "5",
    "name": "CARAMANTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5147",
    "department_code": "5",
    "name": "CAREPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5148",
    "department_code": "5",
    "name": "EL CARMEN DE VIBORAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5150",
    "department_code": "5",
    "name": "CAROLINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5154",
    "department_code": "5",
    "name": "CAUCASIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5172",
    "department_code": "5",
    "name": "CHIGORODÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5190",
    "department_code": "5",
    "name": "CISNEROS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5197",
    "department_code": "5",
    "name": "COCORNÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5206",
    "department_code": "5",
    "name": "CONCEPCIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5209",
    "department_code": "5",
    "name": "CONCORDIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5212",
    "department_code": "5",
    "name": "COPACABANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5234",
    "department_code": "5",
    "name": "DABEIBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5237",
    "department_code": "5",
    "name": "DONMATÍAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5240",
    "department_code": "5",
    "name": "EBÉJICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5250",
    "department_code": "5",
    "name": "EL BAGRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5264",
    "department_code": "5",
    "name": "ENTRERRÍOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5266",
    "department_code": "5",
    "name": "ENVIGADO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5282",
    "department_code": "5",
    "name": "FREDONIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5284",
    "department_code": "5",
    "name": "FRONTINO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5306",
    "department_code": "5",
    "name": "GIRALDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5308",
    "department_code": "5",
    "name": "GIRARDOTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5310",
    "department_code": "5",
    "name": "GÓMEZ PLATA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5313",
    "department_code": "5",
    "name": "GRANADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5315",
    "department_code": "5",
    "name": "GUADALUPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5318",
    "department_code": "5",
    "name": "GUARNE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5321",
    "department_code": "5",
    "name": "GUATAPÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5347",
    "department_code": "5",
    "name": "HELICONIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5353",
    "department_code": "5",
    "name": "HISPANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5360",
    "department_code": "5",
    "name": "ITAGÜÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5361",
    "department_code": "5",
    "name": "ITUANGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5364",
    "department_code": "5",
    "name": "JARDÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5368",
    "department_code": "5",
    "name": "JERICÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5376",
    "department_code": "5",
    "name": "LA CEJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5380",
    "department_code": "5",
    "name": "LA ESTRELLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5390",
    "department_code": "5",
    "name": "LA PINTADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5400",
    "department_code": "5",
    "name": "LA UNIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5411",
    "department_code": "5",
    "name": "LIBORINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5425",
    "department_code": "5",
    "name": "MACEO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5440",
    "department_code": "5",
    "name": "MARINILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5467",
    "department_code": "5",
    "name": "MONTEBELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5475",
    "department_code": "5",
    "name": "MURINDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5480",
    "department_code": "5",
    "name": "MUTATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5483",
    "department_code": "5",
    "name": "NARIÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5490",
    "department_code": "5",
    "name": "NECOCLÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5495",
    "department_code": "5",
    "name": "NECHÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5501",
    "department_code": "5",
    "name": "OLAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5541",
    "department_code": "5",
    "name": "PEÑOL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5543",
    "department_code": "5",
    "name": "PEQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5576",
    "department_code": "5",
    "name": "PUEBLORRICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5579",
    "department_code": "5",
    "name": "PUERTO BERRÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5585",
    "department_code": "5",
    "name": "PUERTO NARE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5591",
    "department_code": "5",
    "name": "PUERTO TRIUNFO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5604",
    "department_code": "5",
    "name": "REMEDIOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5607",
    "department_code": "5",
    "name": "RETIRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5615",
    "department_code": "5",
    "name": "RIONEGRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5628",
    "department_code": "5",
    "name": "SABANALARGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5631",
    "department_code": "5",
    "name": "SABANETA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5642",
    "department_code": "5",
    "name": "SALGAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5647",
    "department_code": "5",
    "name": "SAN ANDRÉS DE CUERQUÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5649",
    "department_code": "5",
    "name": "SAN CARLOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5652",
    "department_code": "5",
    "name": "SAN FRANCISCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5656",
    "department_code": "5",
    "name": "SAN JERÓNIMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5658",
    "department_code": "5",
    "name": "SAN JOSÉ DE LA MONTAÑA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5659",
    "department_code": "5",
    "name": "SAN JUAN DE URABÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5660",
    "department_code": "5",
    "name": "SAN LUIS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5664",
    "department_code": "5",
    "name": "SAN PEDRO DE LOS MILAGROS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5665",
    "department_code": "5",
    "name": "SAN PEDRO DE URABÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5667",
    "department_code": "5",
    "name": "SAN RAFAEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5670",
    "department_code": "5",
    "name": "SAN ROQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5674",
    "department_code": "5",
    "name": "SAN VICENTE FERRER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5679",
    "department_code": "5",
    "name": "SANTA BÁRBARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5686",
    "department_code": "5",
    "name": "SANTA ROSA DE OSOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5690",
    "department_code": "5",
    "name": "SANTO DOMINGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5697",
    "department_code": "5",
    "name": "EL SANTUARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5736",
    "department_code": "5",
    "name": "SEGOVIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5756",
    "department_code": "5",
    "name": "SONSÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5761",
    "department_code": "5",
    "name": "SOPETRÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5789",
    "department_code": "5",
    "name": "TÁMESIS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5790",
    "department_code": "5",
    "name": "TARAZÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5792",
    "department_code": "5",
    "name": "TARSO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5809",
    "department_code": "5",
    "name": "TITIRIBÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5819",
    "department_code": "5",
    "name": "TOLEDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5837",
    "department_code": "5",
    "name": "TURBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5842",
    "department_code": "5",
    "name": "URAMITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5847",
    "department_code": "5",
    "name": "URRAO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5854",
    "department_code": "5",
    "name": "VALDIVIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5856",
    "department_code": "5",
    "name": "VALPARAÍSO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5858",
    "department_code": "5",
    "name": "VEGACHÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5861",
    "department_code": "5",
    "name": "VENECIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5873",
    "department_code": "5",
    "name": "VIGÍA DEL FUERTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5885",
    "department_code": "5",
    "name": "YALÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5887",
    "department_code": "5",
    "name": "YARUMAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5890",
    "department_code": "5",
    "name": "YOLOMBÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5893",
    "department_code": "5",
    "name": "YONDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "5895",
    "department_code": "5",
    "name": "ZARAGOZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8001",
    "department_code": "8",
    "name": "BARRANQUILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8078",
    "department_code": "8",
    "name": "BARANOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8137",
    "department_code": "8",
    "name": "CAMPO DE LA CRUZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8141",
    "department_code": "8",
    "name": "CANDELARIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8296",
    "department_code": "8",
    "name": "GALAPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8372",
    "department_code": "8",
    "name": "JUAN DE ACOSTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8421",
    "department_code": "8",
    "name": "LURUACO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8433",
    "department_code": "8",
    "name": "MALAMBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8436",
    "department_code": "8",
    "name": "MANATÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8520",
    "department_code": "8",
    "name": "PALMAR DE VARELA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8549",
    "department_code": "8",
    "name": "PIOJÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8558",
    "department_code": "8",
    "name": "POLONUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8560",
    "department_code": "8",
    "name": "PONEDERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8573",
    "department_code": "8",
    "name": "PUERTO COLOMBIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8606",
    "department_code": "8",
    "name": "REPELÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8634",
    "department_code": "8",
    "name": "SABANAGRANDE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8638",
    "department_code": "8",
    "name": "SABANALARGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8675",
    "department_code": "8",
    "name": "SANTA LUCÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8685",
    "department_code": "8",
    "name": "SANTO TOMÁS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8758",
    "department_code": "8",
    "name": "SOLEDAD",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8770",
    "department_code": "8",
    "name": "SUAN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8832",
    "department_code": "8",
    "name": "TUBARÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "8849",
    "department_code": "8",
    "name": "USIACURÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "11001",
    "department_code": "11",
    "name": "BOGOTÁ. D.C.",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13001",
    "department_code": "13",
    "name": "CARTAGENA DE INDIAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13006",
    "department_code": "13",
    "name": "ACHÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13030",
    "department_code": "13",
    "name": "ALTOS DEL ROSARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13042",
    "department_code": "13",
    "name": "ARENAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13052",
    "department_code": "13",
    "name": "ARJONA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13062",
    "department_code": "13",
    "name": "ARROYOHONDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13074",
    "department_code": "13",
    "name": "BARRANCO DE LOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13140",
    "department_code": "13",
    "name": "CALAMAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13160",
    "department_code": "13",
    "name": "CANTAGALLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13188",
    "department_code": "13",
    "name": "CICUCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13212",
    "department_code": "13",
    "name": "CÓRDOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13222",
    "department_code": "13",
    "name": "CLEMENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13244",
    "department_code": "13",
    "name": "EL CARMEN DE BOLÍVAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13248",
    "department_code": "13",
    "name": "EL GUAMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13268",
    "department_code": "13",
    "name": "EL PEÑÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13300",
    "department_code": "13",
    "name": "HATILLO DE LOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13430",
    "department_code": "13",
    "name": "MAGANGUÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13433",
    "department_code": "13",
    "name": "MAHATES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13440",
    "department_code": "13",
    "name": "MARGARITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13442",
    "department_code": "13",
    "name": "MARÍA LA BAJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13458",
    "department_code": "13",
    "name": "MONTECRISTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13468",
    "department_code": "13",
    "name": "SANTA CRUZ DE MOMPOX",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13473",
    "department_code": "13",
    "name": "MORALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13490",
    "department_code": "13",
    "name": "NOROSÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13549",
    "department_code": "13",
    "name": "PINILLOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13580",
    "department_code": "13",
    "name": "REGIDOR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13600",
    "department_code": "13",
    "name": "RÍO VIEJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13620",
    "department_code": "13",
    "name": "SAN CRISTÓBAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13647",
    "department_code": "13",
    "name": "SAN ESTANISLAO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13650",
    "department_code": "13",
    "name": "SAN FERNANDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13654",
    "department_code": "13",
    "name": "SAN JACINTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13655",
    "department_code": "13",
    "name": "SAN JACINTO DEL CAUCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13657",
    "department_code": "13",
    "name": "SAN JUAN NEPOMUCENO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13667",
    "department_code": "13",
    "name": "SAN MARTÍN DE LOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13670",
    "department_code": "13",
    "name": "SAN PABLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13673",
    "department_code": "13",
    "name": "SANTA CATALINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13683",
    "department_code": "13",
    "name": "SANTA ROSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13688",
    "department_code": "13",
    "name": "SANTA ROSA DEL SUR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13744",
    "department_code": "13",
    "name": "SIMITÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13760",
    "department_code": "13",
    "name": "SOPLAVIENTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13780",
    "department_code": "13",
    "name": "TALAIGUA NUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13810",
    "department_code": "13",
    "name": "TIQUISIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13836",
    "department_code": "13",
    "name": "TURBACO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13838",
    "department_code": "13",
    "name": "TURBANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13873",
    "department_code": "13",
    "name": "VILLANUEVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "13894",
    "department_code": "13",
    "name": "ZAMBRANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15001",
    "department_code": "15",
    "name": "TUNJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15022",
    "department_code": "15",
    "name": "ALMEIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15047",
    "department_code": "15",
    "name": "AQUITANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15051",
    "department_code": "15",
    "name": "ARCABUCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15087",
    "department_code": "15",
    "name": "BELÉN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15090",
    "department_code": "15",
    "name": "BERBEO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15092",
    "department_code": "15",
    "name": "BETÉITIVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15097",
    "department_code": "15",
    "name": "BOAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15104",
    "department_code": "15",
    "name": "BOYACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15106",
    "department_code": "15",
    "name": "BRICEÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15109",
    "department_code": "15",
    "name": "BUENAVISTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15114",
    "department_code": "15",
    "name": "BUSBANZÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15131",
    "department_code": "15",
    "name": "CALDAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15135",
    "department_code": "15",
    "name": "CAMPOHERMOSO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15162",
    "department_code": "15",
    "name": "CERINZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15172",
    "department_code": "15",
    "name": "CHINAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15176",
    "department_code": "15",
    "name": "CHIQUINQUIRÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15180",
    "department_code": "15",
    "name": "CHISCAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15183",
    "department_code": "15",
    "name": "CHITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15185",
    "department_code": "15",
    "name": "CHITARAQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15187",
    "department_code": "15",
    "name": "CHIVATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15189",
    "department_code": "15",
    "name": "CIÉNEGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15204",
    "department_code": "15",
    "name": "CÓMBITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15212",
    "department_code": "15",
    "name": "COPER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15215",
    "department_code": "15",
    "name": "CORRALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15218",
    "department_code": "15",
    "name": "COVARACHÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15223",
    "department_code": "15",
    "name": "CUBARÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15224",
    "department_code": "15",
    "name": "CUCAITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15226",
    "department_code": "15",
    "name": "CUÍTIVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15232",
    "department_code": "15",
    "name": "CHÍQUIZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15236",
    "department_code": "15",
    "name": "CHIVOR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15238",
    "department_code": "15",
    "name": "DUITAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15244",
    "department_code": "15",
    "name": "EL COCUY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15248",
    "department_code": "15",
    "name": "EL ESPINO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15272",
    "department_code": "15",
    "name": "FIRAVITOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15276",
    "department_code": "15",
    "name": "FLORESTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15293",
    "department_code": "15",
    "name": "GACHANTIVÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15296",
    "department_code": "15",
    "name": "GÁMEZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15299",
    "department_code": "15",
    "name": "GARAGOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15317",
    "department_code": "15",
    "name": "GUACAMAYAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15322",
    "department_code": "15",
    "name": "GUATEQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15325",
    "department_code": "15",
    "name": "GUAYATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15332",
    "department_code": "15",
    "name": "GÜICÁN DE LA SIERRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15362",
    "department_code": "15",
    "name": "IZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15367",
    "department_code": "15",
    "name": "JENESANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15368",
    "department_code": "15",
    "name": "JERICÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15377",
    "department_code": "15",
    "name": "LABRANZAGRANDE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15380",
    "department_code": "15",
    "name": "LA CAPILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15401",
    "department_code": "15",
    "name": "LA VICTORIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15403",
    "department_code": "15",
    "name": "LA UVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15407",
    "department_code": "15",
    "name": "VILLA DE LEYVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15425",
    "department_code": "15",
    "name": "MACANAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15442",
    "department_code": "15",
    "name": "MARIPÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15455",
    "department_code": "15",
    "name": "MIRAFLORES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15464",
    "department_code": "15",
    "name": "MONGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15466",
    "department_code": "15",
    "name": "MONGUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15469",
    "department_code": "15",
    "name": "MONIQUIRÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15476",
    "department_code": "15",
    "name": "MOTAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15480",
    "department_code": "15",
    "name": "MUZO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15491",
    "department_code": "15",
    "name": "NOBSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15494",
    "department_code": "15",
    "name": "NUEVO COLÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15500",
    "department_code": "15",
    "name": "OICATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15507",
    "department_code": "15",
    "name": "OTANCHE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15511",
    "department_code": "15",
    "name": "PACHAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15514",
    "department_code": "15",
    "name": "PÁEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15516",
    "department_code": "15",
    "name": "PAIPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15518",
    "department_code": "15",
    "name": "PAJARITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15522",
    "department_code": "15",
    "name": "PANQUEBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15531",
    "department_code": "15",
    "name": "PAUNA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15533",
    "department_code": "15",
    "name": "PAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15537",
    "department_code": "15",
    "name": "PAZ DE RÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15542",
    "department_code": "15",
    "name": "PESCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15550",
    "department_code": "15",
    "name": "PISBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15572",
    "department_code": "15",
    "name": "PUERTO BOYACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15580",
    "department_code": "15",
    "name": "QUÍPAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15599",
    "department_code": "15",
    "name": "RAMIRIQUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15600",
    "department_code": "15",
    "name": "RÁQUIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15621",
    "department_code": "15",
    "name": "RONDÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15632",
    "department_code": "15",
    "name": "SABOYÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15638",
    "department_code": "15",
    "name": "SÁCHICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15646",
    "department_code": "15",
    "name": "SAMACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15660",
    "department_code": "15",
    "name": "SAN EDUARDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15664",
    "department_code": "15",
    "name": "SAN JOSÉ DE PARE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15667",
    "department_code": "15",
    "name": "SAN LUIS DE GACENO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15673",
    "department_code": "15",
    "name": "SAN MATEO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15676",
    "department_code": "15",
    "name": "SAN MIGUEL DE SEMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15681",
    "department_code": "15",
    "name": "SAN PABLO DE BORBUR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15686",
    "department_code": "15",
    "name": "SANTANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15690",
    "department_code": "15",
    "name": "SANTA MARÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15693",
    "department_code": "15",
    "name": "SANTA ROSA DE VITERBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15696",
    "department_code": "15",
    "name": "SANTA SOFÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15720",
    "department_code": "15",
    "name": "SATIVANORTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15723",
    "department_code": "15",
    "name": "SATIVASUR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15740",
    "department_code": "15",
    "name": "SIACHOQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15753",
    "department_code": "15",
    "name": "SOATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15755",
    "department_code": "15",
    "name": "SOCOTÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15757",
    "department_code": "15",
    "name": "SOCHA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15759",
    "department_code": "15",
    "name": "SOGAMOSO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15761",
    "department_code": "15",
    "name": "SOMONDOCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15762",
    "department_code": "15",
    "name": "SORA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15763",
    "department_code": "15",
    "name": "SOTAQUIRÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15764",
    "department_code": "15",
    "name": "SORACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15774",
    "department_code": "15",
    "name": "SUSACÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15776",
    "department_code": "15",
    "name": "SUTAMARCHÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15778",
    "department_code": "15",
    "name": "SUTATENZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15790",
    "department_code": "15",
    "name": "TASCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15798",
    "department_code": "15",
    "name": "TENZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15804",
    "department_code": "15",
    "name": "TIBANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15806",
    "department_code": "15",
    "name": "TIBASOSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15808",
    "department_code": "15",
    "name": "TINJACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15810",
    "department_code": "15",
    "name": "TIPACOQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15814",
    "department_code": "15",
    "name": "TOCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15816",
    "department_code": "15",
    "name": "TOGÜÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15820",
    "department_code": "15",
    "name": "TÓPAGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15822",
    "department_code": "15",
    "name": "TOTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15832",
    "department_code": "15",
    "name": "TUNUNGUÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15835",
    "department_code": "15",
    "name": "TURMEQUÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15837",
    "department_code": "15",
    "name": "TUTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15839",
    "department_code": "15",
    "name": "TUTAZÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15842",
    "department_code": "15",
    "name": "ÚMBITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15861",
    "department_code": "15",
    "name": "VENTAQUEMADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15879",
    "department_code": "15",
    "name": "VIRACACHÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "15897",
    "department_code": "15",
    "name": "ZETAQUIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17001",
    "department_code": "17",
    "name": "MANIZALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17013",
    "department_code": "17",
    "name": "AGUADAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17042",
    "department_code": "17",
    "name": "ANSERMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17050",
    "department_code": "17",
    "name": "ARANZAZU",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17088",
    "department_code": "17",
    "name": "BELALCÁZAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17174",
    "department_code": "17",
    "name": "CHINCHINÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17272",
    "department_code": "17",
    "name": "FILADELFIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17380",
    "department_code": "17",
    "name": "LA DORADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17388",
    "department_code": "17",
    "name": "LA MERCED",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17433",
    "department_code": "17",
    "name": "MANZANARES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17442",
    "department_code": "17",
    "name": "MARMATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17444",
    "department_code": "17",
    "name": "MARQUETALIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17446",
    "department_code": "17",
    "name": "MARULANDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17486",
    "department_code": "17",
    "name": "NEIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17495",
    "department_code": "17",
    "name": "NORCASIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17513",
    "department_code": "17",
    "name": "PÁCORA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17524",
    "department_code": "17",
    "name": "PALESTINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17541",
    "department_code": "17",
    "name": "PENSILVANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17614",
    "department_code": "17",
    "name": "RIOSUCIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17616",
    "department_code": "17",
    "name": "RISARALDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17653",
    "department_code": "17",
    "name": "SALAMINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17662",
    "department_code": "17",
    "name": "SAMANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17665",
    "department_code": "17",
    "name": "SAN JOSÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17777",
    "department_code": "17",
    "name": "SUPÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17867",
    "department_code": "17",
    "name": "VICTORIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17873",
    "department_code": "17",
    "name": "VILLAMARÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "17877",
    "department_code": "17",
    "name": "VITERBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18001",
    "department_code": "18",
    "name": "FLORENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18029",
    "department_code": "18",
    "name": "ALBANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18094",
    "department_code": "18",
    "name": "BELÉN DE LOS ANDAQUÍES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18150",
    "department_code": "18",
    "name": "CARTAGENA DEL CHAIRÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18205",
    "department_code": "18",
    "name": "CURILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18247",
    "department_code": "18",
    "name": "EL DONCELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18256",
    "department_code": "18",
    "name": "EL PAUJÍL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18410",
    "department_code": "18",
    "name": "LA MONTAÑITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18460",
    "department_code": "18",
    "name": "MILÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18479",
    "department_code": "18",
    "name": "MORELIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18592",
    "department_code": "18",
    "name": "PUERTO RICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18610",
    "department_code": "18",
    "name": "SAN JOSÉ DEL FRAGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18753",
    "department_code": "18",
    "name": "SAN VICENTE DEL CAGUÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18756",
    "department_code": "18",
    "name": "SOLANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18785",
    "department_code": "18",
    "name": "SOLITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "18860",
    "department_code": "18",
    "name": "VALPARAÍSO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19001",
    "department_code": "19",
    "name": "POPAYÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19022",
    "department_code": "19",
    "name": "ALMAGUER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19050",
    "department_code": "19",
    "name": "ARGELIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19075",
    "department_code": "19",
    "name": "BALBOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19100",
    "department_code": "19",
    "name": "BOLÍVAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19110",
    "department_code": "19",
    "name": "BUENOS AIRES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19130",
    "department_code": "19",
    "name": "CAJIBÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19137",
    "department_code": "19",
    "name": "CALDONO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19142",
    "department_code": "19",
    "name": "CALOTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19212",
    "department_code": "19",
    "name": "CORINTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19256",
    "department_code": "19",
    "name": "EL TAMBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19290",
    "department_code": "19",
    "name": "FLORENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19300",
    "department_code": "19",
    "name": "GUACHENÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19318",
    "department_code": "19",
    "name": "GUAPI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19355",
    "department_code": "19",
    "name": "INZÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19364",
    "department_code": "19",
    "name": "JAMBALÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19392",
    "department_code": "19",
    "name": "LA SIERRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19397",
    "department_code": "19",
    "name": "LA VEGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19418",
    "department_code": "19",
    "name": "LÓPEZ DE MICAY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19450",
    "department_code": "19",
    "name": "MERCADERES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19455",
    "department_code": "19",
    "name": "MIRANDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19473",
    "department_code": "19",
    "name": "MORALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19513",
    "department_code": "19",
    "name": "PADILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19517",
    "department_code": "19",
    "name": "PÁEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19532",
    "department_code": "19",
    "name": "PATÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19533",
    "department_code": "19",
    "name": "PIAMONTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19548",
    "department_code": "19",
    "name": "PIENDAMÓ - TUNÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19573",
    "department_code": "19",
    "name": "PUERTO TEJADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19585",
    "department_code": "19",
    "name": "PURACÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19622",
    "department_code": "19",
    "name": "ROSAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19693",
    "department_code": "19",
    "name": "SAN SEBASTIÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19698",
    "department_code": "19",
    "name": "SANTANDER DE QUILICHAO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19701",
    "department_code": "19",
    "name": "SANTA ROSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19743",
    "department_code": "19",
    "name": "SILVIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19760",
    "department_code": "19",
    "name": "SOTARÁ - PAISPAMBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19780",
    "department_code": "19",
    "name": "SUÁREZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19785",
    "department_code": "19",
    "name": "SUCRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19807",
    "department_code": "19",
    "name": "TIMBÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19809",
    "department_code": "19",
    "name": "TIMBIQUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19821",
    "department_code": "19",
    "name": "TORIBÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19824",
    "department_code": "19",
    "name": "TOTORÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "19845",
    "department_code": "19",
    "name": "VILLA RICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20001",
    "department_code": "20",
    "name": "VALLEDUPAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20011",
    "department_code": "20",
    "name": "AGUACHICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20013",
    "department_code": "20",
    "name": "AGUSTÍN CODAZZI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20032",
    "department_code": "20",
    "name": "ASTREA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20045",
    "department_code": "20",
    "name": "BECERRIL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20060",
    "department_code": "20",
    "name": "BOSCONIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20175",
    "department_code": "20",
    "name": "CHIMICHAGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20178",
    "department_code": "20",
    "name": "CHIRIGUANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20228",
    "department_code": "20",
    "name": "CURUMANÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20238",
    "department_code": "20",
    "name": "EL COPEY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20250",
    "department_code": "20",
    "name": "EL PASO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20295",
    "department_code": "20",
    "name": "GAMARRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20310",
    "department_code": "20",
    "name": "GONZÁLEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20383",
    "department_code": "20",
    "name": "LA GLORIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20400",
    "department_code": "20",
    "name": "LA JAGUA DE IBIRICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20443",
    "department_code": "20",
    "name": "MANAURE BALCÓN DEL CESAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20517",
    "department_code": "20",
    "name": "PAILITAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20550",
    "department_code": "20",
    "name": "PELAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20570",
    "department_code": "20",
    "name": "PUEBLO BELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20614",
    "department_code": "20",
    "name": "RÍO DE ORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20621",
    "department_code": "20",
    "name": "LA PAZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20710",
    "department_code": "20",
    "name": "SAN ALBERTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20750",
    "department_code": "20",
    "name": "SAN DIEGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20770",
    "department_code": "20",
    "name": "SAN MARTÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "20787",
    "department_code": "20",
    "name": "TAMALAMEQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23001",
    "department_code": "23",
    "name": "MONTERÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23068",
    "department_code": "23",
    "name": "AYAPEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23079",
    "department_code": "23",
    "name": "BUENAVISTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23090",
    "department_code": "23",
    "name": "CANALETE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23162",
    "department_code": "23",
    "name": "CERETÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23168",
    "department_code": "23",
    "name": "CHIMÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23182",
    "department_code": "23",
    "name": "CHINÚ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23189",
    "department_code": "23",
    "name": "CIÉNAGA DE ORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23300",
    "department_code": "23",
    "name": "COTORRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23350",
    "department_code": "23",
    "name": "LA APARTADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23417",
    "department_code": "23",
    "name": "LORICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23419",
    "department_code": "23",
    "name": "LOS CÓRDOBAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23464",
    "department_code": "23",
    "name": "MOMIL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23466",
    "department_code": "23",
    "name": "MONTELÍBANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23500",
    "department_code": "23",
    "name": "MOÑITOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23555",
    "department_code": "23",
    "name": "PLANETA RICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23570",
    "department_code": "23",
    "name": "PUEBLO NUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23574",
    "department_code": "23",
    "name": "PUERTO ESCONDIDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23580",
    "department_code": "23",
    "name": "PUERTO LIBERTADOR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23586",
    "department_code": "23",
    "name": "PURÍSIMA DE LA CONCEPCIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23660",
    "department_code": "23",
    "name": "SAHAGÚN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23670",
    "department_code": "23",
    "name": "SAN ANDRÉS DE SOTAVENTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23672",
    "department_code": "23",
    "name": "SAN ANTERO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23675",
    "department_code": "23",
    "name": "SAN BERNARDO DEL VIENTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23678",
    "department_code": "23",
    "name": "SAN CARLOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23682",
    "department_code": "23",
    "name": "SAN JOSÉ DE URÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23686",
    "department_code": "23",
    "name": "SAN PELAYO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23807",
    "department_code": "23",
    "name": "TIERRALTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23815",
    "department_code": "23",
    "name": "TUCHÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "23855",
    "department_code": "23",
    "name": "VALENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25001",
    "department_code": "25",
    "name": "AGUA DE DIOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25019",
    "department_code": "25",
    "name": "ALBÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25035",
    "department_code": "25",
    "name": "ANAPOIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25040",
    "department_code": "25",
    "name": "ANOLAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25053",
    "department_code": "25",
    "name": "ARBELÁEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25086",
    "department_code": "25",
    "name": "BELTRÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25095",
    "department_code": "25",
    "name": "BITUIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25099",
    "department_code": "25",
    "name": "BOJACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25120",
    "department_code": "25",
    "name": "CABRERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25123",
    "department_code": "25",
    "name": "CACHIPAY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25126",
    "department_code": "25",
    "name": "CAJICÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25148",
    "department_code": "25",
    "name": "CAPARRAPÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25151",
    "department_code": "25",
    "name": "CÁQUEZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25154",
    "department_code": "25",
    "name": "CARMEN DE CARUPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25168",
    "department_code": "25",
    "name": "CHAGUANÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25175",
    "department_code": "25",
    "name": "CHÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25178",
    "department_code": "25",
    "name": "CHIPAQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25181",
    "department_code": "25",
    "name": "CHOACHÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25183",
    "department_code": "25",
    "name": "CHOCONTÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25200",
    "department_code": "25",
    "name": "COGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25214",
    "department_code": "25",
    "name": "COTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25224",
    "department_code": "25",
    "name": "CUCUNUBÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25245",
    "department_code": "25",
    "name": "EL COLEGIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25258",
    "department_code": "25",
    "name": "EL PEÑÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25260",
    "department_code": "25",
    "name": "EL ROSAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25269",
    "department_code": "25",
    "name": "FACATATIVÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25279",
    "department_code": "25",
    "name": "FÓMEQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25281",
    "department_code": "25",
    "name": "FOSCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25286",
    "department_code": "25",
    "name": "FUNZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25288",
    "department_code": "25",
    "name": "FÚQUENE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25290",
    "department_code": "25",
    "name": "FUSAGASUGÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25293",
    "department_code": "25",
    "name": "GACHALÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25295",
    "department_code": "25",
    "name": "GACHANCIPÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25297",
    "department_code": "25",
    "name": "GACHETÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25299",
    "department_code": "25",
    "name": "GAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25307",
    "department_code": "25",
    "name": "GIRARDOT",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25312",
    "department_code": "25",
    "name": "GRANADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25317",
    "department_code": "25",
    "name": "GUACHETÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25320",
    "department_code": "25",
    "name": "GUADUAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25322",
    "department_code": "25",
    "name": "GUASCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25324",
    "department_code": "25",
    "name": "GUATAQUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25326",
    "department_code": "25",
    "name": "GUATAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25328",
    "department_code": "25",
    "name": "GUAYABAL DE SÍQUIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25335",
    "department_code": "25",
    "name": "GUAYABETAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25339",
    "department_code": "25",
    "name": "GUTIÉRREZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25368",
    "department_code": "25",
    "name": "JERUSALÉN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25372",
    "department_code": "25",
    "name": "JUNÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25377",
    "department_code": "25",
    "name": "LA CALERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25386",
    "department_code": "25",
    "name": "LA MESA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25394",
    "department_code": "25",
    "name": "LA PALMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25398",
    "department_code": "25",
    "name": "LA PEÑA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25402",
    "department_code": "25",
    "name": "LA VEGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25407",
    "department_code": "25",
    "name": "LENGUAZAQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25426",
    "department_code": "25",
    "name": "MACHETÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25430",
    "department_code": "25",
    "name": "MADRID",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25436",
    "department_code": "25",
    "name": "MANTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25438",
    "department_code": "25",
    "name": "MEDINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25473",
    "department_code": "25",
    "name": "MOSQUERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25483",
    "department_code": "25",
    "name": "NARIÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25486",
    "department_code": "25",
    "name": "NEMOCÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25488",
    "department_code": "25",
    "name": "NILO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25489",
    "department_code": "25",
    "name": "NIMAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25491",
    "department_code": "25",
    "name": "NOCAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25506",
    "department_code": "25",
    "name": "VENECIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25513",
    "department_code": "25",
    "name": "PACHO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25518",
    "department_code": "25",
    "name": "PAIME",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25524",
    "department_code": "25",
    "name": "PANDI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25530",
    "department_code": "25",
    "name": "PARATEBUENO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25535",
    "department_code": "25",
    "name": "PASCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25572",
    "department_code": "25",
    "name": "PUERTO SALGAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25580",
    "department_code": "25",
    "name": "PULÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25592",
    "department_code": "25",
    "name": "QUEBRADANEGRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25594",
    "department_code": "25",
    "name": "QUETAME",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25596",
    "department_code": "25",
    "name": "QUIPILE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25599",
    "department_code": "25",
    "name": "APULO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25612",
    "department_code": "25",
    "name": "RICAURTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25645",
    "department_code": "25",
    "name": "SAN ANTONIO DEL TEQUENDAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25649",
    "department_code": "25",
    "name": "SAN BERNARDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25653",
    "department_code": "25",
    "name": "SAN CAYETANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25658",
    "department_code": "25",
    "name": "SAN FRANCISCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25662",
    "department_code": "25",
    "name": "SAN JUAN DE RIOSECO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25718",
    "department_code": "25",
    "name": "SASAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25736",
    "department_code": "25",
    "name": "SESQUILÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25740",
    "department_code": "25",
    "name": "SIBATÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25743",
    "department_code": "25",
    "name": "SILVANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25745",
    "department_code": "25",
    "name": "SIMIJACA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25754",
    "department_code": "25",
    "name": "SOACHA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25758",
    "department_code": "25",
    "name": "SOPÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25769",
    "department_code": "25",
    "name": "SUBACHOQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25772",
    "department_code": "25",
    "name": "SUESCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25777",
    "department_code": "25",
    "name": "SUPATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25779",
    "department_code": "25",
    "name": "SUSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25781",
    "department_code": "25",
    "name": "SUTATAUSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25785",
    "department_code": "25",
    "name": "TABIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25793",
    "department_code": "25",
    "name": "TAUSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25797",
    "department_code": "25",
    "name": "TENA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25799",
    "department_code": "25",
    "name": "TENJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25805",
    "department_code": "25",
    "name": "TIBACUY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25807",
    "department_code": "25",
    "name": "TIBIRITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25815",
    "department_code": "25",
    "name": "TOCAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25817",
    "department_code": "25",
    "name": "TOCANCIPÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25823",
    "department_code": "25",
    "name": "TOPAIPÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25839",
    "department_code": "25",
    "name": "UBALÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25841",
    "department_code": "25",
    "name": "UBAQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25843",
    "department_code": "25",
    "name": "VILLA DE SAN DIEGO DE UBATÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25845",
    "department_code": "25",
    "name": "UNE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25851",
    "department_code": "25",
    "name": "ÚTICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25862",
    "department_code": "25",
    "name": "VERGARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25867",
    "department_code": "25",
    "name": "VIANÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25871",
    "department_code": "25",
    "name": "VILLAGÓMEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25873",
    "department_code": "25",
    "name": "VILLAPINZÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25875",
    "department_code": "25",
    "name": "VILLETA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25878",
    "department_code": "25",
    "name": "VIOTÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25885",
    "department_code": "25",
    "name": "YACOPÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25898",
    "department_code": "25",
    "name": "ZIPACÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "25899",
    "department_code": "25",
    "name": "ZIPAQUIRÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27001",
    "department_code": "27",
    "name": "QUIBDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27006",
    "department_code": "27",
    "name": "ACANDÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27025",
    "department_code": "27",
    "name": "ALTO BAUDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27050",
    "department_code": "27",
    "name": "ATRATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27073",
    "department_code": "27",
    "name": "BAGADÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27075",
    "department_code": "27",
    "name": "BAHÍA SOLANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27077",
    "department_code": "27",
    "name": "BAJO BAUDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27099",
    "department_code": "27",
    "name": "BOJAYÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27135",
    "department_code": "27",
    "name": "EL CANTÓN DEL SAN PABLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27150",
    "department_code": "27",
    "name": "CARMEN DEL DARIÉN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27160",
    "department_code": "27",
    "name": "CÉRTEGUI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27205",
    "department_code": "27",
    "name": "CONDOTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27245",
    "department_code": "27",
    "name": "EL CARMEN DE ATRATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27250",
    "department_code": "27",
    "name": "EL LITORAL DEL SAN JUAN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27361",
    "department_code": "27",
    "name": "ISTMINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27372",
    "department_code": "27",
    "name": "JURADÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27413",
    "department_code": "27",
    "name": "LLORÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27425",
    "department_code": "27",
    "name": "MEDIO ATRATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27430",
    "department_code": "27",
    "name": "MEDIO BAUDÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27450",
    "department_code": "27",
    "name": "MEDIO SAN JUAN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27491",
    "department_code": "27",
    "name": "NÓVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27495",
    "department_code": "27",
    "name": "NUQUÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27580",
    "department_code": "27",
    "name": "RÍO IRÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27600",
    "department_code": "27",
    "name": "RÍO QUITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27615",
    "department_code": "27",
    "name": "RIOSUCIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27660",
    "department_code": "27",
    "name": "SAN JOSÉ DEL PALMAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27745",
    "department_code": "27",
    "name": "SIPÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27787",
    "department_code": "27",
    "name": "TADÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27800",
    "department_code": "27",
    "name": "UNGUÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "27810",
    "department_code": "27",
    "name": "UNIÓN PANAMERICANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41001",
    "department_code": "41",
    "name": "NEIVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41006",
    "department_code": "41",
    "name": "ACEVEDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41013",
    "department_code": "41",
    "name": "AGRADO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41016",
    "department_code": "41",
    "name": "AIPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41020",
    "department_code": "41",
    "name": "ALGECIRAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41026",
    "department_code": "41",
    "name": "ALTAMIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41078",
    "department_code": "41",
    "name": "BARAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41132",
    "department_code": "41",
    "name": "CAMPOALEGRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41206",
    "department_code": "41",
    "name": "COLOMBIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41244",
    "department_code": "41",
    "name": "ELÍAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41298",
    "department_code": "41",
    "name": "GARZÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41306",
    "department_code": "41",
    "name": "GIGANTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41319",
    "department_code": "41",
    "name": "GUADALUPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41349",
    "department_code": "41",
    "name": "HOBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41357",
    "department_code": "41",
    "name": "ÍQUIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41359",
    "department_code": "41",
    "name": "ISNOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41378",
    "department_code": "41",
    "name": "LA ARGENTINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41396",
    "department_code": "41",
    "name": "LA PLATA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41483",
    "department_code": "41",
    "name": "NÁTAGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41503",
    "department_code": "41",
    "name": "OPORAPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41518",
    "department_code": "41",
    "name": "PAICOL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41524",
    "department_code": "41",
    "name": "PALERMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41530",
    "department_code": "41",
    "name": "PALESTINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41548",
    "department_code": "41",
    "name": "PITAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41551",
    "department_code": "41",
    "name": "PITALITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41615",
    "department_code": "41",
    "name": "RIVERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41660",
    "department_code": "41",
    "name": "SALADOBLANCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41668",
    "department_code": "41",
    "name": "SAN AGUSTÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41676",
    "department_code": "41",
    "name": "SANTA MARÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41770",
    "department_code": "41",
    "name": "SUAZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41791",
    "department_code": "41",
    "name": "TARQUI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41797",
    "department_code": "41",
    "name": "TESALIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41799",
    "department_code": "41",
    "name": "TELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41801",
    "department_code": "41",
    "name": "TERUEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41807",
    "department_code": "41",
    "name": "TIMANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41872",
    "department_code": "41",
    "name": "VILLAVIEJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "41885",
    "department_code": "41",
    "name": "YAGUARÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44001",
    "department_code": "44",
    "name": "RIOHACHA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44035",
    "department_code": "44",
    "name": "ALBANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44078",
    "department_code": "44",
    "name": "BARRANCAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44090",
    "department_code": "44",
    "name": "DIBULLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44098",
    "department_code": "44",
    "name": "DISTRACCIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44110",
    "department_code": "44",
    "name": "EL MOLINO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44279",
    "department_code": "44",
    "name": "FONSECA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44378",
    "department_code": "44",
    "name": "HATONUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44420",
    "department_code": "44",
    "name": "LA JAGUA DEL PILAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44430",
    "department_code": "44",
    "name": "MAICAO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44560",
    "department_code": "44",
    "name": "MANAURE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44650",
    "department_code": "44",
    "name": "SAN JUAN DEL CESAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44847",
    "department_code": "44",
    "name": "URIBIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44855",
    "department_code": "44",
    "name": "URUMITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "44874",
    "department_code": "44",
    "name": "VILLANUEVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47001",
    "department_code": "47",
    "name": "SANTA MARTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47030",
    "department_code": "47",
    "name": "ALGARROBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47053",
    "department_code": "47",
    "name": "ARACATACA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47058",
    "department_code": "47",
    "name": "ARIGUANÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47161",
    "department_code": "47",
    "name": "CERRO DE SAN ANTONIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47170",
    "department_code": "47",
    "name": "CHIVOLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47189",
    "department_code": "47",
    "name": "CIÉNAGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47205",
    "department_code": "47",
    "name": "CONCORDIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47245",
    "department_code": "47",
    "name": "EL BANCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47258",
    "department_code": "47",
    "name": "EL PIÑÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47268",
    "department_code": "47",
    "name": "EL RETÉN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47288",
    "department_code": "47",
    "name": "FUNDACIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47318",
    "department_code": "47",
    "name": "GUAMAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47460",
    "department_code": "47",
    "name": "NUEVA GRANADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47541",
    "department_code": "47",
    "name": "PEDRAZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47545",
    "department_code": "47",
    "name": "PIJIÑO DEL CARMEN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47551",
    "department_code": "47",
    "name": "PIVIJAY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47555",
    "department_code": "47",
    "name": "PLATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47570",
    "department_code": "47",
    "name": "PUEBLOVIEJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47605",
    "department_code": "47",
    "name": "REMOLINO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47660",
    "department_code": "47",
    "name": "SABANAS DE SAN ÁNGEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47675",
    "department_code": "47",
    "name": "SALAMINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47692",
    "department_code": "47",
    "name": "SAN SEBASTIÁN DE BUENAVISTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47703",
    "department_code": "47",
    "name": "SAN ZENÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47707",
    "department_code": "47",
    "name": "SANTA ANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47720",
    "department_code": "47",
    "name": "SANTA BÁRBARA DE PINTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47745",
    "department_code": "47",
    "name": "SITIONUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47798",
    "department_code": "47",
    "name": "TENERIFE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47960",
    "department_code": "47",
    "name": "ZAPAYÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "47980",
    "department_code": "47",
    "name": "ZONA BANANERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50001",
    "department_code": "50",
    "name": "VILLAVICENCIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50006",
    "department_code": "50",
    "name": "ACACÍAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50110",
    "department_code": "50",
    "name": "BARRANCA DE UPÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50124",
    "department_code": "50",
    "name": "CABUYARO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50150",
    "department_code": "50",
    "name": "CASTILLA LA NUEVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50223",
    "department_code": "50",
    "name": "CUBARRAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50226",
    "department_code": "50",
    "name": "CUMARAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50245",
    "department_code": "50",
    "name": "EL CALVARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50251",
    "department_code": "50",
    "name": "EL CASTILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50270",
    "department_code": "50",
    "name": "EL DORADO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50287",
    "department_code": "50",
    "name": "FUENTE DE ORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50313",
    "department_code": "50",
    "name": "GRANADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50318",
    "department_code": "50",
    "name": "GUAMAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50325",
    "department_code": "50",
    "name": "MAPIRIPÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50330",
    "department_code": "50",
    "name": "MESETAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50350",
    "department_code": "50",
    "name": "LA MACARENA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50370",
    "department_code": "50",
    "name": "URIBE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50400",
    "department_code": "50",
    "name": "LEJANÍAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50450",
    "department_code": "50",
    "name": "PUERTO CONCORDIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50568",
    "department_code": "50",
    "name": "PUERTO GAITÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50573",
    "department_code": "50",
    "name": "PUERTO LÓPEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50577",
    "department_code": "50",
    "name": "PUERTO LLERAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50590",
    "department_code": "50",
    "name": "PUERTO RICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50606",
    "department_code": "50",
    "name": "RESTREPO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50680",
    "department_code": "50",
    "name": "SAN CARLOS DE GUAROA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50683",
    "department_code": "50",
    "name": "SAN JUAN DE ARAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50686",
    "department_code": "50",
    "name": "SAN JUANITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50689",
    "department_code": "50",
    "name": "SAN MARTÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "50711",
    "department_code": "50",
    "name": "VISTAHERMOSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52001",
    "department_code": "52",
    "name": "PASTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52019",
    "department_code": "52",
    "name": "ALBÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52022",
    "department_code": "52",
    "name": "ALDANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52036",
    "department_code": "52",
    "name": "ANCUYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52051",
    "department_code": "52",
    "name": "ARBOLEDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52079",
    "department_code": "52",
    "name": "BARBACOAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52083",
    "department_code": "52",
    "name": "BELÉN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52110",
    "department_code": "52",
    "name": "BUESACO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52203",
    "department_code": "52",
    "name": "COLÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52207",
    "department_code": "52",
    "name": "CONSACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52210",
    "department_code": "52",
    "name": "CONTADERO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52215",
    "department_code": "52",
    "name": "CÓRDOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52224",
    "department_code": "52",
    "name": "CUASPUD CARLOSAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52227",
    "department_code": "52",
    "name": "CUMBAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52233",
    "department_code": "52",
    "name": "CUMBITARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52240",
    "department_code": "52",
    "name": "CHACHAGÜÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52250",
    "department_code": "52",
    "name": "EL CHARCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52254",
    "department_code": "52",
    "name": "EL PEÑOL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52256",
    "department_code": "52",
    "name": "EL ROSARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52258",
    "department_code": "52",
    "name": "EL TABLÓN DE GÓMEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52260",
    "department_code": "52",
    "name": "EL TAMBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52287",
    "department_code": "52",
    "name": "FUNES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52317",
    "department_code": "52",
    "name": "GUACHUCAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52320",
    "department_code": "52",
    "name": "GUAITARILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52323",
    "department_code": "52",
    "name": "GUALMATÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52352",
    "department_code": "52",
    "name": "ILES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52354",
    "department_code": "52",
    "name": "IMUÉS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52356",
    "department_code": "52",
    "name": "IPIALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52378",
    "department_code": "52",
    "name": "LA CRUZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52381",
    "department_code": "52",
    "name": "LA FLORIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52385",
    "department_code": "52",
    "name": "LA LLANADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52390",
    "department_code": "52",
    "name": "LA TOLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52399",
    "department_code": "52",
    "name": "LA UNIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52405",
    "department_code": "52",
    "name": "LEIVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52411",
    "department_code": "52",
    "name": "LINARES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52418",
    "department_code": "52",
    "name": "LOS ANDES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52427",
    "department_code": "52",
    "name": "MAGÜÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52435",
    "department_code": "52",
    "name": "MALLAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52473",
    "department_code": "52",
    "name": "MOSQUERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52480",
    "department_code": "52",
    "name": "NARIÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52490",
    "department_code": "52",
    "name": "OLAYA HERRERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52506",
    "department_code": "52",
    "name": "OSPINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52520",
    "department_code": "52",
    "name": "FRANCISCO PIZARRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52540",
    "department_code": "52",
    "name": "POLICARPA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52560",
    "department_code": "52",
    "name": "POTOSÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52565",
    "department_code": "52",
    "name": "PROVIDENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52573",
    "department_code": "52",
    "name": "PUERRES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52585",
    "department_code": "52",
    "name": "PUPIALES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52612",
    "department_code": "52",
    "name": "RICAURTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52621",
    "department_code": "52",
    "name": "ROBERTO PAYÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52678",
    "department_code": "52",
    "name": "SAMANIEGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52683",
    "department_code": "52",
    "name": "SANDONÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52685",
    "department_code": "52",
    "name": "SAN BERNARDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52687",
    "department_code": "52",
    "name": "SAN LORENZO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52693",
    "department_code": "52",
    "name": "SAN PABLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52694",
    "department_code": "52",
    "name": "SAN PEDRO DE CARTAGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52696",
    "department_code": "52",
    "name": "SANTA BÁRBARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52699",
    "department_code": "52",
    "name": "SANTACRUZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52720",
    "department_code": "52",
    "name": "SAPUYES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52786",
    "department_code": "52",
    "name": "TAMINANGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52788",
    "department_code": "52",
    "name": "TANGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52835",
    "department_code": "52",
    "name": "SAN ANDRÉS DE TUMACO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52838",
    "department_code": "52",
    "name": "TÚQUERRES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "52885",
    "department_code": "52",
    "name": "YACUANQUER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54001",
    "department_code": "54",
    "name": "SAN JOSÉ DE CÚCUTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54003",
    "department_code": "54",
    "name": "ÁBREGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54051",
    "department_code": "54",
    "name": "ARBOLEDAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54099",
    "department_code": "54",
    "name": "BOCHALEMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54109",
    "department_code": "54",
    "name": "BUCARASICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54125",
    "department_code": "54",
    "name": "CÁCOTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54128",
    "department_code": "54",
    "name": "CÁCHIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54172",
    "department_code": "54",
    "name": "CHINÁCOTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54174",
    "department_code": "54",
    "name": "CHITAGÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54206",
    "department_code": "54",
    "name": "CONVENCIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54223",
    "department_code": "54",
    "name": "CUCUTILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54239",
    "department_code": "54",
    "name": "DURANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54245",
    "department_code": "54",
    "name": "EL CARMEN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54250",
    "department_code": "54",
    "name": "EL TARRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54261",
    "department_code": "54",
    "name": "EL ZULIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54313",
    "department_code": "54",
    "name": "GRAMALOTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54344",
    "department_code": "54",
    "name": "HACARÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54347",
    "department_code": "54",
    "name": "HERRÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54377",
    "department_code": "54",
    "name": "LABATECA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54385",
    "department_code": "54",
    "name": "LA ESPERANZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54398",
    "department_code": "54",
    "name": "LA PLAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54405",
    "department_code": "54",
    "name": "LOS PATIOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54418",
    "department_code": "54",
    "name": "LOURDES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54480",
    "department_code": "54",
    "name": "MUTISCUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54498",
    "department_code": "54",
    "name": "OCAÑA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54518",
    "department_code": "54",
    "name": "PAMPLONA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54520",
    "department_code": "54",
    "name": "PAMPLONITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54553",
    "department_code": "54",
    "name": "PUERTO SANTANDER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54599",
    "department_code": "54",
    "name": "RAGONVALIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54660",
    "department_code": "54",
    "name": "SALAZAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54670",
    "department_code": "54",
    "name": "SAN CALIXTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54673",
    "department_code": "54",
    "name": "SAN CAYETANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54680",
    "department_code": "54",
    "name": "SANTIAGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54720",
    "department_code": "54",
    "name": "SARDINATA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54743",
    "department_code": "54",
    "name": "SILOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54800",
    "department_code": "54",
    "name": "TEORAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54810",
    "department_code": "54",
    "name": "TIBÚ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54820",
    "department_code": "54",
    "name": "TOLEDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54871",
    "department_code": "54",
    "name": "VILLA CARO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "54874",
    "department_code": "54",
    "name": "VILLA DEL ROSARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63001",
    "department_code": "63",
    "name": "ARMENIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63111",
    "department_code": "63",
    "name": "BUENAVISTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63130",
    "department_code": "63",
    "name": "CALARCÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63190",
    "department_code": "63",
    "name": "CIRCASIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63212",
    "department_code": "63",
    "name": "CÓRDOBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63272",
    "department_code": "63",
    "name": "FILANDIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63302",
    "department_code": "63",
    "name": "GÉNOVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63401",
    "department_code": "63",
    "name": "LA TEBAIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63470",
    "department_code": "63",
    "name": "MONTENEGRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63548",
    "department_code": "63",
    "name": "PIJAO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63594",
    "department_code": "63",
    "name": "QUIMBAYA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "63690",
    "department_code": "63",
    "name": "SALENTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66001",
    "department_code": "66",
    "name": "PEREIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66045",
    "department_code": "66",
    "name": "APÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66075",
    "department_code": "66",
    "name": "BALBOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66088",
    "department_code": "66",
    "name": "BELÉN DE UMBRÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66170",
    "department_code": "66",
    "name": "DOSQUEBRADAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66318",
    "department_code": "66",
    "name": "GUÁTICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66383",
    "department_code": "66",
    "name": "LA CELIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66400",
    "department_code": "66",
    "name": "LA VIRGINIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66440",
    "department_code": "66",
    "name": "MARSELLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66456",
    "department_code": "66",
    "name": "MISTRATÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66572",
    "department_code": "66",
    "name": "PUEBLO RICO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66594",
    "department_code": "66",
    "name": "QUINCHÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66682",
    "department_code": "66",
    "name": "SANTA ROSA DE CABAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "66687",
    "department_code": "66",
    "name": "SANTUARIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68001",
    "department_code": "68",
    "name": "BUCARAMANGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68013",
    "department_code": "68",
    "name": "AGUADA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68020",
    "department_code": "68",
    "name": "ALBANIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68051",
    "department_code": "68",
    "name": "ARATOCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68077",
    "department_code": "68",
    "name": "BARBOSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68079",
    "department_code": "68",
    "name": "BARICHARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68081",
    "department_code": "68",
    "name": "BARRANCABERMEJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68092",
    "department_code": "68",
    "name": "BETULIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68101",
    "department_code": "68",
    "name": "BOLÍVAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68121",
    "department_code": "68",
    "name": "CABRERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68132",
    "department_code": "68",
    "name": "CALIFORNIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68147",
    "department_code": "68",
    "name": "CAPITANEJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68152",
    "department_code": "68",
    "name": "CARCASÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68160",
    "department_code": "68",
    "name": "CEPITÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68162",
    "department_code": "68",
    "name": "CERRITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68167",
    "department_code": "68",
    "name": "CHARALÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68169",
    "department_code": "68",
    "name": "CHARTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68176",
    "department_code": "68",
    "name": "CHIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68179",
    "department_code": "68",
    "name": "CHIPATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68190",
    "department_code": "68",
    "name": "CIMITARRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68207",
    "department_code": "68",
    "name": "CONCEPCIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68209",
    "department_code": "68",
    "name": "CONFINES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68211",
    "department_code": "68",
    "name": "CONTRATACIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68217",
    "department_code": "68",
    "name": "COROMORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68229",
    "department_code": "68",
    "name": "CURITÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68235",
    "department_code": "68",
    "name": "EL CARMEN DE CHUCURI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68245",
    "department_code": "68",
    "name": "EL GUACAMAYO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68250",
    "department_code": "68",
    "name": "EL PEÑÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68255",
    "department_code": "68",
    "name": "EL PLAYÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68264",
    "department_code": "68",
    "name": "ENCINO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68266",
    "department_code": "68",
    "name": "ENCISO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68271",
    "department_code": "68",
    "name": "FLORIÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68276",
    "department_code": "68",
    "name": "FLORIDABLANCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68296",
    "department_code": "68",
    "name": "GALÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68298",
    "department_code": "68",
    "name": "GÁMBITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68307",
    "department_code": "68",
    "name": "GIRÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68318",
    "department_code": "68",
    "name": "GUACA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68320",
    "department_code": "68",
    "name": "GUADALUPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68322",
    "department_code": "68",
    "name": "GUAPOTÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68324",
    "department_code": "68",
    "name": "GUAVATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68327",
    "department_code": "68",
    "name": "GÜEPSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68344",
    "department_code": "68",
    "name": "HATO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68368",
    "department_code": "68",
    "name": "JESÚS MARÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68370",
    "department_code": "68",
    "name": "JORDÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68377",
    "department_code": "68",
    "name": "LA BELLEZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68385",
    "department_code": "68",
    "name": "LANDÁZURI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68397",
    "department_code": "68",
    "name": "LA PAZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68406",
    "department_code": "68",
    "name": "LEBRIJA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68418",
    "department_code": "68",
    "name": "LOS SANTOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68425",
    "department_code": "68",
    "name": "MACARAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68432",
    "department_code": "68",
    "name": "MÁLAGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68444",
    "department_code": "68",
    "name": "MATANZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68464",
    "department_code": "68",
    "name": "MOGOTES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68468",
    "department_code": "68",
    "name": "MOLAGAVITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68498",
    "department_code": "68",
    "name": "OCAMONTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68500",
    "department_code": "68",
    "name": "OIBA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68502",
    "department_code": "68",
    "name": "ONZAGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68522",
    "department_code": "68",
    "name": "PALMAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68524",
    "department_code": "68",
    "name": "PALMAS DEL SOCORRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68533",
    "department_code": "68",
    "name": "PÁRAMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68547",
    "department_code": "68",
    "name": "PIEDECUESTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68549",
    "department_code": "68",
    "name": "PINCHOTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68572",
    "department_code": "68",
    "name": "PUENTE NACIONAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68573",
    "department_code": "68",
    "name": "PUERTO PARRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68575",
    "department_code": "68",
    "name": "PUERTO WILCHES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68615",
    "department_code": "68",
    "name": "RIONEGRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68655",
    "department_code": "68",
    "name": "SABANA DE TORRES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68669",
    "department_code": "68",
    "name": "SAN ANDRÉS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68673",
    "department_code": "68",
    "name": "SAN BENITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68679",
    "department_code": "68",
    "name": "SAN GIL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68682",
    "department_code": "68",
    "name": "SAN JOAQUÍN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68684",
    "department_code": "68",
    "name": "SAN JOSÉ DE MIRANDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68686",
    "department_code": "68",
    "name": "SAN MIGUEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68689",
    "department_code": "68",
    "name": "SAN VICENTE DE CHUCURÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68705",
    "department_code": "68",
    "name": "SANTA BÁRBARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68720",
    "department_code": "68",
    "name": "SANTA HELENA DEL OPÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68745",
    "department_code": "68",
    "name": "SIMACOTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68755",
    "department_code": "68",
    "name": "SOCORRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68770",
    "department_code": "68",
    "name": "SUAITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68773",
    "department_code": "68",
    "name": "SUCRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68780",
    "department_code": "68",
    "name": "SURATÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68820",
    "department_code": "68",
    "name": "TONA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68855",
    "department_code": "68",
    "name": "VALLE DE SAN JOSÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68861",
    "department_code": "68",
    "name": "VÉLEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68867",
    "department_code": "68",
    "name": "VETAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68872",
    "department_code": "68",
    "name": "VILLANUEVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "68895",
    "department_code": "68",
    "name": "ZAPATOCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70001",
    "department_code": "70",
    "name": "SINCELEJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70110",
    "department_code": "70",
    "name": "BUENAVISTA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70124",
    "department_code": "70",
    "name": "CAIMITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70204",
    "department_code": "70",
    "name": "COLOSÓ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70215",
    "department_code": "70",
    "name": "COROZAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70221",
    "department_code": "70",
    "name": "COVEÑAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70230",
    "department_code": "70",
    "name": "CHALÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70233",
    "department_code": "70",
    "name": "EL ROBLE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70235",
    "department_code": "70",
    "name": "GALERAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70265",
    "department_code": "70",
    "name": "GUARANDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70400",
    "department_code": "70",
    "name": "LA UNIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70418",
    "department_code": "70",
    "name": "LOS PALMITOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70429",
    "department_code": "70",
    "name": "MAJAGUAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70473",
    "department_code": "70",
    "name": "MORROA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70508",
    "department_code": "70",
    "name": "OVEJAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70523",
    "department_code": "70",
    "name": "PALMITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70670",
    "department_code": "70",
    "name": "SAMPUÉS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70678",
    "department_code": "70",
    "name": "SAN BENITO ABAD",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70702",
    "department_code": "70",
    "name": "SAN JUAN DE BETULIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70708",
    "department_code": "70",
    "name": "SAN MARCOS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70713",
    "department_code": "70",
    "name": "SAN ONOFRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70717",
    "department_code": "70",
    "name": "SAN PEDRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70742",
    "department_code": "70",
    "name": "SAN LUIS DE SINCÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70771",
    "department_code": "70",
    "name": "SUCRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70820",
    "department_code": "70",
    "name": "SANTIAGO DE TOLÚ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "70823",
    "department_code": "70",
    "name": "SAN JOSÉ DE TOLUVIEJO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73001",
    "department_code": "73",
    "name": "IBAGUÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73024",
    "department_code": "73",
    "name": "ALPUJARRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73026",
    "department_code": "73",
    "name": "ALVARADO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73030",
    "department_code": "73",
    "name": "AMBALEMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73043",
    "department_code": "73",
    "name": "ANZOÁTEGUI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73055",
    "department_code": "73",
    "name": "ARMERO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73067",
    "department_code": "73",
    "name": "ATACO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73124",
    "department_code": "73",
    "name": "CAJAMARCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73148",
    "department_code": "73",
    "name": "CARMEN DE APICALÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73152",
    "department_code": "73",
    "name": "CASABIANCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73168",
    "department_code": "73",
    "name": "CHAPARRAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73200",
    "department_code": "73",
    "name": "COELLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73217",
    "department_code": "73",
    "name": "COYAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73226",
    "department_code": "73",
    "name": "CUNDAY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73236",
    "department_code": "73",
    "name": "DOLORES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73268",
    "department_code": "73",
    "name": "ESPINAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73270",
    "department_code": "73",
    "name": "FALAN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73275",
    "department_code": "73",
    "name": "FLANDES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73283",
    "department_code": "73",
    "name": "FRESNO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73319",
    "department_code": "73",
    "name": "GUAMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73347",
    "department_code": "73",
    "name": "HERVEO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73349",
    "department_code": "73",
    "name": "HONDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73352",
    "department_code": "73",
    "name": "ICONONZO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73408",
    "department_code": "73",
    "name": "LÉRIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73411",
    "department_code": "73",
    "name": "LÍBANO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73443",
    "department_code": "73",
    "name": "SAN SEBASTIÁN DE MARIQUITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73449",
    "department_code": "73",
    "name": "MELGAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73461",
    "department_code": "73",
    "name": "MURILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73483",
    "department_code": "73",
    "name": "NATAGAIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73504",
    "department_code": "73",
    "name": "ORTEGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73520",
    "department_code": "73",
    "name": "PALOCABILDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73547",
    "department_code": "73",
    "name": "PIEDRAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73555",
    "department_code": "73",
    "name": "PLANADAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73563",
    "department_code": "73",
    "name": "PRADO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73585",
    "department_code": "73",
    "name": "PURIFICACIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73616",
    "department_code": "73",
    "name": "RIOBLANCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73622",
    "department_code": "73",
    "name": "RONCESVALLES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73624",
    "department_code": "73",
    "name": "ROVIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73671",
    "department_code": "73",
    "name": "SALDAÑA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73675",
    "department_code": "73",
    "name": "SAN ANTONIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73678",
    "department_code": "73",
    "name": "SAN LUIS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73686",
    "department_code": "73",
    "name": "SANTA ISABEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73770",
    "department_code": "73",
    "name": "SUÁREZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73854",
    "department_code": "73",
    "name": "VALLE DE SAN JUAN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73861",
    "department_code": "73",
    "name": "VENADILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73870",
    "department_code": "73",
    "name": "VILLAHERMOSA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "73873",
    "department_code": "73",
    "name": "VILLARRICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76001",
    "department_code": "76",
    "name": "CALI",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76020",
    "department_code": "76",
    "name": "ALCALÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76036",
    "department_code": "76",
    "name": "ANDALUCÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76041",
    "department_code": "76",
    "name": "ANSERMANUEVO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76054",
    "department_code": "76",
    "name": "ARGELIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76100",
    "department_code": "76",
    "name": "BOLÍVAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76109",
    "department_code": "76",
    "name": "BUENAVENTURA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76111",
    "department_code": "76",
    "name": "GUADALAJARA DE BUGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76113",
    "department_code": "76",
    "name": "BUGALAGRANDE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76122",
    "department_code": "76",
    "name": "CAICEDONIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76126",
    "department_code": "76",
    "name": "CALIMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76130",
    "department_code": "76",
    "name": "CANDELARIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76147",
    "department_code": "76",
    "name": "CARTAGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76233",
    "department_code": "76",
    "name": "DAGUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76243",
    "department_code": "76",
    "name": "EL ÁGUILA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76246",
    "department_code": "76",
    "name": "EL CAIRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76248",
    "department_code": "76",
    "name": "EL CERRITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76250",
    "department_code": "76",
    "name": "EL DOVIO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76275",
    "department_code": "76",
    "name": "FLORIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76306",
    "department_code": "76",
    "name": "GINEBRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76318",
    "department_code": "76",
    "name": "GUACARÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76364",
    "department_code": "76",
    "name": "JAMUNDÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76377",
    "department_code": "76",
    "name": "LA CUMBRE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76400",
    "department_code": "76",
    "name": "LA UNIÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76403",
    "department_code": "76",
    "name": "LA VICTORIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76497",
    "department_code": "76",
    "name": "OBANDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76520",
    "department_code": "76",
    "name": "PALMIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76563",
    "department_code": "76",
    "name": "PRADERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76606",
    "department_code": "76",
    "name": "RESTREPO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76616",
    "department_code": "76",
    "name": "RIOFRÍO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76622",
    "department_code": "76",
    "name": "ROLDANILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76670",
    "department_code": "76",
    "name": "SAN PEDRO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76736",
    "department_code": "76",
    "name": "SEVILLA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76823",
    "department_code": "76",
    "name": "TORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76828",
    "department_code": "76",
    "name": "TRUJILLO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76834",
    "department_code": "76",
    "name": "TULUÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76845",
    "department_code": "76",
    "name": "ULLOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76863",
    "department_code": "76",
    "name": "VERSALLES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76869",
    "department_code": "76",
    "name": "VIJES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76890",
    "department_code": "76",
    "name": "YOTOCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76892",
    "department_code": "76",
    "name": "YUMBO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "76895",
    "department_code": "76",
    "name": "ZARZAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81001",
    "department_code": "81",
    "name": "ARAUCA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81065",
    "department_code": "81",
    "name": "ARAUQUITA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81220",
    "department_code": "81",
    "name": "CRAVO NORTE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81300",
    "department_code": "81",
    "name": "FORTUL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81591",
    "department_code": "81",
    "name": "PUERTO RONDÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81736",
    "department_code": "81",
    "name": "SARAVENA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "81794",
    "department_code": "81",
    "name": "TAME",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85001",
    "department_code": "85",
    "name": "YOPAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85010",
    "department_code": "85",
    "name": "AGUAZUL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85015",
    "department_code": "85",
    "name": "CHÁMEZA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85125",
    "department_code": "85",
    "name": "HATO COROZAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85136",
    "department_code": "85",
    "name": "LA SALINA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85139",
    "department_code": "85",
    "name": "MANÍ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85162",
    "department_code": "85",
    "name": "MONTERREY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85225",
    "department_code": "85",
    "name": "NUNCHÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85230",
    "department_code": "85",
    "name": "OROCUÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85250",
    "department_code": "85",
    "name": "PAZ DE ARIPORO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85263",
    "department_code": "85",
    "name": "PORE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85279",
    "department_code": "85",
    "name": "RECETOR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85300",
    "department_code": "85",
    "name": "SABANALARGA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85315",
    "department_code": "85",
    "name": "SÁCAMA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85325",
    "department_code": "85",
    "name": "SAN LUIS DE PALENQUE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85400",
    "department_code": "85",
    "name": "TÁMARA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85410",
    "department_code": "85",
    "name": "TAURAMENA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85430",
    "department_code": "85",
    "name": "TRINIDAD",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "85440",
    "department_code": "85",
    "name": "VILLANUEVA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86001",
    "department_code": "86",
    "name": "MOCOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86219",
    "department_code": "86",
    "name": "COLÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86320",
    "department_code": "86",
    "name": "ORITO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86568",
    "department_code": "86",
    "name": "PUERTO ASÍS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86569",
    "department_code": "86",
    "name": "PUERTO CAICEDO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86571",
    "department_code": "86",
    "name": "PUERTO GUZMÁN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86573",
    "department_code": "86",
    "name": "PUERTO LEGUÍZAMO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86749",
    "department_code": "86",
    "name": "SIBUNDOY",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86755",
    "department_code": "86",
    "name": "SAN FRANCISCO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86757",
    "department_code": "86",
    "name": "SAN MIGUEL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86760",
    "department_code": "86",
    "name": "SANTIAGO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86865",
    "department_code": "86",
    "name": "VALLE DEL GUAMUEZ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "86885",
    "department_code": "86",
    "name": "VILLAGARZÓN",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "88001",
    "department_code": "88",
    "name": "SAN ANDRÉS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "88564",
    "department_code": "88",
    "name": "PROVIDENCIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91001",
    "department_code": "91",
    "name": "LETICIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91263",
    "department_code": "91",
    "name": "EL ENCANTO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91405",
    "department_code": "91",
    "name": "LA CHORRERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91407",
    "department_code": "91",
    "name": "LA PEDRERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91430",
    "department_code": "91",
    "name": "LA VICTORIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91460",
    "department_code": "91",
    "name": "MIRITÍ - PARANÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91530",
    "department_code": "91",
    "name": "PUERTO ALEGRÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91536",
    "department_code": "91",
    "name": "PUERTO ARICA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91540",
    "department_code": "91",
    "name": "PUERTO NARIÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91669",
    "department_code": "91",
    "name": "PUERTO SANTANDER",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "91798",
    "department_code": "91",
    "name": "TARAPACÁ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94001",
    "department_code": "94",
    "name": "INÍRIDA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94343",
    "department_code": "94",
    "name": "BARRANCOMINAS",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94883",
    "department_code": "94",
    "name": "SAN FELIPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94884",
    "department_code": "94",
    "name": "PUERTO COLOMBIA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94885",
    "department_code": "94",
    "name": "LA GUADALUPE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94886",
    "department_code": "94",
    "name": "CACAHUAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94887",
    "department_code": "94",
    "name": "PANA PANA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "94888",
    "department_code": "94",
    "name": "MORICHAL",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "95001",
    "department_code": "95",
    "name": "SAN JOSÉ DEL GUAVIARE",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "95015",
    "department_code": "95",
    "name": "CALAMAR",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "95025",
    "department_code": "95",
    "name": "EL RETORNO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "95200",
    "department_code": "95",
    "name": "MIRAFLORES",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97001",
    "department_code": "97",
    "name": "MITÚ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97161",
    "department_code": "97",
    "name": "CARURÚ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97511",
    "department_code": "97",
    "name": "PACOA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97666",
    "department_code": "97",
    "name": "TARAIRA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97777",
    "department_code": "97",
    "name": "PAPUNAHUA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "97889",
    "department_code": "97",
    "name": "YAVARATÉ",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "99001",
    "department_code": "99",
    "name": "PUERTO CARREÑO",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "99524",
    "department_code": "99",
    "name": "LA PRIMAVERA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "99624",
    "department_code": "99",
    "name": "SANTA ROSALÍA",
    "created_at": "",
    "updated_at": ""
  },
  {
    "code": "99773",
    "department_code": "99",
    "name": "CUMARIBO",
    "created_at": "",
    "updated_at": ""
  }]',true);

        foreach ($municipalities as $municipality) {
            DB::table('municipalities')->insert([
                'code' => $municipality['code'],
                'department_code' => $municipality['department_code'],
                'name' => $municipality['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
