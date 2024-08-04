<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.layouts.partials.css-login')
    @include('client.layouts.partials.css')
</head>

<body class="post-template-default single single-post postid-28588 single-format-standard">
    <header id="masthead" class="site-header" role="banner">
        @include('client.layouts.partials.header-top')

        @include('client.layouts.partials.header-nav')
    </header>

    <div id="content" class="site-content">
        <div class="container">
            @yield('content-post')
        </div>

    </div>

    @include('client.layouts.partials.footer')

    </div>
    @include('client.layouts.partials.js')
</body>

</html>