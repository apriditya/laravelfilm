<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title", 100);
            $table->year("release_year");
            $table->text("plot")->nullable();
            $table->integer("vote")->nullable();
            $table->boolean("watched?");
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
        Schema::dropIfExists('_films');
    }
}
