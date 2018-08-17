<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Reservations</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item"><?php echo anchor('reservations', 'Reservations'); ?></li>
      <li class="breadcrumb-item">Reservation Details</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <!-- <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add property', 'class="btn pull-right hidden-sm-down btn-success"'); ?> -->
    <div class="dropdown pull-right m-r-10 hidden-sm-down">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('reservations/edit/' . $reservation->id, 'Edit', 'class="dropdown-item"'); ?>
        <?php if ($reservation->inactive != 1): ?>
        <?php echo anchor('reservations/cancel/' . $reservation->id, 'Cancel', 'class="dropdown-item"'); ?>
        <?php else: ?>
        <?php echo anchor('reservations/reinstate/' . $reservation->id, 'Reinstate', 'class="dropdown-item"'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Reservation Type</h4>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">History</h4>
        <div class="message-box">
          <div class="message-widget message-scroll">
            <?php foreach ($events as $event): ?>
            <a href="#">
              <div class="user-img">
                <?php $image = $event->user_image && file_exists('uploads/' . $event->user_image) ? $event->user_image : 'preview.jpg'; ?>
                <?php echo img(array('src' => 'uploads/' . $image, 'alt' => 'user', 'class' => 'img-circle')); ?>
                <span class="profile-status online pull-right"></span>
              </div>
              <div class="mail-contnet">
                <h5>
                  <?php echo $event->user_name; ?>
                </h5>
                <span class="mail-desc"><?php echo $event->event; ?></span>
                <span class="time"><?php echo date('h:i A', strtotime($event->created_at)); ?></span> </div>
            </a>
            <?php endforeach ;?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-7">
    <div class="ribbon-wrapper-reverse card">
      <?php if ($reservation->inactive == 1): ?>
      <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Cancelled</div>
      <?php endif; ?>
      <div class="card-body">
        <h4 class="card-title">Guest Details</h4>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group">
              <p class="col-form-label"><strong>Last Name</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->last_name); ?>
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <p class="col-form-label"><strong>Arrival Date</strong></p>
              <p class="form-control-static">
                <?php echo date('Y-m-d', strtotime($reservation->arrival_date)); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-md-12">
            <div class="form-group">
              <p class="col-form-label"><strong>First Name</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->first_name); ?>
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <p class="col-form-label"><strong>Departure Date</strong></p>
              <p class="form-control-static">
                <?php echo date('Y-m-d', strtotime($reservation->departure_date)); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <p class="col-form-label"><strong># of Rooms</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->no_of_rooms); ?>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <p class="col-form-label"><strong>Room Category</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->room_category); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <p class="col-form-label"><strong>Email Address</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->email, '-'); ?>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <p class="col-form-label"><strong>Mobile Number</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->mobile, '-'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <p class="col-form-label"><strong>Special Requests</strong></p>
              <p class="form-control-static">
                <?php echod($reservation->special_requests); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
