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
            [
                'key' => 'stat.experience',
                'title_en' => 'Years Of Experience',
                'title_jp' => 'Years Of Experience',
                'value_en' => 30,
                'value_jp' => 30
            ],
            [
                'key' => 'stat.student_in_japan',
                'title_en' => 'Our Students in Japan',
                'title_jp' => 'Our Students in Japan',
                'value_en' => '1600+',
                'value_jp' => '1600+'
            ],
            [
                'key' => 'stat.cities',
                'title_en' => 'Cities',
                'title_jp' => 'Cities',
                'value_en' => '25',
                'value_jp' => '25'
            ],
            [
                'key' => 'stat.affilated_college',
                'title_en' => 'Affiliated Colleges',
                'title_jp' => 'Affiliated Colleges',
                'value_en' => '60+',
                'value_jp' => '60+'
            ],
            [
                'key' => 'homeBanner.title',
                'title_en' => 'Home Page Title',
                'title_jp' => 'Home Page Title (JP)',
                'type'=>'json',
                'value_en' => json_encode([
                    'title_en'=>'Study & Work In Japan',
                    'title_jp'=>'日本で学び、働く',
                    'description_en'=>'We provide a Pathway to Japanese Language Excellence and Study Abroad Adventures in Japan!',
                    'description_jp'=>'私たちは、優れた日本語能力と日本での海外留学への道を提供します。',
                    'button_1'=>[
                        'title_en'=>'About Hayabusa',
                        'title_jp'=>'はやぶさについて',
                        'link'=>'/about-us',
                        'target'=>'self'
                    ],
                    'button_2'=>[
                        'title_en'=>'About Hayabusa',
                        'title_jp'=>'はやぶさについて',
                        'link'=>'/about-us',
                        'target'=>'self'
                    ],
                    'button_3'=>[
                        'title_en'=>'About Hayabusa',
                        'title_jp'=>'はやぶさについて',
                        'link'=>'/about-us',
                        'target'=>'self'
                    ],
                    'button_4'=>[
                        'title_en'=>'About Hayabusa',
                        'title_jp'=>'はやぶさについて',
                        'link'=>'/about-us',
                        'target'=>'self'
                    ]
                ]
                ),
                'value_jp' => null
            ],
            
        ];
        foreach ($row_column_data as $data) {
            if (Meta::where('key', $data['key'])->count() == 0) Meta::create($data);
        }
    }
}
