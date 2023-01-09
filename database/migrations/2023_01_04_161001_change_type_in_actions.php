<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->dateTime('action_date')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('actions', function (Blueprint $table) {
            //
        });
    }
};
