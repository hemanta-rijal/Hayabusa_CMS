<?php

namespace Database\Seeders;

use App\Models\Meta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row_column_data = [
            [   'key'=>'stat.experience',
                'title_en' => 'Years Of Experience',
                'title_jp'=>'Years Of Experience',
                'value_en' => 30,
                'value_jp' => 30
            ],
            [
                'key'=>'stat.student_in_japan',
                'title_en' => 'Our Students in Japan',
                'title_jp'=>'Our Students in Japan',
                'value_en' => '1600+',
                'value_jp' => '1600+'
            ],
            [   'key'=>'stat.cities',
                'title_en' => 'Cities',
                'title_jp'=>'Cities',
                'value_en' => '25',
                'value_jp' => '25'
            ],
            [   'key'=>'stat.affilated_college',
                'title_en' => 'Affiliated Colleges',
                'title_jp'=>'Affiliated Colleges',
                'value_en' => '60+',
                'value_jp' => '60+'
            ]
        ];

        foreach($row_column_data as $data){
            Meta::create($data);
        }
    }
}
