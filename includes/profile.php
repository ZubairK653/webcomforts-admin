<?php 
	require("image-upload-class.php");

  if(isset($_POST['upload-image'])){
		if($_FILES['photo']['error'] == 0){
			$image_upload = new ImageUpload($_FILES);
		}
	}

$PageTitle   = 'Admin Profile';
$ContentType = '';
$PageModule  = 'setting';
$PageType    = 'form';
$Page        = 'setting';

include "MasterTop.php";
include "SideBar.php"

?>

      
      <!-- Start Main Content -->
      <!-- Main Content -->
      <div class="main-content">

     
              <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong>Error!</strong>
                      </div>
                    </div>

               
              <div class="alert alert-success alert-dismissible show fade ">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong>Success!</strong>  
                      </div>
                    </div>

              
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $PageTitle; ?></h4>
                  </div>
                  <form action="" method="post" enctype="multipart/form-data" >
                  <input type="hidden" name="id" id="userid" value="" />
                  <input type="hidden" name="bcheck" value="true" />
                  <div class="card-body">
                    <div class="form-group row mb-1">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture (Square)</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview pull-left">
                          <label for="image-upload" id="image-label"  >Choose File</label>
                          <input type="file" name="photo"   id="image-upload"   />
                           
                        </div>
                        <div  class="image-preview pull-right" > 
                          <!-- <?php // if($ROW['photo']){?>
                          <img src="../assets/images/<?php // echo $ROW['photo']; ?>" class="img-fluid" alt="No Image" id="preveiew-img" />
                          <?php // } ?> -->
                        </div>
                       
                      </div>
                    </div>
                    <?php // if($ROW['photo'] != NULL){?>
                      <div class="form-group row mb-4" id="remove-box">
                          <div class="col-sm-12 col-md-9">
                              <div  class="pull-right"> 
                              <input type="submit" class="btn btn-warning" id="remove-image" value="Remove Image"></input>
                              </div>
                          </div>
                      </div>
                      <?php // } ?>
                    <div class="form-group row mt-4 mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Name (Requird)</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?php // echo $ROW['username']; ?>" required >
                      </div>
                    </div> 

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Change Password</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="password" id="password" placeholder="Enter password to reset" value="" >
                      </div>
                    </div> 

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-success" name="upload-image" type="submit">Save</button>
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