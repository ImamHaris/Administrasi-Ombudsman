<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D> KELOLA SURAT MASUK UMUM</font></h1></b>
        <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
    </div>

   <!-- tabel referensi -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <div class="float-left"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus mdi mdi-plus-circle"></span>Tambah</a></div>
              <br><br>
            </div>
            <div class="table-responsive">
              <table id="tabelREF" class="table table-striped">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>No Surat</th>
                      <th>Tanggal Surat</th>
                      <th>Pengirim</th>
                      <th>Perihal</th>
                      <th>File</th>
                      <th style="text-align: right;">Actions</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<!-- main-panel ends -->
<!-- MODAL ADD -->

<form id="form_smu">
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Surat Masuk Umum Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">No Surat</label>
          <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="No Surat" required>   
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Tanggal Surat</label>
          <input type="date" name="tgl_surat" id="tgl_surat" class="form-control" placeholder="Tanggal Surat" required>         
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Pengirim</label>
          <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Pengirim" required>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Perihal</label>
          <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Perihal" required>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">File</label>
          <input type="file" name="file" id="file" class="form-control" placeholder="File" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id_surat_edit" id="id_surat_edit" class="form-control" placeholder="ID Surat"required>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">No Surat</label>
                    <div class="col-md-10">
                      <input type="text" name="no_surat_edit" id="no_surat_edit" class="form-control" placeholder="No Surat"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tanggal Surat</label>
                    <div class="col-md-10">
                      <input type="text" name="tgl_surat_edit" id="tgl_surat_edit" class="form-control" placeholder="Tanggal Surat" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Pengirim</label>
                    <div class="col-md-10">
                      <input type="text" name="pengirim_edit" id="pengirim_edit" class="form-control" placeholder="Pengirim" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Perihal</label>
                    <div class="col-md-10">
                      <input type="text" name="perihal_edit" id="perihal_edit" class="form-control" placeholder="Perihal" required>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
        </form>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
     <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Surat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <strong>Delete Surat Ini?</strong>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id_surat_delete" id="id_surat_delete" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
              </div>
            </div>
          </div>
        </div>
        </form>
    <!--END MODAL DELETE-->



<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script>
  $(document).ready(function(){
      show_referensi();
      $('#tabelREF').dataTable();
      //function show all product
      function show_referensi(){
          $.ajax({
              type  : 'ajax',
              url   : '<?php echo site_url('admin/suratmu/smu_data')?>',
              async : false,
              dataType : 'json',
              success : function(data){
                  var html = '';
                  var i,nomor;
                  for(i=0; i<data.length; i++){
                    var link_file = '<?php echo site_url('assets/upload/referensi/')?>'+data[i].file;
                    var download = 'Download';
                    nomor = i+1;
                      html += '<tr>'+
                            '<td>'+nomor+'</td>'+
                              '<td>'+data[i].no_surat+'</td>'+
                              '<td>'+data[i].tgl_surat+'</td>'+
                              '<td>'+data[i].pengirim+'</td>'+
                              '<td>'+data[i].perihal+'</td>'+
                              '<td>'+'<a href="'+link_file+'" target="_blank">'+download+'</a>'+'</td>'+
                              '<td style="text-align:right;">'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_surat="'+data[i].id_surat+'" data-no_surat="'+data[i].no_surat+'" data-tgl_surat="'+data[i].tgl_surat+'" data-pengirim="'+data[i].pengirim+'" data-perihal="'+data[i].perihal+'" >Edit</a>'+' '+
                                      '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_surat="'+data[i].id_surat+'">Delete</a>'+
                                  '</td>'+
                              '</tr>';

                  }
                  $('#show_data').html(html);
              }
          });
      }

      $('#submit').submit(function(e){
            e.preventDefault();
                 $.ajax({
                     url:'<?php echo base_url();?>admin/suratmu/upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          $('#Modal_Add').modal('hide');
                          $('[name="id_surat"]').val("");
                          $('[name="no_surat"]').val("");
                          $('[name="tgl_surat"]').val("");
                          $('[name="pengirim"]').val("");
                          $('[name="perihal"]').val("");
                          $('[name="file"]').val("");
                          show_smu();
                   }
                 });
            });

      //get data for update record
      $('#show_data').on('click','.item_edit',function(){
          var id_surat = $(this).data('id_surat');
          var no_surat = $(this).data('no_surat');
          var tgl_surat  = $(this).data('tgl_surat');
          var pengirim = $(this).data('pengirim');
          var perihal = $(this).data('perihal');
          $('#Modal_Edit').modal('show');
          $('[name="id_surat_edit"]').val(id_surat);
          $('[name="no_surat_edit"]').val(no_surat);
          $('[name="tgl_surat_edit"]').val(tgl_surat);
          $('[name="pengirim_edit"]').val(pengirim);
          $('[name="perihal_edit"]').val(perihal);
      });
      //update record to database
       $('#btn_update').on('click',function(){
         var id_surat = $('#id_surat_edit').val();
         var no_surat = $('#no_surat_edit').val();
         var tgl_surat = $('#tgl_surat_edit').val();
         var pengirim = $('#pengirim_edit').val();
         var perihal = $('#perihal_edit').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo site_url('admin/suratmu/update')?>",
              dataType : "JSON",
              data : {id_surat:id_surat , no_surat:no_surat, tgl_surat:tgl_surat, pengirim:pengirim, perihal:perihal},
              success: function(data){
                  $('[name="id_surat_edit"]').val("");
                  $('[name="no_surat_edit"]').val("");
                  $('[name="tgl_surat_edit"]').val("");
                  $('[name="pengirim_edit"]').val("");
                  $('[name="perihal_edit"]').val("");
                  $('#Modal_Edit').modal('hide');
                  show_suratmu();
              }
          });
          return false;
      });
      //get data for delete record
      $('#show_data').on('click','.item_delete',function(){
          var id_surat = $(this).data('id_surat');
          $('#Modal_Delete').modal('show');
          $('[name="id_surat_delete"]').val(id_surat);
      });
      //delete record to database
       $('#btn_delete').on('click',function(){
          var id_surat = $('#id_surat_delete').val();
          $.ajax({
              type : "POST",
              url  : "<?php echo site_url('admin/suratmu/delete')?>",
              dataType : "JSON",
              data : {id_surat:id_surat},
              success: function(data){
                  $('[name="id_surat_delete"]').val("");
                  $('#Modal_Delete').modal('hide');
                  show_smu();
              }
          });
          return false;
      });

  });
</script>




<!-- Buat DataTable-->
