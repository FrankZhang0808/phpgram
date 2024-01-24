<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PracticeTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('practices')->insert([
            ['employer'=>'zhangsan','type'=>'business','position'=>'business division'],
            ['employer'=>'zhanger','type'=>'accountant','position'=>'tax collector'],
            ['employer'=>'wangergou','type'=>'information','position'=>'information analyst'],
            ['employer'=>'lili','type'=>'business','position'=>'Commercial Division I'],
        ]);
    }
}
