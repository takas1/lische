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
                'genre_id' => 1,
                'user_id' => 1,
                'name' => 'ビジネス実務法務検定',
                'grade_id' => 1,
                'exam_date' => '2022/12/4',
                'fee' => 12100,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => 'ビジネス実務法務検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 7700,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '社労士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 15000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '行政書士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 10400,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '中小企業診断士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 14500,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '予備試験',
                'grade_id' => 6,
                'exam_date' => '2022/7/16',
                'fee' => 17500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '司法試験',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 28000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '知的財産管理技能検定',
                'grade_id' => 1,
                'exam_date' => '2023/3/12',
                'fee' => 8900,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '知的財産管理技能検定',
                'grade_id' => 2,
                'exam_date' => '2023/3/12',
                'fee' => 8200,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '司法書士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 8000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '弁理士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 12000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '宅建',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '土地家屋調査士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 8300,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '不動産鑑定士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 13000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '敷金診断士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7800,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 1,
                'user_id' => 1,
                'name' => '投資不動産取引士',
                'grade_id' => 6,
                'exam_date' => '2023/1/17',
                'fee' => 24200,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => '応用情報技術者',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'ITストラテジスト',
                'grade_id' => 6,
                'exam_date' => '2023/4/16',
                'fee' => 7500,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'プロジェクトマネージャ',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'データベーススペシャリスト',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'ネットワークスペシャリスト',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => '情報セキュリティマネジメント',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'システム監査技術者',
                'grade_id' => 6,
                'exam_date' => '2023/10/15',
                'fee' => 7500,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'システムアーキテクト',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'エンベデッドシステム',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 7500,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'ITコーディネータ',
                'grade_id' => 6,
                'exam_date' => '2023/2/2',
                'fee' => 19800,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'DXビジネス検定',
                'grade_id' => 5,
                'exam_date' => null,
                'fee' => 6600,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'AI実装検定',
                'grade_id' => 5,
                'exam_date' => null,
                'fee' => 33000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => '色彩検定',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 15000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => '色彩検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 10000,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'カラーコーディネーター検定',
                'grade_id' => 3,
                'exam_date' => null,
                'fee' => 7700,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'インテリアコーディネーター',
                'grade_id' => 5,
                'exam_date' => null,
                'fee' => 14850,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'プロダクトデザイン検定',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 11000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 2,
                'user_id' => 1,
                'name' => 'プロダクトデザイン検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 11000,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'ビジネス数学検定',
                'grade_id' => 1,
                'exam_date' => '2023/2/1',
                'fee' => 8800,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'ビジネス数学検定',
                'grade_id' => 2,
                'exam_date' => '2023/2/1',
                'fee' => 6600,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'ビジネス会計検定',
                'grade_id' => 1,
                'exam_date' => '2023/3/12',
                'fee' => 11550,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'ビジネス会計検定',
                'grade_id' => 2,
                'exam_date' => '2023/3/12',
                'fee' => 7480,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '日商簿記検定',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 7850,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '日商簿記検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 4720,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'FP技能検定',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 8900,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'FP技能検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 5700,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '公認会計士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 19500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '税理士',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 4000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => 'BATIC',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 5500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '貸金業務取扱主任者',
                'grade_id' => 6,
                'exam_date' => null,
                'fee' => 8500,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '電子会計実務検定',
                'grade_id' => 1,
                'exam_date' => '2023/2/19',
                'fee' => 10480,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 3,
                'user_id' => 1,
                'name' => '電子会計実務検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 7330,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => '英検',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 11800,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => '英検',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 9000,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => 'TOEIC',
                'grade_id' => 6,
                'exam_date' => '2023/3/19',
                'fee' => 7810,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => '中国語検定',
                'grade_id' => 1,
                'exam_date' => '2023/3/26',
                'fee' => 11800,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => '中国語検定',
                'grade_id' => 2,
                'exam_date' => '2023/3/26',
                'fee' => 7800,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 4,
                'user_id' => 1,
                'name' => '国連英検',
                'grade_id' => 5,
                'exam_date' => null,
                'fee' => 12500,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 5,
                'user_id' => 1,
                'name' => '小型船舶操縦士',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 28950,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 5,
                'user_id' => 1,
                'name' => '小型船舶操縦士',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 25900,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => '数検',
                'grade_id' => 1,
                'exam_date' => '2023/7/23',
                'fee' => 8500,
                'status_id' => 1,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => '数検',
                'grade_id' => 2,
                'exam_date' => '2023/7/23',
                'fee' => 6500,
                'status_id' => 3,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => '統計検定',
                'grade_id' => 1,
                'exam_date' => null,
                'fee' => 10000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => '統計検定',
                'grade_id' => 2,
                'exam_date' => null,
                'fee' => 5000,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => '電気通信主任技術者',
                'grade_id' => 6,
                'exam_date' => '2023/1/19',
                'fee' => 18700,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => 'ドローン検定',
                'grade_id' => 1,
                'exam_date' => '2023/3/21',
                'fee' => 18800,
                'status_id' => 2,
                'memo' => ''
            ],
            [
                'genre_id' => 6,
                'user_id' => 1,
                'name' => 'ドローン検定',
                'grade_id' => 2,
                'exam_date' => '2023/3/21',
                'fee' => 12900,
                'status_id' => 2,
                'memo' => ''
            ],
        ]);
    }
}
