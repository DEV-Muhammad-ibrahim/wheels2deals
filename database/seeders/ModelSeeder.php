<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use App\Models\VehicleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'name' => 'Q3',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'Malibu',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Escalade ESV',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'RLX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Silverado 2500 HD Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Pacifica',
                'company_id' => 16,
                'type_id' => 10,
            ],
            [
                'name' => 'Colorado Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'X3',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'TLX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Silverado 3500 HD Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '7 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Fusion',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Envision',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'SQ5',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'R8',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'R8',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Traverse',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'MDX',
                'company_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'QX80',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'Encore',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra 2500 HD Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Insight',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'XT6',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'XT5',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'XT4',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'Enclave',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'Q5',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'Santa Fe',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'EcoSport',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Escape',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 5,
            ],
            [
                'name' => 'Sonata',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Edge',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Kona Electric',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Equinox',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra 3500 HD Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Gladiator',
                'company_id' => 32,
                'type_id' => 7,
            ],
            [
                'name' => 'X7',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'CT6-V',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'A7',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Blazer',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'F150 SuperCrew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Suburban',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Compass',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Escalade',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'Voyager',
                'company_id' => 16,
                'type_id' => 10,
            ],
            [
                'name' => 'Accord Hybrid',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Terrain',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Spark',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Sierra 1500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'NEXO',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Veloster',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'Silverado 1500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'G70',
                'company_id' => 25,
                'type_id' => 8,
            ],
            [
                'name' => 'CT5',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Odyssey',
                'company_id' => 28,
                'type_id' => 10,
            ],
            [
                'name' => 'Elantra GT',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'RDX',
                'company_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'Yukon XL',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Ranger SuperCab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Expedition MAX',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Kona',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'QX50',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'Durango',
                'company_id' => 18,
                'type_id' => 1,
            ],
            [
                'name' => 'Yukon',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Palisade',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Ridgeline',
                'company_id' => 28,
                'type_id' => 7,
            ],
            [
                'name' => 'Cherokee',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Bolt EV',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Expedition',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Passport',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'Charger',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'QX60',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'Venue',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Pilot',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'Grand Cherokee',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Tahoe',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Acadia',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Impala',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'CR-V',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'X5',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'Q60',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'Ranger SuperCrew',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Trax',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Ioniq Plug-in Hybrid',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'E-PACE',
                'company_id' => 31,
                'type_id' => 1,
            ],
            [
                'name' => 'Tucson',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Explorer',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'HR-V',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'I-PACE',
                'company_id' => 31,
                'type_id' => 1,
            ],
            [
                'name' => 'Q50',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'G80',
                'company_id' => 25,
                'type_id' => 8,
            ],
            [
                'name' => 'F-PACE',
                'company_id' => 31,
                'type_id' => 1,
            ],
            [
                'name' => 'Renegade',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Accent',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'F-TYPE',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'Wrangler',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Sorento',
                'company_id' => 33,
                'type_id' => 1,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Discovery Sport',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'Sedona',
                'company_id' => 33,
                'type_id' => 10,
            ],
            [
                'name' => 'Optima',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Sportage',
                'company_id' => 33,
                'type_id' => 1,
            ],
            [
                'name' => 'Optima Hybrid',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Optima Plug-in Hybrid',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Range Rover Evoque',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'Telluride',
                'company_id' => 33,
                'type_id' => 1,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Wrangler Unlimited',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Soul',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Range Rover Sport',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'Range Rover',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'Stinger',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Discovery',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'Range Rover Velar',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'ES',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'LC',
                'company_id' => 39,
                'type_id' => 6,
            ],
            [
                'name' => 'LX',
                'company_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'RC',
                'company_id' => 39,
                'type_id' => 6,
            ],
            [
                'name' => 'GX',
                'company_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'GS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'LS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'UX',
                'company_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'GLS',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'CLA',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Outlander Sport',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'NX',
                'company_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'CX-30',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'Eclipse Cross',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'MAZDA3',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'MAZDA3',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'Mirage G4',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Armada',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'CX-5',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'G-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'RX',
                'company_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'Kicks',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Murano',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'NV3500 HD Passenger',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'GLA',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'CX-9',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'NV1500 Cargo',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Countryman',
                'company_id' => 47,
                'type_id' => 1,
            ],
            [
                'name' => 'GLE',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Maxima',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => '370Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'GLC',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Altima',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'GT-R',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Outlander',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'Outlander PHEV',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'NV3500 HD Cargo',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'Panamera',
                'company_id' => 53,
                'type_id' => 8,
            ],
            [
                'name' => 'Taycan',
                'company_id' => 53,
                'type_id' => 8,
            ],
            [
                'name' => 'Pathfinder',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Rogue',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'NV200',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => '911',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => 'Rogue Sport',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Macan',
                'company_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'Cayenne Coupe',
                'company_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'Cayenne',
                'company_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'NV2500 HD Cargo',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'BRZ',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Versa',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'Avalon',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'WRX',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Ascent',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Legacy',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Corolla Hatchback',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Crosstrek',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Corolla',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => '86',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Forester',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Avalon Hybrid',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => '4Runner',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'C-HR',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Camry Hybrid',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Corolla Hybrid',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'GR Supra',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Highlander',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Prius',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Prius Prime',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'RAV4',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Tacoma Access Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Sienna',
                'company_id' => 65,
                'type_id' => 10,
            ],
            [
                'name' => 'Land Cruiser',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'RAV4 Hybrid',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Highlander Hybrid',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Sequoia',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Tundra Double Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Tacoma Double Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Tundra CrewMax',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Passat',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Yaris Hatchback',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'MDX Sport Hybrid',
                'company_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'RLX Sport Hybrid',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'A6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'XC40',
                'company_id' => 68,
                'type_id' => 1,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Q7',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'Q8',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => '4C Spider',
                'company_id' => 3,
                'type_id' => 5,
            ],
            [
                'name' => 'XC60',
                'company_id' => 68,
                'type_id' => 1,
            ],
            [
                'name' => 'Tiguan',
                'company_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'A8',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'ILX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => '2 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '2 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'A3',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A3',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A4 allroad',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'e-tron',
                'company_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'Jetta',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 3',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Stelvio',
                'company_id' => 3,
                'type_id' => 1,
            ],
            [
                'name' => 'Giulia',
                'company_id' => 3,
                'type_id' => 8,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'S3',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '5 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M5',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'i8',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'i8',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '8 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '8 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M6',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'i3',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M4',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M4',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'Regal Sportback',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'X6 M',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'X2',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'CTS-V',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'X1',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'X6',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'X4',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'CT6',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Regal TourX',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => 'M2',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Cascada',
                'company_id' => 12,
                'type_id' => 5,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Cruze',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cruze',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Z4',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'XTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'LaCrosse',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'ATS-V',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Express 2500 Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Colorado Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Express 2500 Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Express 3500 Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Silverado 2500 HD Double Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 1500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Express 3500 Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Silverado 1500 LD Double Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 2500 HD Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 1500 Double Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Sonic',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Sonic',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Pacifica Hybrid',
                'company_id' => 16,
                'type_id' => 10,
            ],
            [
                'name' => 'Challenger',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Volt',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Journey',
                'company_id' => 18,
                'type_id' => 1,
            ],
            [
                'name' => 'F150 Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Suburban 3500HD',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Grand Caravan Passenger',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => '300',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'F250 Super Duty Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F150 Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F450 Super Duty Crew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F350 Super Duty Crew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Fiesta',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Fiesta',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'F250 Super Duty Crew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F350 Super Duty Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Flex',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Transit 150 Van',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Canyon Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'G90',
                'company_id' => 25,
                'type_id' => 8,
            ],
            [
                'name' => 'Fusion Energi',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Transit Connect Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Transit 150 Wagon',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Transit 350 Van',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'F250 Super Duty Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 1500 Double Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Transit 250 Van',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Transit 350 Wagon',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Transit Connect Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Taurus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Sierra 1500 Limited Double Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Clarity Electric',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Sierra 2500 HD Double Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 2500 HD Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Canyon Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 1500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Civic Type R',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Clarity Fuel Cell',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Clarity Plug-in Hybrid',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Fit',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Ioniq Electric',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Sonata Hybrid',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Ioniq Hybrid',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Sonata Plug-in Hybrid',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Q70',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'QX30',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'XE',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'Niro',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'XF',
                'company_id' => 31,
                'type_id' => 14,
            ],
            [
                'name' => 'XF',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'F-TYPE',
                'company_id' => 31,
                'type_id' => 6,
            ],
            [
                'name' => 'F-TYPE',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'Niro Plug-in Hybrid',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Cadenza',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'K900',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Niro EV',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Soul EV',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Levante',
                'company_id' => 43,
                'type_id' => 1,
            ],
            [
                'name' => 'MX-5 Miata RF',
                'company_id' => 44,
                'type_id' => 5,
            ],
            [
                'name' => 'MX-5 Miata',
                'company_id' => 44,
                'type_id' => 5,
            ],
            [
                'name' => 'CX-3',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'A-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Ghibli',
                'company_id' => 43,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'CLS',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG CLA',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'GLC Coupe',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG CLS',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Santa Fe XL',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'Mercedes-AMG GLE',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG G-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG GLA',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'SL',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Metris Passenger',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Mercedes-AMG GLE Coupe',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-Maybach S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG GLC Coupe',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Sprinter 2500 Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Convertible',
                'company_id' => 47,
                'type_id' => 5,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Metris Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'SLC',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG SLC',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG GLC',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => '370Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => '370Z',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG SL',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Hardtop 2 Door',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Hardtop 4 Door',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Clubman',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Mercedes-AMG GLS',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'TITAN XD Crew Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'Titan Crew Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => '718 Boxster',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => 'Frontier King Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'Frontier Crew Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'LEAF',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'Sentra',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'TITAN Single Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'NV200 Taxi',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'Titan King Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'TITAN XD Single Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'Versa Note',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'TITAN XD King Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => '911',
                'company_id' => 53,
                'type_id' => 6,
            ],
            [
                'name' => '911',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => '718 Cayman',
                'company_id' => 53,
                'type_id' => 6,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Model X',
                'company_id' => 64,
                'type_id' => 1,
            ],
            [
                'name' => 'Model 3',
                'company_id' => 64,
                'type_id' => 8,
            ],
            [
                'name' => 'Model S',
                'company_id' => 64,
                'type_id' => 8,
            ],
            [
                'name' => 'Mirai',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Atlas',
                'company_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'Prius c',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Golf SportWagen',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'Arteon',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'e-Golf',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Golf',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Golf GTI',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Jetta GLI',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 6,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Golf Alltrack',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'S60',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'Golf R',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'V60',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'V90',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'S90',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'Vanquish S',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'Vanquish S',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'A3',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A3',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => '4C',
                'company_id' => 3,
                'type_id' => 6,
            ],
            [
                'name' => 'DB11',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'A3 Sportback e-tron',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S7',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S8',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 7',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Bentayga',
                'company_id' => 8,
                'type_id' => 1,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M4',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M4',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Flying Spur',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'M6',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M6',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Mulsanne',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'X5 M',
                'company_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'ATS-V',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'ATS-V',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'City Express',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Silverado 3500 HD Double Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 3500 HD Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'GTC4Lusso',
                'company_id' => 21,
                'type_id' => 9,
            ],
            [
                'name' => '488 GTB',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => '812 Superfast',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Portofino',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => '488 Spider',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'C-MAX Hybrid',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'F350 Super Duty Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Transit 350 HD Van',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 5,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Savana 2500 Passenger',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Savana 3500 Passenger',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Savana 3500 Cargo',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Savana 2500 Cargo',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Sierra 3500 HD Double Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 3500 HD Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Santa Fe Sport',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'XF',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'XF',
                'company_id' => 31,
                'type_id' => 14,
            ],
            [
                'name' => 'F-TYPE',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'F-TYPE',
                'company_id' => 31,
                'type_id' => 6,
            ],
            [
                'name' => 'Forte5',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Huracan',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Aventador',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Aventador',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Quattroporte',
                'company_id' => 43,
                'type_id' => 8,
            ],
            [
                'name' => 'Evora 400',
                'company_id' => 40,
                'type_id' => 6,
            ],
            [
                'name' => '570GT',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => 'GranTurismo',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'GranTurismo',
                'company_id' => 43,
                'type_id' => 5,
            ],
            [
                'name' => '720S',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => '570S',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => '570S',
                'company_id' => 45,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'Sprinter 2500 Crew',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Metris WORKER Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Mercedes-AMG S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Metris WORKER Passenger',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Sprinter 3500 XD Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Sprinter 2500 Passenger',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Sprinter WORKER Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Sprinter 3500 Cargo',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Ghost',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Wraith',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => 'Dawn',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Corolla iM',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Yaris iA',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'XC90',
                'company_id' => 68,
                'type_id' => 1,
            ],
            [
                'name' => 'Tiguan Limited',
                'company_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'Rapide S',
                'company_id' => 6,
                'type_id' => 8,
            ],
            [
                'name' => 'Vanquish',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'Vanquish',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'Vantage',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'Vantage',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'A5 Sport',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A5 Sport',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'i8',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '2 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '2 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Regal',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'ATS-V',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'ATS-V',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Verano',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cruze',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Cruze',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => '200',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'SS',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'F12berlinetta',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'California',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'Volt',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'C-MAX Energi',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Fiesta',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Fiesta',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Expedition EL',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Acadia Limited',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Accent',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Accent',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Azera',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'QX70',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'Tucson Fuel Cell',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'XF',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'Patriot',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Aventador',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Aventador',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Huracan',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Huracan',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'CT',
                'company_id' => 39,
                'type_id' => 9,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => '570S',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'MAZDA3',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'MAZDA3',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'B-Class',
                'company_id' => 42,
                'type_id' => 9,
            ],
            [
                'name' => 'Mercedes-AMG E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mercedes-AMG GT',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Sprinter WORKER Passenger',
                'company_id' => 42,
                'type_id' => 10,
            ],
            [
                'name' => 'Lancer',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'i-MiEV',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Quest',
                'company_id' => 50,
                'type_id' => 10,
            ],
            [
                'name' => 'JUKE',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Prius v',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Tundra Regular Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'CC',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Touareg',
                'company_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'DB9 GT',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'DB9 GT',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'Vantage',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'Vantage',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'allroad',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '4 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'ELR',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Cruze',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'SRX',
                'company_id' => 14,
                'type_id' => 1,
            ],
            [
                'name' => 'Cruze Limited',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Impala Limited',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Malibu Limited',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Dart',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Town & Country',
                'company_id' => 16,
                'type_id' => 10,
            ],
            [
                'name' => 'Spark EV',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'FF',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'CR-Z',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Accent',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Accent',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Genesis',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Genesis Coupe',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'Equus',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Forte Koup',
                'company_id' => 33,
                'type_id' => 6,
            ],
            [
                'name' => 'LR4',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => '650S',
                'company_id' => 45,
                'type_id' => 5,
            ],
            [
                'name' => '650S',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => '675LT',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => 'CLS-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'GL-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'GLE Coupe',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'Mercedes-Maybach S 600',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'SLK',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Mercedes-AMG SLK',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Paceman',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Cayman',
                'company_id' => 53,
                'type_id' => 6,
            ],
            [
                'name' => 'Boxster',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => 'Eos',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'DB9',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'DB9',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'S80',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'XC70',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Captiva Sport',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => '458 Italia',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => '458 Speciale',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => '458 Spider',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'Focus ST',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Crosstour',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'Q40',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'XK',
                'company_id' => 31,
                'type_id' => 6,
            ],
            [
                'name' => 'XK',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'Q60',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'Q60',
                'company_id' => 30,
                'type_id' => 5,
            ],
            [
                'name' => 'LR2',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 5,
            ],
            [
                'name' => 'M-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'CLA-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'MAZDA5',
                'company_id' => 44,
                'type_id' => 10,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'GLK-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => '650S',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => '650S',
                'company_id' => 45,
                'type_id' => 5,
            ],
            [
                'name' => 'GLA-Class',
                'company_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'SLS-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'SLS-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'SL-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'SLK-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Coupe',
                'company_id' => 47,
                'type_id' => 6,
            ],
            [
                'name' => 'Countryman',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Roadster',
                'company_id' => 47,
                'type_id' => 5,
            ],
            [
                'name' => 'Lancer Evolution',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Rogue Select',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Versa',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'Versa',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'Xterra',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'XV Crosstrek',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Prius Plug-in Hybrid',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Venza',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'TSX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'TSX',
                'company_id' => 1,
                'type_id' => 14,
            ],
            [
                'name' => 'TL',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'RS 5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => '2 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 14,
            ],
            [
                'name' => 'ATS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Express 1500 Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Express 1500 Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => '200',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => '200',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Suburban 1500',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Avenger',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'E350 Super Duty Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'E150 Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'E150 Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'E250 Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'E350 Super Duty Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Savana 1500 Cargo',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Savana 1500 Passenger',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Yukon XL 1500',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Insight',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 6,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Gallardo',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Gallardo',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'MAZDA2',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'Evora',
                'company_id' => 40,
                'type_id' => 6,
            ],
            [
                'name' => 'GranTurismo',
                'company_id' => 43,
                'type_id' => 5,
            ],
            [
                'name' => 'GranTurismo',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'MP4-12C',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => 'MP4-12C',
                'company_id' => 45,
                'type_id' => 5,
            ],
            [
                'name' => 'CLS-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'CL-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'cube',
                'company_id' => 50,
                'type_id' => 14,
            ],
            [
                'name' => 'S-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Lancer',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Lancer',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Hardtop',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Tribeca',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'FJ Cruiser',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'Tacoma Regular Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'GTI',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Routan',
                'company_id' => 66,
                'type_id' => 10,
            ],
            [
                'name' => 'Jetta SportWagen',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'A3',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'ZDX',
                'company_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '1 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '1 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '6 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Escalade EXT',
                'company_id' => 14,
                'type_id' => 7,
            ],
            [
                'name' => 'Avalanche',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Silverado 2500 HD Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 3500 HD Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 1500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Suburban 2500',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra 3500 HD Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 1500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Yukon XL 2500',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra 2500 HD Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'EX',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'QX',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 5,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'JX',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'FX',
                'company_id' => 30,
                'type_id' => 1,
            ],
            [
                'name' => 'M',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 6,
            ],
            [
                'name' => 'MP4-12C',
                'company_id' => 45,
                'type_id' => 6,
            ],
            [
                'name' => 'Altima',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'Altima',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'SX4',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'SX4',
                'company_id' => 62,
                'type_id' => 9,
            ],
            [
                'name' => 'Kizashi',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Grand Vitara',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Matrix',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Venza',
                'company_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'C30',
                'company_id' => 68,
                'type_id' => 9,
            ],
            [
                'name' => 'C70',
                'company_id' => 68,
                'type_id' => 5,
            ],
            [
                'name' => 'TSX',
                'company_id' => 1,
                'type_id' => 14,
            ],
            [
                'name' => 'TSX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'RL',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Rapide',
                'company_id' => 6,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'DBS',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'DBS',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'Virage',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'Virage',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => '1 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '1 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M6',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Colorado Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Caliber',
                'company_id' => 18,
                'type_id' => 14,
            ],
            [
                'name' => 'Canyon Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 14,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 5,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'Veracruz',
                'company_id' => 29,
                'type_id' => 1,
            ],
            [
                'name' => 'Liberty',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Aventador',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'HS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'LFA',
                'company_id' => 39,
                'type_id' => 6,
            ],
            [
                'name' => 'CX-7',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'SLS-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'SLS-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'R-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => '370Z',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => '370Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 5,
            ],
            [
                'name' => 'Galant',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Altima',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Altima',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Equator Extended Cab',
                'company_id' => 62,
                'type_id' => 7,
            ],
            [
                'name' => 'Equator Crew Cab',
                'company_id' => 62,
                'type_id' => 7,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'A6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A6',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'DB9',
                'company_id' => 6,
                'type_id' => 5,
            ],
            [
                'name' => 'DB9',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => 'DTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Lucerne',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 14,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Aveo',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Aveo',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'HHR',
                'company_id' => 15,
                'type_id' => 14,
            ],
            [
                'name' => 'STS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => '200',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => '200',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => '599 GTB Fiorano',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Grand Caravan Cargo',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => '599 GTO',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => '612 Scaglietti',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Nitro',
                'company_id' => 18,
                'type_id' => 1,
            ],
            [
                'name' => 'Crown Victoria',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Ranger Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Ranger Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Accord Crosstour',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'Element',
                'company_id' => 28,
                'type_id' => 1,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 14,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'XK',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'XK',
                'company_id' => 31,
                'type_id' => 6,
            ],
            [
                'name' => 'Elise',
                'company_id' => 40,
                'type_id' => 6,
            ],
            [
                'name' => 'IS F',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'Exige',
                'company_id' => 40,
                'type_id' => 6,
            ],
            [
                'name' => 'RX-8',
                'company_id' => 44,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'Tribute',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'Endeavor',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'SLS-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '911',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => '911',
                'company_id' => 53,
                'type_id' => 6,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 5,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 8,
            ],
            [
                'name' => 'Phantom',
                'company_id' => 57,
                'type_id' => 6,
            ],
            [
                'name' => '9-4X',
                'company_id' => 58,
                'type_id' => 1,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => '5-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => 'Jetta',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Jetta',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'TSX',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'V50',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'S40',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Azure T',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'Brooklands',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'R8',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => '5 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '5 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'CTS',
                'company_id' => 14,
                'type_id' => 14,
            ],
            [
                'name' => 'Cobalt',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cobalt',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Aveo',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Aveo',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Ram 2500 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'PT Cruiser',
                'company_id' => 16,
                'type_id' => 14,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Ram 1500 Quad Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Dakota Extended Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 1500 Crew Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Dakota Crew Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 2500 Mega Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 1500 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 3500 Crew Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 2500 Crew Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 5,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Ram 3500 Mega Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Ram 3500 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'E150 Super Duty Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Explorer Sport Trac',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'H3T',
                'company_id' => 69,
                'type_id' => 7,
            ],
            [
                'name' => 'H3',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 5,
            ],
            [
                'name' => 'Rondo',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Commander',
                'company_id' => 32,
                'type_id' => 1,
            ],
            [
                'name' => 'Murcielago',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Murcielago',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Forte',
                'company_id' => 33,
                'type_id' => 6,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 5,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'SC',
                'company_id' => 39,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => 'Vibe',
                'company_id' => 52,
                'type_id' => 14,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'G3',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => 'New Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'New Beetle',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'Passat',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Passat',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Yaris',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'V70',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'A5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'Arnage',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => 'Azure',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'XLR',
                'company_id' => 14,
                'type_id' => 5,
            ],
            [
                'name' => 'TrailBlazer',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Ram 3500 Quad Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Aspen',
                'company_id' => 16,
                'type_id' => 1,
            ],
            [
                'name' => '430 Scuderia',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => '430 Scuderia',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'Ram 2500 Quad Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Sprinter 2500 Cargo',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 5,
            ],
            [
                'name' => 'F430',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'F430',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Taurus X',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Envoy',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'S2000',
                'company_id' => 28,
                'type_id' => 5,
            ],
            [
                'name' => 'H2',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'Amanti',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Borrego',
                'company_id' => 33,
                'type_id' => 1,
            ],
            [
                'name' => 'Gallardo',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Gallardo',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Murcielago',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Murcielago',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Spectra',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Spectra',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'LR3',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'GranTurismo',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'B-Series Regular Cab',
                'company_id' => 44,
                'type_id' => 7,
            ],
            [
                'name' => 'CLK-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'CLK-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'B-Series Extended Cab',
                'company_id' => 44,
                'type_id' => 7,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'SLR McLaren',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'Raider Double Cab',
                'company_id' => 48,
                'type_id' => 7,
            ],
            [
                'name' => 'Raider Extended Cab',
                'company_id' => 48,
                'type_id' => 7,
            ],
            [
                'name' => 'G6 (2009.5)',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'G6 (2009.5)',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'G6 (2009.5)',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Solstice',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Solstice',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'G8',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => '9-7X',
                'company_id' => 58,
                'type_id' => 1,
            ],
            [
                'name' => 'Torrent',
                'company_id' => 52,
                'type_id' => 1,
            ],
            [
                'name' => 'G5',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => '5-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '5-Sep',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => 'XL7',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Rabbit',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Passat',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'Passat',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Touareg 2',
                'company_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'GLI',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'RS 4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'RS 4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'DBS',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 5,
            ],
            [
                'name' => 'Z4',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Z4',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Z4 M',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Z4 M',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Alpina B7',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Malibu (Classic)',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Pacifica',
                'company_id' => 16,
                'type_id' => 14,
            ],
            [
                'name' => 'Uplander Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Crossfire',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Crossfire',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Uplander Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sprinter 2500 Passenger',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'PT Cruiser',
                'company_id' => 16,
                'type_id' => 14,
            ],
            [
                'name' => 'PT Cruiser',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Magnum',
                'company_id' => 18,
                'type_id' => 14,
            ],
            [
                'name' => 'Ram 1500 Mega Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'F430',
                'company_id' => 21,
                'type_id' => 5,
            ],
            [
                'name' => 'F430',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Sprinter 3500 Cargo',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => '430 Scuderia',
                'company_id' => 21,
                'type_id' => 6,
            ],
            [
                'name' => 'Explorer Sport Trac',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Entourage',
                'company_id' => 29,
                'type_id' => 10,
            ],
            [
                'name' => 'i-370 Extended Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'Tiburon',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'i-290 Extended Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'S-Type',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'Murcielago LP640',
                'company_id' => 36,
                'type_id' => 6,
            ],
            [
                'name' => 'Murcielago LP640',
                'company_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'Ascender',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'X-Type',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'X-Type',
                'company_id' => 31,
                'type_id' => 14,
            ],
            [
                'name' => 'i-370 Crew Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'Exige S',
                'company_id' => 40,
                'type_id' => 6,
            ],
            [
                'name' => 'CLK-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'CLK-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'Cooper',
                'company_id' => 47,
                'type_id' => 9,
            ],
            [
                'name' => 'Grand Prix',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 5,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => 'Reno',
                'company_id' => 62,
                'type_id' => 9,
            ],
            [
                'name' => 'Solstice',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Solara',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Solara',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'R32',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Forenza',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Forenza',
                'company_id' => 62,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Rendezvous',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => 'RS 4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Avalanche',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Terraza',
                'company_id' => 12,
                'type_id' => 10,
            ],
            [
                'name' => 'Rainier',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'Silverado (Classic) 3500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 2500 HD Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 1500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 1500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Malibu',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Malibu',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Silverado (Classic) 1500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 1500 HD Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 3500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Monte Carlo',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Silverado (Classic) 3500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 2500 HD Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado (Classic) 2500 HD Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Caravan Passenger',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Caravan Cargo',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Dakota Quad Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Dakota Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'E250 Super Duty Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'E150 Super Duty Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Freestar Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Five Hundred',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Sierra (Classic) 1500 HD Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Freestar Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Sierra (Classic) 3500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Freestyle',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra (Classic) 1500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 1500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 2500 HD Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 1500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 3500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 3500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 2500 HD Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra (Classic) 2500 HD Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Tiburon',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'H2',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'H2',
                'company_id' => 69,
                'type_id' => 7,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 14,
            ],
            [
                'name' => 'SLR McLaren',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Versa',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'Versa',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => 'Vibe',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Legacy',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Legacy',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'SX4',
                'company_id' => 62,
                'type_id' => 9,
            ],
            [
                'name' => 'B9 Tribeca',
                'company_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'Aerio',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Solara',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Solara',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'Vanquish S',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'Vantage',
                'company_id' => 6,
                'type_id' => 6,
            ],
            [
                'name' => 'RSX',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'Z4 M',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Z4 M',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Cobalt',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cobalt',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Avalanche 2500',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Avalanche 1500',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'SSR',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 3500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 3500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 3500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 1500 HD Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Stratus',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'GT',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Envoy XL',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra 3500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 1500 HD Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 3500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 3500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'H1',
                'company_id' => 69,
                'type_id' => 14,
            ],
            [
                'name' => 'H1',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'Q',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'i-350 Crew Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'i-280 Extended Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'Optima (2006.5)',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'GranSport',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'GranSport',
                'company_id' => 43,
                'type_id' => 5,
            ],
            [
                'name' => 'Coupe',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'MPV',
                'company_id' => 44,
                'type_id' => 10,
            ],
            [
                'name' => 'Montero',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'G6',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'GTO',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Montana SV6',
                'company_id' => 52,
                'type_id' => 10,
            ],
            [
                'name' => 'Baja',
                'company_id' => 59,
                'type_id' => 7,
            ],
            [
                'name' => '9-2X',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Outback',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'XL-7',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Legacy',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Legacy',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Aerio',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Aerio',
                'company_id' => 62,
                'type_id' => 14,
            ],
            [
                'name' => 'Verona',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Tundra Access Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'A4 (2005.5)',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A4 (2005.5)',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'Phaeton',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'S4 (2005.5)',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S4 (2005.5)',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 6,
            ],
            [
                'name' => 'Continental',
                'company_id' => 8,
                'type_id' => 8,
            ],
            [
                'name' => 'Park Avenue',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Astro Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'DeVille',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'LeSabre',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Classic',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Astro Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Venture Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Venture Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Neon',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Stratus',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Stratus',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Excursion',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Viper',
                'company_id' => 18,
                'type_id' => 5,
            ],
            [
                'name' => 'Envoy XUV',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Taurus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Taurus',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Safari Cargo',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Thunderbird',
                'company_id' => 23,
                'type_id' => 5,
            ],
            [
                'name' => 'Safari Passenger',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'XG350',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'GranSport',
                'company_id' => 43,
                'type_id' => 6,
            ],
            [
                'name' => 'Freelander',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 9,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'Bonneville',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Aztek',
                'company_id' => 52,
                'type_id' => 1,
            ],
            [
                'name' => 'Grand Am',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Grand Am',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Montana',
                'company_id' => 52,
                'type_id' => 10,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => 'Carrera GT',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Echo',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'MR2',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Jetta (New)',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'A6',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Seville',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Malibu',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Malibu',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Silverado 2500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'S10 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 2500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Silverado 2500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Crossfire',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => '300M',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Concorde',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Tracker',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Dakota Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Intrepid',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'F150 (Heritage) Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F150 (Heritage) Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Sierra 2500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sonoma Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 2500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sierra 2500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Elantra',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 14,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'X-Type',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'Axiom',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'Rodeo',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 14,
            ],
            [
                'name' => 'MAZDA6',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'I',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'B-Series Cab Plus',
                'company_id' => 44,
                'type_id' => 7,
            ],
            [
                'name' => 'Diamante',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Lancer',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Lancer',
                'company_id' => 48,
                'type_id' => 14,
            ],
            [
                'name' => 'Montero Sport',
                'company_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'Pathfinder Armada',
                'company_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'Grand Am',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Grand Am',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Forenza',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Vitara',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Prius',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => '5-Sep',
                'company_id' => 58,
                'type_id' => 14,
            ],
            [
                'name' => '5-Sep',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => 'Matrix',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Matrix',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Jetta',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'Jetta',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'S40 (New)',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'Tacoma Xtracab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'V40',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'CL',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'S6',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'Z8',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'RS 6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'S10 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'S10 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Ram Van 1500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Van 2500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Van 3500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Explorer Sport',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Focus',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Windstar Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'ZX2',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Windstar Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Sonoma Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sonoma Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Rodeo Sport',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 9,
            ],
            [
                'name' => 'IS',
                'company_id' => 39,
                'type_id' => 8,
            ],
            [
                'name' => 'Protege5',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'Protege',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'C-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => '350Z',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Eurovan',
                'company_id' => 66,
                'type_id' => 10,
            ],
            [
                'name' => 'New Beetle',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'New Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Z3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Z3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 9,
            ],
            [
                'name' => 'TT',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Eldorado',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'M',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'M',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Prizm',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Prowler',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Econoline E250 Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Econoline E350 Super Duty Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Wagon 2500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Econoline E150 Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Econoline E150 Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Wagon 1500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Econoline E350 Super Duty Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Ram Wagon 3500',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Stratus',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Stratus',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'H1',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'H1',
                'company_id' => 69,
                'type_id' => 14,
            ],
            [
                'name' => 'Trooper',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'G',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'Discovery Series II',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => '626',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'Millenia',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => 'Grand Prix',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Grand Prix',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => 'Echo',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Echo',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Aerio',
                'company_id' => 62,
                'type_id' => 14,
            ],
            [
                'name' => 'Aerio',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Esteem',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Esteem',
                'company_id' => 62,
                'type_id' => 14,
            ],
            [
                'name' => 'Cabrio',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'New Beetle',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'C70',
                'company_id' => 68,
                'type_id' => 5,
            ],
            [
                'name' => 'C70',
                'company_id' => 68,
                'type_id' => 6,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 9,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 5,
            ],
            [
                'name' => 'M',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => 'M',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Z3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Z3',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => '5 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '5 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Catera',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Metro',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Lumina',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'LHS',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Ram 1500 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Jimmy',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Prelude',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'XG300',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'VehiCROSS',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'Rio',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Spectra',
                'company_id' => 33,
                'type_id' => 9,
            ],
            [
                'name' => 'Sephia',
                'company_id' => 33,
                'type_id' => 8,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Frontier Regular Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 5,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Swift',
                'company_id' => 62,
                'type_id' => 9,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '3-Sep',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Echo',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Echo',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Passat (New)',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Passat (New)',
                'company_id' => 66,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'A4',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 9,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '2500 HD Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '2500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Metro',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Metro',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => '2500 HD Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Crew Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Tahoe (New)',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'Cirrus',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Grand Voyager',
                'company_id' => 16,
                'type_id' => 10,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Avenger',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Contour',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Yukon Denali',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Sierra (Classic) 2500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Amigo',
                'company_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'Hombre Spacecab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'Hombre Regular Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'SC',
                'company_id' => 39,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'S70',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'SLX',
                'company_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 5,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'C70',
                'company_id' => 68,
                'type_id' => 6,
            ],
            [
                'name' => 'C70',
                'company_id' => 68,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'Riviera',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => '1500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Metro',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Metro',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Ram 2500 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Neon',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Neon',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Econoline E350 Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'F250 Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F250 Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => '2500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '1500 Club Coupe',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '2500 HD Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '2500 HD Extended Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => '3500 Crew Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Suburban 2500',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Suburban 1500',
                'company_id' => 27,
                'type_id' => 1,
            ],
            [
                'name' => 'Oasis',
                'company_id' => 70,
                'type_id' => 10,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Solara',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Cabrio (New)',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Golf (New)',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'GTI (New)',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Cabriolet',
                'company_id' => 7,
                'type_id' => 5,
            ],
            [
                'name' => 'Z3',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Skylark',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => '2500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'G-Series 1500',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => '1500 Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => '2500 Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'G-Series 3500',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'G-Series 2500',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Neon',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Neon',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Club Wagon',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => '2500 Club Coupe',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '2500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '1500 Regular Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '3500 Club Coupe',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'Sonoma Club Coupe Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => '2500 HD Club Coupe',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'CLK-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '200SX',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => '240SX',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Sidekick',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Trans Sport',
                'company_id' => 52,
                'type_id' => 10,
            ],
            [
                'name' => 'Grand Prix',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Grand Prix',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Supra',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'T100 Regular Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => '9000',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => 'X-90',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'T100 Xtracab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'Integra',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Tercel',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '8 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Skylark',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Skylark',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Aerostar Passenger',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Aspire',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Ram 3500 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Aerostar Cargo',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Probe',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'F350 Crew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F350 Regular Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F250 Crew Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'F350 Super Cab',
                'company_id' => 23,
                'type_id' => 7,
            ],
            [
                'name' => 'Thunderbird',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Taurus',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Taurus',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 14,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'del Sol',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'J',
                'company_id' => 30,
                'type_id' => 8,
            ],
            [
                'name' => 'Defender 90',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'MX-6',
                'company_id' => 44,
                'type_id' => 6,
            ],
            [
                'name' => 'Regular Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'King Cab',
                'company_id' => 50,
                'type_id' => 7,
            ],
            [
                'name' => 'Esteem',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 6,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Sunfire',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'SVX',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Paseo',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Paseo',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Previa',
                'company_id' => 65,
                'type_id' => 10,
            ],
            [
                'name' => '850',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => '850',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => '960',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => '960',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Regal',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => 'Regal',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Roadmaster',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Roadmaster',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => 'M3',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => 'Skylark',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => 'Skylark',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Fleetwood',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Beretta',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'G-Series G30',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Lumina Passenger',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sportvan G30',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Corsica',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Lumina Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Caprice Classic',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Caprice Classic',
                'company_id' => 15,
                'type_id' => 14,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'New Yorker',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Stealth',
                'company_id' => 18,
                'type_id' => 9,
            ],
            [
                'name' => 'Bronco',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Rally Wagon G3500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura G3500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'Mighty Max Regular Cab',
                'company_id' => 48,
                'type_id' => 7,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 5,
            ],
            [
                'name' => '300ZX',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => '300ZX',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Corolla',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Corolla',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 6,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Impreza',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => '164',
                'company_id' => 3,
                'type_id' => 8,
            ],
            [
                'name' => '850',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => '850',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => '90',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'NSX',
                'company_id' => 1,
                'type_id' => 5,
            ],
            [
                'name' => 'Legend',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'Legend',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 9,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Paseo',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'S6',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S6',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Regal',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Regal',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => '3500 HD Extended Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'G-Series G20',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'G-Series G10',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => '3500 HD Regular Cab',
                'company_id' => 15,
                'type_id' => 7,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Sportvan G20',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sebring',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'Spirit',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Escort',
                'company_id' => 23,
                'type_id' => 14,
            ],
            [
                'name' => 'Rally Wagon G2500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura G2500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura G1500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Scoupe',
                'company_id' => 29,
                'type_id' => 6,
            ],
            [
                'name' => 'Regular Cab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 8,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 6,
            ],
            [
                'name' => 'XJ',
                'company_id' => 31,
                'type_id' => 5,
            ],
            [
                'name' => 'MX-3',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => '929',
                'company_id' => 44,
                'type_id' => 8,
            ],
            [
                'name' => 'Expo',
                'company_id' => 48,
                'type_id' => 14,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 5,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Diamante',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'Diamante',
                'company_id' => 48,
                'type_id' => 14,
            ],
            [
                'name' => 'RX-7',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'Eclipse',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Samurai',
                'company_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => '968',
                'company_id' => 53,
                'type_id' => 6,
            ],
            [
                'name' => '968',
                'company_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => '928',
                'company_id' => 53,
                'type_id' => 9,
            ],
            [
                'name' => '9000',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '9000',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => 'MR2',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Regular Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Golf III',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Quattro',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Spider',
                'company_id' => 3,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => 'Xtra Cab',
                'company_id' => 65,
                'type_id' => 7,
            ],
            [
                'name' => 'Jetta III',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => '100',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => '100',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Vigor',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => '940',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => '940',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 14,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Lumina',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Lumina',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'S10 Blazer',
                'company_id' => 15,
                'type_id' => 1,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Ram Van B250',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Wagon B350',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Colt',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Ram Van B150',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Van B350',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Ram Wagon B150',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Stealth',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'Shadow',
                'company_id' => 18,
                'type_id' => 9,
            ],
            [
                'name' => 'Ram Wagon B250',
                'company_id' => 18,
                'type_id' => 10,
            ],
            [
                'name' => 'Rally Wagon 2500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Tempo',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Rally Wagon 3500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura 1500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura 3500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Vandura 2500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 14,
            ],
            [
                'name' => 'Excel',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Excel',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Spacecab',
                'company_id' => 70,
                'type_id' => 7,
            ],
            [
                'name' => '323',
                'company_id' => 44,
                'type_id' => 9,
            ],
            [
                'name' => 'Navajo',
                'company_id' => 44,
                'type_id' => 1,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => 'E-Class',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mighty Max Macro Cab',
                'company_id' => 48,
                'type_id' => 7,
            ],
            [
                'name' => 'Precis',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => '3000GT',
                'company_id' => 48,
                'type_id' => 6,
            ],
            [
                'name' => '240SX',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'Loyale',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'MR2',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Swift',
                'company_id' => 62,
                'type_id' => 8,
            ],
            [
                'name' => 'Swift',
                'company_id' => 62,
                'type_id' => 9,
            ],
            [
                'name' => 'Justy',
                'company_id' => 59,
                'type_id' => 9,
            ],
            [
                'name' => 'Corrado',
                'company_id' => 66,
                'type_id' => 6,
            ],
            [
                'name' => 'Allante',
                'company_id' => 14,
                'type_id' => 5,
            ],
            [
                'name' => 'Legend',
                'company_id' => 1,
                'type_id' => 8,
            ],
            [
                'name' => 'Legend',
                'company_id' => 1,
                'type_id' => 6,
            ],
            [
                'name' => 'DeVille',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'DeVille',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => '100',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => '100',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'Sixty Special',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Camaro',
                'company_id' => 15,
                'type_id' => 9,
            ],
            [
                'name' => 'Lumina APV',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'Sportvan G10',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'APV Cargo',
                'company_id' => 15,
                'type_id' => 10,
            ],
            [
                'name' => 'D350 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Fifth Ave',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 6,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 14,
            ],
            [
                'name' => 'Cavalier',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'D250 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Colt',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Colt',
                'company_id' => 18,
                'type_id' => 6,
            ],
            [
                'name' => 'D150 Club Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Imperial',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'D350 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'D150 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'D250 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Dynasty',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Ram 50 Regular Cab',
                'company_id' => 18,
                'type_id' => 7,
            ],
            [
                'name' => 'Daytona',
                'company_id' => 18,
                'type_id' => 9,
            ],
            [
                'name' => 'Shadow',
                'company_id' => 18,
                'type_id' => 9,
            ],
            [
                'name' => 'Shadow',
                'company_id' => 18,
                'type_id' => 5,
            ],
            [
                'name' => 'Ramcharger',
                'company_id' => 18,
                'type_id' => 1,
            ],
            [
                'name' => 'Festiva',
                'company_id' => 23,
                'type_id' => 9,
            ],
            [
                'name' => 'Tempo',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Tempo',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Rally Wagon 1500',
                'company_id' => 27,
                'type_id' => 10,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 6,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 14,
            ],
            [
                'name' => 'Accord',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'H1',
                'company_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'Stylus',
                'company_id' => 70,
                'type_id' => 8,
            ],
            [
                'name' => 'Defender 110',
                'company_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => '300 E',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '190 E',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '300 D',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '300 SD',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '300 CE',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '300 CE',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => '500 SEL',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '400 SEL',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '500 SL',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => '500 E',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '300 SL',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => '600 SEC',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '300 TE',
                'company_id' => 42,
                'type_id' => 14,
            ],
            [
                'name' => '400 E',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '300 SE',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '600 SL',
                'company_id' => 42,
                'type_id' => 5,
            ],
            [
                'name' => '600 SEL',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => '500 SEC',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => 'Sentra',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => 'Sentra',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => '240SX',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => '240SX',
                'company_id' => 50,
                'type_id' => 6,
            ],
            [
                'name' => '240SX',
                'company_id' => 50,
                'type_id' => 5,
            ],
            [
                'name' => 'NX',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'Firebird',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 6,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => 'Sunbird',
                'company_id' => 52,
                'type_id' => 5,
            ],
            [
                'name' => 'LeMans',
                'company_id' => 52,
                'type_id' => 9,
            ],
            [
                'name' => 'LeMans',
                'company_id' => 52,
                'type_id' => 8,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Loyale',
                'company_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'Loyale',
                'company_id' => 59,
                'type_id' => 14,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Corrado',
                'company_id' => 66,
                'type_id' => 9,
            ],
            [
                'name' => 'Tercel',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Tercel',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Cabriolet',
                'company_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => '850',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'Fox',
                'company_id' => 66,
                'type_id' => 6,
            ],
            [
                'name' => 'Fox',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => '240',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => '240',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 6,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 5,
            ],
            [
                'name' => '3 Series',
                'company_id' => 10,
                'type_id' => 8,
            ],
            [
                'name' => '80',
                'company_id' => 7,
                'type_id' => 8,
            ],
            [
                'name' => 'Fleetwood',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Fleetwood',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Brougham',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'DeVille',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'DeVille',
                'company_id' => 14,
                'type_id' => 6,
            ],
            [
                'name' => 'Caprice',
                'company_id' => 15,
                'type_id' => 8,
            ],
            [
                'name' => 'Caprice',
                'company_id' => 15,
                'type_id' => 14,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 6,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 8,
            ],
            [
                'name' => 'Century',
                'company_id' => 12,
                'type_id' => 14,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 8,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 6,
            ],
            [
                'name' => 'LeBaron',
                'company_id' => 16,
                'type_id' => 5,
            ],
            [
                'name' => 'Monaco',
                'company_id' => 18,
                'type_id' => 8,
            ],
            [
                'name' => 'Colt',
                'company_id' => 18,
                'type_id' => 9,
            ],
            [
                'name' => 'Tempo',
                'company_id' => 23,
                'type_id' => 8,
            ],
            [
                'name' => 'Tempo',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Sonoma Club Cab',
                'company_id' => 27,
                'type_id' => 7,
            ],
            [
                'name' => 'M',
                'company_id' => 30,
                'type_id' => 6,
            ],
            [
                'name' => 'M',
                'company_id' => 30,
                'type_id' => 5,
            ],
            [
                'name' => 'Excel',
                'company_id' => 29,
                'type_id' => 8,
            ],
            [
                'name' => 'Excel',
                'company_id' => 29,
                'type_id' => 9,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 9,
            ],
            [
                'name' => 'Civic',
                'company_id' => 28,
                'type_id' => 8,
            ],
            [
                'name' => 'Impulse',
                'company_id' => 70,
                'type_id' => 9,
            ],
            [
                'name' => 'Comanche Regular Cab',
                'company_id' => 32,
                'type_id' => 7,
            ],
            [
                'name' => '300 CE',
                'company_id' => 42,
                'type_id' => 6,
            ],
            [
                'name' => '400 SE',
                'company_id' => 42,
                'type_id' => 8,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 9,
            ],
            [
                'name' => 'Mirage',
                'company_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => '300ZX',
                'company_id' => 50,
                'type_id' => 9,
            ],
            [
                'name' => 'Stanza',
                'company_id' => 50,
                'type_id' => 8,
            ],
            [
                'name' => '9000',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '9000',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 8,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 9,
            ],
            [
                'name' => '900',
                'company_id' => 58,
                'type_id' => 5,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 6,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 5,
            ],
            [
                'name' => 'Celica',
                'company_id' => 65,
                'type_id' => 9,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => 'Camry',
                'company_id' => 65,
                'type_id' => 14,
            ],
            [
                'name' => 'Cressida',
                'company_id' => 65,
                'type_id' => 8,
            ],
            [
                'name' => '740',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => '740',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'Fox',
                'company_id' => 66,
                'type_id' => 8,
            ],
            [
                'name' => 'Fox',
                'company_id' => 66,
                'type_id' => 6,
            ],
            [
                'name' => '240',
                'company_id' => 68,
                'type_id' => 14,
            ],
            [
                'name' => '240',
                'company_id' => 68,
                'type_id' => 8,
            ],
            [
                'name' => 'A6 allroad',
                'company_id' => 7,
                'type_id' => 14,
            ],
            [
                'name' => 'S5',
                'company_id' => 7,
                'type_id' => 6,
            ],
            [
                'name' => 'Encore GX',
                'company_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'CT4',
                'company_id' => 14,
                'type_id' => 8,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 5,
            ],
            [
                'name' => 'Bronco Sport',
                'company_id' => 23,
                'type_id' => 1,
            ],
            [
                'name' => 'Transit Connect Cargo Van',
                'company_id' => 23,
                'type_id' => 10,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 6,
            ],
            [
                'name' => 'Mustang',
                'company_id' => 23,
                'type_id' => 5,
            ],
            [
                'name' => 'Corvette',
                'company_id' => 15,
                'type_id' => 6,
            ],
        ];
        foreach ($models as $model) {
            VehicleModel::create($model);
        }
    }
}
