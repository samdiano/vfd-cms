<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'about' => '',
            'about_quote' => '',
            'about_text' => '',
            'history' => '',
            'history_quote' => '',
            'history_text' => '',
            'impact' => '',
            'impact_quote' => '',
            'impact_text' => '',
            'career' => '',
            'portfolio' => '',
            'profile' => '',
            'culture' => '',
            'vision' => '',
            'quote' => '',
            'mission' => '',
            'youtube_link' => 'https://www.youtube.com/embed/ig5-vVlPQ_U?controls=0',
        ]);
    }
}
