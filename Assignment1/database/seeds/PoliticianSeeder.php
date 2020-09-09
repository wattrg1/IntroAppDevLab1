<?php

use Illuminate\Database\Seeder;
use App\Models\Politician;

class PoliticianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $politicians = [
            [
                'party_id' => 1,
                'name' => 'David Seymour',
                'gender' => 'Male',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/David_Seymour_%28cropped%29.jpg/220px-David_Seymour_%28cropped%29.jpg'
            ],
            [
                'party_id' => 1,
                'name' => 'David Seymour',
                'gender' => 'Male',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/David_Seymour_%28cropped%29.jpg/220px-David_Seymour_%28cropped%29.jpg'
            ],
            [
                'party_id' => 2,
                'name' => 'Judith Collins',
                'gender' => 'Female',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Judith_Collins_MP.jpg/220px-Judith_Collins_MP.jpg'
            ],
            [
                'party_id' => 2,
                'name' => 'Judith Collins',
                'gender' => 'Female',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Judith_Collins_MP.jpg/220px-Judith_Collins_MP.jpg'
            ],
            [
                'party_id' => 3,
                'name' => 'Jacinda Ardern',
                'gender' => 'Female',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Jacinda_Ardern%2C_2018.jpg/220px-Jacinda_Ardern%2C_2018.jpg'
            ],
            [
                'party_id' => 3,
                'name' => 'Jacinda Ardern',
                'gender' => 'Female',
                'rank' => '1',
                'electorate' => 'Epson',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Jacinda_Ardern%2C_2018.jpg/220px-Jacinda_Ardern%2C_2018.jpg'
            ]
        ];

        foreach ($politicians as $politician) {
            Politician::create(array(
                'party_id' => $politician['party_id'],
                'name' => $politician['name'],
                'gender' => $politician['gender'],
                'rank' => $politician['rank'],
                'electorate' => $politician['electorate'],
                'image' => $politician['image']
            ));
        }
    }
}