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
                                <h4 class="card-title">ویرایش دسته بندی جدید</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">



                                            <?php
                                            showActionMessage();
                                            ?>


                                            <form action="/dashboard/categories/update?id=<?php echo $category["id"] ?>" method="POST">
                                                <fieldset class="form-group">
                                                    <label for="name">نام دسته بندی</label>
                                                    <input value="<?php echo $category["name"] ?>" type="text" name="name" class="form-control" id="name" placeholder="نام دسته بندی را وارد کنید">
                                                </fieldset>

                                                <?php
                                                    showInputError("name");
                                                ?>

                                                <fieldset class="form-group">
                                                    <label for="enname">نام دسته بندی به انگلیسی</label>
                                                    <input value="<?php echo $category["enname"] ?>" type="text" name="enname" class="form-control" id="enname" placeholder="نام دسته بندی را وارد کنید">
                                                </fieldset>

                                                <?php
                                                    showInputError("enname");
                                                ?>

                                                <fieldset class="form-group">
                                                    <label for="parent_id">نام دسته بندی</label>
                                                    <select name="parent_id" class="form-control" id="parent_id">
                                                        <option value="">بدون دسته والد</option>
                                                        <?php

                                                            foreach ($categories as $cat){
                                                                ?>
                                                                    <option <?php echo $cat["id"] == $category["parent_id"] ? "selected" : ""; ?> value="<?php echo $cat["id"] ?>">
                                                                        <?php echo $cat["name"] ?>
                                                                    </option>
                                                                <?php
                                                            }

                                                        ?>
                                                    </select>
                                                </fieldset>

                                                <button name="submit" class="btn btn-primary glow">ذخیره</button>
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
