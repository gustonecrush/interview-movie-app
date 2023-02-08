<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('poster_path');
            $table->boolean('adult');
            $table->string('overview');
            $table->date('release_date');
            $table->string('original_title');
            $table->string('original_language');
            $table->string('title');
            $table->string('backdrop_path');
            $table->float('popularity');
            $table->integer('vote_count');
            $table->string('video')->nullable();
            $table->float('vote_average');
            $table->foreignId('category_id');
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
        Schema::dropIfExists('movies');
    }
};
