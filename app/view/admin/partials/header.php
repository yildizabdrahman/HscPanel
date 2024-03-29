<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DashRock - Bootstrap 4 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="<?= public_url('admin/images/favicon.ico') ?>" type="image/x-icon">
    <!--Select Plugins-->
    <link href="<?= public_url('admin/plugins\select2\css\select2.min.css')?>" rel="stylesheet">
    <!-- notifications css -->
    <link rel="stylesheet" href="<?= public_url('admin/plugins/notifications/css/lobibox.min.css'); ?>">
    <!-- Vector CSS -->
    <link href="<?= public_url('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet">
    <!-- simplebar CSS-->
    <link href="<?= public_url('admin/plugins/simplebar/css/simplebar.css'); ?>" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="<?= public_url('admin/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- dataTable -->
    <link href="<?= public_url('admin/plugins\bootstrap-datatable\css\dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= public_url('admin/plugins\bootstrap-datatable\css\buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">

    <!--Switchery-->
    <link href="<?= public_url('admin\plugins\switchery\css\switchery.min.css'); ?>" rel="stylesheet">
    <link href="<?= public_url('admin\plugins\switchery\css\bootstrap-switch.min.css'); ?>" rel="stylesheet">

    <!-- animate CSS-->
    <link href="<?= public_url('admin/css/animate.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="<?= public_url('admin/css/icons.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Sidebar CSS-->
    <link href="<?= public_url('admin/css/sidebar-menu.css'); ?>" rel="stylesheet">
    <!-- Custom Style-->
    <link href="<?= public_url('admin/css/app-style.css'); ?>" rel="stylesheet">

</head>

<body onload="info_noti()">

    <!-- Start wrapper-->
    <div id="wrapper">

        <?php require view('admin/partials/sidebar'); ?>

        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top gradient-ibiza">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="icon-envelope-open"></i></a>
                        <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 4 new messages
                                    <span class="badge badge-danger">4</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="<?= public_url('admin/images/avatars/avatar-1.png'); ?>" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>Today, 4:10 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="<?= public_url('admin/images/avatars/avatar-2.png'); ?>" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Sara Jen</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>Yesterday, 8:30 AM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="<?= public_url('admin/images/avatars/avatar-3.png'); ?>" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                <small>5/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="<?= public_url('admin/images/avatars/avatar-4.png'); ?>" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                                <small>1/11/2018, 2:50 PM</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
                        <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    You have 10 Notifications
                                    <span class="badge badge-primary">10</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-people fa-2x mr-3 text-info"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Registered Users</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-cup fa-2x mr-3 text-warning"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Received Orders</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <i class="icon-bell fa-2x mr-3 text-danger"></i>
                                            <div class="media-body">
                                                <h6 class="mt-0 msg-title">New Updates</h6>
                                                <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="<?= public_url('admin/images/avatars/avatar-17.png'); ?>" class="img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="<?= public_url('admin/images/avatars/avatar-17.png'); ?>" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Katrina Mccoy</h6>
                                            <p class="user-subtitle">katrina92@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="<?= base_url('admin/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="clearfix"></div>