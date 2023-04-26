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
        Schema::create('personeller', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad');
            $table->integer('yas');
            $table->string('mail');
            $table->string('ceptel');
            $table->integer('personelaraci')->default("0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personeller');
    }
};
