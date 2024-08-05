<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('client.admin.partials.css')
</head>

<body class="crm_body_bg">

    @include('client.admin.partials.header-nav')

    <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    @include('client.admin.partials.header-top')
                </div>
            </div>
        </div>

        @include('client.admin.partials.category-list')

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @include('client.admin.partials.footer')
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.admin.partials.js')

</body>


</html>