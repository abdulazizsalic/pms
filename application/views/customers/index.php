<script>
  var url = "<?php echo base_url(); ?>";

  function deleteCustomer(id) {
    var c = confirm("Do you really want this customer?");
    if (c == true) {
      window.location = url + "customers/delete/" + id;
    } else {
      return false;
    }
  }

</script>

<div class="row page-titles">
  <div class="col-md-6 col-6 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Customers</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item">Customers</li>
      <?php echo $searchBreadCrumbs; ?>
    </ol>
  </div>
  <div class="col-md-6 col-6 align-self-center">
    <?php echo anchor('customers/add', '<i class="mdi mdi-plus-circle"></i> Add Customer', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
    <div class="dropdown pull-right hidden-sm-down m-r-10">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-filter" aria-hidden="true"></i> Filter
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownFilter">
        <?php echo anchor('customers/index', 'All', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/TA', 'Travel Agency', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/OTA', 'Online Travel Agency', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/FIT', 'Individual Others', 'class="dropdown-item"'); ?>
      </div>
    </div>
    <?php echo anchor('customers/add', '<i class="mdi mdi-plus-circle"></i>', 'class="btn pull-right visible-sm-down hidden-md-up btn-success"'); ?>
    <div class="dropdown pull-right hidden-md-up m-r-10">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-filter" aria-hidden="true"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownFilter">
        <?php echo anchor('customers/index', 'All', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/TA', 'Travel Agency', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/OTA', 'Online Travel Agency', 'class="dropdown-item"'); ?>
        <?php echo anchor('customers/index/FIT', 'Individual Others', 'class="dropdown-item"'); ?>
      </div>
    </div>
  </div>
</div>
<div class="row el-element-overlay">
  <div class="col-12">
    <div class="row">
      <?php foreach ($customers as $customer): ?>
      <div class="col-md-3">
        <div class="ribbon-wrapper card">
          <div class="ribbon ribbon-info ribbon-right">
            <?php echo $customer->type; ?>
          </div>
          <div class="el-card-item">
            <div class="el-card-avatar el-overlay-1">
              <?php $image = !empty($customer->image) && file_exists('uploads/' . $customer->image) ? $customer->image : 'preview.jpg'; ?>
              <?php echo img(array('src' => 'uploads/' . $image, 'alt' => 'user')); ?>
              <div class="el-overlay">
                <ul class="el-info">
                  <li>
                    <?php echo anchor('customers/edit/' . $customer->id, '<i class="fa fa-pencil"></i>', 'class="btn default btn-outline image-popup-vertical-fit"'); ?>
                  </li>
                  <li>
                    <a href="javascript:void(0);" onclick="deleteCustomer(<?php echo $customer->id; ?>)" class="btn default btn-outline"><i class="fa fa-trash"></i></a>
                    <!-- <?php echo anchor('customers/delete/' . $customer->id, '<i class="fa fa-trash"></i>', 'class="btn default btn-outline"'); ?> -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="el-card-content">
              <h3 class="box-title">
                <?php echo to_name($customer); ?>
              </h3>
              <small>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <?php echo $customer->phone; ?><br>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <?php echo mailto($customer->email, $customer->email); ?>
              </small>
              <br/> </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
