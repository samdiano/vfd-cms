<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
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
