<!DOCTYPE html>
<html>
<head>
  <?= $page_resource['meta'] ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?= $page_resource['admin_header'] ?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?= $page_resource['admin_sidebar'] ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-header with-border">
          <center>
            <p style="font-size: 25px">Input Gaji</p>
          </center>
        </div>
        <div class="box-body">
           <form action="<?=base_url()?>Penggajian/aksiCreate" method="post" class ='form-horizontal'>
             <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pegawai</label>
              <div class="col-sm-10">
                <input type="text" name="no_saluran" class="form-control">
              </div>
           </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jumlah Sarung</label>
              <div class="col-sm-10">
                <input type="text" name="nama_pelapor" class="form-control" id="nama_pelapor">
                <?= form_error('nama_pelapor')?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jam Masuk</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp_pelapor" class="form-control" id="no_hp_pelapor">
                <?= form_error('no_hp_pelapor')?>
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-2 control-label">Jam Keluar</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp_pelapor" class="form-control" id="no_hp_pelapor">
                <?= form_error('no_hp_pelapor')?>
              </div>
            </div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea name="alamat_pelapor" class="form-control" id="alamat_pelapor" rows="8" cols="80"></textarea>
              <?= form_error('alamat_pelapor')?>
              </div>
           </div>
           
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              	<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id') ?>">
                <button type="submit" name='submit' value="Kirim" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
         </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?= $page_resource['admin_footer'] ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<?= $page_resource['admin_scripts'] ?>
</body>
</html>
