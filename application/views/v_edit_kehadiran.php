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
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
<center>
    <h1>EDIT KEHADIRAN</h1>
    <hr>
    <hr>
    <form action="<?= base_url() ?>index.php/sekertaris/update_kehadiran" method="POST" enctype="multipart/form-data">
    <?php foreach ($data as $u) { ?>
    <table>
  <div class="form-group">
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" class="form-control form-control-user" value="<?php echo $u->nama ?>">
        <input type="hidden" name="id_pegawai" class="form-control form-control-user" value="<?php echo $u->id_pegawai ?>"></td>
    </tr>
  </div>
  <div class="form-group">
    <tr>
        <td>Tanggal</td> 
        <td><input type="date" name="tanggal" class="form-control form-control-user" value="<?php echo $u->tanggal ?>"></td>
    </tr>
  </div>
  <div class="form-group">
    <tr>
        <td>Jam Datang</td>
        <td><input type="time" name="jam_datang" class="form-control form-control-user" value="<?php echo $u->jam_datang ?>"></td>
    </tr>
  </div>
  <div class="form-group">
    <tr>
        <td>Jam Pulang</td>
        <td><input type="time" name="jam_pulang" class="form-control form-control-user" value="<?php echo $u->jam_pulang ?>"></td>
    </tr>
  </div>
    <tr><td></td>
        <td align="center">
            <input type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Edit" style="width: 100%">
        </td>
    </tr>   
    </table>
    <?php } ?>
  <?php
      echo $this->session->flashdata('pesan');
  ?>
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