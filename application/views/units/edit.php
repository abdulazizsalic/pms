<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Units</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Units</li>
      <li class="breadcrumb-item">Edit Unit</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <!-- <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add property', 'class="btn pull-right hidden-sm-down btn-success"'); ?> -->
    <!-- <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2017 </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">February 2017</a>
        <a class="dropdown-item" href="#">March 2017</a>
        <a class="dropdown-item" href="#">April 2017</a>
      </div>
    </div> -->
  </div>
</div>
<?php echo form_open_multipart('units/edit/' . $unit->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Unit #
          <?php echo $unit->name; ?>
        </h4>
        <?php $image = $unit->image && file_exists('uploads/' . $unit->image) ? $unit->image : 'preview.jpg'; ?>
        <input type="file" name="userfile" class="dropify" data-default-file="uploads/<?php echo $image; ?>" />
      </div>
    </div>
  </div>
  <div class="col-8">
    <?php if ($unit): ?>
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="m-t-40 row">
          <div class="col-lg-7">
            <div class="form-group">
              <?php echo form_label('Property Name', 'property_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('property_name', $unit->property_name, 'class="form-control" disabled'); ?>
               <div class="invalid-feedback">
                   Input/Re-type property name
               </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="form-group">
              <?php echo form_label('Unit', 'unit_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('unit_name', isset($unit) ? $unit->name: '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input/Re-type unit name
               </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <?php echo form_label('Type', 'type', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('type', unit_types(), '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input/Re-type type
               </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <?php echo form_label('Street Address', 'street_address', array('class' => 'col-form-label')); ?>
              <?php echo form_input('street_address', to_address($unit), 'class="form-control" disabled'); ?>
                <div class="invalid-feedback">
                   Input/Re-type street address
               </div>
            </div>
          </div>
        </div>
        
        <h4 class="card-title">Unit Information</h4>
        <div class="m-t-40 row">
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Beds', 'beds', array('class' => 'col-form-label')); ?>
              <?php echo form_input('beds', isset($unit) ? $unit->beds: '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                   Input/Re-type beds
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Bath', 'bath', array('class' => 'col-form-label')); ?>
              <?php echo form_input('bath', isset($unit) ? $unit->baths: '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                   Input/Re-type bath
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Size', 'size', array('class' => 'col-form-label')); ?>
              <?php echo form_input('size', isset($unit) ? $unit->size: '', 'class="form-control"'); ?>
                 <div class="invalid-feedback">
                   Input/Re-type size
               </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Market Rent', 'rent', array('class' => 'col-form-label')); ?>
              <?php echo form_input('rent', isset($unit) ? $unit->rent: '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input/Re-type market rent
               </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <?php echo form_label('Deposit', 'deposit', array('class' => 'col-form-label')); ?>
              <?php echo form_input('deposit', isset($unit) ? $unit->deposit: '', 'class="form-control"'); ?>
               <div class="invalid-feedback">
                   Input/Re-type deposit
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






      <!-- <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="collapse" id="collapseExample" aria-expanded="false">
        </div>
        <div class="form-group m-t-40 row">
          <?php echo form_label('Property name', 'property_name', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('property_name', $unit->property_name, 'class="form-control" id="example-text-input"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Street address', 'property_address', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('property_address', to_address($unit), 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Unit #', 'name', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('name', $unit->name, 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Unit type', 'type', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('type', $unit->type, 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <?php echo form_label('Market rent', 'rent', array('class' => 'col-3 col-form-label')); ?>
          <div class="col-9">
            <?php echo form_input('rent', $unit->rent, 'class="form-control"'); ?>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-3"></span>
          <div class="col-9">
            <?php echo form_submit('submit', 'Save changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('units', 'cancel'); ?>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <?php endif; ?>
</div>
<?php echo form_close(); ?>