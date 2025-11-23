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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();

        $table->string('name');
        $table->string('email')->nullable();
        $table->string('phone')->nullable();

        $table->decimal('amount', 10, 2)->default(0);

        // أعمدة الدفع
        $table->string('payment_id')->nullable();
        $table->string('payment_status')->default('pending');
        $table->json('payment_data')->nullable();

        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('bookings');
}

};
