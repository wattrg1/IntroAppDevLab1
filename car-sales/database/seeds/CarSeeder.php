<?php

use Illuminate\Database\Seeder;
use App\Models\Car;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cars = [
                [
                    'yard_id' => 1,
                    'type' => 'Hatch',
                    'description' => 'white',
                    'price' => 980.00,
                    'kms' => 1000,
                    'year' => 1995,
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'yard_id' => 1,
                    'type' => 'Sedan',
                    'description' => 'black',
                    'price' => 200.00,
                    'kms' => 1000,
                    'year' => 1995,
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'yard_id' => 2,
                    'type' => 'Truck',
                    'description' => 'silver',
                    'price' => 350.00,
                    'kms' => 1000,
                    'year' => 1995,
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'yard_id' => 2,
                    'type' => 'Utility',
                    'description' => 'red',
                    'price' => 87.99,
                    'kms' => 1000,
                    'year' => 1995,
                    'image' => 'https://placeimg.com/640/480/arch'
                ],
                [
                    'yard_id' => 3,
                    'type' => 'RV',
                    'description' => 'blue',
                    'price' => 399.00,
                    'kms' => 1000,
                    'year' => 1995,
                    'image' => 'https://placeimg.com/640/480/arch'
                ]
            ];

            foreach ($cars as $car) {
                Car::create(array(
                    'yard_id' => $car['yard_id'],
                    'type' => $car['type'],
                    'description' => $car['description'],
                    'price' => $car['price'],
                    'kms' => $car['kms'],
                    'year' => $car['year'],
                    'image' => $car['image']
                ));
            }
        }
    }
