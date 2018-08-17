<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-12 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Account</li>
      <li class="breadcrumb-item active">View Profile</li>
    </ol>
  </div>
</div>
<?php echo form_open_multipart('profile', array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profile Photo</h4>
        <?php $image = !empty($user->image) && file_exists('uploads/' . $user->image) ? $user->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" />
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="m-t-40 row">
          <div class="col-12">
            <div class="form-group">
              <?php echo form_label('Username', 'username', array('class' => 'col-form-label')); ?>
              <?php echo form_input('username', $user->username, 'class="form-control" id="example-text-input"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <?php echo form_label('Password', 'password', array('class' => 'col-form-label')); ?>
              <?php echo form_password('password', '', 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <?php echo form_label('Email address', 'email', array('class' => 'col-form-label')); ?>
              <?php echo form_input('email', $user->email, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <?php echo form_label('Full name', 'name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('name', $user->name, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Update Profile', 'class="btn btn-primary"'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
