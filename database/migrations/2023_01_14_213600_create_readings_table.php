<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();

            $table->string('book_read');
            $table->foreignId('action_id');
            $table->dateTime('book_read_date_time');
            $table->integer('book_chapter');
            $table->integer('book_verse');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('readings');
    }
};
