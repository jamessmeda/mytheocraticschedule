<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //add soft deletes to users table
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('account_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};