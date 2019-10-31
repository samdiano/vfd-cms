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
            'about_text_side' => '',
            'history' => '',
            'history_quote' => '',
            'history_quote_side' => '',
            'history_text' => '',
            'impact' => '',
            'impact_quote' => '',
            'impact_quote_side' => '',
            'impact_text' => '',
            'career' => '',
            'career_text' => '',
            'career_quote' => '',
            'career_quote_side' => '',
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
