<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIBERS | <?php echo $title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <?php
        //Favicon
        echo link_tag('assets/sibers/favicon.ico', 'shortcut icon', 'image/ico');
        //Bootstrap 3.3.7
        echo link_tag('assets/bootstrap/css/bootstrap.css');
        //Jquery UI
        echo link_tag('assets/jquery-ui/jquery-ui.css');
        //Font Awesome
        echo link_tag('assets/font-awesome/css/font-awesome.css');
        //AdminLTE Theme style
        echo link_tag('assets/sibers/css/AdminLTE.css');
        //AdminLTE green skins
        echo link_tag('assets/sibers/css/skin-green.css');
        ?>
    </head>
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">

            <!--============================================-->
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo site_url('sibers'); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><i class="fa fa-file"></i></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <img src="<?php echo base_url() ?>assets/foto/logo.png">
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Setting -->
                            <?php if ($this->session->user_level == "Admin") { ?>
                                <li class="dropdown notifications-menu">
                                    <a href="<?php echo site_url('sibers/manage_user'); ?>">
                                        <i class="fa fa-gears"></i>
                                        <span class="hidden-xs">Kelola User</span>
                                    </a>
                                    
                                </li>
                            <?php } ?>
                            <!-- User Menu -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <span class="hidden-xs"><?php echo $this->session->user_nama; ?></span>
                                </a>
                                <ul class="dropdown-menu" style="width: 150px; max-height: 84px;">
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo site_url('sibers/change_password'); ?>">
                                                    <i class="fa fa-lock text-orange"></i>
                                                    <span>Ganti Password</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('sibers/logout'); ?>">
                                                    <i class="fa fa-power-off text-red"></i> 
                                                    <span>Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                           
                        </ul>
                    </div>
                </nav>
            </header>

            <!--============================================-->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">NAVIGASI UTAMA</li>
                        <li><a href="<?php echo site_url('sibers'); ?>"><i class="fa fa-home text-teal"></i> <span>Beranda</span></a></li>
                        <li><a href="<?php echo site_url('sibers/dashboard'); ?>"><i class="fa fa-dashboard text-teal"></i> <span>Dashboard</span></a></li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li class="header">SURAT</li>
                        <li><a href="<?php echo site_url('surat/surat_masuk'); ?>"><i class="fa fa-envelope text-orange"></i> <span>Surat Masuk Umum</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-print text-teal"></i> <span>Surat Keluar</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('surat/surat_keluar'); ?>"><i class="fa fa-print text-orange"></i> Surat Keluar Umum</a></li>
                                <li><a href="<?php echo site_url('surat/surat_keluar_laporan'); ?>"><i class="fa fa-print text-orange"></i> Surat Keluar Laporan</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-print text-teal"></i> <span>Surat Klarifikasi</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('surat/surat_klarifikasi_masuk'); ?>"><i class="fa fa-print text-orange"></i> Surat Klarifikasi Masuk</a></li>
                                <li><a href="<?php echo site_url('surat/surat_klarifikasi_keluar'); ?>"><i class="fa fa-print text-orange"></i> Surat Klarifikasi Keluar</a></li>
                                <li><a href="<?php echo site_url('surat/surat_klarifikasi_keluar2'); ?>"><i class="fa fa-print text-orange"></i> Surat Klarifikasi Keluar II</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('surat/surat_tembusan'); ?>"><i class="fa fa-envelope text-orange"></i> <span>Surat Tembusan</span></a></li>
                        <li><a href="<?php echo site_url('surat/surat_tugas'); ?>"><i class="fa fa-envelope text-orange"></i> <span>Surat Tugas</span></a></li>
                        <li><a href="<?php echo site_url('surat/surat_keluar'); ?>"><i class="fa fa-envelope text-orange"></i> <span>Surat Keputusan</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!--============================================-->

            <!--Content wrapper-->
            <?php $this->load->view($page); ?>

            <!--============================================-->
            <footer class="main-footer">
                <b>&copy; 2019 Kerja Praktik Teknik Informatika | Institut Teknologi Sumatera</b>
                <div class="pull-right hidden-sm hidden-xs">
                    Waktu Eksekusi: <strong>{elapsed_time}</strong>, Penggunaan Memori: <strong>{memory_usage}</strong>
                </div>
            </footer>
            <!--============================================-->
        </div>
        <!-- ./wrapper -->
        <script type='text/javascript' src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
        <!-- jQuery 1.12.4 -->
        <script src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
        <!-- jQuery UI 1.12.1 -->
        <script src="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>assets/slimScroll/jquery.slimscroll.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/fastclick/fastclick.js"></script>
        <!-- AdminLTE JS -->
        <script src="<?php echo base_url(); ?>assets/sibers/js/adminlte.js"></script>
        <script>
            $(document).ready(function () {
                //tolltip hover pada button tanpa nama
                $('[data-toggle="tooltip"]').tooltip();

                $("#kode_surat").change(function () {
                    $.ajax({
                        url: "<?php echo site_url('surat/kode_surat'); ?>",
                        data: {divisi: $("#kode_surat").val()},
                        type: "POST",
                        success: function (data) {
                            $("#kode").html(data);
                        }
                    });
                });

                //datepicker
                $(function () {
                    $("#datepicker").datepicker({
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd'
                    });
                });

                $(function () {
                    $("#datepicker_end").datepicker({
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd'
                    });
                });

                $(function () {
                    $("#dari").autocomplete({
                        minLength: 1,
                        source: function (request, response) {
                            $.ajax({
                                url: "<?php echo site_url('surat/get_instansi_lain'); ?>",
                                data: {kode: $("#dari").val()},
                                dataType: "json",
                                type: "POST",
                                success: function (data) {
                                    response(data);
                                }
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>

