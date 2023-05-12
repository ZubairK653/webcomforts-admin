<body>
<div class="loader"></div>
<div id="app">
<div class="main-wrapper main-wrapper-1">
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
	<div class="form-inline mr-auto">
		<ul class="navbar-nav mr-3">
			<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
			<!--<li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>-->
			<li> </li>
		</ul>
	</div>
	<ul class="navbar-nav navbar-right">
		<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i> <span class="badge headerBadge1">
			10</span> </a>
			<div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
				<div class="dropdown-header"> Messages
					<div class="float-right"> <a href="view-messages">View All (10)</a> </div>
				</div>
				<div class="dropdown-list-content dropdown-list-message">
					 
			</div>
		</li>
		<li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
			  
			<img alt="image" src="assets/img/user.png"
                class="user-img-radious-style">
			 
			<span class="d-sm-none d-lg-inline-block"></span></a>
			<div class="dropdown-menu dropdown-menu-right pullDown">
				<div class="dropdown-title">Hello Admin!</div>
				<a href="profile" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Admin Profile </a> <a href="settings.php" class="dropdown-item has-icon"> <i class="fas fa-cog"></i> General Settings </a>
				<div class="dropdown-divider"></div>
				<a href="includes/logout.php?action=logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> Logout </a> </div>
		</li>
	</ul>
</nav>
<div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
		<div class="sidebar-user">
			<div class="sidebar-user-picture"> <img alt="image" src="assets/img/webdesignpakistan.png"> </div>
			<div class="sidebar-user-details">
				<div class="user-name">WC Admin</div>
				<div class="user-role">Admin</div>
			</div>
		</div>
		<ul class="sidebar-menu">
			<li class="<?php if($Page == 'dashboard'){ ?> active <?php } ?>"> <a href="index" class="nav-link "><i data-feather="monitor"></i><span>Dashboard</span></a> </li> 
			<li class="dropdown <?php if($Page == 'categories'){ ?> active <?php } ?>"> <a href="#" class="nav-link has-dropdown "><i data-feather="grid"></i><span>Categories</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="add-category.php">Add new</a></li>  
					 
					<li><a class="nav-link  " href="view-categories.php?show=active"> Listing</a> </li>
					 

				</ul>
			</li>
			<li class="dropdown" > <a href="#" class="nav-link has-dropdown "><i data-feather="grid"></i><span>Pages</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="add-form.php">Add new</a></li>  
					 
					<li><a class="nav-link  " href="view-pages.php?show=active"> Listing</a> </li>
					 

				</ul>
			</li>
			 
			<li class="dropdown" > <a href="#" class="nav-link has-dropdown "><i data-feather="grid"></i><span>Portfolio</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="add-form.php">Add new</a></li>  
					 
					<li><a class="nav-link  " href="view-pages.php?show=active"> Listing</a> </li>
					 

				</ul>
			</li>

			<li class="dropdown" > <a href="#" class="nav-link has-dropdown "><i data-feather="grid"></i><span>Contacts</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="add-form.php">Add new</a></li>  
					 
					<li><a class="nav-link  " href="view-pages.php?show=active"> Listing</a> </li>
					 

				</ul>
			</li>
			<li class="dropdown" > <a href="#" class="nav-link has-dropdown "><i data-feather="grid"></i><span>Quotes</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="add-form.php">Add new</a></li>  
					 
					<li><a class="nav-link  " href="view-pages.php?show=active"> Listing</a> </li>
					 

				</ul>
			</li>
			
		</ul>
	</aside>
</div>
