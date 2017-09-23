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
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="جستجو...">
                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start active open">
                <a href="{{route('admin.panel')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">پیشخوان</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">امکانات</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">مقالات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a  href="{{route('articles.index')}}" class="nav-link ">
                            <span class="title">مقالات تخصصی</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="layout_classic_page_head.html" class="nav-link ">
                            <span class="title">مقالات عمومی</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">دوره های آموزشی</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('courses.index')}}" class="nav-link ">
                            <span class="title">دوره های تخصصی</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="components_color_pickers.html" class="nav-link ">
                            <span class="title">دوره های عمومی</span>
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-wallet"></i>
                    <span class="title">پرداخت ها</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('payments.index')}}" class="nav-link ">
                            <span class="title">پرداختی های موفق</span>
                            <span class="badge badge-success">{{$paymentSuccess}}</span>

                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a  href="{{route('payment.unsuccessfull')}}" class="nav-link ">
                            <span class="title">پرداختی های ناموفق</span>
                            <span class="badge badge-danger">{{$paymentUnsuccess}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-paper-plane"></i>
                    <span class="title">پیام ها</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{route('comments.index')}}" class="nav-link ">
                            <span class="title">همه نظرات</span>
                            <span class="badge badge-success">{{$commentSuccess}}</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{route('comments.unsuccessfull')}}" class="nav-link ">
                            <span class="title">نظرات تایید نشده </span>
                            <span class="badge badge-danger">{{$commentUnsuccess}}</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-docs"></i>
                    <span class="title">گزارشات</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="app_todo.html" class="nav-link ">
                            <i class="icon-clock"></i>
                            <span class="title">لیست کارها 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_todo_2.html" class="nav-link ">
                            <i class="icon-check"></i>
                            <span class="title">لیست کارها 2</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_inbox.html" class="nav-link ">
                            <i class="icon-envelope"></i>
                            <span class="title">صندوق ورودی</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_calendar.html" class="nav-link ">
                            <i class="icon-calendar"></i>
                            <span class="title">تقویم</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="app_ticket.html" class="nav-link ">
                            <i class="icon-notebook"></i>
                            <span class="title">پشتیبانی</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">کاربران</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="page_user_profile_1.html" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">پروفایل 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_1_account.html" class="nav-link ">
                            <i class="icon-user-female"></i>
                            <span class="title">پروفایل 1 اطلاعات کاربری</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_1_help.html" class="nav-link ">
                            <i class="icon-user-following"></i>
                            <span class="title">پروفایل 1 راهنما</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_profile_2.html" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">پروفایل 2</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="page_user_lock_1.html" class="nav-link " target="_blank">
                            <i class="icon-lock"></i>
                            <span class="title">قفل صفحه 1</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="page_user_lock_2.html" class="nav-link " target="_blank">
                            <i class="icon-lock-open"></i>
                            <span class="title">قفل صفحه 2</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->