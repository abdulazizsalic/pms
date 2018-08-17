<div class="row page-titles">
  <div class="col-md-8 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Units</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Properties</li>
      <li class="breadcrumb-item">
        <?php echo $unit->property_name; ?>
      </li>
      <li class="breadcrumb-item">
        <?php echo $unit->name; ?>
      </li>
      <li class="breadcrumb-item active">Add lease</li>
    </ol>
  </div>
  <div class="col-md-4 col-4 align-self-center">
    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add property', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
  </div>
</div>
<div class="row">
  <div class="col-12">
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
        <h4>Unit information</h4>
        <h5>Room</h5>
        <p>Bed / Bath / Sqm</p>
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
