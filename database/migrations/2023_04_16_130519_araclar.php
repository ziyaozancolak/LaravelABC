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
        Schema::create('araclar', function (Blueprint $table) {
            $table->id();
            $table->string('plaka');
            $table->string('marka');
            $table->string('model');
            $table->integer('modelyili');
            $table->string('yakittipi');
            $table->integer('km');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('araclar');
    }
};
