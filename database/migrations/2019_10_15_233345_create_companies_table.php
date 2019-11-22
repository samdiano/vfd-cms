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
            $table->text('about_quote_side');
            $table->text('about_text');
            $table->text('history');
            $table->text('history_quote');
            $table->text('history_quote_side');
            $table->text('history_text');
            $table->text('impact');
            $table->text('impact_quote_side');
            $table->text('impact_quote');
            $table->text('impact_text');
            $table->text('career');
            $table->text('career_quote_side');
            $table->text('career_quote');
            $table->text('career_text');
            $table->text('portfolio');
            $table->text('culture');
            $table->text('vision');
            $table->text('mission');
            $table->string('profile');
            $table->string('quote');
            $table->string('email1');
            $table->string('email2');
            $table->string('address');
            $table->string('phone');
            $table->string('terms');
            $table->string('policy');
            $table->string('disclosure');
            $table->string('youtube_link');
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
