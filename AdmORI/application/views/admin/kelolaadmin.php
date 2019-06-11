<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D> KELOLA DATA ADMIN</font></h1></b>
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
              <table id="tabelADM" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID Admin</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    
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
<form id="form_admin">
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Admin Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>   
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Nama" required>         
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div>




        
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                      <input type="text" name="nama_edit" id="nama_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                      <input type="text" name="username_edit" id="username_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                      <input type="password" name="password_edit" id="password_edit" class="form-control">
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <strong>Delete ?</strong>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id_admin_delete" id="id_admin_delete" class="form-control">
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
      show_admin();
      $('#tabelADM').dataTable();

      //menampilkan data admin dari database
  		function show_admin(){
        //AJAX request data dari url = controller kelolaadmin function admin_data
  		    $.ajax({
  		        type  : 'ajax',
  		        url   : '<?php echo site_url('admin/kelolaadmin/admin_data')?>',
  		        async : false,
  		        dataType : 'json',
  		        success : function(data){
  		            var html = '';
  		            var i;
  		            for(i=0; i<data.length; i++){
  									html += '<tr>'+
                    //Nampilin data berdasarkan database "id_admin" itu sesuai dengan di database
  												'<td>'+data[i].id_admin+'</td>'+
  													'<td>'+data[i].nama+'</td>'+
                            '<td>'+data[i].username+'</td>'+
  													'<td>'+data[i].password+'</td>'+
  													
  													'<td style="text-align:right;">'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_admin="'+data[i].id_admin+'" data-nama="'+data[i].nama+'" data-username="'+data[i].username+'" data-password="'+data[i].password+'">Edit</a>'+' '+
                                      '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_admin="'+data[i].id_admin+'">Delete</a>'+
                                  '</td>'+
  		                        '</tr>';
  		            }
  		            $('#show_data').html(html);
  		        }

  		    });
  		}

      //Validasi pengisian form kalau harus diisi semua
      $('#form_admin').validate({
        errorPlacement: function(error, element) {
        error.insertBefore(element);
        },
        //harus diisi semua (required)
        rules: {
          
          nama: "required",
          username: "required",
          password: "required",
          
          },
          //pesan yg ditampilin kalau ada yg gk diisi diform
          messages: {
            
            nama: {
              required: "Kolom Ini Harus Diisi"
            },
            username: {
              required: "Kolom Ini Harus Diisi"
            },
            password: {
              required: "Kolom Ini Harus Diisi"
            },
            
          },

          submitHandler: function(form) {
              //kalau sudah disubmit sama user
              //simpen semua inputan berdasarkan id (#) dan disimpen ke variabel
              var id_admin = $('#id_admin').val();
              var nama = $('#nama').val();
              var username = $('#username').val();
              var password = $('#password').val();
              

              //request AJAX dengan tipe POST
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('admin/kelolaadmin/save')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin , nama:nama, username:username, password:password},
                  success: function(data){
                    //Kalau berhasil data yg udah diinputin di modal dihapus ("") dan modal nya di close (hide)
                      $('[name="id_admin"]').val("");
                      $('[name="nama"]').val("");
                      $('[name="username"]').val("");
                      $('[name="password"]').val("");
                      
                      $('#Modal_Add').modal('hide');
                      //panggil lagi function buat nampilin daftar admin, karena sudah ada data baru
                      show_admin();
                  }
              });
              return false;  // blocks regular submit karna pake ajax
          }
        });

          //Button dengan (ID = btn_save) diklik maka akan mensubmit form dengan id = (#form_admin)
          $('#btn_save').on('click',function(){
            $('#form_admin').submit();
          });

          //get data for update record
          $('#show_data').on('click','.item_edit',function(){
              var id_admin = $(this).data('id_admin');
              var nama = $(this).data('nama');
              var username = $(this).data('username');
              var password  = $(this).data('password');

              $('#Modal_Edit').modal('show');
              $('[name="id_admin_edit"]').val(id_admin);
              $('[name="nama_edit"]').val(nama);
              $('[name="username_edit"]').val(username);
              $('[name="password_edit"]').val(password);
          });

          //update record to database
           $('#btn_update').on('click',function(){

             var id_admin = $('#id_admin_edit').val();
             var nama = $('#nama_edit').val();
             var username = $('#username_edit').val();
             var password = $('#password_edit').val();

              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('admin/kelolaadmin/update')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin , nama:nama, username:username, password:password},
                  success: function(data){
                      $('[name="id_admin_edit"]').val("");
                      $('[name="nama_edit"]').val("");
                      $('[name="username_edit"]').val("");
                      $('[name="password_edit"]').val("");
                      $('[name="tahun_edit"]').val("");
                      
                      $('#Modal_Edit').modal('hide');
                      show_admin();
                  }
              });
              return false;
          });

          //get data for delete record
          $('#show_data').on('click','.item_delete',function(){
              var id_admin = $(this).data('id_admin');

              $('#Modal_Delete').modal('show');
              $('[name="id_admin_delete"]').val(id_admin);
          });

          //delete record to database
           $('#btn_delete').on('click',function(){
              var id_admin = $('#id_admin_delete').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('admin/kelolaadmin/delete')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin},
                  success: function(data){
                      $('[name="id_admin_delete"]').val("");
                      $('#Modal_Delete').modal('hide');
                      show_admin();
                  }
              });
              return false;
          });
  });
</script>
<!-- Buat DataTable-->
