<header class="header-top" header-theme="blue">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <button type="button" id="navbar-fullscreen" class="nav-link"><i
                class="ik ik-maximize"></i></button>
            </div>
            <div class="top-menu d-flex align-items-center">
                <div class="dropdown dropdown-notifications" style="background: #fff3; border-radius: 50%;">
                    <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span
                    class="badge bg-danger notif-count" data-count='0'></span></a>
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                        <h4 class="header">Notifications
                            <small class="dropdown-toolbar-actions">
                        <a href="#" onclick="location.reload()" style="float: right;font-size: 11px;">Mark all
                            as read</a>
                    </small>
                        </h4>
                        <div class="notifications-wrap">

                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="https://demo.smartcart.shopping/en/admin/notifications">View All</a>
                        </div>
                    </div>
                </div>
                <button type="button" class="nav-link ml-10 right-sidebar-toggle d-none"><i
                class="ik ik-message-square"></i><span class="badge bg-success">3</span></button>

                <button type="button" class="nav-link ml-10 d-none" id="apps_modal_btn" data-toggle="modal" data-target="#appsModal"><i class="ik ik-grid"></i></button>
                <div class="dropdown" style="background: #fff3; border-radius: 50%;">

                    <a href="https://demo.smartcart.shopping/en/change-language/ar"><img src="https://demo.smartcart.shopping/img/jordan.png"
                        style="width: 30px;height: 30px;border-radius: 50%;" alt="">
                </a>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar"
                    src="https://demo.smartcart.shopping/img/user.jpg" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="https://demo.smartcart.shopping/en/admin/profile"><i
                        class="ik ik-user dropdown-icon"></i>Profile</a>
                        <a class="dropdown-item" href="https://demo.smartcart.shopping/en/admin/logout"><i
                        class="ik ik-power dropdown-icon"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
