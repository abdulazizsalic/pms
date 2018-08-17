<div class="row page-titles">
  <div class="col-md-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Properties</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Properties</li>
      <li class="breadcrumb-item">
        <?php echo $property->name; ?>
      </li>
    </ol>
  </div>
  <div class="col-md-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <!-- <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button> -->
    <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('properties/edit/' . $property->id, 'Edit', 'class="dropdown-item"'); ?>
        <a class="dropdown-item" href="#">Archive</a>
        <a class="dropdown-item" href="#">Delete</a>
      </div>
    </div>

    <div class="dropdown pull-right hidden-md-up m-r-10">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('properties/edit/' . $property->id, 'Edit', 'class="dropdown-item"'); ?>
        <a class="dropdown-item" href="#">Archive</a>
        <a class="dropdown-item" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Property Photo</h4>
        <?php $image = $property->image ? $property->image : 'preview.jpg'; ?>
        <?php echo img(array('src' => 'uploads/' . $image, 'class' => 'img-responsive')); ?>
        <p></p>
        <h5>
          <?php echo $property->name; ?>
        </h5>
        <h6><i class="fa fa-map-marker" aria-hidden="true"></i>
          <?php echo to_address($property); ?>
        </h6>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-8">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-wrap">
              <div>
                <h3>Financials</h3>
                <h6 class="card-subtitle">January 2017</h6>
              </div>
              <div class="ml-auto ">
                <ul class="list-inline">
                  <li>
                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Product A</h6>
                  </li>
                  <li>
                    <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Product B</h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="total-revenue4" style="height: 350px;"></div>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
            <h2 class="m-b-0 font-light">$54578</h2>
            <h6 class="text-muted">Total Revenue</h6>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
            <h2 class="m-b-0 font-light">$43451</h2>
            <h6 class="text-muted">Online Revenue</h6>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
            <h2 class="m-b-0 font-light">$44578</h2>
            <h6 class="text-muted">Product A</h6>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30 m-t-20 text-center">
            <h2 class="m-b-0 font-light">$12578</h2>
            <h6 class="text-muted">Product B</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="card">&nbsp;
      <div class="card-body">
        <h4 class="card-title">Units</h4>
        <div class="d-flex flex-row">
          <div class="align-self-center">
            <div class="ct-units" style="width:340px; height: 340px;"></div>
          </div>
        </div>
        <div class="card-footer">
          <?php echo anchor('units/add/' . $property->id, 'Add unit', 'class="btn btn-primary"'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-8">
    <div class="card">
      <div class="card-body p-b-0">
        <ul class="nav nav-tabs customtab" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Property Units</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Property Information</span></a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home2" role="tabpanel">
            <?php foreach ($units as $unit): ?>
            <?php $unitImage = $unit->image && file_exists('uploads/' . $unit->image) ? $unit->image : 'preview.jpg'; ?>

            <div class="d-flex p-2 border-bottom border-gray">
              <div class="align-self-center">
                <?php echo img(array('src' => 'uploads/' . $unitImage, 'class' => 'img-responsive','style' => 'width:100px;height:90px;' )); ?>
              </div>
              <div class="flex-grow-1 w-100 pl-3">
                <strong> Unit # <?php echo $unit->name; ?></strong><br>
                <?php echo unit_types()[$unit->type]; ?><br>
                <strong><?php echo $unit->beds; ?></strong> <small>BED / </small>
                <strong><?php echo $unit->baths; ?></strong> <small>BATH / </small>
                <strong><?php echo $unit->size; ?></strong> <small>SQM</small>
                <div>
                  <button class="btn  btn-default btn-sm " style="width:100px;  border-color: green; color: green; background-color: white;">move in</button>
                  <button class="btn  btn-default btn-sm" style="width:100px; border-color: green; color: green; background-color: white;">list</button>
                  <strong>PHP&nbsp; <?php echo number_format($unit->rent, 2); ?></strong>&nbsp;<small> Market rent</small>
                </div>
              </div>
              <div class="align-self-center">
                <?php echo anchor('units/show/' . $unit->id, 'View Unit', 'class="btn btn-outline-info"'); ?>
              </div>
            </div>

            <!-- <div class="card">
              <div class="card-body">
                <h4>
                  <?php echo img(array('src' => 'uploads/' . $unitImage, 'class' => 'img-responsive','style' => 'width:100px;' )); ?>
                </h4>
                <h4 style="margin-left: 102px; margin-bottom:-20px;" class="card-title">
                  &nbsp;&nbsp;Unit #
                  <?php echo $unit->name; ?>
                </h4>
                <h4>
                   &nbsp;&nbsp;Room
                </h4>
                <p style="margin-left: 102px; margin-top: -30px; ">&nbsp;&nbsp;
                <?php echo $unit->beds; ?> BED / <?php echo $unit->baths; ?> BATH / <?php echo $unit->size; ?> SQ M
                </p>
                <?php echo anchor('units/show/' . $unit->id, 'View Unit', 'class="btn btn-outline-info float-right" style="margin-top:-60px; margin-right:40px;"'); ?>
                <h5>
                  <button class="btn  btn-default" style="width:100px;  border-color: green; color: green; background-color: white;">move in</button>&nbsp;&nbsp;&nbsp;<button class="btn  btn-default" style="width:100px; border-color: green; color: green; background-color: white;">list</button>&nbsp;&nbsp; PHP&nbsp;
                  <?php echo number_format($unit->rent, 2); ?>&nbsp; <strong>Market rent</strong>
                </h5>
              </div>
            </div> -->
            <?php endforeach; ?>
          </div>
          <div class="tab-pane" id="profile2" role="tabpanel">

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">General information</h4>
                <div class="row">
                  <div class="col-lg-7 col-md-12">
                    <div class="form-group">
                      <?php echo form_label('Property Name', 'name', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->name; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-8">
                    <div class="form-group">
                      <?php echo form_label('Year Built', 'year_built', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->year_built; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <div class="form-group">
                      <?php echo form_label('MLS #', 'mls', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static"></p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-8">
                    <div class="form-group">
                      <?php echo form_label('Street address', 'street_address', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->street_address; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-4">
                    <div class="form-group">
                      <?php echo form_label('Route', 'route', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->route; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                      <?php echo form_label('City', 'city', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->city; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                      <?php echo form_label('State', 'state', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->state; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-4">
                    <div class="form-group">
                      <?php echo form_label('Zip', 'zip_code', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->zip_code; ?>
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-8">
                    <div class="form-group">
                      <?php echo form_label('Country', 'country', array('class' => 'col-form-label')); ?>
                      <p class="form-control-static">
                        <?php echo $property->country; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
