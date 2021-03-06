<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('titulo', 100);
          $table->mediumText('description');
          $table->decimal('rating', 10, 2);
          $table->string('featured_img', 300);
          $table->integer('quantity'); //Cantidad de peliculas en el carrito.
          $table->bigInteger('user_id')->unsigned();
          $table->smallInteger('status')->default(0);
          $table->bigInteger('cart_number'); //Número de ticket.
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')
          ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
