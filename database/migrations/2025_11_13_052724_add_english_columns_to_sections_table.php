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
    Schema::table('sections', function (Blueprint $table) {
        $table->string('title_en')->nullable()->after('title');
        $table->text('description_en')->nullable()->after('description');
        $table->string('button_text_en')->nullable()->after('button_text');
    });
}

public function down()
{
    Schema::table('sections', function (Blueprint $table) {
        $table->dropColumn(['title_en', 'description_en', 'button_text_en']);
    });
}

};
