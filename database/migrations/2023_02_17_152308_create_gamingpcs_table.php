<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamingpcs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('case_id')->constrained('cases');
            $table->foreignId('motherboard_id')->constrained('motherboards');
            $table->foreignId('processor_id')->constrained('processors');
            $table->foreignId('ram_id')->constrained('rams');
            $table->foreignId('graphicscard_id')->constrained('graphicscards');
            $table->foreignId('ssd_id')->constrained('ssds');
            $table->foreignId('hdd_id')->constrained('hdds');
            $table->foreignId('cooler_id')->constrained('coolers');
            $table->foreignId('powersupply_id')->constrained('powersupplies');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gamingpcs');
    }
};
