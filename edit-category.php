<?php 
$PageTitle   = 'Edit Category';
$Page        = 'categories';
// check session
require_once 'includes/include.php';


// get category id to edit
if(isset($_POST['id'])){
    $ID = $_POST['id'];
    $category =  $category->getCategory($ID);
  
   }
include "MasterTop.php";
include "SideBar.php";

?>
<!-- Start Main Content -->
<!-- Main Content -->
<div class="main-content">
          <?php if(isset($_POST['error'])){ ?>
             <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong><p class="error">Error! <?php echo $_POST['error']; ?></p></strong>
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
                        <form action="process/update_category.php" method="post" enctype="multipart/form-data"
                            id="main_form">
                            <input type="hidden" name="bcheck" value="true" />
                            <input type="hidden" name="id" value="<?= $ID ;?>" />
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title <span
                                            class="text-muted">*</span></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Enter Title" id="title" required="required" value="<?=$category['title'] ;?>">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tag Line <span
                                            class="text-muted">*</span></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="page_heading"
                                            id="page_heading" class="form-control" value="<?=$category['page_heading'] ;?>" required="required">

                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Page url <span
                                            class="text-muted">*</span></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" required="required" name="page_url"
                                            id="page_url" value="<?=$category['page_url'] ;?>">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Page
                                        tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control inputtags"  name="page_tags"
                                            id="page_tags" value="<?= $category['page_tags'] ;?>" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publish</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="status">
                                            <option value="0" <?php if ($category['publish']== 0){?>" selected="selected" <?php } ?>>No</option>
                                            <option value="1" <?php if ($category['publish']== 1){?>" selected="selected" <?php } ?>>Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label
                                        class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple" name="short_description"
                                            id="short_description" placeholder="Short Description"><?=$category['short_description'] ;?></textarea>
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-success" type="button"
                                            onclick="validateform()" id="savebtn">Update</button>
                                        <button class="btn btn-warning" type="reset">Reset</button>

                                    </div>
                                </div>
                            </div>
                        </form>
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

<script type = "text/javascript">
  
      // Form validation code will come here.
      function validateform() {
        var title   = document.getElementById("title").value;
        var tagline = document.getElementById("page_heading").value;
        var pageurl = document.getElementById("page_url").value;
        
         if(title == "") {
          document.getElementById("title").focus() ;
            return false;
         }
         if(tagline == "") {
          document.getElementById("page_heading").focus() ;
          
            return false;
         }
         if(pageurl == "") {
          document.getElementById("page_url").focus() ;
          
            return false;
         }
        
         //return( true );
        //  document.getElementById("savebtn").disabled = false;
         document.getElementById('main_form').submit()
      }
   //-->
</script>
