<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Reservations</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Reservations</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <?php echo anchor('reservations/add', '<i class="mdi mdi-plus-circle"></i> Add Reservation', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
    <?php echo anchor('reservations/add', '<i class="mdi mdi-plus-circle"></i>', 'class="btn pull-right visible-sm-down hidden-md-up btn-success"'); ?>
  </div>
</div>
<?php echo count($reservations); ?> reservations</h6>

<br>
<br>

<div class="row el-element-overlay">
  <div class="col-12">
    <div class="row">
      <?php foreach ($reservations as $reservations): ?>
      <div class="col-md-3 text-center">
        <h4 class="card-id" hidden="">
          <?php echo $reservations->id; ?>
        </h4>
        <div class="ribbon ribbon-info ribbon-left">
          <span class="reservation">Reservation</span> #
          <?php echo $reservations->id; ?>
        </div>
        <div class="card-header">
          <div class="pull-right">
            <?php echo anchor('reservations/edit/' . $reservations->id, '<i class="fa fa-pencil" aria-hidden="true"></i>', 'title="Edit"'); ?> &nbsp;
            <?php if ($reservations->inactive == 1): ?>
            <?php echo anchor('reservations/reinstate/' . $reservations->id, '<i class="fa fa-window-restore" aria-hidden="true"></i>', 'title="Reinstate"'); ?>
            <?php else: ?>
            <?php echo anchor('reservations/cancel/' . $reservations->id, '<i class="fa fa-trash" aria-hidden="true"></i>', 'title="Cancel"'); ?>
            <?php endif; ?>
          </div>
          <br>
        </div>
        <div class="card-body">
          <h5 class="card-title">
            <?php echo to_name($reservations); ?>
          </h5>
          <p class="card-text">

            Rooms -
            <?php echo $reservations->no_of_rooms; ?> - standard

          </p>
        </div>
        <div class="card-footer text-muted" align="center">
          <div>
            <h6 class="text-muted">
              <div class="pull-left">
                <i class="fa fa-hotel" aria-hidden="true"></i>
                <?php echo date('Y-m-d', strtotime($reservations->arrival_date)); ?>
              </div>
              <div class="pull-right">
                <?php echo date('Y-m-d', strtotime($reservations->departure_date)); ?><i class="fa fa-plane" aria-hidden="true"></i>
              </div>
            </h6>
            <br>
          </div>
        </div>
        <br>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#search').keyup(function() {
    $('.col-md-3').removeClass('d-none');

    var filter = $(this).val(); // get the value of the input, which we filter on


    $('.col-md-3').find('h4:not(:contains("' + filter + '"))').parent().addClass('d-none');


  });


  $(window).resize(function() {
    var $containerHeight = $(window).width();
    if ($containerHeight < 1000) {
      $(".reservation").hide();
    } else {

      $(".reservation").show();

    }
  });

</script>
