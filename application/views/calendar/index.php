<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Calendar</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Calendar</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
<!--    <?php echo anchor('units/movein', '<i class="mdi mdi-plus-circle"></i> Add lease', 'class="btn pull-right hidden-sm-down btn-success"'); ?>-->
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
<div class="row">
  <!-- <div class="col-md-3">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Drag and Drop Your Event</h4>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="calendar-events" class="m-t-20">
              <div class="calendar-events" data-class="bg-info"><i class="fa fa-circle text-info"></i> My Event One</div>
              <div class="calendar-events" data-class="bg-success"><i class="fa fa-circle text-success"></i> My Event Two</div>
              <div class="calendar-events" data-class="bg-danger"><i class="fa fa-circle text-danger"></i> My Event Three</div>
              <div class="calendar-events" data-class="bg-warning"><i class="fa fa-circle text-warning"></i> My Event Four</div>
            </div>
            <div class="checkbox">
              <input id="drop-remove" type="checkbox">
              <label for="drop-remove">
                Remove after drop
              </label>
            </div>
            <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn m-t-40 btn-danger btn-block waves-effect waves-light">
              <i class="ti-plus"></i> Add New Event
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div id="calendar"></div>
      </div>
    </div>
  </div>
</div>

<script>
  var $defaultEvents = <?php echo json_encode(to_events($reservations)); ?>;
  console.log($defaultEvents);
</script>

<div class="modal" tabindex="-1" role="dialog" id="my-event">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>



