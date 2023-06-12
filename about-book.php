<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Preschool - Bootstrap Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header"> <!-- Header start -->
            <div class="header-left">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo.png" width="40" height="40" alt="">
					<span class="text-uppercase">Preschool</span>
                </a>
            </div>
            <div class="page-title-box float-left">
              <h3 class="text-uppercase">Preschool</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-pill bg-primary float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
											<span class="avatar">T</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.php">
                                        <div class="media">
											<span class="avatar">T</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.php">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment"></i> <span class="badge badge-pill bg-primary float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
						<a class="dropdown-item" href="settings.php">Settings</a>
						<a class="dropdown-item" href="login.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right"> <!-- mobile menu -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </div>
        </div>
        <?php include 'sidebar.php'; ?>
        <div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
                <div class="page-header">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12">
							<h5 class="text-uppercase">about teacher</h5>
						</div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12">
							<ul class="list-inline breadcrumb float-right">
								<li class="list-inline-item"><a href="#">Home</a></li>
								<li class="list-inline-item"><a href="#">Teachers</a></li>
								<li class="list-inline-item"> About Teacher</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content-page">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="aboutprofile-sidebar">
								<div class="row">
									<div class="col-lg-3 col-md-12 col-sm-12 col-12">
										<div class="aboutprofile">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-12">
															<div class="aboutprofile-pic">
																<img class="card-img-top" src="assets/img/user.jpg" alt="Card image">
															</div>
															<div class="aboutprofile-name">
																<h5 class="text-center mt-2">Michael V. Buttars</h5>
																<p class="text-center">Maths Teacher</p>
															</div>
															<ul class="list-group list-group-flush">
															  <li class="list-group-item"><b>Followers</b><a href="#" class="float-right">1000</a></li>
															  <li class="list-group-item"><b>Following</b><a href="#" class="float-right">700</a></li>
															  <li class="list-group-item"><b>Friends</b><a href="#" class="float-right">5000</a></li>
															</ul>
														</div>
													</div>
												 </div>
											</div>
										</div>
										<div class="aboutme-profile mt-4">
											<div class="card">
												<div class="page-title">
													<h4>About Me</h4>
												</div>
												<div class="card-body">
													<p>Hello I am Michael V. Buttars .Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
													<ul class="list-group list-group-flush">
														<li class="list-group-item"><b>ID</b><a href="#" class="float-right">FD-00d1</a></li>
														<li class="list-group-item"><b>Gender</b><a href="#" class="float-right">Male</a></li>
														<li class="list-group-item"><b>Seminors Done</b><a href="#" class="float-right">30+</a></li>
														<li class="list-group-item"><b>Degree</b><a href="#" class="float-right">P.H.D</a></li>
														<li class="list-group-item"><b>Desgination</b><a href="#" class="float-right">Maths Teacher</a></li>
														<li class="list-group-item"><b>Joining Date</b><a href="#" class="float-right">16/09/2018</a></li>
													</ul>
													<div class="aboutme-start">
														<div class="row">
															<div class="col-lg-4">
																<div class="aboutme-starttitle text-uppercase">
																	37
																</div>
																<div class="aboutme-startname text-uppercase">
																	Papers
																</div>
															</div>
															<div class="col-lg-4">
																<div class="aboutme-starttitle text-uppercase">
																	52
																</div>
																<div class="aboutme-startname text-uppercase">
																	Seminors
																</div>
															</div>
															<div class="col-lg-4">
																<div class="aboutme-starttitle text-uppercase">
																	50
																</div>
																<div class="aboutme-startname text-uppercase">
																	Articles
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="aboutprofile-address mt-4">
											<div class="card">
												<div class="page-title">
													<h4>Address</h4>
												</div>
												<div class="card-body">
													<address class="text-center">
														4850 Edgewood Road <br>
														Washington, AR 71862
													</address>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-9 col-md-12 col-sm-12 col-12">
										<div class="profile-content">
											<div class="row">
												<div class="col-lg-12">
													<div class="card">
													<!-- Nav tabs -->
															<ul class="nav customtab">
																<li class="nav-item"><a href="#" class="nav-link active show">About Me</a></li>
															</ul>
																				
														<!-- Tab panes -->
														<div class="tab-content">
															<div class="tab-pane active show" id="tab1">
																<div id="biography" class="biography">
																	<div class="row">
																		<div class="col-md-3 col-6"> <strong>Full Name</strong>
																			<br>
																			<p class="text-muted">Michael V. Buttars</p>
																		</div>
																		<div class="col-md-3 col-6"> <strong>Mobile</strong>
																			<br>
																			<p class="text-muted">973-584-5870</p>
																		</div>
																		<div class="col-md-4 col-6"> <strong>Email</strong>
																			<br>
																			<p class="text-muted">michaelvbuttars@example.com</p>
																		</div>
																		<div class="col-md-2 col-6"> <strong>Location</strong>
																			<br>
																			<p class="text-muted">USA</p>
																		</div>
																	</div>
																	<hr>
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
																		industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
																		scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
																		into electronic typesetting, remaining essentially unchanged.</p>
																	<br>
																	<h4>Education</h4>
																	<hr>
																	<ul class="list-unstyled">
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
																	</ul>
																	<br>
																	<h4>Experience</h4>
																	<hr>
																	<ul class="list-unstyled">
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																	</ul>
																	<br>
																	<h4>Conferences, Cources &amp; Workshop Attended</h4>
																	<hr>
																	<ul class="list-unstyled">
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																		<li class="list-item">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </li>
																	</ul>
																	<br>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Ruth C. Gault</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.php">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
       <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>