<?php

use Illuminate\Database\Seeder;
use App\Models\Yard;
class YardSeeder extends Seeder
{

      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
          // array of specific hotels to populate database
          $yards = [
              [
                  'name' => 'Turners',
                  'location' => 'Southy',
                  'description' => 'New Fords',
                  'image' => 'https://placeimg.com/640/480/arch'
              ],
              [
                  'name' => 'ABC Cars',
                  'location' => 'NEV',
                  'description' => 'Used Mitsubishi',
                  'image' => 'https://placeimg.com/640/480/arch'
              ],
              [
                  'name' => 'Turfus Grand',
                  'location' => 'Mornington',
                  'description' => 'New and second hand Toyota',
                  'image' => 'https://placeimg.com/640/480/arch'
              ]
          ];

          foreach ($yards as $yard) {
              Yard::create(array(
                  'name' => $yard['name'],
                  'location' => $yard['location'],
                  'description' => $yard['description'],
                  'image' => $yard['image']
              ));
          }
      }
    }
