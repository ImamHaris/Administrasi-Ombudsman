<?php
$mode = $this->uri->segment(3);

if ($mode == "edit" || $mode == "act_edit") {
    $act = "act_edit";
    $id_surat = $datpil->id_surat;
    $tujuan = $datpil->tujuan;
    $no_surat = $datpil->no_surat;
    $perihal = $datpil->perihal;
    $tgl_surat = $datpil->tgl_surat;
} else {
    $act = "act_add";
    $tujuan = "";
    $id_surat = "";
    $no_surat = "";
    $tgl_surat = "";
    $perihal = "";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Surat Keluar Umum</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('simak'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Keluar Umum</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Surat Keluar Umum</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo site_url('surat/surat_keluar'); ?>/<?php echo $act; ?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 box-body">
                        <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>">
                            <div class="form-group">
                                <label for="noSurat">Nomor Surat</label>
                                <input type="text" value="<?php echo $no_surat; ?>" name="no_surat"
                                       class="form-control" id="noSurat" placeholder="Nomor Surat" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="tujuan">tujuan</label>
                                <input type="text" value="<?php echo $tujuan; ?>" name="tujuan"
                                       class="form-control" id="tujuan" placeholder="tujuan" required>
                            </div>
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <input type="text" value="<?php echo $perihal; ?>" name="perihal"
                                       class="form-control" id="perihal" placeholder="perihal" required>
                            </div>
                        
                        </div>
                        <!-- /.box-body -->
                        <div class="col-md-6 box-body">
                            <!--<input name="indek_berkas" value="<?php // echo $indek_berkas ?>">-->
                            <div class="form-group">
                                <label for="tglSurat">Tanggal Surat</label>
                                <input type="text" value="<?php echo $tgl_surat; ?>" name="tgl_surat"
                                       class="form-control" id="datepicker" placeholder="Tanggal Surat" required>
                            </div>
                            <div class="form-group">
                                <label for="fileSurat">File Surat</label>
                                <input type="file" id="fileSurat" name="file_surat">
                                <p class="help-block">File harus berekstensi .pdf/ .jpg/.jpeg/.png</p>
                            </div>
                            <div class="form-group">
                                
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">
                                <i class="fa fa-save"></i><span class="hidden-xs"> Simpan</span>
                            </button>
                            <a href="<?php echo site_url('surat/surat_keluar'); ?>" class="btn btn-danger btn-flat">
                                <i class="fa fa-undo"></i><span class="hidden-xs"> Kembali</span></a>
                            <button type="reset" class="btn btn-default btn-flat pull-right">
                                <i class="fa fa-eraser"></i><span class="hidden-xs"> Clear</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--col-->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $('#tglSurat').datepicker({
        format: 'yy-mm-dd',
        autoclose: true
    });
</script>