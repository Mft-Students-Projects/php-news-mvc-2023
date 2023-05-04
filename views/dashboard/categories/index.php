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

                                <a href="/dashboard/categories/create" class="btn btn-primary float-right">دسته بندی جدید</a>

                                <h4 class="card-title">لیست دسته بندی</h4>


                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class="table-responsive">
                                                <?php

                                                    showInputError("delete");

                                                    showActionMessage();

                                                ?>
                                                <table class="table zero-configuration">
                                                    <thead>
                                                    <tr>
                                                        <th>نام</th>
                                                        <th>Name</th>
                                                        <th>دسته والد</th>
                                                        <th>تاریخ ثبت</th>
                                                        <th>تاریخ ویرایش</th>
                                                        <th>عملیات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                        foreach ($categories as $category){
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $category["name"] ?></td>
                                                                    <td><?php echo $category["enname"] ?></td>
                                                                    <td><?php echo $category["parent_id"] ?></td>
                                                                    <td><?php echo convertToJalali($category["created_at"]) ?></td>
                                                                    <td><?php echo convertToJalali($category["updated_at"]) ?></td>
                                                                    <td>
                                                                        <a href="/dashboard/categories/edit?id=<?php echo $category["id"] ?>" class="btn btn-primary">ویرایش</a>
                                                                        <a onclick="return confirm('آیا مطمینید؟')" href="/dashboard/categories/delete?id=<?php echo $category["id"] ?>" class="btn btn-danger">حذف</a>
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
