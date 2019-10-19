<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('about');
            $table->text('about_quote');
            $table->text('about_text');
            $table->text('history');
            $table->text('history_quote');
            $table->text('history_text');
            $table->text('impact');
            $table->text('impact_quote');
            $table->text('impact_text');
            $table->text('career');
            $table->text('portfolio');
            $table->text('culture');
            $table->text('vision');
            $table->text('mission');
            $table->string('profile');
            $table->string('quote');
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
        Schema::dropIfExists('companies');
    }
}
