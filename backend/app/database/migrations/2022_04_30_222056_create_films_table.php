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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cinema_id');
            $table->string('name');
            $table->string('short_desc');
            $table->text('full_desc');
            $table->string('poster')->nullable();
            $table->string('trailer');
            $table->string('kinopoisk_link');
            $table->timestamps();

            $table->foreign('cinema_id', 'films_cinema_fk')->on('cinemas')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
