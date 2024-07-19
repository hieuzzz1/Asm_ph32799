<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Sao 24h'],
            ['name' => 'Thời trang'],
            ['name' => 'Điện ảnh'],
            ['name' => 'Âm nhạc'],
            ['name' => 'TV Show'],
            ['name' => 'Đời sống'],
            ['name' => 'LGBT'],
            ['name' => 'Video'],
        ];

        foreach ($data as $categoryData) {
            Category::query()->create($categoryData);
        }
    }
}
