<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(YardSeeder::class);
$this->call(CarSeeder::class);
$this->call(SaleSeeder::class);
    }
}
