<?php

use Illuminate\Database\Seeder;
use App\Customers;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $customer = new Customers();
            $customer->avatar='avatar/'.'qqq.jpg';
            $customer->name = 'Duong' . str_random(4);
            $customer->address = 'Ha Noi' . mt_rand(1, 10);
            $customer->email = 'hahah' . str_random(4) . '@gmail';
            $customer->save();
        }
    }
}
