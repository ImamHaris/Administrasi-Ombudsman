<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Surat Tembusan</h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('simak'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Surat tembusan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $this->session->flashdata("message"); ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-xs-6">
                                <a class="btn btn-primary btn-sm btn-flat" href="<?php echo site_url('surat/surat_tembusan/add'); ?>"><i class="fa fa-plus"></i>
                                    <span class="hidden-xs"> Tambah Data</span></a></li>
                            </div>
                            <div class="box-tools col-xs-6">
                                <form method="post" action="<?php echo site_url('surat/surat_tembusan/cari'); ?>">
                                    <div class="input-group input-group-sm" style="width: 100%;">
                                        <input type="text" style="width: 35%;" id="datepicker" name="t" class="form-control" placeholder="Tgl">
                                        <input type="text" style="width: 65%;" name="q" class="form-control pull-right" placeholder="Kata kunci">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="width: 100%;">
                            <tr>
                                <th style="width: 4%;">No.</th>
                                <th style="width: 36%;">Asal Surat/Pengirim</th>
                                <th style="width: 25%;">Perihal</th>
                                <th style="width: 20%;">Nomor, Tgl. Surat</th>
                                <th style="width: 15%;">Aksi</th>
                            </tr>
                            <?php
                            if (empty($data)) {
                                echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                            } else {
                                $nomor=0;
                                $no = ($this->uri->segment(4) + 1);
                                foreach ($data as $b) {
                                    $nomor++;
                                    ?>
                                    <tr>
                                        <td ><?php echo $nomor; ?></td>
                                        <td ><?php echo $b->pengirim; ?> </td> 
                                        <td ><?php echo limit_word($b->perihal, 50, 0) . "<br><b>File : </b><i><a href='"  . base_URL() . "assets/upload/surat_tembusan_umum/" . $b->file . "' target='_blank'>" . limit_word($b->file, 50, 1) . "</a>"; ?></td>
                                        <td ><?php echo $b->no_surat . "<br><i>" . tgl_jam_sql($b->tgl_surat) . "</i>"; ?></td>
                                        <td>
                                            <?php
                                            if ($b->pengolah == $this->session->user_id) {
                                                ?>
                                                <div>
                                                    <a href="<?php echo site_url('surat/surat_tembusan/edit'); ?>/<?php echo $b->id_surat ?>"
                                                       data-toggle="tooltip" class="btn btn-success btn-sm" title="Edit Data"><i class="fa fa-pencil"> </i></a>
                                                    <a href="<?php echo site_url('surat/surat_tembusan/del'); ?>/<?php echo $b->id_surat ?>"
                                                       data-toggle="tooltip" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin ..?')"><i class="fa fa-remove"></i></a>			
                                                    <a href="<?php echo site_url('surat/surat_disposisi'); ?>/<?php echo $b->id_surat ?>"
                                                       data-toggle="tooltip" class="btn btn-warning btn-sm"  title="Disposisi Surat"><i class="fa fa-check"></i></a>
                                                    <a href="<?php echo site_url('cetak/cetak_disposisi'); ?>/<?php echo $b->id_surat ?>"
                                                       data-toggle="tooltip" class="btn btn-default btn-sm" target="_blank" title="Cetak Disposisi"><i class="fa fa-print"></i></a>
                                                </div>	
                                                <?php
                                            } else {
                                                ?>
                                                <div>
                                                    <a href="<?php echo site_url('cetak/cetak_disposisi'); ?>/<?php echo $b->id_surat; ?>"
                                                       data-toggle="tooltip" class="btn btn-default btn-sm" target="_blank" title="Cetak Disposisi"><i class="fa fa-print"></i></a>
                                                </div>	
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer box-tools clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <?php echo $pagi; ?>
                        </ul>
                    </div>
                </div> 
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->