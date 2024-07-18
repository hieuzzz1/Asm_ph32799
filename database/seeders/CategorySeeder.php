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
            ['name' => 'Nguyễn Văn A'],
            ['name' => 'Nguyễn Văn B'],
            ['name' => 'Nguyễn Văn C'],
        ];

        foreach ($data as $categoryData) {
            Category::query()->create($categoryData);
        }
    }
}
