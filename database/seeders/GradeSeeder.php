<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
           [ 'level' => '1級'],
           [ 'level' => '2級'],
           [ 'level' => 'アドバンス'],
           [ 'level' => 'エキスパート'],
           [ 'level' => 'その他'],
           [ 'level' => 'なし'],
        ]);
    }
}
