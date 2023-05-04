
<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>صفحه ورود</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/admin/images/ico/favicon.ico">
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/components.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/admin/css/pages/authentication.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- login page start -->
            <section id="auth-login" class="row flexbox-container">
                <div class="col-xl-8 col-11">
                    <div class="card bg-authentication mb-0">
                        <div class="row m-0">
                            <!-- left section-login -->
                            <div class="col-md-6 col-12 px-0">
                                <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="text-center mb-2">خوش آمدید</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form action="/auth/login/store" method="POST">
                                                <?php

                                                showInputError("action");

                                                ?>
                                                <div class="form-group mb-50">
                                                    <label class="text-bold-700" for="exampleInputEmail1">موبایل</label>
                                                    <input name="mobile" type="tel" class="form-control text-left" id="exampleInputEmail1" placeholder="موبایل" dir="ltr">
                                                </div>
                                                <?php
                                                showInputError("mobile");
                                                ?>
                                                <div class="form-group">
                                                    <label class="text-bold-700" for="exampleInputPassword1">رمز عبور</label>
                                                    <input name="password" type="password" class="form-control text-left" id="exampleInputPassword1" placeholder="رمز عبور" dir="ltr">
                                                </div>
                                                <?php
                                                showInputError("password");
                                                ?>
                                                <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <div class="checkbox checkbox-sm">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="checkboxsmall" for="exampleCheck1"><small>مرا به خاطر بسپار</small></label>
                                                        </div>
                                                    </div>
                                                    <div class="text-right line-height-2"><a href="auth-forgot-password.html" class="card-link"><small>رمز عبورتان را فراموش کرده اید؟</small></a></div>
                                                </div>
                                                <button name="submit" type="submit" class="btn btn-primary glow w-100 position-relative">ورود<i id="icon-arrow" class="bx bx-left-arrow-alt"></i></button>
                                            </form>
                                            <hr>
                                            <div class="text-center"><small class="mr-25">حسابی ندارید؟</small><a href="auth-register.html"><small>ثبت نام</small></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- right section image -->
                            <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                <div class="card-content">
                                    <img class="img-fluid" src="/assets/admin/images/pages/login.png" alt="branding logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login page ends -->

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="/assets/admin/vendors/js/vendors.min.js"></script>
<script src="/assets/admin/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="/assets/admin/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
<script src="/assets/admin/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/assets/admin/js/scripts/configs/vertical-menu-light.js"></script>
<script src="/assets/admin/js/core/app-menu.js"></script>
<script src="/assets/admin/js/core/app.js"></script>
<script src="/assets/admin/js/scripts/components.js"></script>
<script src="/assets/admin/js/scripts/footer.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>