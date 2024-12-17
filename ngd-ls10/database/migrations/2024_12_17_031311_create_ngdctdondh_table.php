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
        Schema::create('ngdctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ngdSoDH');
            $table->string('ngdMaVtu');
            $table->integer('ngdSlDat');
            //Tao khoa chinh tren 2 cot sodh mavtu
            $table->primary(['ngdSoDH','ngdMaVtu']);
            //Khoa ngoai
            $table ->foreign('ngdSoDH')->references('ngdSoDH')->on('ngddondh');
            $table ->foreign('ngdMaVtu')->references('ngdMaVtu')->on('ngdvattu');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngdctdondh');
    }
};
