<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="logo">
                <a class="logo_link" href="{{ url('/') }}">
                    <img src="../Asm_ph32799_nguyenTrungHieu/dev1.mypagevn.com/star1/wp-content/uploads/2018/07/LOGO-web.png" alt="Star1" /> </a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="header_banner">
                <h2 class="widgettitle">Trending</h2>
                <div class="menu-trending-container">
                    <ul id="menu-trending" class="menu">
                        <li id="menu-item-29815" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-29815">
                            <a href="../../tag/vntm-all-stars/index.html">VNTM All Stars</a>
                        </li>
                        <li id="menu-item-29816" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-29816">
                            <a href="../../tag/the-face/index.html">The Face</a>
                        </li>
                        <li id="menu-item-29817" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-29817">
                            <a href="../../tag/guong-mat-than-quen/index.html">gương mặt thân quen</a>
                        </li>
                        <li id="menu-item-29818" class="menu-item menu-item-type-taxonomy menu-item-object-post_tag menu-item-29818">
                            <a href="../../tag/asias-next-top-model-2017/index.html">Asia&#8217;s Next Top Model
                                2017</a>
                        </li>

                        @if (Auth::check())

                        <div class="dropdown">
                            <a href="#" class="header-top-login-check">Xin chào, {{ Auth::user()->name }}</a>
                            <div class="dropdown-content">
                                <a href="">Chi tiết tài khoản</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit">Đăng xuất</button>
                                </form>
                            </div>
                        </div>

                        @else
                        <a href="{{ route('login') }}" class="header-top-login-text">
                            <label>
                                <i class="bi bi-person-fill">Tài khoản</i>
                            </label>
                        </a>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>