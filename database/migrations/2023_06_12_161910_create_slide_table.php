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
            $table->string('eventname')->nullable();
            $table->longText('col_name_1')->nullable();
            $table->longText('col_1')->nullable();
            $table->longText('col_name_2')->nullable();
            $table->longText('col_2')->nullable();
            $table->longText('col_name_3')->nullable();
            $table->longText('col_3')->nullable();
            $table->longText('qr')->nullable();
            $table->string('image_path')->nullable();
            $table->string('layout');
            $table->string('client_name')->nullable();
            $table->string('type')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->longText('text')->nullable();
            $table->string('place')->nullable();
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
