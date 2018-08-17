<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">



<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Customers</li>
      <li class="breadcrumb-item">Update Customer</li>
    </ol>
  </div>
</div>
<?php echo form_open_multipart('customers/edit/' . $customer->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profile Photo</h4>
        <?php $image = !empty($customer->image) && file_exists('uploads/' . $customer->image) ? $customer->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" />
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="collapse" id="collapseExample" aria-expanded="false">
        </div>
        <div class="m-t-40 row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('First Name', 'first_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('first_name', $customer->first_name, 'class="form-control"'); ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Last Name', 'last_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('last_name', $customer->last_name, 'class="form-control"'); ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Middle Name', 'middle_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('middle_name', $customer->middle_name, 'class="form-control"'); ?>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-md-4">

            <div class="form-group">
              <br>
              <br>
              <?php echo form_checkbox('display_as_company', 1, $customer->display_as_company == 1, 'class="check" data-checkbox="icheckbox_flat-red"'); ?>
              <?php echo form_label('Display as Company', 'display_as_company'); ?>
            
            </div>
          </div>

          <div class="col-md-8">
            <div class="form-group">
              <?php echo form_label('Company Name', 'company_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('company_name', $customer->company_name, 'class="form-control"'); ?>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Date of Birth', 'date_of_birth', array('class' => 'col-form-label')); ?>
              <div class="input-group">
                <?php echo form_input('date_of_birth', date('Y-m-d', strtotime($customer->date_of_birth)), 'class="form-control datepicker" placeholder="yyyy-mm-dd"'); ?>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Type', 'type', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('type', customer_types(), $customer->type, 'class="form-control"'); ?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Gender', 'gender', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('gender', genders(), $customer->gender, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <?php echo form_label('Email Address', 'email', array('class' => 'col-form-label')); ?>
              <?php echo form_input('email', $customer->email, 'class="form-control"'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <?php echo form_label('Phone', 'phone', array('class' => 'col-form-label')); ?>
              <?php echo form_input('phone', $customer->phone, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Notes', 'notes', array('class' => 'col-form-label')); ?>
              <?php echo form_textarea('notes', $customer->notes, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Save Changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('customers', 'cancel'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
$(window).resize(function () {
    var $containerHeight = $(window).width();
    if ($containerHeight < 500) {
       $(".row").switchClass("row","resize");
           }
    else
    {
      $(".resize").switchClass("resize","row");
    }
});

$(window).ready(function () {
    var $containerHeight = $(window).width();
    if ($containerHeight < 500) {
       $(".row").switchClass("row","resize");
           }
    else
    {
      $(".resize").switchClass("resize","row");
    }
});
</script>
