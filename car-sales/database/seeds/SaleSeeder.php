<?php

use Illuminate\Database\Seeder;
use App\Models\Sale;
class SaleSeeder extends Seeder
{
  public function run()
      {
          // array of specific reservations to populate database
          $sales = [
              [
                  'user_id' => '1',
                  'car_id' => 1,
                  'purchase_date' => '2020-05-18',
                  'purchase_price' => 908.00
              ],
              [
                  'user_id' => '1',
                  'car_id' => 2,
                  'purchase_date' => '2020-05-18',
                  'purchase_price' => 908.00
              ],
              [
                  'user_id' => '1',
                  'car_id' => 3,
                  'purchase_date' => '2020-05-18',
                  'purchase_price' => 908.00
              ],
              [
                  'user_id' => '1',
                  'car_id' => 4,
                  'purchase_date' => '2020-05-18',
                  'purchase_price' => 908.00
              ],
              [
                  'user_id' => '1',
                  'car_id' => 2,
                  'purchase_date' => '2020-05-18',
                  'purchase_price' => 908.00
              ]
          ];

          foreach ($sales as $sale) {
              Sale::create(array(
                  'user_id' => $sale['user_id'],
                  'car_id' => $sale['car_id'],
  'purchase_date' => $sale['purchase_date'],
    'purchase_price' => $sale['purchase_price']
              ));
          }
      }
}
