<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('departure_from');
            $table->date('date');
            $table->smallInteger('price');
            $table->string('stay');
            $table->string('hotel',30);
            $table->string('treatment')->nullable();
            $table->tinyInteger('guest_number');
            $table->boolean('disponibility')->default(true);
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
        Schema::dropIfExists('packs');
    }
}
