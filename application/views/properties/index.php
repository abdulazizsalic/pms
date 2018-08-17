

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
    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add Property', 'class="btn pull-right hidden-sm-down btn-success"'); ?>

    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i>', 'class="btn pull-right visible-sm-down hidden-md-up btn-success"'); ?>
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
<div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
          <?php echo count($properties); ?> active properties</h4>
        <h6 class="card-subtitle"></h6>
        <div class="row">
          <?php foreach ($properties as $property): ?>
          <?php $image = !empty($property->image) && file_exists('uploads/' . $property->image) ? $property->image : 'preview.jpg'; ?>
            <div class="col-lg-4 col-md-6">
          <?php echo anchor('properties/show/' . $property->id, '
          
              <div class="card">
                <img class="card-img-top img-responsive" src="uploads/' . $image . '" alt="Card image cap" style="height:320px;">
                <div class="card-body">
                  <h4 class="card-title">' . $property->name . '</h4>
                  <p class="card-text"><i class="fa fa-map-marker" aria-hidden="true"></i> ' . to_address($property) . '</p>
                </div>
              </div>
            </div>'); ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

</div>
