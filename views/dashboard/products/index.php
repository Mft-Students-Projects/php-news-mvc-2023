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

                                <a href="/dashboard/products/create" class="btn btn-primary float-right">محصول جدید</a>

                                <h4 class="card-title">لیست محصولات</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="table-responsive">
                                                <?php

                                                 showActionMessage();


                                                ?>
                                                <table class="table zero-configuration">
                                                    <thead>
                                                    <tr>
                                                        <th>تصویر</th>
                                                        <th>نام</th>
                                                        <th>Name</th>
                                                        <th>قیمت</th>
                                                        <th>توضیحات</th>
                                                        <th>تاریخ ثبت</th>
                                                        <th>تاریخ ویرایش</th>
                                                        <th>عملیات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    foreach ($products as $product){
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <img width="150" src="/media/<?php echo $product["image"] ?>" alt="">
                                                            </td>
                                                            <td><?php echo $product["name"] ?></td>
                                                            <td><?php echo $product["enname"] ?></td>
                                                            <td><?php echo price( $product["price"] ); ?></td>
                                                            <td><?php echo $product["description"] ?></td>
                                                            <td><?php echo convertToJalali($product["created_at"]) ?></td>
                                                            <td><?php echo convertToJalali($product["updated_at"]) ?></td>
                                                            <td>
                                                                <a href="/dashboard/products/edit?id=<?php echo $product["id"] ?>" class="btn btn-primary">ویرایش</a>
                                                                <a onclick="return confirm('آیا مطمینید؟')" href="/dashboard/products/delete?id=<?php echo $product["id"] ?>" class="btn btn-danger">حذف</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }

                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>


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
