<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>قالب پنل مدیریت Frest</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/admin/images/ico/favicon.ico">
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/components.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/tables/datatable/datatables.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="bottom" title="ایمیل"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="bottom" title="گفتگو"><i class="ficon bx bx-chat"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="bottom" title="وظایف"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="bottom" title="تقویم"><i class="ficon bx bx-calendar-alt"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="جستجو ..." tabindex="0" data-search="template-search">
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ir"></i><span class="selected-language">فارسی</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="fa"><i class="flag-icon flag-icon-ir mr-50"></i> فارسی</a><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> انگلیسی</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> فرانسوی</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> آلمانی</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> پرتغالی</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="input" type="text" placeholder="جستجو ..." tabindex="-1" data-search="template-search">
                            <div class="search-input-close"><i class="bx bx-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 اعلان جدید</span><span class="text-bold-400 cursor-pointer">علامت خوانده شده به همه</span></div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/assets/admin/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">تبریک بابت دریافت جوایز</span> در مسابقات سالانه</h6><small class="notification-text">15 اردیبهشت 12:32 ب.ظ</small>
                                        </div>
                                    </div></a>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/assets/admin/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">پیام جدید</span> دریافت شد</h6><small class="notification-text">شما 18 پیام خوانده نشده دارید</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center py-0">
                                        <div class="media-left pr-0"><img class="mr-1" src="/assets/admin/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">به روز رسانی آماده است</span></h6><small class="notification-text">لورم ایپسوم متن ساختگی با تولید سادگی</small>
                                        </div>
                                        <div class="media-right pl-0">
                                            <div class="row border-left text-center">
                                                <div class="col-12 px-50 py-50 border-bottom">
                                                    <h6 class="media-heading text-bold-500 mb-0">به‌روزرسانی</h6>
                                                </div>
                                                <div class="col-12 px-50 py-50">
                                                    <h6 class="media-heading mb-0">بستن</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">ل‌د</span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">مشتری جدید</span> ثبت نام کرد</h6><small class="notification-text">1 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer">
                                    <div class="media d-flex align-items-center justify-content-between">
                                        <div class="media-left pr-0">
                                            <div class="media-body">
                                                <h6 class="media-heading">پیشنهاد های جدید</h6>
                                            </div>
                                        </div>
                                        <div class="media-right">
                                            <div class="custom-control custom-switch">
                                                <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                                                <label class="custom-control-label" for="notificationSwtich"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">نرم افزار</span> تایید شد</h6><small class="notification-text">6 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between read-notification cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/assets/admin/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">فایل جدید</span> ارسال شد</h6><small class="notification-text">4 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center">
                                        <div class="media-left pr-0">
                                            <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                                                <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">گزارش بودجه</span> ایجاد شد</h6><small class="notification-text">25 ساعت پیش</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between cursor-pointer">
                                    <div class="media d-flex align-items-center border-0">
                                        <div class="media-left pr-0">
                                            <div class="avatar mr-1 m-0"><img src="/assets/admin/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading"><span class="text-bold-500">مشتری جدید</span> دیدگاهی ارسال کرد</h6><small class="notification-text">2 روز پیش</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">خواندن همه اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name">تونی استارک</span><span class="user-status text-muted">آماده</span></div><span><img class="round" src="/assets/admin/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span></a>
                        <div class="dropdown-menu pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> ویرایش پروفایل</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> صندوق ورودی من</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> وظیفه</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> گفتگو ها</a>
                            <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="/html/vertical-menu-template-semi-dark/index.html">
                    <div class="brand-logo"><img class="logo" src="/assets/admin/images/logo/logo.png"></div>
                    <h2 class="brand-text mb-0">Frest</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" navigation-header"><span>برنامه ها</span>
            </li>
            <li class=" nav-item"><a href="/dashboard/categories"><span class="menu-title" data-i18n="Email">دسته بندی ها</span></a>
            </li>
            <li class=" nav-item"><a href="/dashboard/products"><span class="menu-title" data-i18n="Chat">محصولات</span></a>
            </li>
            <li class=" nav-item"><a href="/dashboard/employees"><span class="menu-title" data-i18n="Chat">کارمندان</span></a>
            </li>
            <li class=" nav-item"><a href="/dashboard/orders"><span class="menu-title" data-i18n="Chat">سفارشات</span></a>
            </li>
            <li class=" nav-item"><a href="/dashboard/payments"><span class="menu-title" data-i18n="Chat">پرداخت ها</span></a>
            </li>

<!--            <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="Invoice">صورتحساب</span></a>-->
<!--                <ul class="menu-content">-->
<!--                    <li><a href="app-invoice-list.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">لیست صورتحساب ها</span></a>-->
<!--                    </li>-->
<!--                    <li><a href="app-invoice.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice">صورتحساب</span></a>-->
<!--                    </li>-->
<!--                    <li><a href="app-invoice-edit.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">ویرایش صورتحساب</span></a>-->
<!--                    </li>-->
<!--                    <li><a href="app-invoice-add.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Add">افزودن صورتحساب</span></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->


        </ul>
    </div>
</div>
<!-- END: Main Menu-->