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
            <p style="font-size: 25px">Input Pengaduan</p>
          </center>
        </div>
        <div class="box-body">
           <form action="<?=base_url()?>Pengaduan/aksiCreate" method="post" enctype="multipart/form-data" class ='form-horizontal'>
             <div class="form-group">
              <label class="col-sm-2 control-label">No Saluran</label>
              <div class="col-sm-10">
                <input type="text" name="no_saluran" class="form-control">
              </div>
           </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama_pelapor" class="form-control" id="nama_pelapor">
                <?= form_error('nama_pelapor')?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">No HP</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp_pelapor" class="form-control" id="no_hp_pelapor">
                <?= form_error('no_hp_pelapor')?>
              </div>
            </div>
          <div class="form-group">
              <label class="col-sm-2 control-label">Deskripsi Pengaduan</label>
              <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="4" rows="9"></textarea>
                <?= form_error('deskripsi')?>
              </div>
            </div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat_pelapor" class="form-control" id="alamat_pelapor" rows="8" cols="80"></textarea>
              <?= form_error('alamat_pelapor')?>
              </div>
           </div>
           <div class="form-group">
              <label class="col-sm-2 control-label"> Jenis Pengaduan</label>
              <div class="col-sm-10">
                <select name="jenis_pengaduan" class="form-control" id="jenis_pengaduan">
                  <option value="Kebocoran Pipa PDAM">Kebocoran Pipa PDAM</option>
                  <option value="Kebocoran Sesudah Meteran">Kebocoran Sesudah Meteran</option>
                  <option value="Air Mati">Air Mati</option>
                  <option value="Air Kecil">Air Kecil</option>
                  <option value="Air Keruh">Air Keruh</option>
                  <option value="Meteran Hilang">Meteran Hilang</option>
                  <option value="Meteran Rusak">Meteran Rusak</option>
                  <option value="Ganti Meter">Ganti Meter</option>
                  <option value="Kesalahan Rekening">Kesalahan Rekening</option>
                  <option value="Pemakaian Abnormal">Pemakaian Abnormal</option>
                  <option value="Pembayaran Tidak Sesuai">Pembayaran Tidak Sesuai</option>
                  <option value="Pembayaran Tidak Resmi">Pembayaran Tidak Resmi</option>
                  <option value="Pemesanan Tanki">Pemesanan Tanki</option>
                  <option value="Geser Meter">Geser Meter</option>
                  <option value="Data Pelanggan Tidak Sesuai">Data Pelanggan Tidak Sesuai</option>
              </select>
              <?= form_error('jenis_pengaduan')?>
              </div>
           </div>
           <div class="form-group">
              <label class="col-sm-2 control-label">Foto</label>
              <div class="col-sm-10">
                <input type="file" name="fotopost" class="form-control" id="fotopost">
                <?= form_error('foto')?>
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
