<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('titulo', 100);
            $table->mediumText('descriocion');
            $table->decimal('rating', 10, 2);
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('genero_id')->unsigned();
            $table->string('featured_img', 300);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
