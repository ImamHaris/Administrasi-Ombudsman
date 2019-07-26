<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Stats box -->
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_masuk; ?></h3>
                        <p>Total Surat Masuk Umum</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_masuk'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div> 
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_keluar; ?></h3>
                        <p>Total Surat Keluar Umum</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_keluar'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_keluar_laporan; ?></h3>
                        <p>Total Surat Keluar Laporan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-checkbox"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_keluar_laporan'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_keluar; ?></h3>
                        <p>Total Surat Klarifikasi Umum</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_keluar'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_klarifikasi_keluar; ?></h3>
                        <p>Total Surat Klarifikasi Keluar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_klarifikasi_keluar'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_keluar; ?></h3>
                        <p>Total Surat Klarifikasi Keluar II</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_keluar'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_tembusan; ?></h3>
                        <p>Total Surat Tembusan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_tembusan'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-new">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_tugas; ?></h3>
                        <p>Total Surat Tugas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_tugas'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo (int) $total_surat_keluar; ?></h3>
                        <p>Total Surat Keputusan (Kepala Perwakilan)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-mail"></i>
                    </div>
                    <a href="<?php echo site_url('surat/surat_keluar'); ?>" class="small-box-footer">Selengkapnya.. <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->