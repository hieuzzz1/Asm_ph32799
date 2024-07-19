@extends('client.layouts.master-post')

@section('tittle-post')
<div class="title_wrap">
    <h1 class="page_title">Kết quả tìm kiếm cho từ khóa:"{{ $query }}"</h1>
</div>
@endsection

@section('content-post')
<div class="main_content col-sm-8">

    @if($errors->has('s'))
    <div class="error">{{ $errors->first('s') }}</div>
    @endif

    @if($results->isEmpty())
    <p>Không tìm thấy kết quả nào.</p>
    @else
    @foreach($results as $post)
    <div class="list_post_category">
        <article class="post_item ">
            <div class="cover">
                <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="http://dev1.mypagevn.com/star1/lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/" href="http://dev1.mypagevn.com/star1/lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/">
                    <img width="265" height="149" src="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-265x149.jpg" class="attachment-265-149 size-265-149 wp-post-image" alt="" srcset="http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-265x149.jpg 265w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-533x300.jpg 533w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-338x190.jpg 338w, http://dev1.mypagevn.com/star1/wp-content/uploads/2017/08/DSJ_4882-1-100x56.jpg 100w" sizes="(max-width: 265px) 100vw, 265px" />
                </a>
            </div>
            <header>
                <a title="Lan Khuê mạnh mẽ, bốc lửa ủng hộ tinh thần đội tuyển Việt Nam tại SEA Games 29" href="http://dev1.mypagevn.com/star1/lan-khue-manh-boc-lua-ung-ho-tinh-doi-tuyen-viet-nam-tai-sea-games-29/">
                    <h3 class="title">{{ $post->title }}</h3>
                </a>
                <p class="excerpt">{{ $post->content }}</p>
            </header>
        </article>
    </div>
    @endforeach

    @endif

    @endsection