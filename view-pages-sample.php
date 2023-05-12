<?php 
 // check session
require 'includes/checkSession.php';

$PageTitle   = 'View Page';
$Page      = 'view-pages';

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
                       <strong>Success!</strong>  Success
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
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
							<th width="5%" class="text-center"> # </th>
							<th width="5%" class="text-center"> ID </th>
							<th> Product </th>
							<th> Title </th>
              <th> Date </th> 
							<th> In Stock </th>
							<th> Price </th> 
							<th> Reviews </th>
							<th> Pics </th> 
              <th> Sold </th> 
							<th class="text-center"> Status </th>
							<th width="20%" class="text-center"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                           
                <tr class="odd gradeX">
                  <td class="text-center"> 1 </td> 
				  <td class="text-center">  Title </td> 
                  <td><img src="" width="64" /> </td>
                  <td>
                  Title<br />
                  <small>Subtitle</small> 
            
             
                  </td>
                  <td> Date</td>
				  <td class="text-center">
                   
                  </td>
                  <td> Price
                    
                  </td>
                   
                   <td class="text-center">
                 reveies
                  </td> 
                  <td class="text-center">
                   picss
                  </td>
                  <td class="text-center">
                   sold
                  </td>
				  
				  <td class="text-center">
                   
                  <div class="badge badge-danger">Inactive</div> 
                   
                  <div class="badge badge-success">Active</div> 
                   
                  </td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-primary " href="">Edit</a>
                    <a class="btn btn-sm btn-warning " target="_blank" href="">Copy</a>
                    </td>
                </tr>
              
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