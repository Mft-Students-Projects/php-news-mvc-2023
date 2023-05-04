<?php
include "views/includes/admin/header.php";
?>


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body"><!-- Basic Inputs start -->
            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ویرایش محصول</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">


                                            <?php
                                            showActionMessage();
                                            ?>



                                            <form enctype="multipart/form-data" action="/dashboard/products/update?id=<?php echo $product["id"] ?>" method="POST">
                                                <fieldset class="form-group">
                                                    <label for="name">نام محصول</label>
                                                    <input value="<?php echo $product["name"] ?>" type="text" name="name" class="form-control" id="name" placeholder="نام محصول را وارد کنید">
                                                </fieldset>

                                                <?php
                                                showInputError("name");
                                                ?>

                                                <fieldset class="form-group">
                                                    <label for="enname">نام محصول به انگلیسی</label>
                                                    <input value="<?php echo $product["enname"] ?>" type="text" name="enname" class="form-control" id="enname" placeholder="نام محصول را وارد کنید">
                                                </fieldset>

                                                <?php
                                                showInputError("enname");
                                                ?>


                                                <fieldset class="form-group">
                                                    <label for="price">قیمت محصول</label>
                                                    <input value="<?php echo $product["price"] ?>" type="text" name="price" class="form-control" id="price" placeholder="قیمت محصول را وارد کنید">
                                                </fieldset>

                                                <?php
                                                showInputError("price");
                                                ?>


                                                <fieldset class="form-group">
                                                    <label for="description">توضیحات محصول</label>
                                                    <input value="<?php echo $product["description"] ?>" type="text" name="description" class="form-control" id="description" placeholder="توضیحات محصول را وارد کنید">
                                                </fieldset>

                                                <?php
                                                showInputError("description");
                                                ?>


                                                <img src="/media/<?php echo $product["image"] ?>" width="100" alt="">
                                                <input type="hidden" name="old_image" value="<?php echo $product["image"] ?>">

                                                <fieldset class="form-group">
                                                    <label for="image">تصویر محصول</label>
                                                    <input type="file" name="image" class="form-control" id="image">
                                                </fieldset>

                                                <?php
                                                showInputError("image");
                                                ?>

                                                <fieldset class="form-group">
                                                    <label for="category_id">نام دسته بندی</label>
                                                    <select multiple name="category_id[]" class="form-control" id="category_id">
                                                        <option value="">بدون دسته والد</option>
                                                        <?php

                                                        foreach ($categories as $category){
                                                            ?>
                                                            <option <?php echo in_array($category["id"],$selectedCategoriesArray) ? "selected" : "" ?> value="<?php echo $category["id"] ?>">
                                                                <?php echo $category["name"] ?>
                                                            </option>
                                                            <?php
                                                        }

                                                        ?>
                                                    </select>
                                                </fieldset>

                                                <button name="submit" class="btn btn-primary glow">ویرایش</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Inputs end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<?php
include "views/includes/admin/footer.php";
?>
