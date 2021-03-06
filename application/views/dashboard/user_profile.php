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
                    User Profile
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <?= form_open_multipart('dashboard/insert_data_user',['class' => 'form-horizontal', 'id'=>'change-profile-form']) ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="username">Username</label>
                                        <div class="col-sm-6">
                                            <input type='text'class='form-control' value="<?= $user_data->username ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="first_name">First Name</label>
                                        <div class="col-sm-6">
                                            <input type='text' name='first_name' class='form-control' id='first_name' value="<?= "" !== set_value('first_name') ? set_value('first_name') : $user_data->first_name ?>">
                                            <?= form_error('first_name') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="last_name">Last Name</label>
                                        <div class="col-sm-6">
                                            <input type='text' name='last_name' class='form-control' id='last_name' value="<?= "" !== set_value('last_name') ? set_value('last_name') : $user_data->last_name ?>">
                                            <?= form_error('last_name') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="birth_date">Birth Date</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" name="birth_date" id="birth_date" value="<?= "" !== set_value('birth_date') ? set_value('birth_date') : $user_data->birth_date ?>">
                                            <?= form_error('birth_date') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="gender">Gender</label>
                                        <div class="col-sm-6">
                                            <label class="radion-inline">
                                                <input type="radio" name="gender" id="gender" value="m" <?= $user_data->gender == "m" ? "checked" : ""; ?>>
                                                Male
                                            </label>
                                            <label class="radion-inline">
                                                <input type="radio" name="gender" id="gender" value="f"<?= $user_data->gender == "f" ? "checked" : ""; ?>>
                                                Female
                                            </label>
                                            <?= form_error('gender') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="photo">Photo</label>
                                        <div class="col-sm-6">
                                            <input type="file" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg">
                                            <?= $this->session->flashdata('photo_error') ?>
                                            <img src="<?= base_url("storage/images/user_avatar/" . $user_data->avatar) ?>" id="user_avatar" alt="User Avatar" width="200" data-img-url="<?= base_url("storage/images/user_avatar/") ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-offset-1 control-label" for="password_verification">Password Verification</label>
                                        <div class="col-sm-6">
                                            <input type='password' name='password_verification' class='form-control' id='password_verification'>
                                            <?= form_error('password_verification') ?>
                                            <?= NULL !== $this->session->flashdata('password_verification_wrong') ? $this->session->flashdata('password_verification_wrong') : NULL; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-6">
                                            <button type="submit" id="change-profile-button" class="btn btn-primary">Submit</button>
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
