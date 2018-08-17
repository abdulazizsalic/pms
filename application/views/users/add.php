<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

  <div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
      <h3 class="text-themecolor m-b-0 m-t-0">Users</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
    </div>
  </div>
  <?php echo form_open_multipart('users/add', array('class' => 'form')); ?>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Profile Photo</h4>
          <input type="file" name="userfile" class="dropify" data-default-file="uploads/preview.jpg" />
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">General Information</h4>
          <div class="form-group row">
            <div class="col-md-12">
              <div class="form-group">
                <?php echo form_label('Username', 'username', array('class' => 'col-form-label')); ?>
                <?php echo form_input('username', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                 Input username
                </div>
              </div>

            </div>
            <div class="col-md-12">
              <div class="form-group">
                <?php echo form_label('Password', 'password', array('class' => 'col-form-label')); ?>
                <?php echo form_password('password', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                 Input password
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <?php echo form_label('Email address', 'email', array('class' => 'col-form-label')); ?>
                <?php echo form_input('email', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                  Input email
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <?php echo form_label('Full name', 'name', array('class' => 'col-form-label')); ?>
                <?php echo form_input('name', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                 Input fullname
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <?php echo form_submit('submit', 'Save Changes', 'class="btn btn-primary"'); ?> or
              <?php echo anchor('users', 'cancel'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>