<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => '法律・経営'],
            ['name' => 'IT・クリエイティブ'],
            ['name' => '会計・事務'],
            ['name' => '語学'],
            ['name' => '車両・船舶'],
            ['name' => 'その他'],
        ]);
    }
}
