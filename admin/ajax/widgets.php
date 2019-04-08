!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="../index.html"><img src="../images/logo.svg" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../images/logo_mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <p class="page-name d-none d-lg-block">Hi, Dave Mattew</p>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <form class="mt-2 mt-md-0 d-none d-lg-block search-input">
              <div class="input-group">
                <span class="input-group-addon d-flex align-items-center"><i class="icon-magnifier icons"></i></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </li>
          <li class="nav-item dropdown mail-dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
                <i class="icon-envelope-letter icons"></i>
                <span class="count bg-danger"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification dropdownAnimation" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../images/faces/face6.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">John Doe</p>
                  <p class="Sender-message">Hey, We have a meeting planned at the end of the day.</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../images/faces/face2.jpg" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Leanne Jones</p>
                  <p class="Sender-message">Can we schedule a call this afternoon?</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../images/faces/face3.jpg" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Stella</p>
                  <p class="Sender-message">Great presentation the other day. Keep up the good work!</p>
                </div>
              </a>
              <a class="dropdown-item" href="#">
                <div class="sender-img">
                  <img src="../images/faces/face4.jpg" alt="">
                  <span class="badge badge-warning">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">James Brown</p>
                  <p class="Sender-message">Need the updates of the project at the end of the week.</p>
                </div>
              </a>
              <a href="#" class="dropdown-item view-all">View all</a>
            </div>
          </li>
          <li class="nav-item dropdown notification-dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-speech icons"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu navbar-dropdown preview-list notification-drop-down dropdownAnimation" aria-labelledby="notificationDropdown">
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject font-weight-medium">Application Error</p>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">Settings</p>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject">New user registration</p>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item lang-dropdown d-none d-sm-block">
            <a class="nav-link" href="#">
              <p class="mb-0">English <i class="flag-icon flag-icon-gb"></i></p>
            </a>
          </li>
          <li class="nav-item d-none d-sm-block profile-img">
            <a class="nav-link profile-image" href="#">
              <img src="../images/faces/face4.jpg" alt="profile-img">
              <span class="online-status online bg-success"></span>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center ml-auto" type="button" data-toggle="offcanvas">
          <span class="icon-menu icons"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">GENERAL</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/widgets.html">
                <span class="menu-title">Widgets</span>
                <i class="icon-wrench menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">UI FEATURES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/icons/font-awesome.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">FORMS</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/forms/basic_elements.html">
                <span class="menu-title">Form elements</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">DATA REPRESENTAION</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/charts/flot-chart.html">
                <span class="menu-title">Charts</span>
                <i class="icon-pie-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">SAMPLE PAGES</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-bubbles menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
					<div class="row">
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Statistics</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">$10,200</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 9:10am</small>
												</div>
											</div>
											<small class="text-gray">Raised from 89 orders.</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-success px-4 py-2 rounded">
												<i class="mdi mdi-buffer text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title mb-0">Daily Order</h4>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-inline-block pt-3">
											<div class="d-flex">
												<h2 class="mb-0">$2256</h2>
												<div class="d-flex align-items-center ml-2">
													<i class="mdi mdi-clock text-muted"></i>
													<small class=" ml-1 mb-0">Updated: 05:42pm</small>
												</div>
											</div>
											<small class="text-gray">hey, let’s have lunch together</small>
										</div>
										<div class="d-inline-block">
											<div class="bg-warning px-4 py-2 rounded">
												<i class="mdi mdi-wallet text-white icon-lg"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face11.jpg" class="img-lg rounded"/>
										<div class="ml-3">
											<h6>Maria</h6>
											<p class="text-muted">maria@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Designer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face9.jpg" class="img-lg rounded"/>
										<div class="ml-3">
											<h6>Thomas Edison</h6>
											<p class="text-muted">thomas@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Developer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row">
										<img src="../images/faces/face12.jpg" class="img-lg rounded"/>
										<div class="ml-3">
											<h6>Edward</h6>
											<p class="text-muted">edward@gmail.com</p>
											<p class="mt-2 text-success font-weight-bold">Tester</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-facebook text-facebook icon-md"></i>
										<div class="ml-3">
											<h6 class="text-facebook">2.62 Subscribers</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-linkedin text-linkedin icon-md"></i>
										<div class="ml-3">
											<h6 class="text-linkedin">5k connections</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-top">
										<i class="mdi mdi-twitter text-twitter icon-md"></i>
										<div class="ml-3">
											<h6 class="text-twitter">3k followers</h6>
											<p class="mt-2 text-muted card-text">You main list growing</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Recomended</h4>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face5.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Stella Davidson</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>New York City, USA</small>
										</div>
										<div class="badge badge-pill badge-info ml-auto px-1 py-1"><i class="mdi mdi-check font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face6.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Daniel Russel</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Florida, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face7.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Bruno King</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Arkansas, USA</small>
										</div>
										<div class="badge badge-pill badge-info ml-auto px-1 py-1"><i class="mdi mdi-check font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 border-bottom">
										<img class="img-sm rounded-circle" src="../images/faces/face8.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">David Moore</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Arizon, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
									<div class="wrapper d-flex align-items-center py-2 mb-4">
										<img class="img-sm rounded-circle" src="../images/faces/face9.jpg" alt="profile">
										<div class="wrapper ml-3">
											<h6 class="ml-1 mb-1">Rafell John</h6>
											<small class="text-muted mb-0"><i class="mdi mdi-map-marker-outline mr-1"></i>Alaska, USA</small>
										</div>
										<div class="badge badge-pill badge-success ml-auto px-1 py-1"><i class="mdi mdi-plus font-weight-bold"></i></div>
									</div>
								</div>
							</div>
						</div>
            <div class="col-md-4 grid-margin stretch-card">
							<div class="card text-center">
								<div class="card-body">
									<img src="../images/faces/face5.jpg" class="img-lg rounded-circle mb-2"/>
									<h4>Maria Johnson</h4>
									<p class="text-muted">Developer</p>
									<p class="mt-4 card-text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
											Aenean commodo ligula eget dolor. Lorem
									</p>
									<button class="btn btn-info btn-sm mt-3 mb-4">Follow</button>
									<div class="border-top pt-3">
										<div class="row">
											<div class="col-4">
												<h6>5896</h6>
												<p>Post</p>
											</div>
											<div class="col-4">
												<h6>1596</h6>
												<p>Followers</p>
											</div>
											<div class="col-4">
												<h6>7896</h6>
												<p>Likes</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Messages</h4>
									<div class="preview-list">
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face6.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">Richard Joy
														<span class="float-right small">
															<span class="text-muted pr-3">13.06.2017</span>
														</span>
													</h6>
													<p>Thanks for the support!</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face8.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">William Alex
														<span class="float-right small">
															<span class="text-muted pr-3">08.07.2017</span>
														</span>
													</h6>
													<p>Meeting is postponed</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face9.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">David Grey
														<span class="float-right small">
															<span class="text-muted pr-3">15.07.2017</span>
														</span>
													</h6>
													<p>Please approve the request</p>
												</div>
											</div>
										</div>
										<div class="preview-item border-bottom px-0">
											<div class="preview-thumbnail">
												<img src="../images/faces/face11.jpg" alt="image" class="rounded-circle"/>
											</div>
											<div class="preview-item-content d-flex flex-grow">
												<div class="flex-grow">
													<h6 class="preview-subject">Aleena Abraham
														<span class="float-right small">
															<span class="text-muted pr-3">12.06.2017</span>
														</span>
													</h6>
													<p>Hope to see you tomorrow</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <?php include 'footer.php';?>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <?php include 'js.php'; ?>
</body>

</html>
