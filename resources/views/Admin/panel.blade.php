@extends('Admin.master')

@section('content')

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
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">پیشخوان</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start active open">
                                <a href="index.html" class="nav-link ">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">پیشخوان 1</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_2.html" class="nav-link ">
                                    <i class="icon-bulb"></i>
                                    <span class="title">پیشخوان 2</span>
                                    <span class="badge badge-success">1</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="dashboard_3.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">پیشخوان 3</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">امکانات</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-diamond"></i>
                            <span class="title">امکانات رابط کاربری UI</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="ui_metronic_grid.html" class="nav-link ">
                                    <span class="title">سیستم شبکه ای مترونیک</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_colors.html" class="nav-link ">
                                    <span class="title">کتابخانه رنگ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_general.html" class="nav-link ">
                                    <span class="title">اجزای عمومی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_buttons.html" class="nav-link ">
                                    <span class="title">دکمه ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_buttons_spinner.html" class="nav-link ">
                                    <span class="title">دکمه های اسپینر</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_confirmations.html" class="nav-link ">
                                    <span class="title">پاپ آپ تاییدیه</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_sweetalert.html" class="nav-link ">
                                    <span class="title">پیغام های بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_icons.html" class="nav-link ">
                                    <span class="title">فونت آیکون ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_socicons.html" class="nav-link ">
                                    <span class="title">آیکون شبکه های اجتماعی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_typography.html" class="nav-link ">
                                    <span class="title">تایپوگرافی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                    <span class="title">زبانه ها، آکاردئون ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline.html" class="nav-link ">
                                    <span class="title">تایم لاین 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline_2.html" class="nav-link ">
                                    <span class="title">تایم لاین 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_timeline_horizontal.html" class="nav-link ">
                                    <span class="title">تایم لاین افقی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tree.html" class="nav-link ">
                                    <span class="title">نمایش درختی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">نوار پیشرفت صفحه</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_1.html" class="nav-link "> فلش </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="ui_page_progress_style_2.html" class="nav-link "> شمارنده بزرگ </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_blockui.html" class="nav-link ">
                                    <span class="title">بلاک UI</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_bootstrap_growl.html" class="nav-link ">
                                    <span class="title">اطلاعیه های Growl بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_notific8.html" class="nav-link ">
                                    <span class="title">اطلاعیه های Notific8</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_toastr.html" class="nav-link ">
                                    <span class="title">اطلاعیه های Toastr</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_bootbox.html" class="nav-link ">
                                    <span class="title">دیالوگ های Bootbox</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_alerts_api.html" class="nav-link ">
                                    <span class="title">API پیغام های مترونیک</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_session_timeout.html" class="nav-link ">
                                    <span class="title">زمان اتمام سشن ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_idle_timeout.html" class="nav-link ">
                                    <span class="title">زمان بیکار بودن کاربر</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_modals.html" class="nav-link ">
                                    <span class="title">مودال ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_extended_modals.html" class="nav-link ">
                                    <span class="title">مودال های پیشرفته</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_tiles.html" class="nav-link ">
                                    <span class="title">کاشی ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_datepaginator.html" class="nav-link ">
                                    <span class="title">صفحه بندی داده ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ui_nestable.html" class="nav-link ">
                                    <span class="title">لیست های جابجا شونده</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-puzzle"></i>
                            <span class="title">اجزا</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="components_date_time_pickers.html" class="nav-link ">
                                    <span class="title">انتخابگر زمان و تاریخ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_color_pickers.html" class="nav-link ">
                                    <span class="title">انتخابگر رنگ</span>
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_select2.html" class="nav-link ">
                                    <span class="title">انتخابگر Select2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_select.html" class="nav-link ">
                                    <span class="title">انتخابگر بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_multi_select.html" class="nav-link ">
                                    <span class="title">انتخابگر چندگانه بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_multiselect_dropdown.html" class="nav-link ">
                                    <span class="title">انتخابگر چندگانه کرکره ای بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_select_splitter.html" class="nav-link ">
                                    <span class="title">جداکننده انتخاب</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_clipboard.html" class="nav-link ">
                                    <span class="title">کلیپ بورد</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_typeahead.html" class="nav-link ">
                                    <span class="title">کامل کننده خودکار Typehead</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_tagsinput.html" class="nav-link ">
                                    <span class="title">تگ های بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_switch.html" class="nav-link ">
                                    <span class="title">دکمه سوییچ بوت استرپ</span>
                                    <span class="badge badge-success">6</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_maxlength.html" class="nav-link ">
                                    <span class="title">حداکثر طول متن بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_fileinput.html" class="nav-link ">
                                    <span class="title">انتخابگر فایل بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_bootstrap_touchspin.html" class="nav-link ">
                                    <span class="title">تاچ اسپین بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_form_tools.html" class="nav-link ">
                                    <span class="title">ابزارها و ابزارک های فرم</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_context_menu.html" class="nav-link ">
                                    <span class="title">منوی داخلی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_editors.html" class="nav-link ">
                                    <span class="title">ویرایشگرهای متن</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_code_editors.html" class="nav-link ">
                                    <span class="title">ویرایشگرهای کد</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_ion_sliders.html" class="nav-link ">
                                    <span class="title">اسلایدرها با محدودیت Ion</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_noui_sliders.html" class="nav-link ">
                                    <span class="title">اسلایدرها با محدودیت NoUI</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="components_knob_dials.html" class="nav-link ">
                                    <span class="title">شاخص های دایره ای Knob</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">اجزای فرم</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="form_controls.html" class="nav-link ">
                                            <span class="title">کنترل های فرم
                                                <br>بوت استرپ</span>
                                </a>

                            </li>
                            <li class="nav-item  ">
                                <a href="form_controls_md.html" class="nav-link ">
                                    <span class="title">کنترل های فرم                                                <br>متریال دیزاین</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation.html" class="nav-link ">
                                    <span class="title">اعتبار سنجی فرم</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_states_md.html" class="nav-link ">
                                            <span class="title">وضعیت های اعتبار سنجی فرم
                                                <br>متریال دیزاین</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_validation_md.html" class="nav-link ">
                                            <span class="title">اعتبار سنجی فرم
                                                <br>متریال دیزاین</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_layouts.html" class="nav-link ">
                                    <span class="title">طرح فرم ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_repeater.html" class="nav-link ">
                                    <span class="title">تکرار کننده فرم</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_input_mask.html" class="nav-link ">
                                    <span class="title">ماسک برای وروردی های فرم</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_editable.html" class="nav-link ">
                                    <span class="title">فرم های قابل ویرایش</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_wizard.html" class="nav-link ">
                                    <span class="title">فرم چند مرحله ای</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_icheck.html" class="nav-link ">
                                    <span class="title">کنترل های iCheck</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_image_crop.html" class="nav-link ">
                                    <span class="title">برش تصاویر</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_fileupload.html" class="nav-link ">
                                    <span class="title">آپلود چندگانه فایل</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_dropzone.html" class="nav-link ">
                                    <span class="title">محل درگ کردن آپلود فایل</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bulb"></i>
                            <span class="title">المان ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="elements_steps.html" class="nav-link ">
                                    <span class="title">مراحل</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_lists.html" class="nav-link ">
                                    <span class="title">لیست ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_ribbons.html" class="nav-link ">
                                    <span class="title">ربان ها</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_overlay.html" class="nav-link ">
                                    <span class="title">پوشش تصاویر</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="elements_cards.html" class="nav-link ">
                                    <span class="title">کارت های کاربران</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-briefcase"></i>
                            <span class="title">جدول ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="table_static_basic.html" class="nav-link ">
                                    <span class="title">جدول های ساده</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_static_responsive.html" class="nav-link ">
                                    <span class="title">جدول های واکنشگرا</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="table_bootstrap.html" class="nav-link ">
                                    <span class="title">جدول های بوت استرپ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">جدول های داده ها</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="table_datatables_managed.html" class="nav-link "> مدیریت جدول های داده </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_buttons.html" class="nav-link "> دکمه های جدول </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_colreorder.html" class="nav-link "> مرتب سازی ستون ها </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_rowreorder.html" class="nav-link "> مرتب سازی ردیف ها </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_scroller.html" class="nav-link "> اسکرولر </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_fixedheader.html" class="nav-link "> هدر ثابت </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_responsive.html" class="nav-link "> واکنشگرایی </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_editable.html" class="nav-link "> جدول داده با قابلیت ویرایش </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="table_datatables_ajax.html" class="nav-link "> جدول داده Ajax </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="?p=" class="nav-link nav-toggle">
                            <i class="icon-wallet"></i>
                            <span class="title"> پورتلت </span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="portlet_boxed.html" class="nav-link ">
                                    <span class="title">پورتلت جعبه ای</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_light.html" class="nav-link ">
                                    <span class="title">پورتلت روشن</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_solid.html" class="nav-link ">
                                    <span class="title">پورتلت جامد</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_ajax.html" class="nav-link ">
                                    <span class="title">پورتلت Ajax</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="portlet_draggable.html" class="nav-link ">
                                    <span class="title">پورتلت قابل جابجایی</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-bar-chart"></i>
                            <span class="title">چارت ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="charts_amcharts.html" class="nav-link ">
                                    <span class="title">amChart</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flotcharts.html" class="nav-link ">
                                    <span class="title">چارت های Flot</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_flowchart.html" class="nav-link ">
                                    <span class="title">چارت های Flow</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_google.html" class="nav-link ">
                                    <span class="title">چارت های گوگل</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_echarts.html" class="nav-link ">
                                    <span class="title">eCharts</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="charts_morris.html" class="nav-link ">
                                    <span class="title">چارت های Morris</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <span class="title">HighCharts</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="charts_highcharts.html" class="nav-link "> HighCharts </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highstock.html" class="nav-link "> HighStock </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="charts_highmaps.html" class="nav-link "> HighMaps </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-pointer"></i>
                            <span class="title">نقشه ها</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="maps_google.html" class="nav-link ">
                                    <span class="title">نقشه های گوگل</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="maps_vector.html" class="nav-link ">
                                    <span class="title">نقشه های وکتور</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">طرح بندی</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">طرح بندی صفحه</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_blank_page.html" class="nav-link ">
                                    <span class="title">صفحه خالی</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_classic_page_head.html" class="nav-link ">
                                    <span class="title">عنوان صفحه کلاسیک</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_light_page_head.html" class="nav-link ">
                                    <span class="title">عنوان صفحه لایت</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_content_grey.html" class="nav-link ">
                                    <span class="title">پس زمینه خاکستری</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_search_on_header_1.html" class="nav-link ">
                                    <span class="title">سرچ باکس در هدر 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_search_on_header_2.html" class="nav-link ">
                                    <span class="title">سرچ باکس در هدر 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_language_bar.html" class="nav-link ">
                                    <span class="title">انتخاب زبان در هدر</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_footer_fixed.html" class="nav-link ">
                                    <span class="title">فوتر صفحه ثابت</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_boxed_page.html" class="nav-link ">
                                    <span class="title">جعبه ای</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-feed"></i>
                            <span class="title">طرح بندی سایدبار</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_sidebar_menu_light.html" class="nav-link ">
                                    <span class="title">منوی کناری لایت</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_menu_hover.html" class="nav-link ">
                                    <span class="title">منوی کناری با هاوور</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_search_1.html" class="nav-link ">
                                    <span class="title">گزینه جستجوی سایدبار 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_search_2.html" class="nav-link ">
                                    <span class="title">گزینه جستجوی سایدبار 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_toggler_on_sidebar.html" class="nav-link ">
                                    <span class="title">تغییر دهنده حالت سایدبار</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_reversed.html" class="nav-link ">
                                    <span class="title">صفحه با سایدبار معکوس</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_fixed.html" class="nav-link ">
                                    <span class="title">صفحه با سایدبار ثابت</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_sidebar_closed.html" class="nav-link ">
                                    <span class="title">سایدبار پنهان(بسته)</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-paper-plane"></i>
                            <span class="title">منوی افقی</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_mega_menu_light.html" class="nav-link ">
                                    <span class="title">مگا منوی روشن</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_mega_menu_dark.html" class="nav-link ">
                                    <span class="title">مگا منوی تیره</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_full_width.html" class="nav-link ">
                                    <span class="title">طرح تمام صفحه</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class=" icon-wrench"></i>
                            <span class="title">طرح سفارشی</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="layout_disabled_menu.html" class="nav-link ">
                                    <span class="title">لینک های منو غیرفعال</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_full_height_portlet.html" class="nav-link ">
                                    <span class="title">پورتلت با ارتفاع کامل</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="layout_full_height_content.html" class="nav-link ">
                                    <span class="title">محتوا با ارتفاع کامل</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">
                        <h3 class="uppercase">صفحات</h3>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-basket"></i>
                            <span class="title">فروشگاهی eCommerce</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="ecommerce_index.html" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">پیشخوان</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_orders.html" class="nav-link ">
                                    <i class="icon-basket"></i>
                                    <span class="title">سفارشات</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_orders_view.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">نمایش سفارش</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_products.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">محصولات</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="ecommerce_products_edit.html" class="nav-link ">
                                    <i class="icon-graph"></i>
                                    <span class="title">ویرایش محصول</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-docs"></i>
                            <span class="title">برنامه ها</span>
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
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
                                    <span class="title">ورود</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_user_login_1.html" class="nav-link " target="_blank"> صفحه ورود 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_2.html" class="nav-link " target="_blank"> صفحه ورود 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_3.html" class="nav-link " target="_blank"> صفحه ورود 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_4.html" class="nav-link " target="_blank"> صفحه ورود 4 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_5.html" class="nav-link " target="_blank"> صفحه ورود 5 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_user_login_6.html" class="nav-link " target="_blank"> صفحه ورود 6 </a>
                                    </li>
                                </ul>
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
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-social-dribbble"></i>
                            <span class="title">عمومی</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_general_about.html" class="nav-link ">
                                    <i class="icon-info"></i>
                                    <span class="title">درباره</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_contact.html" class="nav-link ">
                                    <i class="icon-call-end"></i>
                                    <span class="title">ارتباط</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-notebook"></i>
                                    <span class="title">نمونه کارها</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_1.html" class="nav-link "> نمونه کار 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_2.html" class="nav-link "> نمونه کار 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_3.html" class="nav-link "> نمونه کار 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_portfolio_4.html" class="nav-link "> نمونه کار 4 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-magnifier"></i>
                                    <span class="title">جستجو</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="page_general_search.html" class="nav-link "> جستجو 1 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_2.html" class="nav-link "> جستجو 2 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_3.html" class="nav-link "> جستجو 3 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_4.html" class="nav-link "> جستجو 4 </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="page_general_search_5.html" class="nav-link "> جستجو 5 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_pricing.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">لیست قیمت</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_pricing_2.html" class="nav-link ">
                                    <i class="icon-tag"></i>
                                    <span class="title">لیست قیمت 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_faq.html" class="nav-link ">
                                    <i class="icon-wrench"></i>
                                    <span class="title">سوالات متداول</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_blog.html" class="nav-link ">
                                    <i class="icon-pencil"></i>
                                    <span class="title">بلاگ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_blog_post.html" class="nav-link ">
                                    <i class="icon-note"></i>
                                    <span class="title">پست بلاگ</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_invoice.html" class="nav-link ">
                                    <i class="icon-envelope"></i>
                                    <span class="title">فاکتور</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_general_invoice_2.html" class="nav-link ">
                                    <i class="icon-envelope"></i>
                                    <span class="title">فاکتور 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title">سیستم</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_1.html" class="nav-link ">
                                    <span class="title">کوکی 1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_cookie_consent_2.html" class="nav-link ">
                                    <span class="title">کوکی 2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                                    <span class="title">صفحه بزودی...</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_1.html" class="nav-link ">
                                    <span class="title">صفحه 404 -1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_2.html" class="nav-link " target="_blank">
                                    <span class="title">صفحه 404 -2</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_404_3.html" class="nav-link " target="_blank">
                                    <span class="title">صفحه 404 -3</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_500_1.html" class="nav-link ">
                                    <span class="title">صفحه 500 -1</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="page_system_500_2.html" class="nav-link " target="_blank">
                                    <span class="title">صفحه 500 -2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-folder"></i>
                            <span class="title">منو چند سطحی</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-settings"></i> آیتم 1
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" target="_blank" class="nav-link">
                                            <i class="icon-user"></i> منو والد                                                    <span class="arrow nav-toggle"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-power"></i> لینک نمونه 1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-paper-plane"></i> لینک نمونه 1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="icon-star"></i> لینک نمونه 1 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-camera"></i> لینک نمونه 1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-link"></i> لینک نمونه 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-pointer"></i> لینک نمونه 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" target="_blank" class="nav-link">
                                    <i class="icon-globe"></i> منو والد                                            <span class="arrow nav-toggle"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-tag"></i> لینک نمونه 1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-pencil"></i> لینک نمونه 1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-graph"></i> لینک نمونه 1 </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-bar-chart"></i> آیتم 3 </a>
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
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <div class="theme-panel hidden-xs hidden-sm">
                    <div class="toggler"> </div>
                    <div class="toggler-close"> </div>
                    <div class="theme-options">
                        <div class="theme-option theme-colors clearfix">
                            <span> رنگ تم </span>
                            <ul>
                                <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                            </ul>
                        </div>
                        <div class="theme-option">
                            <span> استایل تم </span>
                            <select class="layout-style-option form-control input-sm">
                                <option value="square" selected="selected">گوشه های مربعی</option>
                                <option value="rounded">گوشه های انحنادار</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> طرح بندی </span>
                            <select class="layout-option form-control input-sm">
                                <option value="fluid" selected="selected">Fluid</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> هدر </span>
                            <select class="page-header-option form-control input-sm">
                                <option value="fixed" selected="selected">ثابت</option>
                                <option value="default">پیش فرض</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> منوی بالای کرکره ای </span>
                            <select class="page-header-top-dropdown-style-option form-control input-sm">
                                <option value="light" selected="selected">روشن</option>
                                <option value="dark">تیره</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> حالت سایدبار </span>
                            <select class="sidebar-option form-control input-sm">
                                <option value="fixed">ثابت</option>
                                <option value="default" selected="selected">پیش فرض</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> منو سایدبار </span>
                            <select class="sidebar-menu-option form-control input-sm">
                                <option value="accordion" selected="selected">آکاردئون</option>
                                <option value="hover">هاوور</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> استایل سایدبار </span>
                            <select class="sidebar-style-option form-control input-sm">
                                <option value="default" selected="selected">پیش فرض</option>
                                <option value="light">روشن</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> مکان سایدبار </span>
                            <select class="sidebar-pos-option form-control input-sm">
                                <option value="left">چپ</option>
                                <option value="right" selected="selected">راست</option>
                            </select>
                        </div>
                        <div class="theme-option">
                            <span> فوتر </span>
                            <select class="page-footer-option form-control input-sm">
                                <option value="fixed">ثابت</option>
                                <option value="default" selected="selected">پیش فرض</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">خانه</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span>پیشخوان</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp;
                            <span class="thin uppercase hidden-xs"></span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title"> پیشخوان مدیر                            <small>آمار، نمودار ها، رویدادهای اخیر و گزارش ها</small>
                </h1>
                <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS 1-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="1349">0</span>
                                </div>
                                <div class="desc"> بازخورد های جدید </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                            <div class="visual">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="12,5">0</span>میلیون تومان </div>
                                <div class="desc"> سود کل </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="549">0</span>
                                </div>
                                <div class="desc"> سفارشات جدید </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                            <div class="visual">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number"> +
                                    <span data-counter="counterup" data-value="89"></span>% </div>
                                <div class="desc"> محبوبیت برند </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- END DASHBOARD STATS 1-->
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bar-chart font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">بازیدهای سایت</span>
                                    <span class="caption-helper">آمار هفتگی...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn red btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">جدید</label>
                                        <label class="btn red btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">بازگشتی</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <payment :values="{{json_encode($values)}}"  :labels="{{json_encode($lables)}}" ></payment>
                                {{--<div id="site_statistics_loading">
                                    <img src="/global/img/loading.gif" alt="loading" /> </div>
                                <div id="site_statistics_content" class="display-none">
                                    <div id="site_statistics" class="chart"> </div>
                                </div>--}}
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-red-sunglo hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">درآمد</span>
                                    <span class="caption-helper">آمار ماهانه...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> فیلترکردن محدوده
                                            <span class="fa fa-angle-down"> </span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> Q1 2014
                                                    <span class="label label-sm label-default"> گذشته </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Q2 2014
                                                    <span class="label label-sm label-default"> گذشته </span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="javascript:;"> Q3 2014
                                                    <span class="label label-sm label-success"> فعلی </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Q4 2014
                                                    <span class="label label-sm label-warning"> آینده </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="site_activities_loading">
                                    <img src="/global/img/loading.gif" alt="loading" /> </div>
                                <div id="site_activities_content" class="display-none">
                                    <div id="site_activities" style="height: 228px;"> </div>
                                </div>
                                <div style="margin: 20px 0 10px 30px">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-success"> درآمد: </span>
                                            <h3>T 13,234</h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-info"> مالیات: </span>
                                            <h3>T 134,900</h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-danger"> حمل و نقل: </span>
                                            <h3>T 1,134</h3>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                            <span class="label label-sm label-warning"> سفارشات: </span>
                                            <h3>235090</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class="icon-bubbles font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">نظرات</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#portlet_comments_1" data-toggle="tab"> درانتظار </a>
                                    </li>
                                    <li>
                                        <a href="#portlet_comments_2" data-toggle="tab"> تایید شده </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="portlet_comments_1">
                                        <!-- BEGIN: Comments -->
                                        <div class="mt-comments">
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar1.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">مایکل</span>
                                                        <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-pending">در انتظار</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar6.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">لاریسا</span>
                                                        <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-rejected">رد شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar8.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">ناتاشا</span>
                                                        <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-pending">در انتظار</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar4.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">سباستین دیویدسون</span>
                                                        <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-rejected">رد شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Comments -->
                                    </div>
                                    <div class="tab-pane" id="portlet_comments_2">
                                        <!-- BEGIN: Comments -->
                                        <div class="mt-comments">
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar4.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">مایکل</span>
                                                        <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar8.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">لاریسا</span>
                                                        <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                    </div>
                                                    <div class="mt-comment-text">  و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar6.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">ناتاشا</span>
                                                        <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد. </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-comment">
                                                <div class="mt-comment-img">
                                                    <img src="/pages/media/users/avatar1.jpg" /> </div>
                                                <div class="mt-comment-body">
                                                    <div class="mt-comment-info">
                                                        <span class="mt-comment-author">سباستین دیویدسون</span>
                                                        <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                    </div>
                                                    <div class="mt-comment-text"> بخش استاندارد Lorem Ipsum از سال 1500 استفاده می شود </div>
                                                    <div class="mt-comment-details">
                                                        <span class="mt-comment-status mt-comment-status-approved">تایید شده</span>
                                                        <ul class="mt-comment-actions">
                                                            <li>
                                                                <a href="#">ویرایش سریع</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">نمایش</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">حذف</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Comments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class=" icon-social-twitter font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">اقدامات</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_actions_pending" data-toggle="tab"> درانتظار </a>
                                    </li>
                                    <li>
                                        <a href="#tab_actions_completed" data-toggle="tab"> تکمیل شده </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_actions_pending">
                                        <!-- BEGIN: Actions -->
                                        <div class="mt-actions">
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar10.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-magnet"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">ناتاشا</span>
                                                                <p class="mt-action-desc">Dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar3.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class=" icon-bubbles"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Gavin Bond</span>
                                                                <p class="mt-action-desc">pending for approval</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-red"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar2.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-call-in"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Diana Berri</span>
                                                                <p class="mt-action-desc">لورم یک متن آزمایشی است text</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar7.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class=" icon-bell"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">John Clark</span>
                                                                <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-red"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar8.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-magnet"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Donna Clarkson </span>
                                                                <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar9.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-magnet"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Tom Larson</span>
                                                                <p class="mt-action-desc">لورم یک متن آزمایشی است text</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Actions -->
                                    </div>
                                    <div class="tab-pane" id="tab_actions_completed">
                                        <!-- BEGIN:Completed-->
                                        <div class="mt-actions">
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar1.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-action-redo"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Frank Cameron</span>
                                                                <p class="mt-action-desc">لورم یک متن آزمایشی است</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-red"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar8.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-cup"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Ella Davidson </span>
                                                                <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar5.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class=" icon-graduation"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Jason Dickens </span>
                                                                <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-red"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-action">
                                                <div class="mt-action-img">
                                                    <img src="/pages/media/users/avatar2.jpg" /> </div>
                                                <div class="mt-action-body">
                                                    <div class="mt-action-row">
                                                        <div class="mt-action-info ">
                                                            <div class="mt-action-icon ">
                                                                <i class="icon-badge"></i>
                                                            </div>
                                                            <div class="mt-action-details ">
                                                                <span class="mt-action-author">Jan Kim</span>
                                                                <p class="mt-action-desc">لورم یک متن آزمایشی است</p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action-datetime ">
                                                            <span class="mt-action-date">3 تیر</span>
                                                            <span class="mt-action-dot bg-green"></span>
                                                            <span class="mt=action-time">9:30-13:00</span>
                                                        </div>
                                                        <div class="mt-action-buttons ">
                                                            <div class="btn-group btn-group-circle">
                                                                <button type="button" class="btn btn-outline green btn-sm">پذیرفتن</button>
                                                                <button type="button" class="btn btn-outline red btn-sm">رد کردن</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END: Completed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-directions font-green hide"></i>
                                    <span class="caption-subject bold font-dark uppercase "> فعالیت ها</span>
                                    <span class="caption-helper">تایم لاین افقی</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn blue btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> اقدام 1</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">اقدام 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">اقدام 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">اقدام 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li>
                                                        <a href="#0" data-date="16/01/2014" class="border-after-red bg-after-red selected">16 Jan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="28/02/2014" class="border-after-red bg-after-red">28 Feb</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/04/2014" class="border-after-red bg-after-red">20 Mar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/05/2014" class="border-after-red bg-after-red">20 May</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="09/07/2014" class="border-after-red bg-after-red">09 Jul</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="30/08/2014" class="border-after-red bg-after-red">30 Aug</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="15/09/2014" class="border-after-red bg-after-red">15 Sep</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="01/11/2014" class="border-after-red bg-after-red">01 Nov</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="10/12/2014" class="border-after-red bg-after-red">10 Dec</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="19/01/2015" class="border-after-red bg-after-red">29 Jan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" id="test_pest" data-date="03/03/2015" class="border-after-red bg-after-red">3 Mar - 1</a>
                                                    </li>
                                                </ol>
                                                <span class="filling-line bg-red" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                            <li>
                                                <a href="#0" class="prev inactive btn btn-outline red md-skip">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="next btn btn-outline red md-skip">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">کاربر جدید</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">16 January 2014 : 7:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, mi felis, aliquam at iaculis mi felis, aliquam
                                                        at iaculis finibus eu ex. Integer efficitur tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur odio non est rhoncus volutpat.</p>
                                                    <a href="javascript:;" class="btn btn-circle red btn-outline">ادامه مطلب</a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only blue">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Sending Shipment</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">اقدام </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">اقدامی دیگر </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> چیزی دیگر </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">لینک جدا </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Blue Chambray</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Event Success</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                    <a href="javascript:;"
                                                       class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">اقدام </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">اقدامی دیگر </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> چیزی دیگر </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">لینک جدا </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Call</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-left" src="/pages/media/blog/5.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Decision</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_5.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-right" src="/pages/media/blog/6.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-sharp">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">10 December 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-directions font-green hide"></i>
                                    <span class="caption-subject bold font-dark uppercase"> رخدادها</span>
                                    <span class="caption-helper">تایم لاین افقی</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn green btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">اقدامات</label>
                                        <label class="btn  green btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="cd-horizontal-timeline mt-timeline-horizontal" data-spacing="60">
                                    <div class="timeline mt-timeline-square">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li>
                                                        <a href="#0" data-date="16/01/2014" class="border-after-blue bg-after-blue selected"> نمایشگاه 2016 </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="28/02/2014" class="border-after-blue bg-after-blue"> تبلیغ جدید </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/04/2014" class="border-after-blue bg-after-blue"> نشست </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="20/05/2014" class="border-after-blue bg-after-blue">ناهار</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="09/07/2014" class="border-after-blue bg-after-blue">جشن</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="30/08/2014" class="border-after-blue bg-after-blue"> گزارشات </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="15/09/2014" class="border-after-blue bg-after-blue">HR</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="01/11/2014" class="border-after-blue bg-after-blue">IPO</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="10/12/2014" class="border-after-blue bg-after-blue"> هیئت مدیره </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="19/01/2015" class="border-after-blue bg-after-blue">درآمد</a>
                                                    </li>
                                                    <li>
                                                        <a href="#0" data-date="03/03/2015" class="border-after-blue bg-after-blue"> شام </a>
                                                    </li>
                                                </ol>
                                                <span class="filling-line bg-blue" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation mt-ht-nav-icon">
                                            <li>
                                                <a href="#0" class="prev inactive btn blue md-skip">
                                                    <i class="fa fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="next btn blue md-skip">
                                                    <i class="fa fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Expo 2016 Launch</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Lisa Bold</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">23 February 2014</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod mi felis, aliquam at iaculis eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis mi felis, aliquam
                                                        at iaculis eu, onsectetur adipiscing elit finibus eu ex. Integer efficitur leo eget dolor tincidunt, et dignissim risus lacinia. Nam in egestas onsectetur adipiscing elit nunc. Suspendisse
                                                        potenti</p>
                                                    <a href="javascript:;" class="btn btn-circle dark btn-outline">ادامه مطلب</a>
                                                    <a href="javascript:;" class="btn btn-circle btn-icon-only green pull-right">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li data-date="28/02/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Sending Shipment</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_3.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Hugh Grant</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">28 February 2014 : 10:15 AM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle btn-outline green-jungle">Download Shipment List</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle blue-steel dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">اقدام </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">اقدامی دیگر </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> چیزی دیگر </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">لینک جدا </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="20/04/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Blue Chambray</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 April 2014 : 10:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="20/05/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">20 May 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="09/07/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Event Success</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Matt Goldman</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">9 July 2014 : 8:15 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde.</p>
                                                    <a href="javascript:;"
                                                       class="btn btn-circle btn-outline purple-medium">View Summary</a>
                                                    <div class="btn-group dropup pull-right">
                                                        <button class="btn btn-circle green dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> اقدامات
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">اقدام </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">اقدامی دیگر </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> چیزی دیگر </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">لینک جدا </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-date="30/08/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Call</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_1.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Rory Matthew</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">30 August 2014 : 5:45 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-left" src="/pages/media/blog/5.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut. laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut. </p>
                                                    <a href="javascript:;" class="btn btn-circle red">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="15/09/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title">Conference Decision</h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_5.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Jessica Wolf</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">15 September 2014 : 8:30 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <img class="timeline-body-img pull-right" src="/pages/media/blog/6.jpg" alt="">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis
                                                        qui ut.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-sharp">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="01/11/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">1 November 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="10/12/2014">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">10 December 2014 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="19/01/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">19 January 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                            <li data-date="03/03/2015">
                                                <div class="mt-title">
                                                    <h2 class="mt-content-title"> جدول زمانی دریافت شده </h2>
                                                </div>
                                                <div class="mt-author">
                                                    <div class="mt-avatar">
                                                        <img src="/pages/media/users/avatar80_2.jpg" />
                                                    </div>
                                                    <div class="mt-author-name">
                                                        <a href="javascript:;" class="font-blue-madison">Andres Iniesta</a>
                                                    </div>
                                                    <div class="mt-author-datetime font-grey-mint">3 March 2015 : 12:20 PM</div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="mt-content border-grey-steel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eleifend ipsum, at posuere augue. Pellentesque mi felis, aliquam at iaculis eu, finibus eu ex. Integer efficitur leo eget
                                                        dolor tincidunt, et dignissim risus lacinia. Nam in egestas nunc. Suspendisse potenti. Cras ullamcorper tincidunt malesuada. Sed sit amet molestie elit, vel placerat ipsum. Ut consectetur
                                                        odio non est rhoncus volutpat. Nullam interdum, neque quis vehicula ornare, lacus elit dignissim purus, quis ultrices erat tortor eget felis. Cras commodo id massa at condimentum. Praesent
                                                        dignissim luctus risus sed sodales.</p>
                                                    <a href="javascript:;" class="btn btn-circle green-turquoise">ادامه مطلب</a>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <!-- .events-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">فعالیت های اخیر</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> فیلتر بر اساس
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" /> امورمالی
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" checked="" /> عضویت
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" /> پشتیبانی مشتریان
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" checked="" /> HR
                                                <span></span>
                                            </label>
                                            <label class="mt-checkbox mt-checkbox-outline">
                                                <input type="checkbox" /> سیستم
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                    <ul class="feeds">
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                            <span class="label label-sm label-warning "> اقدام به انجام
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> اکنون </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 دقیقه </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-danger">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سفارش جدید دریافت شد با
                                                            <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 30 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                            <span class="label label-sm label-default "> از کار افتاده </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 2 ساعت </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 دقیقه </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                            <span class="label label-sm label-warning "> اقدام به انجام
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> اکنون </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-bar-chart-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 دقیقه </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سفارش جدید دریافت شد با
                                                            <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 30 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-success">
                                                            <i class="fa fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 24 دقیقه </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                            <span class="label label-sm label-default "> از کار افتاده </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date"> 2 ساعت </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-briefcase"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> 20 دقیقه </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scroller-footer">
                                    <div class="btn-arrow-link pull-right">
                                        <a href="javascript:;"> مشاهده تمام سوابق </a>
                                        <i class="icon-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light tasks-widget bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">وظایف</span>
                                    <span class="caption-helper">خلاصه وظایف...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn blue-oleo btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> بیشتر
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> همه پروژه ها </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"> AirAsia </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> Cruise </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> HSBC </a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;"> در انتظار
                                                    <span class="badge badge-danger"> 4 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> تکمیل شده
                                                    <span class="badge badge-success"> 12 </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> سررسید
                                                    <span class="badge badge-warning"> 9 </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="task-content">
                                    <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                                        <!-- START TASK LIST -->
                                        <ul class="task-list">
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> آمار سالانه IPO در سال 2013 در جلسه هیئت مدیره </span>
                                                    <span class="label label-sm label-success">شرکت</span>
                                                    <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> برگزاری یک مصاحبه برای موقعیت مدیر بازاریابی </span>
                                                    <span class="label label-sm label-danger">بازاریابی</span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> جلسه داخلی پروژه سیستم اینترانت ایرآسیا </span>
                                                    <span class="label label-sm label-success">AirAsia</span>
                                                    <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> جلسه مدیریت فنی </span>
                                                    <span class="label label-sm label-warning">شرکت</span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> شروع توسعه اپلیکیشن اندروید CRM شرکت </span>
                                                    <span class="label label-sm label-info">محصولات داخلی</span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> آماده سازی پیشنهاد تجاری برای وب سایت  </span>
                                                    <span class="label label-sm label-danger">چشم انداز هوشمند</span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> ثبت قرارداد تجاری با AutoSmart</span>
                                                    <span class="label label-sm label-default">AutoSmart</span>
                                                    <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group dropup">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> جلسه هیئت مدیره شرکت </span>
                                                    <span class="label label-sm label-success">Cruise</span>
                                                    <span class="task-bell">
                                                                <i class="fa fa-bell-o"></i>
                                                            </span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group dropup">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="last-line">
                                                <div class="task-checkbox">
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="task-title">
                                                    <span class="task-title-sp"> بحث سرمایه گذاری KeenThemes </span>
                                                    <span class="label label-sm label-warning">KeenThemes </span>
                                                </div>
                                                <div class="task-config">
                                                    <div class="task-config-btn btn-group dropup">
                                                        <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                            <i class="fa fa-cog"></i>
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-check"></i> تکمیل </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-pencil"></i> ویرایش </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-trash-o"></i> لغو </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- END START TASK LIST -->
                                    </div>
                                </div>
                                <div class="task-footer">
                                    <div class="btn-arrow-link pull-right">
                                        <a href="javascript:;"> مشاهده تمام سوابق </a>
                                        <i class="icon-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-cursor font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase"> آمار عمومی </span>
                                </div>
                                <div class="actions">
                                    <a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">
                                        <i class="fa fa-repeat"></i> بارگذاری مجدد </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number transactions" data-percent="55">
                                                <span>+55</span>% </div>
                                            <a class="title" href="javascript:;"> معاملات
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number visits" data-percent="85">
                                                <span>+85</span>% </div>
                                            <a class="title" href="javascript:;"> بازدیدهای جدید
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="easy-pie-chart">
                                            <div class="number bounce" data-percent="46">
                                                <span>-46</span>% </div>
                                            <a class="title" href="javascript:;"> بونس
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">وضعیت سرور</span>
                                    <span class="caption-helper">آمار ماهانه...</span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                    <a href="" class="reload"> </a>
                                    <a href="" class="remove"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar5"></div>
                                            <a class="title" href="javascript:;"> شبکه
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_bar6"></div>
                                            <a class="title" href="javascript:;"> بارگذاری CPU
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="margin-bottom-10 visible-sm"> </div>
                                    <div class="col-md-4">
                                        <div class="sparkline-chart">
                                            <div class="number" id="sparkline_line"></div>
                                            <a class="title" href="javascript:;"> نرخ بارگیری
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN REGIONAL STATS PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase"> آمار منطقه ای </span>
                                </div>
                                <div class="actions">
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-cloud-upload"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-wrench"></i>
                                    </a>
                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" data-container="false" data-placement="bottom" href="javascript:;"> </a>
                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="region_statistics_loading">
                                    <img src="/global/img/loading.gif" alt="loading" /> </div>
                                <div id="region_statistics_content" class="display-none">
                                    <div class="btn-toolbar margin-bottom-10">
                                        <div class="btn-group btn-group-circle" data-toggle="buttons">
                                            <a href="" class="btn grey-salsa btn-sm active"> کاربران </a>
                                            <a href="" class="btn grey-salsa btn-sm"> سفارشات </a>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> انتخاب منطقه
                                                <span class="fa fa-angle-down"> </span>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;" id="regional_stat_world"> جهان </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" id="regional_stat_usa"> آمریکا </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" id="regional_stat_europe"> اروپا </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" id="regional_stat_russia"> روسیه </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;" id="regional_stat_germany"> آلمان </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="vmap_world" class="vmaps display-none"> </div>
                                    <div id="vmap_usa" class="vmaps display-none"> </div>
                                    <div id="vmap_europe" class="vmaps display-none"> </div>
                                    <div id="vmap_russia" class="vmaps display-none"> </div>
                                    <div id="vmap_germany" class="vmaps display-none"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- END REGIONAL STATS PORTLET-->
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title tabbable-line">
                                <div class="caption">
                                    <i class="icon-globe font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">فید</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" class="active" data-toggle="tab"> سیستم </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab"> فعالیت ها </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="portlet-body">
                                <!--BEGIN TABS-->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                            <ul class="feeds">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                                    <span class="label label-sm label-info"> اقدام به انجام
                                                                                <i class="fa fa-share"></i>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> اکنون </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> نسخه جدید v1.4 راه اندازی شد! </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 دقیقه </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-bolt"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> دیتابیس سرور #12 پربار است. لطفا مشکل را رفع کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 دقیقه </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 دقیقه </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 40 دقیقه </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> کاربر جدید ثبت نام کرد. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 1.5 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                                    <span class="label label-sm label-default "> از کار افتاده </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 3 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 5 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 18 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 21 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 22 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 21 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 22 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 21 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 22 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 21 ساعت </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bullhorn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش جدید دریافت شد. لطفا بررسی کنید. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 22 ساعت </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab_1_2">
                                        <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                            <ul class="feeds">
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> سفارش جدید دریافت شد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 10 دقیقه </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-bolt"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> سفارش #24DOP4 رد شد.
                                                                    <span class="label label-sm label-danger "> اقدام به انجام
                                                                                <i class="fa fa-share"></i>
                                                                            </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 دقیقه </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bell-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> کاربر جدید ثبت نام کرد </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> اکنون </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--END TABS-->
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light calendar bordered">
                            <div class="portlet-title ">
                                <div class="caption">
                                    <i class="icon-calendar font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">فید</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="calendar"> </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <!-- BEGIN PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bubble font-hide hide"></i>
                                    <span class="caption-subject font-hide bold uppercase">گفتگو</span>
                                </div>
                                <div class="actions">
                                    <div class="portlet-input input-inline">
                                        <div class="input-icon right">
                                            <i class="icon-magnifier"></i>
                                            <input type="text" class="form-control input-circle" placeholder="جستجو..."> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body" id="chats">
                                <div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">
                                    <ul class="chats">
                                        <li class="out">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> آناهیتا </a>
                                                <span class="datetime"> در 20:11 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> آناهیتا </a>
                                                <span class="datetime"> در 20:11 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> کوروش </a>
                                                <span class="datetime"> در 20:30 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> کوروش </a>
                                                <span class="datetime"> در 20:30 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> محمد </a>
                                                <span class="datetime"> در 20:33 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> محمد </a>
                                                <span class="datetime"> در 20:35 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> کوروش </a>
                                                <span class="datetime"> در 20:40 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="in">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> محمد </a>
                                                <span class="datetime"> در 20:40 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </span>
                                            </div>
                                        </li>
                                        <li class="out">
                                            <img class="avatar" alt="" src="/layouts/layout/img/avatar1.jpg" />
                                            <div class="message">
                                                <span class="arrow"> </span>
                                                <a href="javascript:;" class="name"> کوروش </a>
                                                <span class="datetime"> در 20:54 </span>
                                                <span class="body"> لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                                                            </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-form">
                                    <div class="input-cont">
                                        <input class="form-control" type="text" placeholder="پیغام خود را تایپ کنید..." /> </div>
                                    <div class="btn-cont">
                                        <span class="arrow"> </span>
                                        <a href="" class="btn blue icn-only">
                                            <i class="fa fa-check icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-bubble font-dark hide"></i>
                                    <span class="caption-subject font-hide bold uppercase">آخرین کاربران</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> گزینه 1</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">گزینه 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">گزینه 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">گزینه 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!--begin: widget 1-1 -->
                                        <div class="mt-widget-1">
                                            <div class="mt-icon">
                                                <a href="#">
                                                    <i class="icon-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mt-img">
                                                <img src="/pages/media/users/avatar80_8.jpg"> </div>
                                            <div class="mt-body">
                                                <h3 class="mt-username">Diana Ellison</h3>
                                                <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                                <div class="mt-stats">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn font-red">
                                                            <i class="icon-bubbles"></i> 1,7k </a>
                                                        <a href="javascript:;" class="btn font-green">
                                                            <i class="icon-social-twitter"></i> 2,6k </a>
                                                        <a href="javascript:;" class="btn font-yellow">
                                                            <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: widget 1-1 -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--begin: widget 1-2 -->
                                        <div class="mt-widget-1">
                                            <div class="mt-icon">
                                                <a href="#">
                                                    <i class="icon-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mt-img">
                                                <img src="/pages/media/users/avatar80_7.jpg"> </div>
                                            <div class="mt-body">
                                                <h3 class="mt-username">Jason Baker</h3>
                                                <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                                <div class="mt-stats">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn font-yellow">
                                                            <i class="icon-bubbles"></i> 1,7k </a>
                                                        <a href="javascript:;" class="btn font-blue">
                                                            <i class="icon-social-twitter"></i> 2,6k </a>
                                                        <a href="javascript:;" class="btn font-green">
                                                            <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: widget 1-2 -->
                                    </div>
                                    <div class="col-md-4">
                                        <!--begin: widget 1-3 -->
                                        <div class="mt-widget-1">
                                            <div class="mt-icon">
                                                <a href="#">
                                                    <i class="icon-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mt-img">
                                                <img src="/pages/media/users/avatar80_6.jpg"> </div>
                                            <div class="mt-body">
                                                <h3 class="mt-username">Julia Berry</h3>
                                                <p class="mt-user-title"> لورم ایپسوم یک متن آزمایشی است. </p>
                                                <div class="mt-stats">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn font-yellow">
                                                            <i class="icon-bubbles"></i> 1,7k </a>
                                                        <a href="javascript:;" class="btn font-red">
                                                            <i class="icon-social-twitter"></i> 2,6k </a>
                                                        <a href="javascript:;" class="btn font-green">
                                                            <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end: widget 1-3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-microphone font-dark hide"></i>
                                    <span class="caption-subject bold font-dark uppercase"> آخرین کارها</span>
                                    <span class="caption-helper">گزینه پیش فرض...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn red btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">تنظیمات</label>
                                        <label class="btn  red btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-widget-2">
                                            <div class="mt-head" style="background-image: url(/pages/img/background/32.jpg);">
                                                <div class="mt-head-label">
                                                    <button type="button" class="btn btn-success">منهتن</button>
                                                </div>
                                                <div class="mt-head-user">
                                                    <div class="mt-head-user-img">
                                                        <img src="/pages/img/avatars/team7.jpg"> </div>
                                                    <div class="mt-head-user-info">
                                                        <span class="mt-user-name">کریس جگرز</span>
                                                        <span class="mt-user-time">
                                                                    <i class="icon-emoticon-smile"></i> 3 دقیقه قبل </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-body">
                                                <h3 class="mt-body-title"> توماس کلارک </h3>
                                                <p class="mt-body-description"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد </p>
                                                <ul class="mt-body-stats">
                                                    <li class="font-green">
                                                        <i class="icon-emoticon-smile"></i> 3,7k</li>
                                                    <li class="font-yellow">
                                                        <i class=" icon-social-twitter"></i> 3,7k</li>
                                                    <li class="font-red">
                                                        <i class="  icon-bubbles"></i> 3,7k</li>
                                                </ul>
                                                <div class="mt-body-actions">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn">
                                                            <i class="icon-bubbles"></i> نشان گذاری </a>
                                                        <a href="javascript:;" class="btn ">
                                                            <i class="icon-social-twitter"></i> اشتراک </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-widget-2">
                                            <div class="mt-head" style="background-image: url(/pages/img/background/43.jpg);">
                                                <div class="mt-head-label">
                                                    <button type="button" class="btn btn-danger">لندن</button>
                                                </div>
                                                <div class="mt-head-user">
                                                    <div class="mt-head-user-img">
                                                        <img src="/pages/img/avatars/team3.jpg"> </div>
                                                    <div class="mt-head-user-info">
                                                        <span class="mt-user-name">هری هریس</span>
                                                        <span class="mt-user-time">
                                                                    <i class="icon-user"></i> 3 دقیقه قبل </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-body">
                                                <h3 class="mt-body-title"> کریستین دیویدسون </h3>
                                                <p class="mt-body-description"> این یک واقعیت طولانی است که یک خواننده هیجان زده خواهد شد </p>
                                                <ul class="mt-body-stats">
                                                    <li class="font-green">
                                                        <i class="icon-emoticon-smile"></i> 3,7k</li>
                                                    <li class="font-yellow">
                                                        <i class=" icon-social-twitter"></i> 3,7k</li>
                                                    <li class="font-red">
                                                        <i class="  icon-bubbles"></i> 3,7k</li>
                                                </ul>
                                                <div class="mt-body-actions">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn ">
                                                            <i class="icon-bubbles"></i> نشان گذاری </a>
                                                        <a href="javascript:;" class="btn ">
                                                            <i class="icon-social-twitter"></i> اشتراک </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-microphone font-dark hide"></i>
                                    <span class="caption-subject bold font-dark uppercase"> آخرین پروژه ها </span>
                                    <span class="caption-helper">گزینه پیش فرض...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                                        <label class="btn blue btn-outline btn-circle btn-sm active">
                                            <input type="radio" name="options" class="toggle" id="option1">اقدامات</label>
                                        <label class="btn  blue btn-outline btn-circle btn-sm">
                                            <input type="radio" name="options" class="toggle" id="option2">ابزارها</label>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-widget-4">
                                            <div class="mt-img-container">
                                                <img src="/pages/img/background/34.jpg" /> </div>
                                            <div class="mt-container bg-purple-opacity">
                                                <div class="mt-head-title"> اصلاح و راه اندازی وب سایت </div>
                                                <div class="mt-body-icons">
                                                    <a href="#">
                                                        <i class=" icon-pencil"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-map"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-trash"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-footer-button">
                                                    <button type="button" class="btn btn-circle btn-danger btn-sm">Dior</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-widget-4">
                                            <div class="mt-img-container">
                                                <img src="/pages/img/background/46.jpg" /> </div>
                                            <div class="mt-container bg-green-opacity">
                                                <div class="mt-head-title"> توسعه و گسترش CRM </div>
                                                <div class="mt-body-icons">
                                                    <a href="#">
                                                        <i class=" icon-social-twitter"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-bubbles"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-bell"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-footer-button">
                                                    <button type="button" class="btn btn-circle blue-ebonyclay btn-sm">Nike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-widget-4">
                                            <div class="mt-img-container">
                                                <img src="/pages/img/background/37.jpg" /> </div>
                                            <div class="mt-container bg-dark-opacity">
                                                <div class="mt-head-title"> کمپین های بازاریابی </div>
                                                <div class="mt-body-icons">
                                                    <a href="#">
                                                        <i class=" icon-bubbles"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-map"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class=" icon-cup"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-footer-button">
                                                    <button type="button" class="btn btn-circle btn-success btn-sm">Honda</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet light portlet-fit bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-microphone font-dark hide"></i>
                                    <span class="caption-subject bold font-dark uppercase"> فعالیت ها</span>
                                    <span class="caption-helper">گزینه پیش فرض...</span>
                                </div>
                                <div class="actions">
                                    <div class="btn-group">
                                        <a class="btn red btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> اقدامات
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;"> گزینه 1</a>
                                            </li>
                                            <li class="divider"> </li>
                                            <li>
                                                <a href="javascript:;">گزینه 2</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">گزینه 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">گزینه 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-widget-3">
                                            <div class="mt-head bg-blue-hoki">
                                                <div class="mt-head-icon">
                                                    <i class=" icon-social-twitter"></i>
                                                </div>
                                                <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                                <span class="mt-head-date"> 25 شهریور, 2015 </span>
                                                <div class="mt-head-button">
                                                    <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                                </div>
                                            </div>
                                            <div class="mt-body-actions-icons">
                                                <div class="btn-group btn-group btn-group-justified">
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-widget-3">
                                            <div class="mt-head bg-red">
                                                <div class="mt-head-icon">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                                <span class="mt-head-date"> 12 مرداد, 2016 </span>
                                                <div class="mt-head-button">
                                                    <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                                </div>
                                            </div>
                                            <div class="mt-body-actions-icons">
                                                <div class="btn-group btn-group btn-group-justified">
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mt-widget-3">
                                            <div class="mt-head bg-green">
                                                <div class="mt-head-icon">
                                                    <i class=" icon-graduation"></i>
                                                </div>
                                                <div class="mt-head-desc"> لورم ایپسوم متن آزمایشی است... </div>
                                                <span class="mt-head-date"> 3 تیر, 2015 </span>
                                                <div class="mt-head-button">
                                                    <button type="button" class="btn btn-circle btn-outline white btn-sm">افزودن</button>
                                                </div>
                                            </div>
                                            <div class="mt-body-actions-icons">
                                                <div class="btn-group btn-group btn-group-justified">
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                                </span>رکورد </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-camera"></i>
                                                                </span>عکس </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-calendar"></i>
                                                                </span>تاریخ </a>
                                                    <a href="javascript:;" class="btn ">
                                                                <span class="mt-icon">
                                                                    <i class="glyphicon glyphicon-record"></i>
                                                                </span>رنک </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> کاربران
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> هشدارها
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> بیشتر
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> هشدارها </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> اعلان ها </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> فعالیت ها </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> تنظیمات </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                            <h3 class="list-heading">کارکنان</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">8</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar3.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">کوروش</h4>
                                        <div class="media-heading-sub"> مدیر پروژه </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="/layouts/layout/img/avatar1.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">حسام </h4>
                                        <div class="media-heading-sub"> کارگردان هنری </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">3</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar4.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Hubert</h4>
                                        <div class="media-heading-sub"> CTO </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="/layouts/layout/img/avatar2.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ella Wong</h4>
                                        <div class="media-heading-sub"> CEO </div>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="list-heading">مشتریان</h3>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">2</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar6.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lara Kunis</h4>
                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="label label-sm label-success">جدید</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar7.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                        <div class="media-heading-sub"> مدیر پروژه,
                                            <br> SmartBizz PTL </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="/layouts/layout/img/avatar8.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Lisa Stone</h4>
                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">7</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar9.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Deon Portalatin</h4>
                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="media-object" src="/layouts/layout/img/avatar10.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Irina Savikova</h4>
                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">4</span>
                                    </div>
                                    <img class="media-object" src="/layouts/layout/img/avatar11.jpg" alt="...">
                                    <div class="media-body">
                                        <h4 class="media-heading">Maria Gomez</h4>
                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="page-quick-sidebar-item">
                            <div class="page-quick-sidebar-chat-user">
                                <div class="page-quick-sidebar-nav">
                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                        <i class="icon-arrow-left"></i>بازگشت</a>
                                </div>
                                <div class="page-quick-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">کوروش</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> می توانید گزارش را برایم ارسال کنید؟ </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> گزارش تهیه شده است. تا چند لحظه دیگر می فرستم. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">کوروش</a>
                                            <span class="datetime">20:15</span>
                                            <span class="body"> بسیار خوب. ممنون! :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:16</span>
                                            <span class="body"> خواهش می کنم. بابت تاخیر شرمنده! </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">کوروش</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> مشکلی نیست! </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> براتون ایمیل کردم. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">کوروش</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> عالیه! ممنون. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">Ella Wong</a>
                                            <span class="datetime">20:40</span>
                                            <span class="body"> لطفا نظرتون رو بفرمایید. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                        <div class="message">
                                            <span class="arrow"></span>
                                            <a href="javascript:;" class="name">کوروش</a>
                                            <span class="datetime">20:17</span>
                                            <span class="body"> حتما. بررسی می کنم و نظرمو میگم بهتون. </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-quick-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="پیغام خود را تایپ کنید...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn green">
                                                <i class="icon-paper-clip"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                        <div class="page-quick-sidebar-alerts-list">
                            <h3 class="list-heading">عمومی</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                    <span class="label label-sm label-warning "> اقدام به انجام
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> اکنون </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 دقیقه </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سفارش جدید دریافت شد با
                                                    <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                    <span class="label label-sm label-warning"> از کار افتاده </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 ساعت </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-default">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 دقیقه </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <h3 class="list-heading">سیستم</h3>
                            <ul class="feeds list-items">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> 4 وظیفه انجام نشده دارید.
                                                    <span class="label label-sm label-warning "> اقدام به انجام
                                                                <i class="fa fa-share"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> اکنون </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش مالی سال 2013 منتشر شده است. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 دقیقه </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-default">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سفارش جدید دریافت شد با
                                                    <span class="label label-sm label-success"> شماره مرجع: DR23923 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 30 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> شما 5 عضویت در انتظار دارید که نیاز به بررسی سریع دارند. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 24 دقیقه </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"> سخت افزار وب سرور باید ارتقا یابد.
                                                    <span class="label label-sm label-default "> از کار افتاده </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 2 ساعت </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-briefcase"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc"> گزارش IPO سال 2013 منتشر شده است. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date"> 20 دقیقه </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                        <div class="page-quick-sidebar-settings-list">
                            <h3 class="list-heading">تنظیمات عمومی</h3>
                            <ul class="list-items borderless">
                                <li> فعال کردن اعلان ها
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> اجازه ردیابی
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> خطاهای ورود
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> ارسال خودکار مشکلات
                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> فعال سازی اس ام اس
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <h3 class="list-heading">تنظیمات سیستم</h3>
                            <ul class="list-items borderless">
                                <li> سطح امنیتی
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="1">Normal</option>
                                        <option value="2" selected>متوسط</option>
                                        <option value="e">بالا</option>
                                    </select>
                                </li>
                                <li> تعداد تلاش برای ارسال ایمیل
                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                <li> پورت SMTP ثانویه
                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                <li> اطلاع دادن خطاهای سیستم
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                <li> اطلاع دادن خطاهای SMTP
                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                            </ul>
                            <div class="inner-content">
                                <button class="btn btn-success">
                                    <i class="icon-settings"></i> ذخیره تغییرات </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
@endsection