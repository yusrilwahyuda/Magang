<!DOCTYPE html>
<html>
<head>
    <?= $page_resource['meta'] ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $page_resource['admin_header'] ?>
        <?= $page_resource['admin_sidebar'] ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Change User Base Setting
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?= $this->session->flashdata('update_status') ?>
                                        </div>
                                    </div>
                                </div>
                                <?= form_open('account/update_account_data', ['class' => 'form-horizontal']) ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="username">Username</label>
                                        <div class="col-sm-6">
                                            <input type='text' name='username' class='form-control' value="<?= $auth_setting->username; ?>">
                                            <?= form_error('username') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="email">Email Aktif</label>
                                        <div class="col-sm-6">
                                            <input type='email' name='email' class='form-control' id='email' value="<?= $auth_setting->email ?>">
                                            <?= form_error('email') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="password">Change Password</label>
                                        <div class="col-sm-6">
                                            <input type='password' name='new_password' class='form-control' id='password' placeholder="Change Password">
                                            <?= form_error('password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="password_confirmation">New Password Confirmation</label>
                                        <div class="col-sm-6">
                                            <input type='password' name='new_password_confirmation' class='form-control' id='password_confirmation' placeholder="New Password Confirmation">
                                            <?= form_error('password_confirmation') ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="password_verification">Old Password Verification</label>
                                        <div class="col-sm-6">
                                            <input type='password' name='password_verification' class='form-control' id='password_verification' placeholder="Old Password Verification">
                                            <?= NULL !== $this->session->flashdata('wrong_password_verification') ? $this->session->flashdata('wrong_password_verification') : NULL; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= $page_resource['admin_footer'] ?>
    </div>
    <!-- ./wrapper -->
    <?= $page_resource['admin_scripts'] ?>
</body>
</html>
