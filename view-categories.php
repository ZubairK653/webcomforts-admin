<?php 
$PageTitle   = 'Add Category';
$Page        = 'categories';
// check session
require_once 'includes/include.php';

$categories = $category->getCategories();

include "MasterTop.php";
include "SideBar.php"

?>
<!-- Start Main Content -->
<!-- Main Content -->
<div class="main-content">
    <div class="alert alert-danger alert-dismissible show fade" id="alert_action" style="display: none">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            <strong>
                <p class="error">Cagegory Deleted.</p>
            </strong>
        </div>
    </div>

    <?php if(isset($_POST['error'])){ ?>
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            <strong>
                <p class="error">Error! <?php echo $_POST['error']; ?></p>
            </strong>
        </div>
    </div>
    <?php } ?>
    <?php if(isset($_POST['success'])){ ?>
    <div class="alert alert-success alert-dismissible show fade ">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
            <strong>Success! <?php echo $_POST['success']; ?></strong>
        </div>
    </div>
    <?php } ?>

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $PageTitle; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th width="5%" class="text-center"> # </th>
                                            <th> Title </th>

                                            <th> Page URL </th>
                                            <th> Post Date </th>
                                            <th> Update Date </th>
                                            <th class="text-center"> Published </th>
                                            <th width="20%" class="text-center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         $count = 1;
                                        foreach($categories as $category){
                                            ?>
                                        <tr class="odd gradeX">
                                            <td class="text-center"> <?= $count; ?> </td>
                                            <td class="text-center"> <?= $category['title']; ?></td>
                                            <td> <?= $category['page_url'];?></td>
                                            <td> <?= $category['post_date'];?></td>
                                            <td> <?= $category['update_date'];?></td>
                                            <td class="text-center">
                                                <?php if($category['publish']== 0){ ?>
                                                <div class="badge badge-danger">Inactive</div>
                                                <?php } if($category['publish']== 1){ ?>
                                                <div class="badge badge-success">Active</div>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-2" style="gap: 4px">
                                                    <form action="edit-category.php" method="post">
                                                        <input type="hidden" name="id"
                                                            value="<?= $category['cat_id'] ; ?>">
                                                        <button class="btn btn-sm btn-primary" type="submit"
                                                            value="Edit">Edit</button>
                                                    </form>
                                                    <!-- <a class="btn btn-sm btn-primary " href="">Edit</a> -->
                                                    <form action="" method="">
                                                        <input class="deleteid" type="hidden" name="id"
                                                            value="<?= $category['cat_id'] ; ?>">
                                                        <button class="btn btn-sm btn-danger delete" type="button"
                                                            value="Delete">Delete</button>
                                                    </form>
                                                    <!-- <a class="btn btn-sm btn-danger " href="">Delete</a> -->
                                                    <a class="btn btn-sm btn-warning " target="_blank"
                                                        href="<?= $category['page_url'];?>">View</a>
                                                </div>

                                            </td>
                                        </tr>
                                        <?php $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Main Content -->



<?php 
include "Footer.php";
?>
<script>
$(document).on('click', '.delete', function() {
    var id = $(".deleteid").val();
    //var status = $(this).data("status");
    //var btn_action = 'deleteProduct';
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: "process/delete.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                 
                $('#alert_action').fadeIn(2000);
                setTimeout(function(){// wait for 5 secs(2)
                    $('#alert_action').fadeOut(5000); // then reload the page.(3)
             }, 5000); 
            }
        });
        $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
    } else {
        return false;
    }
});
</script>