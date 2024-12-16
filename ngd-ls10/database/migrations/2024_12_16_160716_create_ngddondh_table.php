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
        Schema::create('ngddondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdSoDH')->primary;
            $table->date('ngdNgayDH');
            $table->string('ngdMaNCC');
            $table->foreign('ngdMaNCC')->references('ngdMaNCC')->on('ngdnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngddondh');
    }
};
