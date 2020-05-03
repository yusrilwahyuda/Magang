<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="izmage/png" href="<?php echo base_url().'asset/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/util.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/main.css'?>">
<!--===============================================================================================-->
<div class="limiter">
    <div class="container-login10">
      <div class="wrap-login10 p-l-55 p-r-55 p-t-65 p-b-50">
    <center>
    <h1>Data Kehadiran</h1>
    <hr><hr>
    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="1">
       
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam Datang</th>
            <th>Jam Pulang</th>
            <th>Lembur</th>
            <th colspan="2">Kelola</th>
          
        </tr>
        <?php
            $i=1;
            foreach ($kehadiran as $data) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data->nama; ?></td>
            <td><?php echo $data->tanggal; ?></td>
            <td><?php echo $data->jam_datang; ?>:00</td>
            <td><?php echo $data->jam_pulang; ?>:00</td>
            <?php if ($data->lembur >= 0) { ?>
              <td><?php echo $data->lembur; ?> jam</td>
            <?php }else{ ?>
            <td>0 jam</td>
            <?php } ?>
            <td><a href="<?= base_url().'index.php/sekertaris/editKehadiran/'.$data->id_pegawai;?>" class="btn btn-primary">Edit</a></td>
            <td><a href="<?= base_url().'index.php/sekertaris/hapus_kehadiran/'.$data->id_pegawai;?>" onclick="return confirm('Anda Yakin Menghapus kehadiran ?')" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php $i++; }?>
    </table>
     <a href="<?= base_url().'index.php/sekertaris/index'?>" class="btn btn-primary">Input Kehadiran</a>
    </center>
    </div>
  </div>
  </div>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/popper.js'?>"></script>
  <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/moment.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url().'asset/login/js/main.js'?>"></script>