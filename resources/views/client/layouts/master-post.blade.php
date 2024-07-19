<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.partials.css')
</head>

<body class="archive category category-am-nhac category-1257">
    <header id="masthead" class="site-header" role="banner">
        @include('client.layouts.partials.header-top')

        @include('client.layouts.partials.header-nav')
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @yield('tittle-post')
                    </div>
                </div>
                <div class="row">
                    @yield('content-post')

                    @include('client.layouts.partials.main-sidebar')
                </div>
            </div>
        </div>

        @include('client.layouts.partials.footer')

    </div>
    @include('client.layouts.partials.js')
</body>

</html>