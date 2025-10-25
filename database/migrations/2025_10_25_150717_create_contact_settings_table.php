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
       Schema::create('contact_settings', function (Blueprint $table) {
    $table->id();
    $table->string('title')->nullable();
    $table->string('subtitle')->nullable();
    $table->string('email')->nullable();
    $table->string('phone')->nullable();
    $table->string('whatsapp')->nullable();
    $table->string('address')->nullable();
    $table->text('map_embed')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
