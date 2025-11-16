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
    Schema::table('pagservices', function (Blueprint $table) {
        $table->string('title_en')->nullable();
        $table->text('description_en')->nullable();
        $table->text('short_description_en')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pagservices', function (Blueprint $table) {
            //
        });
    }
};
