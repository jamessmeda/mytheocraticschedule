<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();

            $table->string('action-type');
            $table->foreignId('thing-id');
            $table->date('action-date');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('actions');
    }
};
