<div class="row page-titles">
  <div class="col-md-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Units</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Units</li>
      <li class="breadcrumb-item active">
        <?php echo $unit->property_name; ?>
      </li>
      <li class="breadcrumb-item active">
        <?php echo $unit->name; ?>
      </li>
    </ol>
  </div>
  <div class="col-md-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <!-- <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add property', 'class="btn pull-right hidden-sm-down btn-success"'); ?> -->
    <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-cogs" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('units/edit/' . $unit->id, 'Edit', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/copy/'. $unit->id, 'Clone', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/delete/' . $unit->id, 'Delete', 'class="dropdown-item"'); ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <?php $image = $unit->image && file_exists('uploads/' . $unit->image) ? $unit->image : 'preview.jpg'; ?>
        <?php echo img(array('src' => 'uploads/' . $image, 'class' => 'img-responsive')); ?>
        <div class="align-center">
          <p></p>
          <h5>Unit #
            <?php echo $unit->name; ?>
          </h5>
          <?php echo anchor('units/movein/' . $unit->id, 'Move in', 'class="btn btn-warning"'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <?php if ($unit): ?>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General information</h4>
        <h3 class="card-subtitle">
          <?php echo $unit->property_name; ?>
        </h3>
        <h5><i class="fa fa-map-marker" aria-hidden="true"></i>
          <?php echo to_address($unit); ?>
        </h5>
        <hr>
        <h4>Unit Information</h4>
        <h5>Room</h5>
        <p>
          <strong><?php echo $unit->beds; ?></strong> <small>BED / </small>
          <strong><?php echo $unit->baths; ?></strong> <small>BATH / </small>
          <strong><?php echo $unit->size; ?></strong> <small>SQM</small>
        </p>
        
        <div class="row">
          <div class="col-md-4">
            <strong>Market rent</strong><br> PHP
            <?php echo number_format($unit->rent, 2); ?>
          </div>
          <div class="col-md-4">
            <strong>Deposit</strong><br> PHP
            <?php echo number_format($unit->deposit, 2); ?>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
