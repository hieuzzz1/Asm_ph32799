<div class="header_iner d-flex justify-content-between align-items-center">
    <div class="sidebar_icon d-lg-none">
        <i class="ti-menu"></i>
    </div>
    <div class="serach_field-area d-flex align-items-center">
        <div class="search_inner">
            <form action="#">
                <div class="search_field">
                    <input type="text" placeholder="Search here..." />
                </div>
                <button type="submit">
                    <img src="../admin_asm/demo.dashboardpack.com/sales-html/img/icon/icon_search.svg" alt />
                </button>
            </form>
        </div>
        <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
    </div>
    <div class="header_right d-flex justify-content-between align-items-center">
        <div class="header_notification_warp d-flex align-items-center">
            <li>
                <a class="bell_notification_clicker nav-link-notify" href="#">
                    <img src="../admin_asm/demo.dashboardpack.com/sales-html/img/icon/bell.svg" alt />
                </a>

                <div class="Menu_NOtification_Wrap">
                    <div class="notification_Header">
                        <h4>Notifications</h4>
                    </div>
                    <div class="Notification_body">
                        <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                                <a href="#"><img src="../admin_asm/demo.dashboardpack.com/sales-html/img/staf/2.png" alt /></a>
                            </div>
                            <div class="notify_content">
                                <a href="#">
                                    <h5>
                                        Cool Marketing
                                    </h5>
                                </a>
                                <p>
                                    Lorem ipsum dolor
                                    sit amet
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="nofity_footer">
                        <div class="submit_button text-center pt_20">
                            <a href="#" class="btn_1">See More</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a class="CHATBOX_open nav-link-notify" href="#">
                    <img src="../admin_asm/demo.dashboardpack.com/sales-html/img/icon/msg.svg" alt />
                </a>
            </li>
        </div>
        <div class="profile_info">
            <i class="bi bi-person-circle" style="font-size: 29px;"></i>
            <div class="profile_info_iner">
                <div class="profile_author_name">
                    <p>Xin chào!</p>
                    <h5><a href="#" class="header-top-login-check">{{ Auth::user()->name }}</a></h5>
                </div>
                <div class="profile_info_details">
                    <a href="#">My Profile </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" style="border: none; padding: 0; background: none;"><a href="">Đăng xuất</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>