<?php

// database/seeders/ServiceSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pagservice;

class PagserviceSeeder extends Seeder
{
    public function run(): void
    {
       Pagservice::insert([
    ['title'=>'مشاتل وأشجار','slug'=>'nursery-trees','icon'=>'fa fa-leaf','description'=>'توفير أشجار وزهور عالية الجودة','sort_order'=>1],
    ['title'=>'بذور متنوعة','slug'=>'seeds','icon'=>'fa fa-seedling','description'=>'بذور زهور وخضار ونباتات برية','sort_order'=>2],
    ['title'=>'مضخات غطاسات','slug'=>'pumps','icon'=>'fa fa-tint','description'=>'حلول الري وتشغيل مضخات الآبار','sort_order'=>3],
    ['title'=>'مكافحة آفات','slug'=>'pest-control','icon'=>'fa fa-bug','description'=>'خدمات مكافحة الصحة العامة','sort_order'=>4],
    ['title'=>'تنسيق حدائق','slug'=>'landscape','icon'=>'fa fa-tree','description'=>'تصميم وتنفيذ حدائق ممتدة','sort_order'=>5],
    ['title'=>'مستلزمات زراعية','slug'=>'agri-tools','icon'=>'fa fa-shopping-bag','description'=>'أدوات وأسمدة ومغذيات زراعية','sort_order'=>6],
]);

    }
}
