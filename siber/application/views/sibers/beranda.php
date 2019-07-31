<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Beranda</h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Beranda</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $this->session->flashdata("welcome_message"); ?>
        <!-- Stats box -->
        <br>
        <br>
        <br>
        <style>
        	.container { width: 96%; max-width: 960px; margin: 0 auto; text-align: center; }
        	img {width: 40%; height: auto}
        </style>
        <div class="container">
        	<img src="<?php echo base_url() ?>assets/foto/logo sibers.png" alt="" width="960"; height="640"/>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->