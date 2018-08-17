<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    <!-- <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button> -->
    <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quick menus
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('customers/add', 'Add new customer', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/add', 'Add new property', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/add', 'Add new request', 'class="dropdown-item"'); ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8 col-md-12">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Calendar</h4>
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <?php echo anchor('properties', '
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Properties</h4>
        <div class="d-flex flex-row">
          <div class="align-self-center">
            <span class="display-6">' . count($active_units) . ' units</span>
            <h6 class="text-muted">' . count($vacant_units) . ' Vacant ' . count($occupied_units) . ' Occupied</h6>
          </div>
          <div class="ml-auto">
            <div class="ct-units" style="width:120px; height: 120px;"></div>
          </div>
        </div>
      </div>
    </div>'); ?>
  </div>
</div>
<div class="row">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Quick Buttons</h4>
        <h6>The quick launch bar, which provides easy access to your favorite applications</h6>
        <div class="row m-t-20">
          <div class="col-4">
            <center>
              <?php echo anchor('customers/add', '<i class="fa fa-user-plus" aria-hidden="true"></i><br> Customer', 'class="btn btn-outline-info"'); ?>
            </center>
          </div>
          <div class="col-4">
            <center>
              <?php echo anchor('properties/add', '<i class="fa fa-home" aria-hidden="true"></i><br> Property', 'class="btn btn-outline-info"'); ?>
            </center>
          </div>
          <div class="col-4">
            <center>
              <?php echo anchor('', '<i class="fa fa-ticket" aria-hidden="true"></i><br> Request', 'class="btn btn-outline-info"'); ?>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Trips and tricks</h4>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contacts</h4>
        <?php echo anchor('customers/add', 'Add new customer'); ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
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
  </div>
</div>
<div class="row">
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Maintenance</h4>
        <div id="sales-donute" style="width:100%; height:300px;"></div>
        <div class="round-overlap m-t-20"><i class="mdi mdi-cart"></i></div>
        <ul class="list-inline m-t-30 text-center">
          <li><i class="fa fa-circle text-purple"></i> 0 new</li>
          <li><i class="fa fa-circle text-success"></i> 0 in progress</li>
          <li><i class="fa fa-circle text-info"></i> 0 resolved</li>
          <li><i class="fa fa-circle text-danger"></i> 0 deferred</li>
        </ul>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
  $defaultEvents = <?php echo json_encode(to_events($reservations)); ?>;

  new Chartist.Pie(
    '.ct-units', {
      series: [
        <?php $x = count($vacant_units) / count($active_units) * 100; echo number_format($x, 2); ?>,
        <?php $x = count($occupied_units) / count($active_units) * 100; echo number_format($x, 2); ?>
      ]
    }, {
      donut: true,
      donutWidth: 20,
      startAngle: 0,
      showLabel: false
    }
  );

</script>
