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
        DB::table('banners')->insert([
            'about' => 'assets/img/banner_1.jpg',
            'career' => 'assets/img/banner_5.jpg',
            'contact' => 'assets/img/banner_1.jpg',
            'investor' => 'assets/img/banner_3.jpg',
            'media' => 'assets/img/banner_1.jpg',
            'portfolio' => 'assets/img/banner_2.jpg',
        ]);
    }
}
