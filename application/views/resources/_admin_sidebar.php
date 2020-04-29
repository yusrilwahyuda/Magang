<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="height: 40px;">
                <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-user-png-6.png">
            </div>
            <div class="pull-left info">
                <p><?= $user_data->public_identity ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="<?=base_url()?>pengaduan/cari" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                     <input type="submit" value="Cari" class="btn btn-default">
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php if($this->session->level === "admin"){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Penggajian</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('penggajian/aksiCreate') ?>"><i class="fa fa-circle-o"></i> Input Data Gaji</a></li>
                    <li><a href="<?= site_url('pengaduan/view_pengaduan') ?>"><i class="fa fa-circle-o"></i> View Data Gaji</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Kepegawaian</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> Input Data Pegawai</a></li>
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> View Data Pegawai</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Keuangan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> View Laporan Kas</a></li>
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> Input Data Kas</a></li>
                </ul>
            </li>
            <?php } ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Penjualan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> Input Data Penjualan</a></li>
                    <!-- Catatan penjualan ada kain perca dan saruung --> 
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> View Data Penjualan</a></li>
                    <li><a href="<?= site_url('#') ?>"><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
                </ul>
            </li>
           <!--  <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Penggajian</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if($this->session->level === "admin"){ ?>
                    <li><a href="<?= site_url('pengaduan/view_pengaduan') ?>"><i class="fa fa-circle-o"></i> View Data Gaji</a></li>
                    <?php } else { ?>
                    <li><a href="<?= site_url('pengaduan/create') ?>"><i class="fa fa-circle-o"></i> Form Pengaduan </a></li>
                    <li><a href="<?= site_url('pengaduan/view_pengaduan') ?>"><i class="fa fa-circle-o"></i> Beranda </a></li>
                    <?php } ?>
                </ul>
            </li> -->
          
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
