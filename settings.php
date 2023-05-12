<?php 
// check session
require 'includes/checkSession.php';

$loginid = $_SESSION['userid'];

$adminRow = $user->getUserData($loginid);
 
$PageTitle   = 'Settings'; 
$Page        = 'settings';

include "MasterTop.php";
include "SideBar.php"

?>
      <!-- Start Main Content -->
      <!-- Main Content -->
      <div class="main-content">
      <?php if(isset($_GET['error']) && $_GET['error']== "not-updated"){?>
              <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong>Error !!! There was an error in updating the record.</strong>
                      </div>
                    </div>
            <?php } ?>
            <?php if(isset($_GET['msg']) && $_GET['msg'] == "success"){?>
              <div class="alert alert-success alert-dismissible show fade ">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong>Success !!! Record updated</strong>  
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
                  <form action="process/update_settings.php" method="post" enctype="multipart/form-data" id="main_form" >
                  <input type="hidden" name="user_id" value="<?= $adminRow['admin_id']?>" />
                  <input type="hidden" name="bcheck" value="true" />
                  <div class="card-body">
                    
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="site_name" id="website" placeholder="Enter site Name" value="<?= $adminRow['site_title'];?>" required>
                      </div>
                    </div> 

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Admin Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" id="title" placeholder="Enter Name" value="<?= $adminRow['admin_name'];?>" required>
                      </div>
                    </div> 

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Admin Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control" name="" id="" placeholder="Enter Email" value="<?= $adminRow['admin_email'];?>" disabled >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Admin Phone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="<?= $adminRow['admin_phone'];?>"  >
                      </div>
                    </div>
					
					          <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Phone</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="whatsapp_chat" id="whatsapp_chat" placeholder="+92 123 1234567" value="<?= $adminRow['display_phone'];?>"  >
                      </div>
                    </div>
                    
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Display Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="contact_email" id="contact_email" placeholder="Enter email" value="<?= $adminRow['display_email'];?>"  >
                      </div>
                     </div>
                    

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="address" id="address"   placeholder="Enter Short Description for website"><?= $adminRow['admin_address'];?></textarea>

                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Site Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="short_desc" id="short_desc"   placeholder="Enter Short Description for website"><?= $adminRow['site_desc'];?></textarea>
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" rows="3" name="tags" id="tags" value="<?= $adminRow['site_tags'];?>"  placeholder="Keywords for site" >
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Copyright Info</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="copy_right" id="copy_right" value="<?= $adminRow['copyright'];?>" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="facebook_link" id="facebook_link" value="<?= $adminRow['admin_facebook'];?>" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Instagram</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="instagram_link" id="instagram_link" value ="<?= $adminRow['admin_instagram'];?>" >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" value="<?= $adminRow['admin_twitter'];?>" >
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-success" type="button" onclick="document.getElementById('main_form').submit();" name="update-user" >Update</button>
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