<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ngdvattu', function (Blueprint $table) {
            // $table->id();
            $table->string('ngdMaVTu')->primary();
            $table->string('ngdTenVtu')->unique();
            $table->string('ngdDvTinh');
            $table->float('ngdPhanTram');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdvattu');
    }
};
