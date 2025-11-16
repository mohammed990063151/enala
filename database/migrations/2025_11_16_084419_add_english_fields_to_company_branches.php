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
    Schema::table('company_branches', function (Blueprint $table) {
        $table->string('name_en')->nullable();
        $table->string('city_en')->nullable();
        $table->string('address_en')->nullable();
    });
}

public function down()
{
    Schema::table('company_branches', function (Blueprint $table) {
        $table->dropColumn(['name_en','city_en','address_en']);
    });
}

};
