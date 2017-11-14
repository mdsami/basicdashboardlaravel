<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

                <li class="nav-item start">
                    <a href="{{ route('dashboard') }}" class="nav-link "><i class="icon-home"></i><span class="title">Dashboard</span></a>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-users"></i>
                        <span class="title">User List</span><span class="arrow "></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="{{ route('userlist') }}" class="nav-link"><i class="fa fa-user-plus"></i> ALL List </a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-briefcase"></i> Admin User List </a></li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-users"></i>
                        <span class="title">Invited List</span><span class="arrow "></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-user-plus"></i> Invited now </a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-briefcase"></i> LIst</a></li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-bars"></i>
                        <span class="title">Manual Invite</span><span class="arrow "></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-plus"></i> Invite Now </a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-desktop"></i> List </a></li>

                    </ul>
                </li>

                <li class="nav-item start">
                    <a href="" class="nav-link "><i class="fa fa-cogs"></i><span class="title">Mail Setting</span></a>
                </li>
                <li class="nav-item start">
                    <a href="" class="nav-link "><i class="fa fa-cogs"></i><span class="title">Setting</span></a>
                </li>


                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-envelope"></i>
                        <span class="title">Message</span><span class="arrow "></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-desktop"></i> Message list </a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-envelope-o"></i> Message now </a></li>
                        {{--<li class="nav-item"><a href="" class="nav-link"><i class="fa fa-envelope-o"></i> Create New Mail </a></li>--}}

                    </ul>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->