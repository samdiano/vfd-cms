<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role');
            $table->string('level');
            $table->string('deadline');
            $table->string('description');
            $table->boolean('active');  
            $table->string('portfolio');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_vacancies');
    }
}
