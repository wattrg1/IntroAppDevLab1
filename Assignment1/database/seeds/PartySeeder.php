<?php

use Illuminate\Database\Seeder;
use App\Models\Party;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $parties = [
            [
                'name' => 'Act',
                'image' => 'https://d3n8a8pro7vhmx.cloudfront.net/themes/5d0578fc4764e89283b25861/attachments/original/1571192802/output-onlinepngtools.png?1571192802'
            ],
            [
                'name' => 'National',
                'image' => 'https://d3n8a8pro7vhmx.cloudfront.net/themes/5e9eaa624445ea14a299dd0f/attachments/original/1598399918/NationalLogoWhite.png?1598399918'
            ],
            [
                'name' => 'Labour',
                'image' => 'https://d3n8a8pro7vhmx.cloudfront.net/themes/55cd34742213937338000001/attachments/original/1557720973/nzlp_logo_2019.png?1557720973'
            ]
        ];

        foreach ($parties as $party) {
            Party::create(array(
                'name' => $party['name'],
                'image' => $party['image']
            ));
        }
    }
}