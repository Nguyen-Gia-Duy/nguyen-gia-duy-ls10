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
        Schema::create('ngdctpxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdSoPX');
            $table->string('ngdMaVTu');
            $table->integer('ngdSlXuat');
            $table->float('ngdDgXuat');
            //primary
            $table->primary(['ngdSoPX','ngdMaVTu']);
            //foreign
            $table->foreign('ngdSoPX')->references('ngdSoPX')->on('ngdpxuat');
            $table->foreign('ngdMaVTu')->references('ngdMaVTu')->on('ngdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdctpxuat');
    }
};
