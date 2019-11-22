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
            'about_quote_side' => '',
            'history' => '',
            'history_quote' => '',
            'history_quote_side' => '',
            'history_text' => '',
            'impact' => '',
            'impact_quote' => '',
            'impact_quote_side' => '',
            'impact_text' => '',
            'career' => '',
            'email1' => 'MCC@Vfdgroup.com',
            'email2' => '',
            'phone' => '+234 (0) 818 998 9898',
            'address' => 'Foresight House, 163/165 Broad Street, Marina, Lagos Island 300251 Lagos.',
            'career_text' => '',
            'career_quote' => '',
            'career_quote_side' => '',
            'portfolio' => '',
            'profile' => '',
            'culture' => '',
            'vision' => '',
            'quote' => '',
            'mission' => '',
            'terms' => '',
            'policy' => '',
            'disclosure' => '',
            'youtube_link' => 'https://www.youtube.com/embed/ig5-vVlPQ_U?controls=0',
        ]);
    }
}
