<?php
$mode = $this->uri->segment(3);

if ($mode == "edit" || $mode == "act_edit") {
    $act = "act_edit";
    $id_surat = $datpil->id_surat;
    $yang_diberi_tugas = $datpil->yang_diberi_tugas;
    $no_surat = $datpil->no_surat;
    $keterangan = $datpil->keterangan;
    $daerah_tugas	 = $datpil->daerah_tugas;
    $tgl_surat = $datpil->tgl_surat;
} else {
    $act = "act_add";
    $id_surat = "";
    $keterangan = "";
    $daerah_tugas	 = "";
    $no_surat = "";
    $tgl_surat = "";
    $yang_diberi_tugas = "";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Surat Tugas</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('sibers'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat Tugas</li>
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
                        <h3 class="box-title">Data Surat Tugas</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="<?php echo site_url('surat/surat_tugas'); ?>/<?php echo $act; ?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 box-body">
                            <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>">
                            <div class="form-group">
                                <label for="noSurat">Nomor Surat</label>
                                <input type="text" value="<?php echo $no_surat; ?>" name="no_surat"
                                       class="form-control" id="noSurat" placeholder="Nomor Surat" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="yang bertugas">Diberikan Kepada</label>
                                
                                <textarea class="ckeditor id="ckeditor" class="form-control" name="yang_diberi_tugas" id="yang_bertugas" cols="82" rows="10" placeholder="Yang bertugas" required><?php echo $yang_diberi_tugas; ?></textarea>                                       
                            </div>
                            <div class="form-group">
                                <label for="perihal">Daerah Tugas</label>
                                <input type="text" value="<?php echo $daerah_tugas	; ?>" name="daerah_tugas"
                                       class="form-control" id="daerah_tugas" placeholder="Daerah tugas" required>
                            </div>

                            <div class="form-group">
                                <label for="perihal">Keterangan </label>
                                <input type="text" value="<?php echo $keterangan; ?>" name="keterangan"
                                       class="form-control" id="keterangan" placeholder="Keterangan" required>
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
                                <input type="file" id="fileSurat" name="file_surat" >
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
                            <a href="<?php echo site_url('surat/surat_masuk'); ?>" class="btn btn-danger btn-flat">
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
<script>
  var ckeditor = CKEDITOR.replac('ckeditor'{
                    height:'600px'
  });
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
</script>

<script type="text/javascript">
    $('#tglSurat').datepicker({
        format: 'yy-mm-dd',
        autoclose: true
    });
</script>