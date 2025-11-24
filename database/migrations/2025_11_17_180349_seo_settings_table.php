<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('seo_settings', function (Blueprint $table) {
        $table->id();
        $table->string('page')->unique();        // اسم الصفحة مثل home, services, contact
        $table->string('title')->nullable();
        $table->text('description')->nullable();
        $table->text('keywords')->nullable();
        $table->string('canonical')->nullable();
        $table->string('og_image')->nullable();  // صورة OG
        $table->timestamps();
    });
}


public function down()
{
    Schema::dropIfExists('bookings');
}

};
