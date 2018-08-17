<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Properties</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Properties</li>
      <li class="breadcrumb-item active">Add unit</li>
    </ol>
  </div>
</div>
<?php echo form_open_multipart('units/add/' . $property->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Profile Photo</h4>
        <?php $image = (isset($clone) && $clone->image && file_exists('uploads/' . $clone->image)) ? $clone->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" value="uploads/<?php echo  $image;?>" />
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="m-t-40 row">
          <div class="col-lg-7">
            <div class="form-group">
              <?php echo form_label('Property Name', 'property_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('property_name', $property->name, 'class="form-control" disabled'); ?>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="form-group">
              <?php echo form_label('Unit', 'unit_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('unit_name', '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input unit
               </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <?php echo form_label('Type', 'type', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('type', unit_types(), '', 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <?php echo form_label('Street Address', 'street_address', array('class' => 'col-form-label')); ?>
              <?php echo form_input('street_address', $property->street_address, 'class="form-control" disabled'); ?>
            </div>
          </div>
        </div>
        
        <h4 class="card-title">Unit Information</h4>
        <div class="m-t-40 row">
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Beds', 'beds', array('class' => 'col-form-label')); ?>
              <?php echo form_input('beds', '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input beds
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Bath', 'bath', array('class' => 'col-form-label')); ?>
              <?php echo form_input('bath', '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input bath
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Size', 'size', array('class' => 'col-form-label')); ?>
              <?php echo form_input('size', '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input size
               </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Market Rent', 'rent', array('class' => 'col-form-label')); ?>
              <?php echo form_input('rent', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                   Input market rent
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Deposit', 'deposit', array('class' => 'col-form-label')); ?>
              <?php echo form_input('deposit', '', 'class="form-control"'); ?>
                <div class="invalid-feedback">
                   Input deposit
               </div>
            </div>
          </div>
        </div>
          <div class="col-12">
            <?php echo form_submit('submit', 'Save changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('properties', 'cancel'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>