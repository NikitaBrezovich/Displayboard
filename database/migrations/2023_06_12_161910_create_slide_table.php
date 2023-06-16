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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('eventname');
            $table->longText('col_name_1');
            $table->longText('col_1');
            $table->longText('col_name_2')->nullable();
            $table->longText('col_2')->nullable();
            $table->longText('col_name_3')->nullable();
            $table->longText('col_3')->nullable();
            $table->longText('qr')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
