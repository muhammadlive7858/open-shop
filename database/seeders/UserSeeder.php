<?php

namespace Database\Seeders;
use Hash;
use DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // saler
    // driver
    // client
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Muhammad',
                'email' => 'muhammadlive7858@gmail.com',
                'password' => Hash::make('muhammad'),
                'role'=>'saler',
                'country'=>"Uzbekistan",
                'phone'=>"998945967858",
                'job'=>'saler',
                'address'=>'Beruniy 39/5 dokan',
                'market_name'=>'General shop',
                'image'=>asset('images\uploaded-image\1.PNG'),
                'description'=>"Men savzovat va meva sotuvi bilan shug'illanaman,rahmat"
            ],
            [
                'name' => 'Muhammad',
                'email' => 'muhammadtaxer@gmail.com',
                'password' => Hash::make('muhammad'),
                'role'=>'taxer',
                'country'=>"Uzbekistan",
                'phone'=>"998945967858",
                'job'=>'saler',
                'address'=>'Beruniy 39/5 dokan',
                'market_name'=>'General shop',
                'image'=>asset('images\uploaded-image\1.PNG'),
                'description'=>"Men savzovat va meva sotuvi bilan shug'illanaman,rahmat"
            ],
            [
                'name' => 'Muhammad',
                'email' => 'muhammadclient@gmail.com',
                'password' => Hash::make('muhammad'),
                'role'=>'client',
                'country'=>"Uzbekistan",
                'phone'=>"998945967858",
                'job'=>'saler',
                'address'=>'Beruniy 39/5 dokan',
                'market_name'=>'General shop',
                'image'=>asset('images\uploaded-image\1.PNG'),
                'description'=>"Men savzovat va meva sotuvi bilan shug'illanaman,rahmat"
            ],
            [
                'name' => 'Muhammad',
                'email' => 'muhammaddriver@gmail.com',
                'password' => Hash::make('muhammad'),
                'role'=>'driver',
                'country'=>"Uzbekistan",
                'phone'=>"998945967858",
                'job'=>'saler',
                'address'=>'Beruniy 39/5 dokan',
                'market_name'=>'General shop',
                'image'=>asset('images\uploaded-image\1.PNG'),
                'description'=>"Men savzovat va meva sotuvi bilan shug'illanaman,rahmat"
            ]
        ]);
    }
}
