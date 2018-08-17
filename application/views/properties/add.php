<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Properties</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Properties</li>
      <li class="breadcrumb-item">Add Property</li>
    </ol>
  </div>
</div>
<?php echo form_open_multipart('properties/add', array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Property Photo</h4>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/preview.jpg" />
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General information</h4>
        <div class="collapse" id="collapseExample" aria-expanded="false">
        </div>
        <div class="m-t-40 row">
          <div class="col-lg-8 col-md-12">
            <div class="form-group">
              <?php echo form_label('Property Name', 'name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('name', '', 'class="form-control" id="example-text-input"'); ?>
              <div class="invalid-feedback">
                Input property name
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="form-group">
              <?php echo form_label('Year Built', 'year_built', array('class' => 'col-form-label')); ?>
              <?php echo form_input('year_built', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input year built
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-8">
            <div class="form-group">
              <?php echo form_label('Street Address', 'street_address', array('class' => 'col-form-label')); ?>
              <?php echo form_input('address', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input street address
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-4">
            <div class="form-group">
              <?php echo form_label('Route', 'route', array('class' => 'col-form-label')); ?>
              <?php echo form_input('route', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input county
              </div>
            </div>            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="form-group">
              <?php echo form_label('City', 'city', array('class' => 'col-form-label')); ?>
              <?php echo form_input('city','', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input city
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="form-group">
              <?php echo form_label('State', 'state', array('class' => 'col-form-label')); ?>
              <?php echo form_input('state', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input state
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="form-group">
              <?php echo form_label('Zip', 'zip_code', array('class' => 'col-form-label')); ?>
              <?php echo form_input('zip_code','', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input zip
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-8">
            <div class="form-group">
              <?php echo form_label('Country', 'country', array('class' => 'col-form-label')); ?>
              <?php echo form_input('country','', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input country
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Save Changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('properties', 'cancel'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">


$(window).ready(function () {
    var $containerHeight = $(window).width();
    if ($containerHeight < 500) {
       $(".row").switchClass("row","resize");
           }
    else
    {
      $(".resize").switchClass("resize","row");
    }

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
});
</script>