<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            ['name' => 'Acura', 'image' => 'assets/images/companies/Acura.png'],
            ['name' => 'Albarth', 'image' => 'assets/images/companies/Albarth.png'],
            ['name' => 'Alfa Romeo', 'image' => 'assets/images/companies/alfaromeo.png'],
            ['name' => 'Alpina', 'image' => 'assets/images/companies/Alpina.png'],
            ['name' => 'AMG', 'image' => 'assets/images/companies/AMG.png'],
            ['name' => 'Aston Martin', 'image' => 'assets/images/companies/aston_martin.png'],
            ['name' => 'Audi', 'image' => 'assets/images/companies/Audi.png'],
            ['name' => 'Bentley', 'image' => 'assets/images/companies/bently.png'],
            ['name' => 'Bertone', 'image' => 'assets/images/companies/bertone.png'],
            ['name' => 'BMW', 'image' => 'assets/images/companies/BMW.png'],
            ['name' => 'Bugatti', 'image' => 'assets/images/companies/BUgatti.png'],
            ['name' => 'Buick', 'image' => 'assets/images/companies/buick.png'],
            ['name' => 'BYD', 'image' => 'assets/images/companies/BYD.png'],
            ['name' => 'Cadillac', 'image' => 'assets/images/companies/CADilac.png'],
            ['name' => 'Chevrolet', 'image' => 'assets/images/companies/Chevrolet.png'],
            ['name' => 'Chrysler', 'image' => 'assets/images/companies/chrysler.png'],
            ['name' => 'Corvette', 'image' => 'assets/images/companies/corvette.png'],
            ['name' => 'Dodge', 'image' => 'assets/images/companies/Dodge.png'],
            ['name' => 'Ducati', 'image' => 'assets/images/companies/ducati.png'],
            ['name' => 'FAW', 'image' => 'assets/images/companies/FAW.png'],
            ['name' => 'Ferrari', 'image' => 'assets/images/companies/Ferrari.png'],
            ['name' => 'Fiat', 'image' => 'assets/images/companies/fiat.png'],
            ['name' => 'Ford', 'image' => 'assets/images/companies/ford.png'],
            ['name' => "GAC Motors", "image" => "assets/images/companies/gac_motors.png"],
            ['name' => "Genesis", "image" => "assets/images/companies/genesis.png"],
            ['name' => "Gillet", "image" => "assets/images/companies/gillet.png"],
            ['name' => "GMC", "image" => "assets/images/companies/GMC.png"],
            ['name' => "Honda", "image" => "assets/images/companies/Honda.png"],
            ['name' => "Hyundai", "image" => "assets/images/companies/Hyundai.png"],
            ['name' => "Infiniti", "image" => "assets/images/companies/infiniti.png"],
            ['name' => "Jaguar", "image" => "assets/images/companies/Jaguar.png"],
            ['name' => "Jeep", "image" => "assets/images/companies/jeep.png"],
            ['name' => "Kia", "image" => "assets/images/companies/kia.png"],
            ['name' => "Koenigsegg", "image" => "assets/images/companies/koenigsegg.png"],
            ['name' => "KTM", "image" => "assets/images/companies/KTM.png"],
            ['name' => "Lamborghini", "image" => "assets/images/companies/lamborghini.png"],
            ['name' => "Land Rover", "image" => 'assets/images/companies/land_rover.png'],
            ['name' => "Lancia",  "image" =>  "assets/images/companies/lanica.png"],
            ["name" =>  "Lexus",  "image" =>  "assets/images/companies/lexus.png"],
            ["name" =>  "Lotus",  "image" =>  "assets/images/companies/lotus.png"],
            ["name" =>  "Luxgen",  "image" =>  "assets/images/companies/luxgen.png"],
            ["name" =>  "Marcadez Benz",  "image" =>  "assets/images/companies/marcadezbenz.png"],
            ["name" =>  "Maserati",  "image" =>  "assets/images/companies/maserati.png"],
            ["name" =>  "Mazda",  "image" =>  "assets/images/companies/mazda.png"],
            ["name" =>  "McLaren",  "image" =>  "assets/images/companies/mclaren.png"],
            ["name" =>  "MG",  "image" =>  "assets/images/companies/MG.png"],
            ["name" =>  "Mini",  "image" =>  "assets/images/companies/mini.png"],
            ["name" =>  "Mitsubishi",  "image" =>  "assets/images/companies/mitsubishi.png"],
            ["name" =>  "Mustang",  "image" =>  "assets/images/companies/mustang.png"],
            ["name" =>  "Nissan",  "image" =>  "assets/images/companies/nissan.png"],
            ["name" =>  "Opel",  "image" =>  "assets/images/companies/opel.png"],
            ["name" => "Pontiac", "image" => "assets/images/companies/pontiac.png"],
            ["name" => "Porsche", "image" => "assets/images/companies/porshe.png"],
            ["name" => "Renault", "image" => "assets/images/companies/resault.png"],
            ["name" => "Qoros", "image" => "assets/images/companies/qoros.png"],
            ["name" => "Roewe", "image" => "assets/images/companies/roewe.png"],
            ["name" => "Rolls-Royce", "image" => "assets/images/companies/rolls_royce.png"],
            ["name" => "Saab", "image" => "assets/images/companies/saab.png"],
            ["name" => "Subaru", "image" => "assets/images/companies/saburu.png"],
            ["name" => "SAIC", "image" => "assets/images/companies/saic.png"],
            ["name" => "Seat", "image" => "assets/images/companies/seat.png"],
            ["name" => "Suzuki", "image" => "assets/images/companies/suzuki.png"],
            ["name" => "Tata", "image" => "assets/images/companies/tata.png"],
            ["name" => "Tesla", "image" => "assets/images/companies/tesla.png"],
            ["name" => "Toyota", "image" => "assets/images/companies/toyota.png"],
            ["name" => "Volkswagen", "image" => "assets/images/companies/volkswagen.png"],
            ["name" => "Wuling", "image" => "assets/images/companies/wuling.png"],
            ["name" => "Volvo", "image" => "assets/images/companies/volvo.png"],
            ["name" => "Hummer", "image" => "assets/images/companies/hummer.jpg"],
            ["name" => "Isuzu", "image" => "assets/images/companies/isuzu.png"],

        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
