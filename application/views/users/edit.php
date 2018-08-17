<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Users</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Users</li>
      <li class="breadcrumb-item active">Update user</li>
    </ol>
  </div>
</div>
<?php echo form_open_multipart('users/edit/' . $user->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profile photo</h4>
        <?php $image = $user->image ? $user->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" />
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General information</h4>
        <div class="form-group row">
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Username', 'username', array('class' => 'col-form-label')); ?>
              <?php echo form_input('username', $user->username, 'class="form-control" id="example-text-input"'); ?>
                 <div class="invalid-feedback">
                  Input/Re-type username
               </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Password', 'password', array('class' => 'col-form-label')); ?>
              <?php echo form_password('password', '', 'class="form-control"'); ?>
                 <div class="invalid-feedback">
                  Input/Re-type password
               </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Email Address', 'email', array('class' => 'col-form-label')); ?>
              <?php echo form_input('email', $user->email, 'class="form-control"'); ?>
                 <div class="invalid-feedback">
                 Input/Re-type email
               </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Full name', 'name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('name', $user->name, 'class="form-control"'); ?>
                 <div class="invalid-feedback">
                  Input/Re-type full name
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