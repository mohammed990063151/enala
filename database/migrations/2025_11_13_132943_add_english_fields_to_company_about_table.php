<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('company_about', function (Blueprint $table) {

            // 🔹 إضافة الحقول الإنجليزية بدون التأثير على القديم
            $table->string('title_en')->nullable()->after('title');
            $table->string('subtitle_en')->nullable()->after('subtitle');

            $table->text('intro_en')->nullable()->after('intro');

            $table->string('point1_en')->nullable()->after('point1');
            $table->string('point2_en')->nullable()->after('point2');
            $table->string('point3_en')->nullable()->after('point3');
            $table->string('point4_en')->nullable()->after('point4');

        });
    }

    public function down(): void
    {
        Schema::table('company_about', function (Blueprint $table) {

            // 🔹 حذف الحقول الإنجليزية فقط عند التراجع
            $table->dropColumn([
                'title_en',
                'subtitle_en',
                'intro_en',
                'point1_en',
                'point2_en',
                'point3_en',
                'point4_en',
            ]);
        });
    }
};
