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
    <link rel="icon" href="assets\images\favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="<?= public_url('admin/css\bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- animate CSS-->
    <link href="<?= public_url('admin/css\animate.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Icons CSS-->
    <link href="<?= public_url('admin/css\icons.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Custom Style-->
    <link href="<?= public_url('admin/css\app-style.css'); ?>" rel="stylesheet">

</head>

<body class="authentication-bg">
    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card card-authentication1 mx-auto my-5 animated zoomIn bg-dark">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="<?= public_url('admin/images/logo-icon.png'); ?>">
                    </div>
                    <div class="card-title text-uppercase text-center py-2 text-white"><?= lang('login_title'); ?></div>

                    <?php if (isset($error)) { ?>
                        <div class="error mb-2"><?= $error; ?></div>

                    <?php } ?>
                    <form class="color-form" action="" method="POST">
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputUsername" class="sr-only"><?= lang('login_user_name'); ?></label>
                                <input name="user_name" type="text" id="exampleInputUsername" class="form-control" placeholder="<?= lang('login_user_name'); ?>">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputPassword" class="sr-only"><?= lang('login_password'); ?></label>
                                <input name="password" type="password" id="exampleInputPassword" class="form-control" placeholder="<?= lang('login_password'); ?>">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-danger btn-block waves-effect waves-light" value="1"><?= lang('login_btn'); ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= public_url('admin/js/jquery.min.js'); ?>"></script>
    <script src="<?= public_url('admin/js/popper.min.js'); ?>"></script>
    <script src="<?= public_url('admin/js/bootstrap.min.js'); ?>"></script>
    <!-- waves effect js -->
    <script src="<?= public_url('admin/js/waves.js'); ?>"></script>
    <!-- Custom scripts -->
    <script src="<?= public_url('admin/js/app-script.js'); ?>"></script>

</body>

</html>