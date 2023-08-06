<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('things', function (Blueprint $table) {
//add categories to things table
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::table('things', function (Blueprint $table) {
            //
        });
    }
};
