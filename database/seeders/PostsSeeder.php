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
                'category_id' => rand(1, 8)
            ],
            [
                'title' => 'Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống',
                'dateTime' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
                'img_post' => fake()->imageUrl(),
                'content' => 'Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước công chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh đẹp, tươi tắn. Đến chúc mừng cố vấn “Gương mặt điện ảnh” Ngọc Duyên trong đêm chung kết “Kịch cùng Bolero”, Ly Na Trang xinh đẹp trong tà áo dài được thiết kế ấn tượng',
                'category_id' => rand(1, 8)
            ],
            [
                'title' => 'Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh',
                'dateTime' => Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'),
                'img_post' => fake()->imageUrl(),
                'content' => 'Là cô gái từng gây sốt với bản cover ca khúc “Lạc Trôi” hay nhất, Như Thùy đang đặt những viên gạch đầu tiên trên con đường xây dựng sự nghiệp ca hát chuyên nghiệp. Mới đây, cô khiến nhiều người trầm trồ bởi những hình ảnh đáng yêu, cá tính của mình.',
                'category_id' => rand(1, 8)
            ],
        ];
        foreach ($data as $postData) {
            Post::query()->create($postData);
        }
    }
}
