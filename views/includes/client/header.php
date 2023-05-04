<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>didikala | Index Page</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="/assets/client/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/materialdesignicons.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/client/css/vendor/bootstrap.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/client/css/vendor/bootstrap-slider.min.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/jquery.horizontalmenu.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/fancybox.min.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/nice-select.css">
    <link rel="stylesheet" href="/assets/client/css/vendor/nouislider.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/client/css/main.css">
    <link rel="stylesheet" href="/assets/client/css/colors/default.css" id="colorswitch">
</head>

<body>
<div class="wrapper">
    <!-- Start header -->
    <header class="main-header">
        <!-- Start ads -->

        <!-- End ads -->
        <!-- Start topbar -->
        <div class="container main-container">
            <div class="topbar dt-sl">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="logo-area">
                            <a href="/">
                                <img src="/assets/client/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 hidden-sm">
                        <div class="search-area dt-sl">
                            <form action="" class="search">
                                <input type="text"
                                       placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                                <i class="far fa-search search-icon"></i>
                                <button class="close-search-result" type="button"><i
                                        class="mdi mdi-close"></i></button>
                                <div class="search-result">
                                    <ul>
                                        <li>
                                            <a href="#">موبایل</a>
                                        </li>
                                        <li>
                                            <a href="#">مد و پوشاک</a>
                                        </li>
                                        <li>
                                            <a href="#">میکروفن</a>
                                        </li>
                                        <li>
                                            <a href="#">میز تلویزیون</a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-6 topbar-left">
                        <ul class="nav float-left">
                            <li class="nav-item account dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="label-dropdown">حساب کاربری</span>
                                    <i class="mdi mdi-account-circle-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-card-details-outline"></i>پروفایل
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="float-left badge badge-dark">۴</span>
                                        <i class="mdi mdi-comment-text-outline"></i>پیغام ها
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-account-edit-outline"></i>ویرایش حساب کاربری
                                    </a>
                                    <div class="dropdown-divider" role="presentation"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="mdi mdi-logout-variant"></i>خروج
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End topbar -->

        <!-- Start bottom-header -->
        <div class="bottom-header dt-sl mb-sm-bottom-header">
            <div class="container main-container">
                <!-- Start Main-Menu -->
                <nav class="main-menu d-flex justify-content-md-between justify-content-end dt-sl">
                    <ul class="list hidden-sm">
                        <li class="list-item category-list">
                            <a href="#"><i class="fal fa-bars ml-1"></i>دسته بندی کالاها</a>
                            <ul>

                                <?php

                                    foreach ($GLOBALS["root_categories"] as $category){
                                        ?>
                                            <li> <!-- Level 1 -->
                                                <a href="/filter?keyword=&categories[]=<?php echo $category["id"] ?>&filter_btn=">
                                                    <?php echo $category["name"] ?>
                                                </a>
                                                <ul class="row">
                                                    <?php
                                                        $subCats = getSubCategories($category["id"]);

                                                        foreach ($subCats as $subCat){
                                                            ?>
                                                                <li class="sublist--title"><a href="/filter?keyword=&categories[]=<?php echo $subCat["id"] ?>&filter_btn="><?php echo $subCat["name"] ?></a></li><!-- Level 2 -->
                                                            <?php
                                                            $subCatsLevel3 = getSubCategories($subCat["id"]);
                                                            foreach ($subCatsLevel3 as $subCatLevel3){
                                                                ?>
                                                                <li class="sublist--item"><a href="/filter?keyword=&categories[]=<?php echo $subCatLevel3["id"] ?>&filter_btn="><?php echo $subCatLevel3["name"] ?></a></li><!-- Level 3 -->
                                                                <?php
                                                            }
                                                        }
                                                    ?>


                                                </ul>
                                            </li>
                                        <?php
                                    }

                                ?>

                            </ul>
                        </li>
                    </ul>
                    <div class="nav">
                        <div class="nav-item cart--wrapper">
                            <a class="nav-link" href="#">
                                <span class="label-dropdown">سبد خرید</span>
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="count">2</span>
                            </a>
                            <div class="header-cart-info">
                                <div class="header-cart-info-header">
                                    <div class="header-cart-info-count">
                                        3 کالا
                                    </div>
                                    <a href="#" class="header-cart-info-link">
                                        <span>مشاهده سبد خرید</span>
                                    </a>
                                </div>
                                <ul class="header-basket-list do-nice-scroll">
                                    <li class="cart-item">
                                        <a href="#" class="header-basket-list-item">
                                            <div class="header-basket-list-item-image">
                                                <img src="/assets/client/img/cart/1.jpg" alt="">
                                            </div>
                                            <div class="header-basket-list-item-content">
                                                <p class="header-basket-list-item-title">
                                                    گوشی موبایل سامسونگ مدل Galaxy A30 SM-A305F/DS دو سیم کارت ظرفیت
                                                    64 گیگابایت
                                                </p>
                                                <div class="header-basket-list-item-footer">
                                                    <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                        <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #2196f3"></div>
                                                                آبی
                                                            </span>
                                                    </div>
                                                    <button class="header-basket-list-item-remove">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cart-item">
                                        <a href="#" class="header-basket-list-item">
                                            <div class="header-basket-list-item-image">
                                                <img src="/assets/client/img/cart/2.jpg" alt="">
                                            </div>
                                            <div class="header-basket-list-item-content">
                                                <p class="header-basket-list-item-title">
                                                    گوشی موبایل هوآوی مدل Y9 2019 JKM-LX1 دو سیم کارت ظرفیت 64
                                                    گیگابایت
                                                </p>
                                                <div class="header-basket-list-item-footer">
                                                    <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                        <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #212121"></div>
                                                                سفید
                                                            </span>
                                                    </div>
                                                    <button class="header-basket-list-item-remove">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cart-item">
                                        <a href="#" class="header-basket-list-item">
                                            <div class="header-basket-list-item-image">
                                                <img src="/assets/client/img/cart/3.jpg" alt="">
                                            </div>
                                            <div class="header-basket-list-item-content">
                                                <p class="header-basket-list-item-title">
                                                    گوشی موبایل سامسونگ مدل Galaxy A70 SM-A705FN/DS دو سیم‌کارت
                                                    ظرفیت 128 گیگابایت
                                                </p>
                                                <div class="header-basket-list-item-footer">
                                                    <div class="header-basket-list-item-props">
                                                            <span class="header-basket-list-item-props-item">
                                                                1 x
                                                            </span>
                                                        <span class="header-basket-list-item-props-item">
                                                                <div class="header-basket-list-item-color-badge"
                                                                     style="background: #FFFFFF"></div>
                                                                سفید
                                                            </span>
                                                    </div>
                                                    <button class="header-basket-list-item-remove">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="header-cart-info-footer">
                                    <div class="header-cart-info-total">
                                        <span class="header-cart-info-total-text">مبلغ قابل پرداخت:</span>
                                        <p class="header-cart-info-total-amount">
                                                <span class="header-cart-info-total-amount-number">
                                                    9,500,000 <span>تومان</span></span>
                                        </p>
                                    </div>

                                    <div>
                                        <a href="#" class="header-cart-info-submit">
                                            ثبت سفارش
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn-menu">
                        <div class="align align__justify">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    <div class="side-menu">
                        <div class="logo-nav-res dt-sl text-center">
                            <a href="#">
                                <img src="assets/client/img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="search-box-side-menu dt-sl text-center mt-2 mb-3">
                            <form action="">
                                <input type="text" name="s" placeholder="جستجو کنید...">
                                <i class="mdi mdi-magnify"></i>
                            </form>
                        </div>
                        <ul class="navbar-nav dt-sl">
                            <li class="sub-menu">
                                <a href="#">کالای دیجیتال</a>
                                <ul>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="#">بهداشت و سلامت</a>
                                <ul>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="#">ابزار و اداری</a>
                                <ul>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li>
                                        <a href="#">عنوان دسته</a>
                                    </li>
                                    <li class="sub-menu">
                                        <a href="#">عنوان دسته</a>
                                        <ul>
                                            <li>
                                                <a href="#">زیر منو یک</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو دو</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو سه</a>
                                            </li>
                                            <li>
                                                <a href="#">زیر منو چهار</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">مد و پوشاک</a>
                            </li>
                            <li>
                                <a href="#">خانه و آشپزخانه</a>
                            </li>
                            <li>
                                <a href="#">ورزش و سفر</a>
                            </li>
                        </ul>
                    </div>
                    <div class="overlay-side-menu">
                    </div>
                </nav>
                <!-- End Main-Menu -->
            </div>
        </div>
        <!-- End bottom-header -->
    </header>
    <!-- End header -->