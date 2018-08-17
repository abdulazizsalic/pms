<style type="text/css">
  @media (max-width: 991px) {
    #lname {
      margin-top: 200px;
    }
    #adate {
      margin-top: -300px;
    }
    #ddate {
      margin-top: -300px;
    }
  }
</style>
<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Reservations</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">
        <?php echo anchor('reservations', 'Reservations'); ?>
      </li>
      <li class="breadcrumb-item">Add Reservation</li>
    </ol>
  </div>
</div>
<?php echo form_open('reservations/add', array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reservation Type</h4>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">General Information</h4>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group" id="last_name">
              <?php echo form_label('Last Name', 'last_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('last_name', '', 'class="typeahead form-control"'); ?>
              <div class="invalid-feedback">
                Input lastname
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group" id="adate">
              <?php echo form_label('Arrival Date', 'arrival_date', array('class' => 'col-form-label')); ?>
              <div class="input-group">
                <?php echo form_input('arrival_date', date('Y-m-d'), 'class="form-control datepicker" placeholder="yyyy-mm-dd"'); ?>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
                <div class="invalid-feedback">
                  Input Date of Arrival
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group" id="fname">
              <?php echo form_label('First Name', 'first_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('first_name', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input firstname
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group" id="ddate">
              <?php echo form_label('Departure Date', 'departure_date', array('class' => 'col-form-label')); ?>
              <div class="input-group">
                <?php echo form_input('departure_date', date('Y-m-d'), 'class="form-control datepicker" placeholder="yyyy-mm-dd"'); ?>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
                <div class="invalid-feedback">
                  Input Departure Date
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group" id="roooms">
              <?php echo form_label('# of Rooms', 'no_of_rooms', array('class' => 'col-form-label')); ?>
              <?php echo form_input('no_of_rooms', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input number of Rooms
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <?php echo form_label('Room Category', 'room_category', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('room_category', room_categories(),'', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input room category
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Email Address', 'email', array('class' => 'col-form-label')); ?>
              <?php echo form_input('email', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input valid email
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Mobile Number', 'mobile', array('class' => 'col-form-label')); ?>
              <?php echo form_input('mobile', '', 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input mobile number
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Special Requests', 'special_requests', array('class' => 'col-form-label')); ?>
              <?php echo form_textarea('special_requests', '', 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Save changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('reservations', 'cancel'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo form_close(); ?>

<script type="text/javascript">
  $(window).resize(function() {
    var $containerHeight = $(window).width();
    if ($containerHeight < 501) {
      $("#adate").css("margin-bottom", "100px");
      $("#ddate").css("margin-top", "-300px");
      $("#roooms").css("margin-top", "100px");
      $(".row").switchClass("row", "resize");
    } else if ($containerHeight > 501 && $containerHeight < 991) {
      $(".resize").switchClass("resize", "row");
      $("#roooms").css("margin-top", "0");
      $("#adate").css("margin-bottom", "0");
      $("#ddate").css("margin-top", "-300px");
    } else {
      $("#roooms").css("margin-top", "0");
      $("#adate").css("margin-bottom", "0");
      $("#ddate").css("margin-top", "0");
    }
  });
  $(window).ready(function() {
    var $containerHeight = $(window).width();
    if ($containerHeight < 501) {
      $("#adate").css("margin-bottom", "100px");
      $("#ddate").css("margin-top", "-300px");
      $("#roooms").css("margin-top", "100px");
      $(".row").switchClass("row", "resize");
    } else if ($containerHeight > 501 && $containerHeight < 991) {
      $(".resize").switchClass("resize", "row");
      $("#roooms").css("margin-top", "0");
      $("#adate").css("margin-bottom", "0");
      $("#ddate").css("margin-top", "-300px");
    } else {
      $("#roooms").css("margin-top", "0");
      $("#adate").css("margin-bottom", "0");
      $("#ddate").css("margin-top", "0");
    }
  })
</script>


<script>
$customers = <?php echo json_encode(to_names($customers)); ?>;
</script>