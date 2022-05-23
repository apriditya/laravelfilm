<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_films', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after("id")->nullable();
            $table->foreign("category_id")->references("id")->on("_categories");
        });
    }

    public function down()
    {
        Schema::table('_films', function (Blueprint $table) {
          $table->dropColumn("category_id");
          $table->dropForeign("_films_category_id_foreign");
        });
    }
}
