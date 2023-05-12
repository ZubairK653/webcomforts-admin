<?php 
// check session
require 'includes/checkSession.php';
$PageTitle   = 'Add Page';
$Page        = 'page';

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
                       <strong>Error!</strong>  Error
                      </div>
                    </div>

            
 
              <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                       <strong>Success!</strong> Success message
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
                  <form action="process/insert-product.php" method="post" enctype="multipart/form-data" id="main_form">
            <input type="hidden" name="bcheck" value="true" />
                  <input type="hidden" name="bcheck" value="true" />
                  <div class="card-body">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture (Square)</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label" >Choose File</label>
                          <input type="file" name="photo" id="image-upload" />
                        </div>
                      </div>
                    </div>
                    
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title <span class="text-muted">*</span></label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required="" >
                      </div>
                    </div> 
					
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Brand <span class="text-muted">*</span></label>
                      <div class="col-sm-12 col-md-7">
                        <input autocomplete="off" id="autofill_brands" value="None"  list="brand_list" type="text" class="form-control" name="brand_name" id="brand_name" required="required">
                      <datalist id="brand_list">
                       
                    </datalist>
                      </div>
                    </div>

                    

                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price <span class="text-muted">*</span></label>
                      <div class="col-sm-12 col-md-7">
                       <input type="number" class="form-control" required="required" name="price" id="price" min="1"  >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Special Price</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="number" class="form-control" name="special_price" id="special_price" min="0" value="0"  >
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>


                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="parent_id" required="required"> 

<option value="" selected="">None</option>
<option value="" selected="">None</option>
<option value="" selected="">None</option>

</select> 
                      </div>
                    </div>
 
                     
                       
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="short_desc" id="short_desc"   placeholder="Short Description"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Long Description</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote" name="description" id="description"  placeholder="Long Description"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Additional info</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote" name="more_info" id="more_info"  placeholder="Additional info"></textarea>
                      </div>
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" rows="3" name="tags" id="tags" value=""  placeholder="Keywords" >
                      </div>
                    </div>
                      

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status"> 
                          <option value="0" selected="selected">Inactive</option>
                          <option value="1">Active</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="featured"> 
                          <option value="0" selected="selected">No</option>
                          <option value="1">Yes</option>
                        </select>
                      </div>
                    </div>

 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                       <button class="btn btn-success" type="button" onclick="document.getElementById('main_form').submit();" >Save</button>
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