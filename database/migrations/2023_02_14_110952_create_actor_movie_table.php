<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('actor_id');
            $table->foreign('actor_id')
            ->references('id')
            ->on('actors');

            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')
            ->references('id')
            ->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_movie');
    }
};
