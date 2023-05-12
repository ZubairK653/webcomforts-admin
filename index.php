<?php 
 
// check session
require 'includes/checkSession.php';

$PageTitle   = 'Dashboard'; 
$Page      = 'dashboard';

include "MasterTop.php";
include "SideBar.php"

?>

<!-- Start Main Content -->

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <!-- start content here -->

             
                 <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-body card-type-3">     
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Date', 'Revenue'],
			// <?php // $GrandGrandTotal=0;  for($i=30; $i>=1; $i--){ 
			// 	$thisDate = date("Y-m-d", strtotime("-$i days"));
			// 	$salesR = GetRow(Run($conn, "select sum(grand_total) as g_total from tblorders where  is_paid=1 and post_date= '$thisDate'"));
			// 	if($salesR['g_total']==''){$salesR['g_total']=0;}
			// 	$ThisData =  $ThisData. "['".$thisDate."',".$salesR['g_total']."],";
            //     $GrandGrandTotal = $GrandGrandTotal+$salesR['g_total'];
			// } 
			// $ThisData = substr($ThisData, 0 , (strlen($ThisData)-1));
			// echo $ThisData; 
			// ?>          
        ]);

        var options = {
          title: 'ZEBA Revenue Rs. '+<?php // echo $GrandGrandTotal; ?>,
          hAxis: {title: 'Last 30 Days',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script> 
    <div id="chart_div" class="mb-3" ></div>

    </div>
    </div>
    </div>
    </div>
  
 
	

                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">



                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Pending Orders</h6>
                                            <span class="font-weight-bold mb-0">
                                                
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle l-bg-orange text-white"> <i
                                                    data-feather="shopping-cart"></i> </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Last order</span> <span class="text-nowrap">
                                           
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Messages</h6>
                                            <span class="font-weight-bold mb-0">
                                                 
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle bg-success text-white"> <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest</span> <span class="text-nowrap">
                                             
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Users</h6>
                                            <span class="font-weight-bold mb-0">
                                                
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle l-bg-purple text-white"> <i
                                                    data-feather="user-check"></i> </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest signup</span> <span
                                            class="text-nowrap">
                                             
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Categories</h6>
                                            <span class="font-weight-bold mb-0">
                                                
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle bg-info text-white"> <i data-feather="flag"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest</span> <span class="text-nowrap">
                                            
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Products</h6>
                                            <span class="font-weight-bold mb-0">
                                                
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle bg-primary text-white"> <i data-feather="grid"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest</span> <span class="text-nowrap">
                                            
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Banners</h6>
                                            <span class="font-weight-bold mb-0">
                                                 
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle bg-danger text-white"> <i data-feather="image"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Last activity</span> <span
                                            class="text-nowrap">
                                            
                                        </span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Blog</h6>
                                            <span class="font-weight-bold mb-0">
                                                 
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle  bg-warning text-white"> <i data-feather="copy"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest</span> <span class="text-nowrap">
                                             
                                        </span> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Subscribers</h6>
                                            <span class="font-weight-bold mb-0">
                                                
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle  bg-warning text-white"> <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i
                                                class="fa fa-arrow-up"></i> Latest</span> <span class="text-nowrap">
                                             
                                        </span> </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body card-type-3">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-muted mb-0">Reviews</h6>
                                            <span class="font-weight-bold mb-0">
                                                 
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="card-circle  bg-dark text-white"> <i class="material-icons" style="font-size: 24px !important;">verified_user</i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-muted text-sm"> <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Latest</span><span class="text-nowrap">
                                             
                                        </span> </p>
                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="row">
                        <div class="col-12">
                            <a href="subscribers.php" class="btn btn-warning text-white">View Subscribers List</a>
                        </div>
                    </div>

                    <!-- end content here -->
                </div>
    </section>
</div>
<!-- End Main Content -->

<?php 
include "Footer.php";
?>