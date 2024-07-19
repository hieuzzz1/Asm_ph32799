@extends('client.layouts.master')

@section('content')
<div class="main_content col-sm-8">

    <section class="featured type2 row">
        <div class="first_featured col-sm-8">
            <article class="featured big ">
                <div class="cover">
                    <a href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">
                        <img width="533" height="300" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-533x300.jpg" class="attachment-534-300 size-534-300 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-100x56.jpg 100w" sizes="(max-width: 533px) 100vw, 533px" />
                    </a>
                </div>
                <header>
                    <p class="title"><a href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">Lan
                            Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games
                            29</a></p>
                    <div class="meta_info">
                        <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-16 08:37+0700">16/08/2017</time><span>6 năm
                            trước</span>
                    </div>
                    <p class="excerpt">Hoa khôi Áo dài nhớ về một thời cùng cả nhà quây quần, hò hét
                        bên chiếc TV để theo dõi các trận đấu thể thao trong những mùa SEA Games lúc
                        xưa. Cũng giống như bất kỳ gia đình...</p>
                </header>
            </article>
        </div>
        <div class="second_featured col-sm-4">
            <article class="featured fsmall ">
                <div class="cover">
                    <a href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                        <img width="533" height="300" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg" class="attachment-534-300 size-534-300 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-100x56.jpg 100w" sizes="(max-width: 533px) 100vw, 533px" />
                    </a>
                </div>
                <header>
                    <p class="title"><a href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">Ly
                            Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền
                            thống</a></p>
                    <div class="meta_info">
                        <span class="author_name"><strong>Video</strong> - </span><time datetime="2017-08-16 08:28+0700">16/08/2017</time><span>6 năm
                            trước</span>
                    </div>
                    <p class="excerpt">Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước công
                        chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh đẹp, tươi tắn.
                        Đến chúc mừng cố vấn “Gương mặt điện ảnh” Ngọc Duyên trong...</p>
                </header>
            </article>
        </div>
        <div class="clearfix"></div>
    </section>


    <section class="section category item_3">
        <div class="article-list row">
            @foreach($data as $post)
            <div class="col-sm-4">
                <article class="post_item ">
                    <div class="cover">
                        <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="{{ url('details/'. $post->id) }}">
                            <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                        </a>
                    </div>
                    <header>
                        <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="">
                            <h3 class="title">{{ $post->title }}</h3>
                        </a>
                        <p class="excerpt">{{ $post->content }}</p>
                    </header>
                </article>
            </div>
            @endforeach
        </div>
    </section>


    <div class="list_post_category">
        <article class="post_item ">
            <div class="cover">
                <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                    <img width="265" height="149" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                    <h3 class="title">Sân chơi cho những ý tưởng đột phá từ các bạn trẻ</h3>
                </a>
                <p class="excerpt">Việt Nam hiện đang có khoảng 2,2 triệu sinh viên trên tổng dân số
                    khoảng 90 triệu dân và trong con số 2,2 triệu sinh...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                    <img width="265" height="149" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                    <h3 class="title">Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang
                        quán quân Kịch cùng Bolero mùa đầu tiên</h3>
                </a>
                <p class="excerpt">Sự cạnh tranh ngang tài ngang sức giữa đạo diễn Ngọc Duyên và đạo
                    diễn Vũ Trần. Danh hiệu Quán quân đã thuộc về nữ...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                    <img width="265" height="149" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                    <h3 class="title">Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới</h3>
                </a>
                <p class="excerpt">Sáng ngày 15/8, đoàn phim &#8220;Về quê ăn Tết&#8221; do Ngô
                    Thanh Vân sản xuất đã chính thức khai máy. Như đã thông tin từ...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                    <img width="265" height="149" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                    <h3 class="title">The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ
                        2.9</h3>
                </a>
                <p class="excerpt">Ngày Quốc khánh 2.9 thường là dịp nghỉ lễ mà các thành viên trong
                    gia đình có dịp đoàn tụ, quay quần bên mâm cơm...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                    <img width="265" height="149" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                    <h3 class="title">Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình</h3>
                </a>
                <p class="excerpt">Trong tuần này, Hoa hậu Trái đất Việt Nam 2016 Nam Em sẽ chính
                    thức khai trương nhà hàng ẩm thực với tên gọi N.E...</p>
            </header>
        </article>
    </div>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/sao-24h/index.html">Sao 24h</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <h3 class="title">Thẩm mỹ viện Xuân Trường khai trương chi nhánh số
                                    6</h3>
                            </a>
                            <p class="excerpt">Với thông điệp “Trả lại những gì thời gian đã lấy đi
                                và mang đến những gì thiên nhiên không ban tặng”, ngày 13/8/2017,
                                Thẩm...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <h3 class="title">“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác
                                    18+</h3>
                            </a>
                            <p class="excerpt">Là ca sĩ nổi tiếng ở hải ngoại và được nhiều người
                                gọi là “bad boy”, Andy Quách mới đây càng gây chú ý khi...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">
                                <h3 class="title">Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội
                                    tuyển Việt Nam tại SEA Games 29</h3>
                            </a>
                            <p class="excerpt">Hoa khôi Áo dài nhớ về một thời cùng cả nhà quây
                                quần, hò hét bên chiếc TV để theo dõi các trận đấu thể...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <h3 class="title">Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương
                                    mai’ trong tà áo dài truyền thống</h3>
                            </a>
                            <p class="excerpt">Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước
                                công chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html">
                                <h3 class="title">Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với
                                    vẻ ngoài nhí nhảnh</h3>
                            </a>
                            <p class="excerpt">Là cô gái từng gây sốt với bản cover ca khúc “Lạc
                                Trôi” hay nhất, Như Thùy đang đặt những viên gạch đầu tiên trên...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến &#8220;Mẹ mưa&#8221;" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến &#8220;Mẹ mưa&#8221;" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html">
                                <h3 class="title">Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến
                                    &#8220;Mẹ mưa&#8221;</h3>
                            </a>
                            <p class="excerpt">Danh xưng &#8220;Hoa hậu hài&#8221; là hình ảnh mọi
                                người thường nhắc đến Thu Trang trong suốt 3 năm qua, không phải vì
                                đẹp, mà...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn với những thay đổi thú vị" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn với những thay đổi thú vị" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html">
                                <h3 class="title">Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn
                                    với những thay đổi thú vị</h3>
                            </a>
                            <p class="excerpt">ngày 15 tháng 8 năm 2017 – Ban giải trí, Đài Truyền
                                hình Việt Nam cùng Công ty TNHH Sản xuất &#8211; Quảng cáo Sóng...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/thoi-trang/index.html">Thời trang</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <h3 class="title">Thẩm mỹ viện Xuân Trường khai trương chi nhánh số
                                    6</h3>
                            </a>
                            <p class="excerpt">Với thông điệp “Trả lại những gì thời gian đã lấy đi
                                và mang đến những gì thiên nhiên không ban tặng”, ngày 13/8/2017,
                                Thẩm...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <h3 class="title">“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác
                                    18+</h3>
                            </a>
                            <p class="excerpt">Là ca sĩ nổi tiếng ở hải ngoại và được nhiều người
                                gọi là “bad boy”, Andy Quách mới đây càng gây chú ý khi...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Khương Ngọc hài lòng với gương mặt xấu xí trong Lời nguyền gia tộc" href="../../khuong-ngoc-hai-long-voi-guong-mat-xau-xi-trong-loi-nguyen-gia-toc/index.html" href="../../khuong-ngoc-hai-long-voi-guong-mat-xau-xi-trong-loi-nguyen-gia-toc/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1-32-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1-32-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1-32-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1-32-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1-32-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Khương Ngọc hài lòng với gương mặt xấu xí trong Lời nguyền gia tộc" href="../../khuong-ngoc-hai-long-voi-guong-mat-xau-xi-trong-loi-nguyen-gia-toc/index.html">
                                <h3 class="title">Khương Ngọc hài lòng với gương mặt xấu xí trong
                                    Lời nguyền gia tộc</h3>
                            </a>
                            <p class="excerpt">Khương Ngọc hoá thân từ một anh chàng trai trẻ thư
                                sinh trở thành một lão Hom cằn cỗi, khô héo, dị dạng và đầy...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <h3 class="title">Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca
                                    sĩ V.O.X</h3>
                            </a>
                            <p class="excerpt">Sau nhiều tháng ấp ủ, ca sĩ V.O.X chính thức ra mắt
                                sản phẩm âm nhạc đầu tay mang tên Khuôn mặt ta từng quen. Đây...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <h3 class="title">Sân chơi cho những ý tưởng đột phá từ các bạn trẻ
                                </h3>
                            </a>
                            <p class="excerpt">Việt Nam hiện đang có khoảng 2,2 triệu sinh viên trên
                                tổng dân số khoảng 90 triệu dân và trong con số 2,2 triệu sinh...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/dien-anh/index.html">Điện ảnh</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html">
                                <h3 class="title">Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi
                                    đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!</h3>
                            </a>
                            <p class="excerpt">Các cặp bố con của &#8220;Bố ơi, mình đi đâu
                                thế&#8221; mùa 4 đã có những khoảnh khắc hài hước khi cùng xuất hiện
                                trong...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <h3 class="title">Sân chơi cho những ý tưởng đột phá từ các bạn trẻ
                                </h3>
                            </a>
                            <p class="excerpt">Việt Nam hiện đang có khoảng 2,2 triệu sinh viên trên
                                tổng dân số khoảng 90 triệu dân và trong con số 2,2 triệu sinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <h3 class="title">Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước
                                    Nhảy Ngàn Cân mùa thứ 3</h3>
                            </a>
                            <p class="excerpt">Qua hai năm, Bước Nhảy Ngàn Cân đã liên tục khiến
                                khán giả truyền hình kinh ngạc bởi sự lột xác của những người
                                béoqua...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-300x169.jpg 300w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-768x432.jpg 768w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576.jpg 1024w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                                <h3 class="title">Cao Thiên Trang chê giọng hát của Cao Ngân là
                                    “giọng hát quãng trường”</h3>
                            </a>
                            <p class="excerpt">Với tiêu chí “dĩ hòa vi quý”, lấy sự hài hước và vui
                                vẻ làm chủ đạo, Kim Dung đã điều hành một cuộc họp...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                                <h3 class="title">Hoa hậu Nam Em khai trương nhà hàng mang chính tên
                                    mình</h3>
                            </a>
                            <p class="excerpt">Trong tuần này, Hoa hậu Trái đất Việt Nam 2016 Nam Em
                                sẽ chính thức khai trương nhà hàng ẩm thực với tên gọi N.E...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="&#8220;Con rất thích đội cô Tường, nhưng&#8230;&#8221; Câu nói khiến Vũ Cát Tường lao lên và nhận cái kết &#8220;đau tim&#8221;" href="../../con-rat-thich-doi-co-tuong-nhung-cau-noi-khien-vu-cat-tuong-lao-len-va-nhan-cai-ket-dau-tim/index.html" href="../../con-rat-thich-doi-co-tuong-nhung-cau-noi-khien-vu-cat-tuong-lao-len-va-nhan-cai-ket-dau-tim/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="&#8220;Con rất thích đội cô Tường, nhưng&#8230;&#8221; Câu nói khiến Vũ Cát Tường lao lên và nhận cái kết &#8220;đau tim&#8221;" href="../../con-rat-thich-doi-co-tuong-nhung-cau-noi-khien-vu-cat-tuong-lao-len-va-nhan-cai-ket-dau-tim/index.html">
                                <h3 class="title">&#8220;Con rất thích đội cô Tường,
                                    nhưng&#8230;&#8221; Câu nói khiến Vũ Cát Tường lao lên và nhận
                                    cái kết &#8220;đau tim&#8221;</h3>
                            </a>
                            <p class="excerpt">Đêm thi mở màn đã mang đến rất nhiều cảm xúc cho khán
                                giả truyền hình khi xuất hiện những giọng ca nhí tài năng....</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi thảm thương đến vậy!" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi thảm thương đến vậy!" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html">
                                <h3 class="title">Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi
                                    thảm thương đến vậy!</h3>
                            </a>
                            <p class="excerpt">Thử thách mới trong tập 8 của chương trình Người mẫu
                                Việt Nam – Vietnam’s Next top All stars sẽ được nâng lên một tầm...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/am-nhac/index.html">Âm nhạc</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <h3 class="title">Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước
                                    Nhảy Ngàn Cân mùa thứ 3</h3>
                            </a>
                            <p class="excerpt">Qua hai năm, Bước Nhảy Ngàn Cân đã liên tục khiến
                                khán giả truyền hình kinh ngạc bởi sự lột xác của những người
                                béoqua...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <h3 class="title">Kể về chuyện tình giữa người và yêu, Ngọc Duyên
                                    đăng quang quán quân Kịch cùng Bolero mùa đầu tiên</h3>
                            </a>
                            <p class="excerpt">Sự cạnh tranh ngang tài ngang sức giữa đạo diễn Ngọc
                                Duyên và đạo diễn Vũ Trần. Danh hiệu Quán quân đã thuộc về nữ...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                                <h3 class="title">Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy
                                    phim mới</h3>
                            </a>
                            <p class="excerpt">Sáng ngày 15/8, đoàn phim &#8220;Về quê ăn Tết&#8221;
                                do Ngô Thanh Vân sản xuất đã chính thức khai máy. Như đã thông tin
                                từ...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-300x169.jpg 300w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-768x432.jpg 768w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576.jpg 1024w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                                <h3 class="title">Cao Thiên Trang chê giọng hát của Cao Ngân là
                                    “giọng hát quãng trường”</h3>
                            </a>
                            <p class="excerpt">Với tiêu chí “dĩ hòa vi quý”, lấy sự hài hước và vui
                                vẻ làm chủ đạo, Kim Dung đã điều hành một cuộc họp...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <h3 class="title">The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương
                                    trong dịp lễ 2.9</h3>
                            </a>
                            <p class="excerpt">Ngày Quốc khánh 2.9 thường là dịp nghỉ lễ mà các
                                thành viên trong gia đình có dịp đoàn tụ, quay quần bên mâm cơm...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                                <h3 class="title">Hoa hậu Nam Em khai trương nhà hàng mang chính tên
                                    mình</h3>
                            </a>
                            <p class="excerpt">Trong tuần này, Hoa hậu Trái đất Việt Nam 2016 Nam Em
                                sẽ chính thức khai trương nhà hàng ẩm thực với tên gọi N.E...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                                <h3 class="title">Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình</h3>
                            </a>
                            <p class="excerpt">Sau 2 mùa đến với khán giả yêu mến chương trình,
                                “Love House – Ngôi nhà chung” hứa hẹn tạo một “cơn sốt” khi có...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/tv-show/index.html">TV Show</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <h3 class="title">Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương
                                    mai’ trong tà áo dài truyền thống</h3>
                            </a>
                            <p class="excerpt">Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước
                                công chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn với những thay đổi thú vị" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/LNPT1816-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn với những thay đổi thú vị" href="../../guong-mat-quen-nhi-2017-moi-la-hap-dan-hon-voi-nhung-thay-doi-thu-vi/index.html">
                                <h3 class="title">Gương Mặt Thân Quen Nhí 2017: Mới lạ, hấp dẫn hơn
                                    với những thay đổi thú vị</h3>
                            </a>
                            <p class="excerpt">ngày 15 tháng 8 năm 2017 – Ban giải trí, Đài Truyền
                                hình Việt Nam cùng Công ty TNHH Sản xuất &#8211; Quảng cáo Sóng...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                                <h3 class="title">Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình</h3>
                            </a>
                            <p class="excerpt">Sau 2 mùa đến với khán giả yêu mến chương trình,
                                “Love House – Ngôi nhà chung” hứa hẹn tạo một “cơn sốt” khi có...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy nghĩ tiêu cực &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy nghĩ tiêu cực &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html">
                                <h3 class="title">Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy
                                    nghĩ tiêu cực &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;</h3>
                            </a>
                            <p class="excerpt">HLV Lan Khuê chỉ còn Tú Hảo, HLV Minh Tú còn Đồng Ánh
                                Quỳnh, trong khi HLV Hoàng Thùy còn đến hai thí sinh là Tường Linh
                                và...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2 năm xa cách" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2 năm xa cách" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html">
                                <h3 class="title">Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2
                                    năm xa cách</h3>
                            </a>
                            <p class="excerpt">Nhận lời mời của Hoa hậu Hoàn vũ Việt Nam Phạm Hương,
                                Hoa hậu Cộng Hòa Dominican 2015 (Top 10 Miss Universe 2015, Đương
                                kim...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Trịnh Tú Trung liên tiếp ngồi ghế nóng các cuộc thi nhan sắc quốc tế" href="../../trinh-tu-trung-lien-tiep-ngoi-ghe-nong-cac-cuoc-thi-nhan-sac-quoc-te/index.html" href="../../trinh-tu-trung-lien-tiep-ngoi-ghe-nong-cac-cuoc-thi-nhan-sac-quoc-te/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/06/batch_P336_class-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/06/batch_P336_class-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/06/batch_P336_class-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/06/batch_P336_class-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/06/batch_P336_class-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Trịnh Tú Trung liên tiếp ngồi ghế nóng các cuộc thi nhan sắc quốc tế" href="../../trinh-tu-trung-lien-tiep-ngoi-ghe-nong-cac-cuoc-thi-nhan-sac-quoc-te/index.html">
                                <h3 class="title">Trịnh Tú Trung liên tiếp ngồi ghế nóng các cuộc
                                    thi nhan sắc quốc tế</h3>
                            </a>
                            <p class="excerpt">Trịnh Tú Trung vừa trở về Việt Nam sau khi hoàn thành
                                vai trò giám khảo thế giới và giám đốc quốc gia của cuộc...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Jun Phạm &#8220;xúc động&#8221; khi được hô vang trở thành Tân Quán quân Gương Mặt Thân Quen 2017" href="../../truc-tiep-dem-chung-ket-guong-mat-quen-2017/index.html" href="../../truc-tiep-dem-chung-ket-guong-mat-quen-2017/index.html">

                            </a>
                        </div>
                        <header>
                            <a title="Jun Phạm &#8220;xúc động&#8221; khi được hô vang trở thành Tân Quán quân Gương Mặt Thân Quen 2017" href="../../truc-tiep-dem-chung-ket-guong-mat-quen-2017/index.html">
                                <h3 class="title">Jun Phạm &#8220;xúc động&#8221; khi được hô vang
                                    trở thành Tân Quán quân Gương Mặt Thân Quen 2017</h3>
                            </a>
                            <p class="excerpt">Trải qua 12 tuần phát sóng với những phần thi thú vị,
                                hấp dẫn và gay cấn. Jun Phạm, Quốc Thiên, Hoàng Yến Chibi, Tố...</p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/doi-song/index.html">Đời sống</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <h3 class="title">Thẩm mỹ viện Xuân Trường khai trương chi nhánh số
                                    6</h3>
                            </a>
                            <p class="excerpt">Với thông điệp “Trả lại những gì thời gian đã lấy đi
                                và mang đến những gì thiên nhiên không ban tặng”, ngày 13/8/2017,
                                Thẩm...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến &#8220;Mẹ mưa&#8221;" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/MG_2641_print_print-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến &#8220;Mẹ mưa&#8221;" href="../../thu-trang-tu-hoa-hau-hai-den-mua/index.html">
                                <h3 class="title">Thu Trang: Từ &#8220;Hoa hậu hài&#8221; đến
                                    &#8220;Mẹ mưa&#8221;</h3>
                            </a>
                            <p class="excerpt">Danh xưng &#8220;Hoa hậu hài&#8221; là hình ảnh mọi
                                người thường nhắc đến Thu Trang trong suốt 3 năm qua, không phải vì
                                đẹp, mà...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <h3 class="title">Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca
                                    sĩ V.O.X</h3>
                            </a>
                            <p class="excerpt">Sau nhiều tháng ấp ủ, ca sĩ V.O.X chính thức ra mắt
                                sản phẩm âm nhạc đầu tay mang tên Khuôn mặt ta từng quen. Đây...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <h3 class="title">Sân chơi cho những ý tưởng đột phá từ các bạn trẻ
                                </h3>
                            </a>
                            <p class="excerpt">Việt Nam hiện đang có khoảng 2,2 triệu sinh viên trên
                                tổng dân số khoảng 90 triệu dân và trong con số 2,2 triệu sinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <h3 class="title">Kể về chuyện tình giữa người và yêu, Ngọc Duyên
                                    đăng quang quán quân Kịch cùng Bolero mùa đầu tiên</h3>
                            </a>
                            <p class="excerpt">Sự cạnh tranh ngang tài ngang sức giữa đạo diễn Ngọc
                                Duyên và đạo diễn Vũ Trần. Danh hiệu Quán quân đã thuộc về nữ...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <h3 class="title">The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương
                                    trong dịp lễ 2.9</h3>
                            </a>
                            <p class="excerpt">Ngày Quốc khánh 2.9 thường là dịp nghỉ lễ mà các
                                thành viên trong gia đình có dịp đoàn tụ, quay quần bên mâm cơm...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi thảm thương đến vậy!" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/Hong-Anh-Chung-Ket-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi thảm thương đến vậy!" href="../../da-khoc-da-xiu-nhung-day-la-lan-dau-tien-cha-mi-tham-thuong-den-vay/index.html">
                                <h3 class="title">Đã khóc, đã xỉu nhưng đây là lần đầu tiên Chà Mi
                                    thảm thương đến vậy!</h3>
                            </a>
                            <p class="excerpt">Thử thách mới trong tập 8 của chương trình Người mẫu
                                Việt Nam – Vietnam’s Next top All stars sẽ được nâng lên một tầm...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/lgbt/index.html">LGBT</a></h2>
        </header>
        <div class="article-list swiper-container slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/IMG_3381-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Thẩm mỹ viện Xuân Trường khai trương chi nhánh số 6" href="../../tham-my-vien-xuan-truong-khai-truong-chi-nhanh-so-6/index.html">
                                <h3 class="title">Thẩm mỹ viện Xuân Trường khai trương chi nhánh số
                                    6</h3>
                            </a>
                            <p class="excerpt">Với thông điệp “Trả lại những gì thời gian đã lấy đi
                                và mang đến những gì thiên nhiên không ban tặng”, ngày 13/8/2017,
                                Thẩm...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Hinh-2-7-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác 18+" href="../../bad-boy-hai-ngoai-andy-quach-ra-mat-mv-gan-mac-18/index.html">
                                <h3 class="title">“Bad boy” hải ngoại Andy Quách ra mắt MV gắn mác
                                    18+</h3>
                            </a>
                            <p class="excerpt">Là ca sĩ nổi tiếng ở hải ngoại và được nhiều người
                                gọi là “bad boy”, Andy Quách mới đây càng gây chú ý khi...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="../../lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/index.html">
                                <h3 class="title">Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội
                                    tuyển Việt Nam tại SEA Games 29</h3>
                            </a>
                            <p class="excerpt">Hoa khôi Áo dài nhớ về một thời cùng cả nhà quây
                                quần, hò hét bên chiếc TV để theo dõi các trận đấu thể...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <h3 class="title">Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương
                                    mai’ trong tà áo dài truyền thống</h3>
                            </a>
                            <p class="excerpt">Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước
                                công chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/nhuthuy1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với vẻ ngoài nhí nhảnh" href="../../co-gai-cover-ca-khuc-lac-troi-gay-tuong-voi-ve-ngoai-nhi-nhanh/index.html">
                                <h3 class="title">Cô gái cover ca khúc “Lạc Trôi” gây ấn tượng với
                                    vẻ ngoài nhí nhảnh</h3>
                            </a>
                            <p class="excerpt">Là cô gái từng gây sốt với bản cover ca khúc “Lạc
                                Trôi” hay nhất, Như Thùy đang đặt những viên gạch đầu tiên trên...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Á quân Thần Tượng Bolero Đình Phước tăng tốc khởi động nhiều dự án âm nhạc" href="../../quan-tuong-bolero-dinh-phuoc-tang-toc-khoi-dong-nhieu-du-nhac/index.html" href="../../quan-tuong-bolero-dinh-phuoc-tang-toc-khoi-dong-nhieu-du-nhac/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/%c4%90%c3%8cNH-PH%c6%af%e1%bb%9aC-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/ĐÌNH-PHƯỚC-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/ĐÌNH-PHƯỚC-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/ĐÌNH-PHƯỚC-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Á quân Thần Tượng Bolero Đình Phước tăng tốc khởi động nhiều dự án âm nhạc" href="../../quan-tuong-bolero-dinh-phuoc-tang-toc-khoi-dong-nhieu-du-nhac/index.html">
                                <h3 class="title">Á quân Thần Tượng Bolero Đình Phước tăng tốc khởi
                                    động nhiều dự án âm nhạc</h3>
                            </a>
                            <p class="excerpt">Ngoài việc phát hành mỗi tháng 1 album riêng, mỗi quý
                                thực hiện và phát hành 1 dvd mini concert, sắp tới Đình Phước còn...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/img-2156-1502717121397-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!" href="../../nguyen-hai-phong-tham-gia-bo-oi-minh-di-dau-the-mua-4-kho-khan-cua-toi-la-tron-tria-qua/index.html">
                                <h3 class="title">Nguyễn Hải Phong tham gia &#8220;Bố ơi, mình đi
                                    đâu thế&#8221; mùa 4: Khó khăn của tôi là tròn trịa quá!</h3>
                            </a>
                            <p class="excerpt">Các cặp bố con của &#8220;Bố ơi, mình đi đâu
                                thế&#8221; mùa 4 đã có những khoảnh khắc hài hước khi cùng xuất hiện
                                trong...</p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section category">
        <header class="section-header">
            <h2><a href="../../danh-muc/video/index.html">Video</a></h2>
        </header>
        <div class="article-list swiper-container big_slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/1LyNaTrang1-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương mai’ trong tà áo dài truyền thống" href="../../ly-na-trang-khoe-nhan-sac-mong-manh-tua-suong-mai-trong-ta-ao-dai-truyen-thong/index.html">
                                <h3 class="title">Ly Na Trang khoe nhan sắc ‘mỏng manh tựa sương
                                    mai’ trong tà áo dài truyền thống</h3>
                            </a>
                            <p class="excerpt">Nghiêm túc đầu tư hình ảnh mỗi khi xuất hiện trước
                                công chúng, diễn viên Ly Na Trang ngày càng ghi điểm bởi sự xinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/4-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca sĩ V.O.X" href="../../hot-girl-chau-bui-hon-ban-dien-nu-trong-mv-cua-ca-si-v-o-x/index.html">
                                <h3 class="title">Hot girl Châu Bùi hôn bạn diễn nữ trong MV của ca
                                    sĩ V.O.X</h3>
                            </a>
                            <p class="excerpt">Sau nhiều tháng ấp ủ, ca sĩ V.O.X chính thức ra mắt
                                sản phẩm âm nhạc đầu tay mang tên Khuôn mặt ta từng quen. Đây...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/2-20-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Sân chơi cho những ý tưởng đột phá từ các bạn trẻ" href="../../san-choi-cho-nhung-y-tuong-dot-pha-tu-cac-ban-tre/index.html">
                                <h3 class="title">Sân chơi cho những ý tưởng đột phá từ các bạn trẻ
                                </h3>
                            </a>
                            <p class="excerpt">Việt Nam hiện đang có khoảng 2,2 triệu sinh viên trên
                                tổng dân số khoảng 90 triệu dân và trong con số 2,2 triệu sinh...
                            </p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                                <h3 class="title">Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước
                                    Nhảy Ngàn Cân mùa thứ 3</h3>
                            </a>
                            <p class="excerpt">Qua hai năm, Bước Nhảy Ngàn Cân đã liên tục khiến
                                khán giả truyền hình kinh ngạc bởi sự lột xác của những người
                                béoqua...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dao-dien-Ngoc-Duyen-gianh-giai-Quan-quan-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Kể về chuyện tình giữa người và yêu, Ngọc Duyên đăng quang quán quân Kịch cùng Bolero mùa đầu tiên" href="../../ke-ve-chuyen-tinh-giua-nguoi-va-yeu-ngoc-duyen-dang-quang-quan-quan-kich-cung-bolero-mua-dau-tien/index.html">
                                <h3 class="title">Kể về chuyện tình giữa người và yêu, Ngọc Duyên
                                    đăng quang quán quân Kịch cùng Bolero mùa đầu tiên</h3>
                            </a>
                            <p class="excerpt">Sự cạnh tranh ngang tài ngang sức giữa đạo diễn Ngọc
                                Duyên và đạo diễn Vũ Trần. Danh hiệu Quán quân đã thuộc về nữ...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/tom1612-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy phim mới" href="../../ngo-thanh-van-va-jun-pham-trong-ngay-dau-bam-may-phim-moi/index.html">
                                <h3 class="title">Ngô Thanh Vân và Jun Phạm trong ngày đầu bấm máy
                                    phim mới</h3>
                            </a>
                            <p class="excerpt">Sáng ngày 15/8, đoàn phim &#8220;Về quê ăn Tết&#8221;
                                do Ngô Thanh Vân sản xuất đã chính thức khai máy. Như đã thông tin
                                từ...</p>
                        </header>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="post_item ">
                        <div class="cover">
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <img width="338" height="190" src="Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                            </a>
                        </div>
                        <header>
                            <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                                <h3 class="title">The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương
                                    trong dịp lễ 2.9</h3>
                            </a>
                            <p class="excerpt">Ngày Quốc khánh 2.9 thường là dịp nghỉ lễ mà các
                                thành viên trong gia đình có dịp đoàn tụ, quay quần bên mâm cơm...
                            </p>
                        </header>
                    </article>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
</div>


@endsection