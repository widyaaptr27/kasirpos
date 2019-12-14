<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Kasir Widyaa</title>

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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="<?php echo base_url() ?>assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="<?php echo base_url() ?>assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">


        <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
                -->
                <?php $this->load->view('admin/layout/sidebar');  ?>
                <!-- END Sidebar -->

                <!-- Header -->
                <header id="page-header">
                    <!-- Header Content -->
                    <div class="content-header">
                        <!-- Left Section -->
                        <div class="content-header-section">
                            <!-- Toggle Sidebar -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                                <i class="fa fa-navicon"></i>
                            </button>
                            <!-- END Toggle Sidebar -->




                            <!-- END Color Themes -->
                        </div>
                        <!-- END Left Section -->

                    </div>
                    <!-- END Header Content -->



                    <!-- Header Loader -->
                    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                    <div id="page-header-loader" class="overlay-header bg-primary">
                        <div class="content-header content-header-fullrow text-center">
                            <div class="content-header-item">
                                <i class="fa fa-sun-o fa-spin text-white"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END Header Loader -->
                </header>
                <!-- END Header -->

                <!-- Main Container -->
                <main id="main-container">
                    <!-- Page Content -->
                    <div class="content">


                        <?php 
                        if($this->uri->segment(2)=='Datakaryawan'){
                            $this->load->view('admin/page/v_datakaryawan');
                        }elseif($this->uri->segment(2)=='dashboard'){
                            $this->load->view('admin/page/v_dashboard');
                        }elseif($this->uri->segment(1)=='KategoriBarang'){
                            $this->load->view('admin/page/v_kategori');
                        }elseif($this->uri->segment(1)=='BarangController'){
                            $this->load->view('admin/page/v_barang');
                        }elseif($this->uri->segment(1)=='TransaksiController'){
                            $this->load->view('admin/page/v_transaksi');
                        }elseif($this->uri->segment(1)=='ReportController'){
                            $this->load->view('admin/page/v_report');
                        }

                        ?>







                    </div>
                    <!-- END Page Content -->
                </main>
                <!-- END Main Container -->

                <!-- Footer -->
              <!--   <footer id="page-footer" class="opacity-0">
                    <div class="content py-20 font-size-xs clearfix">
                        <div class="float-right">
                            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="float-left">
                            <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
                        </div>
                    </div>
                </footer> -->
                <!-- END Footer -->
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
            <script src="<?php echo base_url() ?>assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

            <!-- Page JS Code -->
            <script src="<?php echo base_url() ?>assets/js/pages/be_pages_dashboard.js"></script>
            <!-- Page JS Plugins -->
            <script src="<?php echo base_url() ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
            

            <!-- Page JS Code -->
            <script src="<?php echo base_url() ?>assets/js/pages/be_tables_datatables.js"></script>
        </body>
        </html>