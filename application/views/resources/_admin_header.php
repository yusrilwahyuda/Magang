<header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('pengaduan/view_pengaduan') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AWS TEXTILE</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>AWS TEXTILE</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <!-- search form -->
        <form action="<?=base_url()?>pengaduan/cari" method="get" class="col-sm-10" >
            <div class="input-group" style="margin-top: 8px; ">
                <input type="text" name="cari" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                     <input type="submit" value="Cari" class="btn btn-default">
                </span>
            </div>
        </form>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <!-- <span class="label label-warning">10</span> -->
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="https://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" height="25px">
                        <span class="hidden-xs"><?= $user_data->public_identity ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="https://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" class="img-circle" alt="User Image">

                            <p>
                                <?= $user_data->public_identity . " - ". ucfirst($this->session->level) ?>
                                <small>Joined since <?= date("d M Y", strtotime($user_data->joined)) ?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 col-xs-offset-8 text-center">
                                    <a href="<?= base_url('account/setting') ?>"><i class="fa fa-gears"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= base_url('dashboard/user_profile') ?>" class="btn btn-default btn-flat">Edit Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= base_url('auth/login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>