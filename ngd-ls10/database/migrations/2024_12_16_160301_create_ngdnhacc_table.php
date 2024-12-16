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
        Schema::create('ngdnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdMaNCC')->primary;
            $table->string('ngdTenNCC');
            $table->string('ngdDiaChi');
            $table->string('ngdDienThoai');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdnhacc');
    }
};
