<?php 
// check session
require_once 'includes/include.php';
 $userid = $_SESSION['userid'];
  
 $userrow =  $user->getUserData($userid);

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
      <?php
          if(@$image_upload->error){ ?>
              <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong><p class="error"><?php echo @$image_upload->error; ?></p></strong>
                      </div>
                    </div>

             <?php } ?>     
             
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
                  <form action="process/update_profile.php" method="post" enctype="multipart/form-data" >
                  <input type="hidden" name="user_id" id="userid" value="<?php echo $userid; ?>" />
                  <input type="hidden" name="bcheck" value="true" />
                  <div class="card-body">
                    <div class="form-group row mb-1">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture (Square)</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview pull-left">
                          <label for="image-upload" id="image-label"  >Choose File</label>
                          <input type="file" name="image"   id="image-upload"   />
                           
                        </div>
                        <div  class="image-preview pull-right" > 
                           <?php  if($userrow['admin_photo']){?>
                          <img src="uploads/<?php  echo $userrow['admin_photo']; ?>" class="img-fluid" alt="No Image" id="preveiew-img" />
                          <?php  } ?>
                        </div>
                       
                      </div>
                    </div>
                    <?php  if($userrow['admin_photo'] != NULL){?>
                      <div class="form-group row mb-4" id="remove-box">
                          <div class="col-sm-12 col-md-9">
                              <div  class="pull-right"> 
                              <input type="submit" class="btn btn-warning" id="remove-image" value="Remove Image"></input>
                              </div>
                          </div>
                      </div>
                      <?php  } ?>
                    <div class="form-group row mt-4 mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Name (Requird)</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value="<?= $userrow['admin_username']; ?>" required >
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
                        <button class="btn btn-success" name="update_profile" type="submit">Save</button>
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