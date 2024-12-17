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
        Schema::create('ngdctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdSoPN');
            $table->string('ngdMaVTu');
            $table->integer('ngdSlNhap');
            $table->float('ngdDgNhap');
            //primary
            $table->primary(['ngdSoPN','ngdMaVTu']);
            //foreign
            $table->foreign('ngdSoPN')->references('ngdSoPN')->on('ngdnhap');
            $table->foreign('ngdMaVTu')->references('ngdMaVTu')->on('ngdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdctpnhap');
    }
};
