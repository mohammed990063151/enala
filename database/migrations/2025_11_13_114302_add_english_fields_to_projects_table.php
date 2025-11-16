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
    Schema::table('projects', function (Blueprint $table) {
        $table->string('title_en')->nullable()->after('title');
        $table->string('short_description_en')->nullable()->after('short_description');
        $table->text('description_en')->nullable()->after('description');
        $table->string('location_en')->nullable()->after('location');
    });
}

public function down()
{
    Schema::table('projects', function (Blueprint $table) {
        $table->dropColumn([
            'title_en',
            'short_description_en',
            'description_en',
            'location_en',
        ]);
    });
}

};
