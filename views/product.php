<?php
include "includes/client/header.php";
?>
    <!-- Start main-content -->
    <main class="main-content dt-sl mb-3">
        <div class="container main-container">
            <!-- Start title - breadcrumb -->
            <div class="title-breadcrumb-special dt-sl mb-3">
                <div class="breadcrumb dt-sl">
                    <nav>
                        <a href="#">موبایل</a>
                        <a href="#">سامسونگ</a>
                        <a href="#">مدل Galaxy A50 SM-A505F/DS</a>
                    </nav>
                </div>
            </div>
            <!-- End title - breadcrumb -->
            <!-- Start Product -->
            <div class="dt-sn mb-5 dt-sl">
                <div class="row">
                    <!-- Product Gallery-->
                    <div class="col-lg-4 col-md-6 ps-relative">
                        <!-- Product Options-->
                        <ul class="gallery-options">
                            <li>
                                <button class="add-favorites"><i class="mdi mdi-heart"></i></button>
                                <span class="tooltip-option">افزودن به علاقمندی</span>
                            </li>
                        </ul>

                        <div class="product-gallery">
                            <span class="badge">پر فروش</span>
                            <div class="product-carousel owl-carousel" data-slider-id="1">
                                <div class="item">
                                    <a class="gallery-item" href="/media/<?php echo $product["image"] ?>"
                                       data-fancybox="gallery1">
                                        <img src="/media/<?php echo $product["image"] ?>" alt="<?php echo $product["name"] ?>">
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center flex-wrap">
                                <ul class="product-thumbnails owl-thumbs ml-2" data-slider-id="1">
                                    <li class="owl-thumb-item active">
                                        <a href="">
                                            <img src="/media/<?php echo $product["image"] ?>" alt="<?php echo $product["name"] ?>">
                                        </a>
                                    </li>
                                </ul>
<!--                                <ul class="product-thumbnails">-->
<!--                                    <li>-->
<!--                                        <a class="navi-link text-sm" href="/assets/client/video/download.mp4"-->
<!--                                           data-fancybox data-width="960" data-height="640">-->
<!--                                            <i class="mdi mdi-video text-lg d-block mb-1"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </div>
                    </div>
                    <!-- Product Info -->
                    <div class="col-lg-8 col-md-6 py-2">
                        <div class="product-info dt-sl">
                            <div class="product-title dt-sl">
                                <h1>
                                    <?php echo $product["name"] ?>
                                </h1>
                                <h3>
                                    <?php echo $product["enname"] ?>
                                </h3>
                            </div>
