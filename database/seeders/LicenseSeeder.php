<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licenses')->insert([
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => '',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '受験する',
            ],
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => 'アドバンス',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '受験しない',
            ],
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => '1級',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '考え中',
            ],
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => '1級',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '',
            ],
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => 'エキスパート',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '',
            ],
            [
                'genre' => '法律',
                'name' => 'ビジネス実務法務検定',
                'grade' => '1級',
                'exam_date' => '2022/12/9',
                'fee' => 7500,
                'status' => '受験する',
            ]
        ]);
    }
}
