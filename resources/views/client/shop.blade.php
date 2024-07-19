@extends('client.layouts.master-post')

@section('tittle-post')
<div class="title_wrap">
    <div class="cat">
        <h1 class="page_title"><a class="" href="index.html"></a></h1>
    </div>
</div>
@endsection

@section('content-post')
<div class="main_content col-sm-8">
    <section class="featured type2 row">
        <div class="clearfix"></div>
    </section>

    <section class="section category item_3">
        <div class="article-list row">
            <div class="col-sm-4">
                @foreach($tin as $post)
                <article class="post_item ">
                    <div class="cover">
                        <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                            <img width="338" height="190" src="../../wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/POSTER-691x1024-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                        </a>
                    </div>
                    <header>
                        <a title="The Nut Job 2 – Siêu phẩm hoạt hình cực dễ thương trong dịp lễ 2.9" href="../../nut-job-2-sieu-pham-hoat-hinh-cuc-de-thuong-trong-dip-le-2-9/index.html">
                            <h3 class="title">{{ $post->content }}</h3>
                        </a>
                        <div class="meta_info">
                            <span class="author_name"><strong>Video</strong> - </span><time datetime="2017-08-15 12:16+0700">15/08/2017</time><span>6 năm
                                trước</span>
                        </div>
                        <p class="excerpt">Ngày Quốc khánh 2.9 thường là dịp nghỉ lễ mà các thành
                            viên trong gia đình có dịp đoàn tụ, quay quần bên mâm cơm...</p>
                    </header>
                </article>
                @endforeach
            </div>
            <div class="col-sm-4">
                <article class="post_item ">
                    <div class="cover">
                        <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                            <img width="338" height="190" src="../../wp-content/uploads/2017/08/6B2A0544-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/6B2A0544-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                        </a>
                    </div>
                    <header>
                        <a title="Hoa hậu Nam Em khai trương nhà hàng mang chính tên mình" href="../../hoa-hau-nam-em-khai-truong-nha-hang-mang-chinh-ten-minh/index.html">
                            <h3 class="title">Hoa hậu Nam Em khai trương nhà hàng mang chính tên
                                mình</h3>
                        </a>
                        <div class="meta_info">
                            <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-15 11:41+0700">15/08/2017</time><span>6 năm
                                trước</span>
                        </div>
                        <p class="excerpt">Trong tuần này, Hoa hậu Trái đất Việt Nam 2016 Nam Em sẽ
                            chính thức khai trương nhà hàng ẩm thực với tên gọi N.E...</p>
                    </header>
                </article>
            </div>
            <div class="col-sm-4">
                <article class="post_item ">
                    <div class="cover">
                        <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                            <img width="338" height="190" src="../../wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg" class="attachment-338-190 size-338-190 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Dang-Khoa-Bi-Max-2-100x56.jpg 100w" sizes="(max-width: 338px) 100vw, 338px" />
                        </a>
                    </div>
                    <header>
                        <a title="Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình" href="../../hot-boy-mi-go-di-tim-tinh-yeu-sau-3-moi-tinh/index.html">
                            <h3 class="title">Hot boy Mì Gõ đi tìm tình yêu sau 3 mối tình</h3>
                        </a>
                        <div class="meta_info">
                            <span class="author_name"><strong>TV Show</strong> - </span><time datetime="2017-08-15 11:21+0700">15/08/2017</time><span>6 năm
                                trước</span>
                        </div>
                        <p class="excerpt">Sau 2 mùa đến với khán giả yêu mến chương trình, “Love
                            House – Ngôi nhà chung” hứa hẹn tạo một “cơn sốt” khi có...</p>
                    </header>
                </article>
            </div>
        </div>
    </section>
    <div class="list_post_category">
        <article class="post_item ">
            <div class="cover">
                <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                    <img width="265" height="149" src="../../wp-content/uploads/2017/08/Tran-Thanh-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Tran-Thanh-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân mùa thứ 3" href="../../tran-thanh-tiep-tuc-cam-trich-cua-buoc-nhay-ngan-can-mua-thu-3/index.html">
                    <h3 class="title">Trấn Thành tiếp tục &#8220;cầm trịch&#8221; Bước Nhảy Ngàn Cân
                        mùa thứ 3</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>Video</strong> - </span><time datetime="2017-08-15 13:46+0700">15/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Qua hai năm, Bước Nhảy Ngàn Cân đã liên tục khiến khán giả truyền
                    hình kinh ngạc bởi sự lột xác của những người béoqua...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                    <img width="265" height="149" src="../../wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-300x169.jpg 300w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-768x432.jpg 768w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576.jpg 1024w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/NHA-CHUNG-TAP-8-3-1024x576-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng trường”" href="../../cao-thien-trang-che-giong-hat-cua-cao-ngan-la-giong-hat-quang-truong/index.html">
                    <h3 class="title">Cao Thiên Trang chê giọng hát của Cao Ngân là “giọng hát quãng
                        trường”</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-15 12:33+0700">15/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Với tiêu chí “dĩ hòa vi quý”, lấy sự hài hước và vui vẻ làm chủ
                    đạo, Kim Dung đã điều hành một cuộc họp...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="The Face chưa kết thúc, Lan Khuê xác nhận tham gia chấm giải thể hình quốc tế Muscle Contest" href="../../face-chua-ket-thuc-lan-khue-xac-nhan-tham-gia-cham-giai-hinh-quoc-te-muscle-contest/index.html" href="../../face-chua-ket-thuc-lan-khue-xac-nhan-tham-gia-cham-giai-hinh-quoc-te-muscle-contest/index.html">
                    <img width="250" height="149" src="../../wp-content/uploads/2017/08/DSJ_4882-250x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" />
                </a>
            </div>
            <header>
                <a title="The Face chưa kết thúc, Lan Khuê xác nhận tham gia chấm giải thể hình quốc tế Muscle Contest" href="../../face-chua-ket-thuc-lan-khue-xac-nhan-tham-gia-cham-giai-hinh-quoc-te-muscle-contest/index.html">
                    <h3 class="title">The Face chưa kết thúc, Lan Khuê xác nhận tham gia chấm giải
                        thể hình quốc tế Muscle Contest</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-15 11:06+0700">15/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Hoa khôi Lan Khuê sẽ ngồi vị trí giám khảo cuộc thi Muscle
                    Contest phiên bản Việt đầu tiên trong khuôn khổ Triển lãm Thể...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy nghĩ tiêu cực &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html">
                    <img width="265" height="149" src="../../wp-content/uploads/2017/05/AN6K9109-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/05/AN6K9109-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy nghĩ tiêu cực &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;" href="../../loai-phuong-chi-minh-tu-muon-lan-khue-bo-di-suy-nghi-tieu-cuc-minh-tu-chi-loai-doi-lan-khue/index.html">
                    <h3 class="title">Loại Phương Chi, Minh Tú muốn Lan Khuê bỏ đi suy nghĩ tiêu cực
                        &#8220;Minh Tú chỉ loại đội Lan Khuê&#8221;</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>TV Show</strong> - </span><time datetime="2017-08-14 18:18+0700">14/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">HLV Lan Khuê chỉ còn Tú Hảo, HLV Minh Tú còn Đồng Ánh Quỳnh,
                    trong khi HLV Hoàng Thùy còn đến hai thí sinh là Tường Linh và...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Á hậu Thuỳ Dung tích cực thay đổi phong cách trước thềm Hoa hậu Quốc tế 2017" href="../../hau-thuy-dung-tich-cuc-thay-doi-phong-cach-truoc-hoa-hau-quoc-te-2017/index.html" href="../../hau-thuy-dung-tich-cuc-thay-doi-phong-cach-truoc-hoa-hau-quoc-te-2017/index.html">
                    <img width="250" height="149" src="../../wp-content/uploads/2017/08/IMG_9875-683x1024-250x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" />
                </a>
            </div>
            <header>
                <a title="Á hậu Thuỳ Dung tích cực thay đổi phong cách trước thềm Hoa hậu Quốc tế 2017" href="../../hau-thuy-dung-tich-cuc-thay-doi-phong-cach-truoc-hoa-hau-quoc-te-2017/index.html">
                    <h3 class="title">Á hậu Thuỳ Dung tích cực thay đổi phong cách trước thềm Hoa
                        hậu Quốc tế 2017</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-14 15:47+0700">14/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Vừa qua, công chúng, người hâm mộ nhan sắc trong nước vô cùng háo
                    hức khi Á hậu Việt Nam 2016 Huỳnh Thị Thuỳ Dung...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2 năm xa cách" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html">
                    <img width="265" height="149" src="../../wp-content/uploads/2017/08/Clarissa-1-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Clarissa-1-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2 năm xa cách" href="../../pham-huong-hoi-ngo-ban-than-clarissa-molina-sau-2-nam-xa-cach/index.html">
                    <h3 class="title">Phạm Hương hội ngộ bạn thân Clarissa Molina sau 2 năm xa cách
                    </h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>TV Show</strong> - </span><time datetime="2017-08-14 12:17+0700">14/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Nhận lời mời của Hoa hậu Hoàn vũ Việt Nam Phạm Hương, Hoa hậu
                    Cộng Hòa Dominican 2015 Top 10 Miss Universe 2015, Đương kim...</p>
            </header>
        </article>
        <article class="post_item ">
            <div class="cover">
                <a title="Chạm mốc 1 triệu lượt khán giả, Cô Gái Đến Từ Hôm Qua tung bản cover “Ngồi Hát Đỡ Buồn” siêu đặc biệt" href="../../cham-moc-1-trieu-luot-khan-gia-co-gai-den-tu-hom-qua-tung-ban-cover-ngoi-hat-buon-sieu-dac-biet/index.html" href="../../cham-moc-1-trieu-luot-khan-gia-co-gai-den-tu-hom-qua-tung-ban-cover-ngoi-hat-buon-sieu-dac-biet/index.html">
                    <img width="265" height="149" src="../../wp-content/uploads/2017/08/Screen-Shot-2017-08-14-at-1.47.15-AM-265x149.png" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Screen-Shot-2017-08-14-at-1.47.15-AM-265x149.png 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Screen-Shot-2017-08-14-at-1.47.15-AM-533x300.png 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Screen-Shot-2017-08-14-at-1.47.15-AM-338x190.png 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/Screen-Shot-2017-08-14-at-1.47.15-AM-100x56.png 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Chạm mốc 1 triệu lượt khán giả, Cô Gái Đến Từ Hôm Qua tung bản cover “Ngồi Hát Đỡ Buồn” siêu đặc biệt" href="../../cham-moc-1-trieu-luot-khan-gia-co-gai-den-tu-hom-qua-tung-ban-cover-ngoi-hat-buon-sieu-dac-biet/index.html">
                    <h3 class="title">Chạm mốc 1 triệu lượt khán giả, Cô Gái Đến Từ Hôm Qua tung bản
                        cover “Ngồi Hát Đỡ Buồn” siêu đặc biệt</h3>
                </a>
                <div class="meta_info">
                    <span class="author_name"><strong>Sao 24h</strong> - </span><time datetime="2017-08-14 08:38+0700">14/08/2017</time><span>6 năm trước</span>
                </div>
                <p class="excerpt">Khởi chiếu chính thức từ ngày 21.07.2017, đến thời điểm này CÔ
                    GÁI ĐẾN TỪ HÔM QUA đã chạm mốc 1 triệu lượt khán giả....</p>
            </header>
        </article>
    </div>
    <div id="pagination">
    </div>
</div>
@endsection