<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29',
                'dateTime' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
                'img_post' => fake()->imageUrl(),
                'content' => 'Hoa khôi Áo dài nhớ về một thời cùng cả nhà quây quần, hò hét bên chiếc TV để theo dõi các trận đấu thể thao trong những mùa SEA Games lúc xưa.',
                'category_id' => rand(1, 3)
            ],
        ];

        foreach ($data as $postData) {
            Post::query()->create($postData);
        }
    }
}
