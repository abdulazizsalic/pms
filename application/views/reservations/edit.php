<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<script>
  $(function() {
    $(".btn-duplicator").on("click", function(a) {
      a.preventDefault();
      var b = $(this).parent().parent().siblings(".duplicateable-content"),
        c = $("<div>").append(b.clone()).html();
      console.log(b);
      $(c).insertBefore(b);
      var d = b.prev(".duplicateable-content");
      d.fadeIn(600).removeClass("duplicateable-content"), d.find(".btn-remove").on("click", function(a) {
        a.preventDefault();
        var b = $(this).parents(".item-block").parent("div");
        b.fadeOut(600, function() {
          b.remove()
        })
      })
    });
  });

</script>
<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Reservations</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Reservations</li>
      <li class="breadcrumb-item">Edit Reservation</li>
    </ol>
  </div>
</div>
<?php echo form_open('reservations/edit/' . $reservation->id, array('class' => 'form')); ?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reservation Type</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <ul class="icheck-list">
                <li>
                  <?php echo form_radio('type', '1', $reservation->type == 0, 'class="check"'); ?>
                  <?php echo form_label('New', 'type'); ?>
                </li>
                <li>
                  <?php echo form_radio('type', '1', $reservation->type == 1, 'class="check"'); ?>
                  <?php echo form_label('Amendment', 'type'); ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Guest Details</h4>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group">
              <?php echo form_label('Last Name', 'last_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('last_name', $reservation->last_name, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type lastname
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <?php echo form_label('Arrival Date', 'arrival_date', array('class' => 'col-form-label')); ?>
              <div class="input-group">
                <?php echo form_input('arrival_date', date('Y-m-d', strtotime($reservation->arrival_date)), 'class="form-control datepicker" placeholder="yyyy-mm-dd"'); ?>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
                <div class="invalid-feedback">
                  Input/Re-type Arrival Date
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group">
              <?php echo form_label('First Name', 'first_name', array('class' => 'col-form-label')); ?>
              <?php echo form_input('first_name', $reservation->first_name, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type firstname
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <?php echo form_label('Departure Date', 'departure_date', array('class' => 'col-form-label')); ?>
              <div class="input-group">
                <?php echo form_input('departure_date', date('Y-m-d', strtotime($reservation->departure_date)), 'class="form-control datepicker" placeholder="yyyy-mm-dd"'); ?>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-calender"></i></span>
                </div>
                <div class="invalid-feedback">
                  Input/Re-type Departure Date
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <?php echo form_label('# of Rooms', 'no_of_rooms', array('class' => 'col-form-label')); ?>
              <?php echo form_input('no_of_rooms', $reservation->no_of_rooms, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type number of Rooms
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <?php echo form_label('Room Category', 'room_category', array('class' => 'col-form-label')); ?>
              <?php echo form_dropdown('room_category', room_categories(), $reservation->room_category, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <?php echo form_label('Email Address', 'email', array('class' => 'col-form-label')); ?>
              <?php echo form_input('email', $reservation->email, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type email
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <?php echo form_label('Mobile Number', 'mobile', array('class' => 'col-form-label')); ?>
              <?php echo form_input('mobile', $reservation->mobile, 'class="form-control"'); ?>
              <div class="invalid-feedback">
                Input/Re-type mobile number
              </div>
            </div>
          </div>
        </div>

        <h4 class="card-title m-t-40">Companions</h4>
        <div>
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <?php echo form_input('guest_name', '', 'class="form-control" placeholder="Full Name"'); ?>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <?php echo form_input('guest_age', '', 'class="form-control" placeholder="Age"'); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <?php echo form_input('units[]', '', 'class="form-control" placeholder="Room"'); ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <?php echo form_input('guest_name', '', 'class="form-control" placeholder="Full Name"'); ?>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <?php echo form_input('guest_age', '', 'class="form-control" placeholder="Age"'); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="duplicateable-content">
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <?php echo form_input('guest_name', '', 'class="form-control" placeholder="Full Name"'); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <?php echo form_input('guest_age', '', 'class="form-control" placeholder="Age"'); ?>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <?php echo form_input('units[]', '', 'class="form-control" placeholder="Room"'); ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <?php echo form_input('guest_name', '', 'class="form-control" placeholder="Full Name"'); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <?php echo form_input('guest_age', '', 'class="form-control" placeholder="Age"'); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <button class="btn btn-outline-success btn-duplicator"><i class="ti-plus"></i> Add Companion</button>
          </div>
        </div>

        <div class="row m-t-20">
          <div class="col-md-12">
            <div class="form-group">
              <?php echo form_label('Special Requests', 'special_requests', array('class' => 'col-form-label')); ?>
              <?php echo form_textarea('special_requests', $reservation->special_requests, 'class="form-control"'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php echo form_submit('submit', 'Save Changes', 'class="btn btn-info"'); ?> or
            <?php echo anchor('reservations', 'cancel'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
