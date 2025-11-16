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
    Schema::table('services', function (Blueprint $table) {

        // عنوان ووصف إنجليزي
        $table->string('title_en')->nullable()->after('title');
        $table->text('description_en')->nullable()->after('description');

        // كابشنات إنجليزية
        $table->string('caption1_en')->nullable()->after('caption1');
        $table->string('caption2_en')->nullable()->after('caption2');
        $table->string('caption3_en')->nullable()->after('caption3');
        $table->string('caption4_en')->nullable()->after('caption4');
        $table->string('caption5_en')->nullable()->after('caption5');
        $table->string('caption6_en')->nullable()->after('caption6');
    });
}

public function down()
{
    Schema::table('services', function (Blueprint $table) {
        $table->dropColumn([
            'title_en', 'description_en',
            'caption1_en','caption2_en','caption3_en',
            'caption4_en','caption5_en','caption6_en'
        ]);
    });
}

};
