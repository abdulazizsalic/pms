
<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Properties</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Properties</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Add Property</button>
    <!-- <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          January 2017
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">February 2017</a>
        <a class="dropdown-item" href="#">March 2017</a>
        <a class="dropdown-item" href="#">April 2017</a>
      </div>
    </div> -->
  </div>
</div>
<?php echo form_open_multipart('properties/edit/' . $property->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Property Photo</h4>
        <?php $image = $property->image ? $property->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" />
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="collapse" id="collapseExample" aria-expanded="false">
        </div>
        <div class="m-t-40 row">
          <div class="col-lg-8 col-md-12">
            <div class="form-group">
              <?php echo form_label('Property Name', 'name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('name', $property->name, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type property name
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8">
            <div class="form-group">
              <?php echo form_label('Year Built', 'year_built', array('class' => 'col-form-label')); ?>
              <?php echo form_input('year_built', $property->year_built, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type year built
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <?php echo form_label('Street Address', 'street_address', array('class' => 'col-form-label')); ?>
              <?php echo form_input('street_address', $property->street_address, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type street address
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6">
            <div class="form-group">
              <?php echo form_label('Route', 'route', array('class' => 'col-form-label')); ?>
              <?php echo form_input('route', $property->route, 'class="form-control"'); ?>
              <!--
              <div class="invalid-feedback">
                Input/Re-type route
              </div>
-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="form-group">
              <?php echo form_label('City', 'city', array('class' => 'col-form-label')); ?>
              <?php echo form_input('city', $property->city, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type city
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="form-group">
              <?php echo form_label('State', 'state', array('class' => 'col-form-label')); ?>
              <?php echo form_input('state', $property->state, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type state
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4">
            <div class="form-group">
              <?php echo form_label('Zip', 'zip_code', array('class' => 'col-form-label')); ?>
              <?php echo form_input('zip_code', $property->zip_code, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type zip
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-8">
            <div class="form-group">
              <?php echo form_label('Country', 'country', array('class' => 'col-form-label')); ?>
              <?php echo form_input('country', $property->country, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type country
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