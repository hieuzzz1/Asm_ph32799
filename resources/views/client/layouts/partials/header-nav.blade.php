<div class="menu_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="main_menu">
                    <ul id="menu-menu-chinh" class="primary-menu">
                        <li id="menu-item-28675" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-28675">
                            <a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                        @foreach($dataCate as $render)
                        <li class="menu-item-type-taxonomy menu-item-object-category menu-item-has-children ">
                            <a href="{{ url('post/'. $render->id) }}">{{ $render->name }}</a>
                        </li>
                        @endforeach

                    </ul> <a class="search_toggle" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <a href="#" class="mobile_menu_toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    <div class="search_form_header">
                        <div class="search_form_wrap">
                            <form role="search" method="get" class="search-form" action="{{ route('search') }}">
                                <input type="text" id="search_input" class="search-field" placeholder="Từ khóa..." value="{{ request('s') }}" name="s" />
                                <button type="submit" class="search-submit">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- 
<li id="menu-item-28960" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-28960">
    <a href="../../danh-muc/sao-24h/index.html">Sao 24h</a>
    <ul class="sub-menu">
        <li id="menu-item-29835" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29835">
            <a href="../../danh-muc/sao-24h/sao/index.html">Sao</a>
        </li>
        <li id="menu-item-29836" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29836">
            <a href="../../danh-muc/sao-24h/toan-canh-showbiz/index.html">Toàn cảnh
                showbiz</a>
        </li>
        <li id="menu-item-29834" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29834">
            <a href="../../danh-muc/sao-24h/hau-truong/index.html">Hậu trường</a>
        </li>
    </ul>
</li> -->