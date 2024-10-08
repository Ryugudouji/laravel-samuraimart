<?php

namespace Database\Seeders;

use App\Models\MajorCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '本', 'コンピュータ', 'ディスプレイ'
        ];

        foreach ($major_category_names as $major_category_name) {
            MajorCategory::create([
                'name' => $major_category_name,
                'description' => $major_category_name,
            ]);
        }
    }
}
