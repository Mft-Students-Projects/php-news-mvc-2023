<?php
include_once "views/includes/client/header.php";
?>
    <!-- Start main-content -->
    <main class="main-content dt-sl mb-3">
        <div class="header-cover">
            <div class="promotion-header-img"></div>
        </div>
        <div class="container main-container mt-5">
            <div class="row search-amazing-content">
                <!-- Start Sidebar -->
                <div class="col-lg-3 col-md-12 col-sm-12 sticky-sidebar filter-options-sidebar">
                    <div class="d-md-none">
                        <div class="header-filter-options">
                            <span>جستجوی پیشرفته <i class="fad fa-sliders-h"></i></span>
                            <button class="btn-close-filter-sidebar"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <div class="dt-sn dt-sn--box mb-3">
                        <form action="/filter">
                            <div class="col-12">
                                <div class="section-title text-sm-title title-wide mb-1 no-after-title-wide">
                                    <h2>فیلتر محصولات</h2>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="widget-search">
                                    <input value="<?php echo isset($_GET["keyword"]) ? $_GET["keyword"] : ""; ?>" type="text" name="keyword"
                                           placeholder="نام محصول یا برند مورد نظر را بنویسید...">
<!--                                    <button class="btn-search-widget">-->
<!--                                        <img src="/assets/client/img/theme/search.png" alt="">-->
<!--                                    </button>-->
                                </div>
                            </div>
                            <div class="col-12 filter-product mb-3">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-block text-right collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                    دسته بندی
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <?php

                                                    foreach ($GLOBALS["root_categories"] as $category){
                                                        ?>
                                                        <div class="custom-control custom-checkbox">
                                                            <input
                                                                <?php
                                                                    echo
                                                                    isset($_GET["categories"]) &&
                                                                    in_array($category["id"],$_GET["categories"])
                                                                    ? "checked"
                                                                    : ""
                                                                ?> name="categories[]" value="<?php echo $category["id"] ?>" type="checkbox" class="custom-control-input"
                                                                   id="customCheck<?php echo $category["id"] ?>">
                                                            <label class="custom-control-label" for="customCheck<?php echo $category["id"] ?>">لباس
                                                                <?php echo $category["name"] ?></label>
                                                        </div>
                                                        <?php
                                                    }

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="section-title text-sm-title title-wide no-after-title-wide mb-1">
                                    <h2>فیلتر براساس قیمت :</h2>
                                </div>
                                <div class="mt-2 mb-2">
                                    <div id="slider-non-linear-step"></div>
                                </div>
                                <div class="mt-2 mb-2 text-center pt-2">
                                    <span>قیمت: </span>
                                    <span class="example-val" id="slider-non-linear-step-value"></span> تومان
                                </div>
                                <input type="hidden" id="minPrice" name="minPrice">
                                <input type="hidden" id="maxPrice" name="maxPrice">
                            </div>
                            <div class="col-12 mb-3">
                                <div class="parent-switcher">
                                    <label class="ui-statusswitcher">
                                        <input name="onlyInStock" type="checkbox" id="switcher-1"  value="on" <?php echo isset($_GET["onlyInStock"]) && $_GET["onlyInStock"] == "on" ? "checked" : ""; ?>>
                                        <span class="ui-statusswitcher-slider">
                                                <span class="ui-statusswitcher-slider-toggle"></span>
                                            </span>
                                    </label>
                                    <label class="label-switcher" for="switcher-1">فقط کالاهای موجود</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button name="filter_btn" class="btn btn-info btn-block" type="submit">
                                    فیلتر
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Sidebar -->
                <!-- Start Content -->
                <div class="col-lg-9 col-md-12 col-sm-12 search-card-res">
                    <div class="d-md-none">
                        <button class="btn-filter-sidebar">
                            جستجوی پیشرفته <i class="fad fa-sliders-h"></i>
                        </button>
                    </div>
                    <div class="dt-sl dt-sn px-0 search-amazing-tab">
                        <div class="ah-tab-wrapper dt-sl">
                            <div class="ah-tab dt-sl">
                                <a class="ah-tab-item" data-ah-tab-active="true" href="">مرتبط ترین</a>
                                <a class="ah-tab-item" href="">پربازدید ترین</a>
                                <a class="ah-tab-item" href="">جدید ترین</a>
                                <a class="ah-tab-item" href="">پرفروش ترین</a>
                                <a class="ah-tab-item" href="">ارزان ترین</a>
                                <a class="ah-tab-item" href="">گران ترین</a>
                            </div>
                        </div>
                        <div class="ah-tab-content-wrapper dt-sl px-res-0">
                            <div class="ah-tab-content dt-sl" data-ah-tab-active="true">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <?php

                                    foreach ($products as $product){
                                        ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                            <div class="product-card">
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
                                                <a class="product-thumb" href="/product?id=<?php echo $product["id"] ?>">
                                                    <img src="/media/<?php echo $product["image"] ?>" alt="<?php echo $product["name"] ?>">
                                                </a>
                                                <div class="product-card-body">
                                                    <h5 class="product-title">
                                                        <a href="/product?id=<?php echo $product["id"] ?>">
                                                            <?php echo $product["name"] ?>
                                                        </a>
                                                    </h5>
                                                    <a class="product-meta" href="/product?id=<?php echo $product["id"] ?>">لباس زنانه</a>
                                                    <span class="product-price"><?php echo price($product["price"]) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }

                                    ?>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>

                                            <?php

                                                $urlArray = parse_url( "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", -1 );

                                                for($page=1;$page<=ceil($totalCount/$productsInPage);$page++){

                                                    if(isset($urlArray["query"])){
                                                        parse_str($urlArray["query"],$queryArray);

                                                        if(isset($queryArray["page"])){
                                                            unset($queryArray["page"]);
                                                        }

                                                        $urlArray["query"] = http_build_query($queryArray);

                                                    }

                                                        ?>
                                                        <a href="/filter<?php
                                                        echo isset($urlArray["query"])
                                                            ? "?".$urlArray["query"]."&page=".$page
                                                            : "?page=".$page ?>"
                                                           class="<?php
                                                           echo isset($_GET["page"]) && $_GET["page"] == $page
                                                               ? "active-page"
                                                               : ""
                                                           ?>">
                                                            <?php echo $page; ?></a>
                                                    <?php
                                                }

                                            ?>



                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ah-tab-content dt-sl">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                                <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/018.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">59,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/020.jpg" alt="Product Thumbnail">
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
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                            <a href="#">1</a>
                                            <a href="#" class="active-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">...</a>
                                            <a href="#">7</a>
                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ah-tab-content dt-sl">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/018.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">59,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                                <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/020.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                            <a href="#">1</a>
                                            <a href="#" class="active-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">...</a>
                                            <a href="#">7</a>
                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ah-tab-content dt-sl">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/018.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">59,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                                <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/020.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                            <a href="#">1</a>
                                            <a href="#" class="active-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">...</a>
                                            <a href="#">7</a>
                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ah-tab-content dt-sl">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                                <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/018.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">59,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/020.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                            <a href="#">1</a>
                                            <a href="#" class="active-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">...</a>
                                            <a href="#">7</a>
                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ah-tab-content dt-sl">
                                <div class="row mb-3 mx-0 px-res-0">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                                <img src="/assets/client/img/products/011.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/018.jpg" alt="Product Thumbnail">
                                            </a>
                                            <div class="product-card-body">
                                                <h5 class="product-title">
                                                    <a href="shop-single.html">تیشرت مردانه</a>
                                                </h5>
                                                <a class="product-meta" href="shop-categories.html">لباس مردانه</a>
                                                <span class="product-price">59,000 تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
                                            <div class="promotion-badge">
                                                فروش ویژه
                                            </div>
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                                <img src="/assets/client/img/products/020.jpg" alt="Product Thumbnail">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 px-10 mb-1 px-res-0">
                                        <div class="product-card mb-2 mx-res-0">
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
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="pagination">
                                            <a href="#" class="prev"><i
                                                    class="mdi mdi-chevron-double-right"></i></a>
                                            <a href="#">1</a>
                                            <a href="#" class="active-page">2</a>
                                            <a href="#">3</a>
                                            <a href="#">4</a>
                                            <a href="#">...</a>
                                            <a href="#">7</a>
                                            <a href="#" class="next"><i class="mdi mdi-chevron-double-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </main>
    <!-- End main-content -->
<?php
include_once "views/includes/client/footer.php";