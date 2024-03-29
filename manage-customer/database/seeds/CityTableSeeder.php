<?php

use App\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $city = new City();
            $city->name = 'Hà Nội';
            $city->save();

            $city = new City();
            $city->name = 'Hồ Chí Minh';
            $city->save();

            $city = new City();
            $city->name = 'Hải Phòng';
            $city->save();

            $city = new City();
            $city->name = 'Hải Dương';
            $city->save();
        }
    }
}
