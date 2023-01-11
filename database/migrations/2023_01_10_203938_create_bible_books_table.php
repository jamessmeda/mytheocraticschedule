<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bible_books', function (Blueprint $table) {
            $table->id();

            $table->string('book');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bible_books');
    }
};
