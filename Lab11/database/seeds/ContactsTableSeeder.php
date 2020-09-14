<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['first'=>'Harry', 'last'=>'Potter', 'phone'=>'021 678 987'],
            ['first'=>'Ron', 'last'=>'Weasley', 'phone'=>'021 678 333'],
            ['first'=>'Hermione', 'last'=>'Granger', 'phone'=>'021 678 111'],
            ['first'=>'albus', 'last'=>'dumbledore', 'phone'=>'021 678 222'],
            ['first'=>'dolores', 'last'=>'umbridge', 'phone'=>'021 678 454'],
            ['first'=>'rubeus', 'last'=>'hagrid', 'phone'=>'021 678 666']
        ]);
    }
}
