<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title><?php echo $title ?></title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/css/codebase.min.css">
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('<?php echo base_url() ?>assets/img/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                   <i> Point Of Sale </i>
                                </p>
                                <p class="font-italic text-white-op">
                                    
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                              <div class="px-30 py-10">
                                    <h1 class="h3 font-w700 mt-30 mb-10">Selamat Datang</h1>
                                    <?php if($this->session->flashdata('msg')){ ?>  
                                       <div class="alert alert-danger">  
                                         <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                         <strong>ERROR!</strong> <?php echo $this->session->flashdata('msg'); ?>  
                                        </div>
                                    <?php } else if($this->session->flashdata('Logerror')){ ?>  
                                         <div class="alert alert-danger">  
                                           <a href="#" class="close" data-dismiss="alert">&times;</a>  
                                           <strong>Error!</strong> <?php echo $this->session->flashdata('Logerror'); ?>  
                                         </div>  
                                     <?php } ?>  
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin px-30" action="<?php echo site_url('Authenticate/auth') ?>" method="post">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="username">
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password" name="password">
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?php echo base_url() ?>assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?php echo base_url() ?>assets/js/pages/op_auth_signin.js"></script>
    </body>
</html>