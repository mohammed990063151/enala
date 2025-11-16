<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about', function (Blueprint $table) {

            // عناوين EN
            $table->string('title_en')->nullable()->after('title');

            // وصف EN
            $table->longText('description_en')->nullable()->after('description');

            // نقاط EN
            $table->string('point1_en')->nullable()->after('point1');
            $table->string('point2_en')->nullable()->after('point2');
            $table->string('point3_en')->nullable()->after('point3');
            $table->string('point4_en')->nullable()->after('point4');
        });
    }

    public function down(): void
    {
        Schema::table('about', function (Blueprint $table) {
            $table->dropColumn([
                'title_en',
                'description_en',
                'point1_en',
                'point2_en',
                'point3_en',
                'point4_en'
            ]);
        });
    }
};