<!--                            <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 dt-sl">-->
<!--                                <h2>کد محصول:225566</h2>-->
<!--                            </div>-->
                            <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 dt-sl">
                                <h2>قیمت : <span class="price"><?php echo price($product["price"]) ?></span> </h2>
                            </div>
                            <div class="dt-sl mt-4">
                                <a href="/cart/add?product_id=<?php echo $product["id"] ?>" class="btn-primary-cm btn-with-icon">
                                    <img src="/assets/client/img/theme/shopping-cart.png" alt="">
                                    افزودن به سبد خرید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-add-to-cart-btn-wrapper">
                    <a href="#" class="mb-add-to-cart-btn">افزودن به سبد خرید</a>
                </div>
            </div>
            <div class="dt-sn mb-5 px-0 dt-sl pt-0">
                <!-- Start tabs -->
                <section class="tabs-product-info mb-3 dt-sl">
                    <div class="ah-tab-wrapper border-bottom dt-sl">
                        <div class="ah-tab dt-sl">
                            <a class="ah-tab-item" data-ah-tab-active="true" href=""><i
                                    class="mdi mdi-glasses"></i>نقد و بررسی</a>
                            <a class="ah-tab-item" href=""><i
                                    class="mdi mdi-comment-text-multiple-outline"></i>نظرات کاربران</a>

                        </div>
                    </div>
                    <div class="ah-tab-content-wrapper product-info px-4 dt-sl">
                        <div class="ah-tab-content dt-sl" data-ah-tab-active="true">
                            <div class="section-title text-sm-title title-wide no-after-title-wide mb-0 dt-sl">
                                <h2>نقد و بررسی</h2>
                            </div>

                            <div class="description-product dt-sl mt-3 mb-3">
                                <div class="container">
                                    <p>
                                        <?php echo $product["description"] ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="ah-tab-content comments-tab dt-sl">
                            <div class="section-title title-wide no-after-title-wide mb-0 dt-sl">
                                <h2>امتیاز کاربران به:</h2>
                            </div>
                            <div class="product-title dt-sl mb-3">
                                <h1>گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو سیم کارت ظرفیت 128گیگابایت
                                </h1>
                                <h3>Samsung Galaxy A50 SM-A505F/DS Dual SIM 128GB Mobile Phone<span
                                        class="rate-product">(4 از 5 | 15 نفر)</span></h3>
                            </div>
                            <div class="dt-sl">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <ul class="content-expert-rating">
                                            <li>
                                                <div class="cell">طراحی</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 70%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cell">ارزش خرید</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 20%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cell">کیفیت ساخت</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cell">صدای مزاحم</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cell">مصرف انرژی و آب</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cell">امکانات و قابلیت ها</div>
                                                <div class="cell">
                                                    <div class="rating rating--general" data-rate-digit="عالی">
                                                        <div class="rating-rate" data-rate-value="100%"
                                                             style="width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="comments-summary-note">
                                                <span>شما هم می‌توانید در مورد این کالا نظر
                                                    بدهید.</span>
                                            <p>برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود
                                                شوید. اگر این محصول را قبلا از دیجی‌کالا خریده
                                                باشید، نظر
                                                شما به عنوان مالک محصول ثبت خواهد شد.
                                            </p>
                                            <div class="dt-sl mt-2">
                                                <a href="#" class="btn-primary-cm btn-with-icon">
                                                    <i class="mdi mdi-comment-text-outline"></i>
                                                    افزودن نظر جدید
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comments-area dt-sl">
                                    <div
                                        class="section-title text-sm-title title-wide no-after-title-wide mb-0 dt-sl">
                                        <h2>نظرات کاربران</h2>
                                        <p class="count-comment">123 نظر</p>
                                    </div>
                                    <ol class="comment-list">
                                        <!-- #comment-## -->
                                        <li>
                                            <div class="comment-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="message-light message-light--purchased">
                                                            خریدار این محصول</div>
                                                        <ul class="comments-user-shopping">
                                                            <li>
                                                                <div class="cell">رنگ خریداری
                                                                    شده:</div>
                                                                <div class="cell color-cell">
                                                                        <span class="shopping-color-value"
                                                                              style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">خریداری شده
                                                                    از:</div>
                                                                <div class="cell seller-cell">
                                                                    <span class="o-text-blue">دیجی‌کالا</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="message-light message-light--opinion-positive">
                                                            خرید این محصول را توصیه می‌کنم</div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                        <div class="comment-title">
                                                            لباسشویی سامسونگ
                                                        </div>
                                                        <div class="comment-author">
                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                        </div>

                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                        <div class="footer">
                                                            <div class="comments-likes">
                                                                آیا این نظر برایتان مفید بود؟
                                                                <button class="btn-like" data-counter="۱۱">بله
                                                                </button>
                                                                <button class="btn-like" data-counter="۶">خیر
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li>
                                            <div class="comment-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="message-light message-light--purchased">
                                                            خریدار این محصول</div>
                                                        <ul class="comments-user-shopping">
                                                            <li>
                                                                <div class="cell">رنگ خریداری
                                                                    شده:</div>
                                                                <div class="cell color-cell">
                                                                        <span class="shopping-color-value"
                                                                              style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">خریداری شده
                                                                    از:</div>
                                                                <div class="cell seller-cell">
                                                                    <span class="o-text-blue">دیجی‌کالا</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="message-light message-light--opinion-positive">
                                                            خرید این محصول را توصیه می‌کنم</div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                        <div class="comment-title">
                                                            لباسشویی سامسونگ
                                                        </div>
                                                        <div class="comment-author">
                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6 col-12">
                                                                <div class="content-expert-evaluation-positive">
                                                                    <span>نقاط قوت</span>
                                                                    <ul>
                                                                        <li>دوربین‌های 4گانه پرقدرت
                                                                        </li>
                                                                        <li>باتری باظرفیت بالا</li>
                                                                        <li>حسگر اثرانگشت زیر قاب
                                                                            جلویی</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6 col-12">
                                                                <div class="content-expert-evaluation-negative">
                                                                    <span>نقاط ضعف</span>
                                                                    <ul>
                                                                        <li>نرم‌افزار دوربین</li>
                                                                        <li>نبودن Nano SD در بازار
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            بعد از چندین هفته بررسی تصمیم به خرید
                                                            این مدل از ماشین لباسشویی گرفتم ولی
                                                            متاسفانه نتونست انتظارات منو برآورده کنه
                                                            .
                                                            دو تا ایراد داره یکی اینکه حدودا تا 20
                                                            دقیقه اول شستشو یه صدایی شبیه به صدای
                                                            پمپ تخلیه همش به گوش میاد که رو مخه یکی
                                                            هم با اینکه خشک کنش تا 1400 دور در دقیقه
                                                            میچرخه، ولی اون طوری که دوستان تعریف
                                                            میکردن لباسها رو خشک نمیکنه .ضمنا برای
                                                            این صدایی که گفتم زنگ زدم نمایندگی اومدن
                                                            دیدن، وتعمیرکار گفتش که این صدا طبیعیه و
                                                            تا چند دقیقه اول شستشو عادیه.بدجوری خورد
                                                            تو ذوقم. اگه بیشتر پول میذاشتم میتونستم
                                                            یه مدل میان رده از مارکهای بوش یا آ ا گ
                                                            میخریدم که خیلی بهتر از جنس مونتاژی کره
                                                            ای هستش.
                                                        </p>

                                                        <div class="footer">
                                                            <div class="comments-likes">
                                                                آیا این نظر برایتان مفید بود؟
                                                                <button class="btn-like" data-counter="۱۱">بله
                                                                </button>
                                                                <button class="btn-like" data-counter="۶">خیر
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li>
                                            <div class="comment-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="message-light message-light--purchased">
                                                            خریدار این محصول</div>
                                                        <ul class="comments-user-shopping">
                                                            <li>
                                                                <div class="cell">رنگ خریداری
                                                                    شده:</div>
                                                                <div class="cell color-cell">
                                                                        <span class="shopping-color-value"
                                                                              style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">خریداری شده
                                                                    از:</div>
                                                                <div class="cell seller-cell">
                                                                    <span class="o-text-blue">دیجی‌کالا</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="message-light message-light--opinion-positive">
                                                            خرید این محصول را توصیه می‌کنم</div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                        <div class="comment-title">
                                                            لباسشویی سامسونگ
                                                        </div>
                                                        <div class="comment-author">
                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                        </div>

                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                        <div class="footer">
                                                            <div class="comments-likes">
                                                                آیا این نظر برایتان مفید بود؟
                                                                <button class="btn-like" data-counter="۱۱">بله
                                                                </button>
                                                                <button class="btn-like" data-counter="۶">خیر
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li>
                                            <div class="comment-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="message-light message-light--purchased">
                                                            خریدار این محصول</div>
                                                        <ul class="comments-user-shopping">
                                                            <li>
                                                                <div class="cell">رنگ خریداری
                                                                    شده:</div>
                                                                <div class="cell color-cell">
                                                                        <span class="shopping-color-value"
                                                                              style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">خریداری شده
                                                                    از:</div>
                                                                <div class="cell seller-cell">
                                                                    <span class="o-text-blue">دیجی‌کالا</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="message-light message-light--opinion-positive">
                                                            خرید این محصول را توصیه می‌کنم</div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                        <div class="comment-title">
                                                            لباسشویی سامسونگ
                                                        </div>
                                                        <div class="comment-author">
                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                        </div>

                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                        <div class="footer">
                                                            <div class="comments-likes">
                                                                آیا این نظر برایتان مفید بود؟
                                                                <button class="btn-like" data-counter="۱۱">بله
                                                                </button>
                                                                <button class="btn-like" data-counter="۶">خیر
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li>
                                            <div class="comment-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="message-light message-light--purchased">
                                                            خریدار این محصول</div>
                                                        <ul class="comments-user-shopping">
                                                            <li>
                                                                <div class="cell">رنگ خریداری
                                                                    شده:</div>
                                                                <div class="cell color-cell">
                                                                        <span class="shopping-color-value"
                                                                              style="background-color: #FFFFFF; border: 1px solid rgba(0, 0, 0, 0.25)"></span>سفید
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="cell">خریداری شده
                                                                    از:</div>
                                                                <div class="cell seller-cell">
                                                                    <span class="o-text-blue">دیجی‌کالا</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="message-light message-light--opinion-positive">
                                                            خرید این محصول را توصیه می‌کنم</div>
                                                    </div>
                                                    <div class="col-md-9 col-sm-12 comment-content">
                                                        <div class="comment-title">
                                                            لباسشویی سامسونگ
                                                        </div>
                                                        <div class="comment-author">
                                                            توسط مجید سجادی فرد در تاریخ ۵ مهر ۱۳۹۵
                                                        </div>

                                                        <p>لورم ایپسوم متن ساختگی</p>

                                                        <div class="footer">
                                                            <div class="comments-likes">
                                                                آیا این نظر برایتان مفید بود؟
                                                                <button class="btn-like" data-counter="۱۱">بله
                                                                </button>
                                                                <button class="btn-like" data-counter="۶">خیر
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End tabs -->
            </div>
            <!-- End Product -->
            <!-- Start Product-Slider -->
            <section class="slider-section dt-sl mb-5">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="section-title text-sm-title title-wide no-after-title-wide">
                            <h2>خریداران این محصول، محصولات زیر را هم خریده‌اند</h2>
                            <a href="#">مشاهده همه</a>
                        </div>
                    </div>

                    <!-- Start Product-Slider -->
                    <div class="col-12">
                        <div class="product-carousel carousel-lg owl-carousel owl-theme">
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/07.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">157,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/017.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">کت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">199,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/013.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه مدل هودی تیک تین</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">135,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/09.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">145,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/010.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">170,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                        <div class="discount">
                                            <span>20%</span>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">مانتو زنانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس زنانه</a>
                                        <span class="product-price">185,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-card mb-3">
                                    <div class="product-head">
                                        <div class="rating-stars">
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star active"></i>
                                            <i class="mdi mdi-star"></i>
                                        </div>
                                    </div>
                                    <a class="product-thumb" href="shop-single.html">
                                        <img src="/assets/client/img/products/019.jpg" alt="Product Thumbnail">
                                    </a>
                                    <div class="product-card-body">
                                        <h5 class="product-title">
                                            <a href="shop-single.html">تیشرت مردانه</a>
                                        </h5>
                                        <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                        <span class="product-price">54,000 تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Slider -->

                </div>
            </section>
            <!-- End Product-Slider -->
        </div>
    </main>
    <!-- End main-content -->
<?php
include "includes/client/footer.php";