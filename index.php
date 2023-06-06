<?php include 'header.php'; ?>

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
        <div class="sidebar" id="sidebar"> <!-- sidebar -->
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                    	<li class="active">
                            <a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-teachers.php">All Teachers</a></li>
                                <li><a href="add-teacher.php">Add Teacher</a></li>
                                <li><a href="edit-teacher.php">Edit Teacher</a></li>
								<li><a href="about-teacher.php">About Teacher</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-students.php">All Students</a></li>
                                <li><a href="add-student.php">Add Student</a></li>
                                <li><a href="edit-student.php">Edit Student</a></li>
								<li><a href="about-student.php">About Student</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span> Parents</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-parents.php">All Parents</a></li>
                                <li><a href="add-parent.php">Add Parent</a></li>
                                <li><a href="edit-parent.php">Edit Parent</a></li>
								<li><a href="about-parent.php">About Parent</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Apps</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Email</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="compose.php"><span>Compose Mail</span></a></li>
                                        <li>
                                            <a href="inbox.php"> <span> Inbox</span> </a>
										</li>
                                        <li><a href="mail-view.php"><span>Mailview</span></a></li>
                                    </ul>
                                </li>
                                <li>
									<a href="chat.php"> Chat <span class="badge badge-pill bg-primary float-right">5</span></a>
								</li>
								 <li class="submenu">
									<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
									<ul class="list-unstyled" style="display: none;">
										<li><a href="voice-call.php">Voice Call</a></li>
										<li><a href="video-call.php">Video Call</a></li>
										<li><a href="incoming-call.php">Incoming Call</a></li>
									</ul>
								</li>
								 <li>
									<a href="contacts.php"> Contacts</a>
								</li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.php" style="width: 80%; display: inline-block;"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a>
                        </li>
						<li>
                            <a href="exam-list.php"><i class="fa fa-table" aria-hidden="true"></i> Exam list</a>
                        </li>
                        <li>
                            <a href="holidays.php"><i class="fa fa-tasks" aria-hidden="true"></i> Holidays</a>
                        </li>
						<li>
                            <a href="calendar.php"><i class="fa fa-table" aria-hidden="true"></i> Events</a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-book" aria-hidden="true"></i><span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled" style="display: none;">
								<li><a href="invoices.php">Invoices</a></li>
								<li><a href="payments.php">Payments</a></li>
								<li><a href="expenses.php">Expenses</a></li>
								<li><a href="provident-fund.php">Provident Fund</a></li>
								<li><a href="taxes.php">Taxes</a></li>
							</ul>
						</li>
						 <li class="submenu">
							<a href="#"><i class="fa fa-money" aria-hidden="true"></i><span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled" style="display: none;">
								<li><a href="salary.php"> Employee Salary </a></li>
								<li><a href="salary-view.php"> Payslip </a></li>
							</ul>
						</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="blog-details.php">Blog View</a></li>
                                <li><a href="add-blog.php">Add Blog</a></li>
                                <li><a href="edit-blog.php">Edit Blog</a></li>
                            </ul>
                        </li>
						 <li class="submenu">
                            <a href="javascript:void(0);" class="noti-dot"><i class="fa fa-rocket" aria-hidden="true"></i> <span>Management </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="#" class="noti-dot"><span> Employees</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
										<li><a href="all-employees.php">All Employees</a></li>
                                        <li><a href="holidays.php">Holidays</a></li>
                                        <li><a href="leaves.php"><span>Leave Requests</span> <span class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        <li><a href="attendance.php">Attendance</a></li>
                                        <li><a href="departments.php">Departments</a></li>
                                        <li><a href="designations.php">Designations</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="activities.php">Activities</a>
                                </li>
                                <li>
                                    <a  href="users.php">Users</a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="expense-reports.php"> Expense Report </a></li>
                                        <li><a href="invoice-reports.php"> Invoice Report </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i> <span> Components</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="uikit.php">UI Kit</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="tabs.php">Tabs</a></li>
                            </ul>
                        </li>
                         <li class="submenu">
                            <a href="#"><i class="fa fa-edit" aria-hidden="true"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="basic-inputs.php">Basic Input</a></li>
                                <li><a href="form-basic-inputs.php">Basic Inputs</a></li>
                                <li><a href="form-input-groups.php">Input Groups</a></li>
                                <li><a href="form-horizontal.php">Horizontal Form</a></li>
                                <li><a href="form-vertical.php">Vertical Form</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-table" aria-hidden="true"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="tables-basic.php">Basic Tables</a></li>
                                <li><a href="tables-datatables.php">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns" aria-hidden="true"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="login.php"> Login </a></li>
                                <li><a href="register.php"> Register </a></li>
                                <li><a href="forgot-password.php"> Forgot Password </a></li>
                                <li><a href="change-password2.php"> Change Password </a></li>
                                <li><a href="lock-screen.php"> Lock Screen </a></li>
                                <li><a href="profile.php"> Profile </a></li>
                                <li><a href="gallery.php"> Gallery </a></li>
                                <li><a href="error-404.php">404 Error </a></li>
                                <li><a href="error-500.php">500 Error </a></li>
                                <li><a href="blank-page.php"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper"> <!-- content -->
            <div class="content container-fluid">
               <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-primary"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>60,000</h3>
                                <span>Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-info"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>12,000</h3>
                                <span>Teachers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-warning"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>20,000</h3>
                                <span>Parents</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="dash-widget-icon bg-success"><i class="fa fa-money" aria-hidden="true"></i></span>
                            <div class="dash-widget-info">
                                <h3>$20,000</h3>
                                <span>Total Earnings</span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-6">
						<div class="content-page">
							<div class="page-title">Total Members</div>
							<div id="school-chart"></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="content-page">
							<div class="page-title">Income Monthwise</div>
							<div id="incomeChart" style="height: 350px;"></div>
						</div>
					</div>
				</div>
				
				<div class="row mt-4">
					<div class="col-lg-6 col-md-12 col-12">
						 <div class="card-box m-b-2">
							<div class="page-title mb-2">
								Events
							</div>
							<div class="card-body p-0">
                              <div id="calendar"></div>
							 </div>
                        </div>
					</div>
					<div class="col-lg-6">
						<div class="content-page">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title mb-2">
										Exam-list
									</div>
									<div class="table-responsive">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th style="min-width:91px;">Exam Name </th>
													<th style="min-width:50px;">Subject</th>
													<th style="min-width:50px;">Class</th>
													<th style="min-width:50px;">Section</th>
													<th style="min-width:50px;">Time</th>
													<th style="min-width:50px;">Date</th>
													<th class="text-right" style="width:30%;">Action</th>
												</tr>
											</thead>
											<tbody>
												 <tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>English</td>
													<td>5</td>
													<td>B</td>
													<td>10.00am</td>
													<td>20/1/2019</td>
													<td class="text-right" >
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>English</td>
													<td>4</td>
													<td>A</td>
													<td>10.00am</td>
													<td>2/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												
												<tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>Maths</td>
													<td>6</td>
													<td>B</td>
													<td>10.00am</td>
													<td>2/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												 <tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>Science</td>
													<td>3</td>
													<td>B</td>
													<td>10.00am</td>
													<td>20/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>Maths</td>
													<td>6</td>
													<td>B</td>
													<td>10.00am</td>
													<td>20/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												 <tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>English</td>
													<td>7</td>
													<td>B</td>
													<td>10.00am</td>
													<td>20/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												 <tr>
													<td>
														<a href="exam-detail.php" class="avatar">C</a>
													</td>
													<td>Science</td>
													<td>5</td>
													<td>B</td>
													<td>10.00am</td>
													<td>20/1/2019</td>
													<td class="text-right">
														<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
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
				<div class="row mt-2">
					<div class="col-lg-12">
						<div class="content-page">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="page-title mb-2">
										All Students
									</div>
									<div class="table-responsive">
										<table class="table table-striped custom-table">
											<thead>
												<tr>
													<th style="min-width:50px;">Name </th>
													<th style="min-width:74px;">Student ID</th>
													<th style="min-width:50px;">Class</th>
													<th style="min-width:50px;">Section</th>
													<th style="min-width:98px;">Mobile</th>
													<th style="min-width:90px;">Date of Birth</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">P</a></h2>
														<h2><a href="profile.php">Parker <span></span></a></h2>
													</td>
													<td>ST-0d001</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>5th June</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">S</a></h2>
														<h2><a href="profile.php">Smith <span></span></a></h2>
													</td>
													<td>ST-0d002</td>
													<td>2</td>
													<td>B</td>
													<td>973-584-58700</td>
													<td>6th April</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
											   <tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">H</a></h2>
														<h2><a href="profile.php">Hensley<span></span></a></h2>
													</td>
													<td>ST-0d003</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>5th Jan</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">F</a></h2>
														<h2><a href="profile.php">Friesen<span></span></a></h2>
													</td>
													<td>ST-0d004</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>2nd June</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">J</a></h2>
														<h2><a href="profile.php">Jackson<span></span></a></h2>
													</td>
													<td>ST-0d005</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>7th July</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">M</a></h2>
														<h2><a href="profile.php">Mason<span></span></a></h2>
													</td>
													<td>ST-0d006</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>5th June</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<h2><a href="profile.php" class="avatar text-white">G</a></h2>
														<h2><a href="profile.php">Garrett <span></span></a></h2>
													</td>
													<td>ST-0d007</td>
													<td>1</td>
													<td>A</td>
													<td>973-584-58700</td>
													<td>5th April</td>
													<td class="text-right">
														<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>
														<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
														<i class="fa fa-trash" aria-hidden="true"></i>
														</button>
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
	</div>
    <div class="sidebar-overlay" data-reff=""></div>

    <?php include 'footer.php'; ?>