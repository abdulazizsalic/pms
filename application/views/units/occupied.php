<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Units</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Units</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add property', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
    <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Occupied
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('units', 'All', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/occupied', 'Occupied', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/vacant', 'Vacant', 'class="dropdown-item"'); ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><?php echo count($properties); ?> active properties</h4>
        <h6 class="card-subtitle"></h6>
        <div class="table m-t-40">
        <div class="row">
          <?php foreach ($properties as $property): ?>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img class="card-img-top img-responsive" src="uploads/hotel.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $property->name; ?></h4>
                <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo to_address($property); ?></p>
                <?php echo anchor('properties/show/' . $property->id, 'View details'); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
