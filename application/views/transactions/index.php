<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Transactions</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Accounting</li>
      <li class="breadcrumb-item">Transactions</li>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <?php echo anchor('transactions/add', '<i class="mdi mdi-plus-circle"></i> Create', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
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
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Transactions</h4>
        <h6 class="card-subtitle"><?php echo count($transactions); ?> transactions</h6>
        <div class="m-t-40">
          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Date</th>
                <th>Customer</th>
                <th>Property</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($transactions as $transaction): ?>
              <tr>
                <td><?php echo $transaction->checkin_date; ?></td>
                <td><?php echo to_name($transaction); ?></td>
                <td><?php echo $transaction->property_name; ?></td>
                <td>
                  <?php echo anchor('transactions/edit/' . $transaction->id, 'Edit'); ?>
                  <?php echo anchor('transactions/delete/' . $transaction->id, 'Delete'); ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>