<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();

        $countries = array(
            array('id' => 1, 'name' => 'Nigeria'),
        );

        foreach ($countries as $country){
            $country = Country::create($country);
        }
    }
}
