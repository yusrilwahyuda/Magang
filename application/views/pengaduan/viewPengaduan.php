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
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-body">
              <div class="row">
                <!-- <div class="col-md-3">
                </div> -->
                <div class="col-md-9">
                   
                  <h2><?= $pengaduan->nama_pelapor ?></h2>
                      <table style="font-size: 16px; font-family: calibri">
                        <tr>
                            <td>No Saluran</td>
                            <td> : </td>
                            <td><?= $pengaduan->no_saluran ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Pengaduan</td>
                            <td> : </td>
                            <td><?= $pengaduan->jenis_pengaduan ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : </td>
                            <td><?= $pengaduan->alamat_pelapor ?></td>
                      </tr> 
                    </table>
                  <br>
                  <br>
                </div>
              </div>
              <div class="col-md-3">
                      <img  src="<?= base_url('storage/images/') . $pengaduan->foto ?>" height='300' ><br>
                    </div>
              <div class="row">
                <div class="col-md-12"> 
                  <p align="justify" style="position: relative; margin-top: 20px;"><?= $pengaduan->deskripsi?> </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <span style="font-size: 20px; font-weight: 900; display: block;">Komentar</span> 
                </div>
              </div>
              <div class="row">
                <div class=" col-md-12">
                    <div class="actionBox">
                        <ul class="commentList">
                          <?php foreach ($komentar->result() as $com): ?>
                            
                            <li>
                                <div class="commenterImage">
                                  <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-user-png-6.png" />
                                </div>
                                <div class="commentText">
                                    <h5 style="font-weight: bold"><?php echo $com->username ?></h5>
                                    <p class=""><?php echo $com->isi ?></p> <span class="date sub-text">on <?php echo $com->tgl ?></span>
                                    
                                </div>
                            </li>
                          <?php endforeach ?>
                            
                        </ul>
                        <form class="form-inline" role="form" action="<?= site_url('komentar/insert') ?>" method="post">
                          <div class="form-group">
                              <input class="form-control" type="text" name="isi" placeholder="Your comments" required/>
                          </div>
                          <div class="form-group">
                              <button class="btn btn-default">Add</button>
                          </div>
                          <input type="hidden" name="id_pengaduan" value="<?= $id_pengaduan ?>">
                          <input type="hidden" name="user_id" value=<?= $this->session->userdata('id') ?>>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
            <!-- End Box Body -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?= $page_resource['admin_footer'] ?>
</div>
<?= $page_resource['admin_scripts'] ?>
</body>
</html>
