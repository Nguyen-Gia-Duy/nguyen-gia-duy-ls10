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
        Schema::create('ngdnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdSoPN')->primary();
            $table->date('ngdNgayNhap');
            $table->string('ngdSoDH');
            //foreign
            $table->foreign('ngdSoDH')->references('ngdSoDH')->on('ngddondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdnhap');
    }
};
