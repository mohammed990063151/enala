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
    Schema::table('counters', function (Blueprint $table) {
        $table->string('title1_en')->nullable()->after('title1');
        $table->string('title2_en')->nullable()->after('title2');
        $table->string('title3_en')->nullable()->after('title3');
        $table->string('title4_en')->nullable()->after('title4');
    });
}

public function down()
{
    Schema::table('counters', function (Blueprint $table) {
        $table->dropColumn([
            'title1_en', 'title2_en', 'title3_en', 'title4_en'
        ]);
    });
}

};
