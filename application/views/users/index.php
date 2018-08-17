<div class="row page-titles">
  <div class="col-md-6 col-8 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Users</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Users</li>
      <?php echo $searchBreadCrumbs; ?>
    </ol>
  </div>
  <div class="col-md-6 col-4 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <?php echo anchor('users/add', '<i class="mdi mdi-plus-circle"></i> Create User', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
    <?php echo anchor('users/add', '<i class="mdi mdi-plus-circle"></i>', 'class="btn pull-right visible-sm-down hidden-md-up btn-success"'); ?>
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
<div class="row el-element-overlay">
  <div class="col-12">
    <div class="row">
      <?php foreach ($users as $user): ?>
      <div class="col-md-3">
        <div class="card">
          <div class="el-card-item">
            <div class="el-card-avatar el-overlay-1">
              <?php $image = !empty($user->image) && file_exists('uploads/' . $user->image) ? $user->image : 'preview.jpg'; ?>
              <?php echo img(array('src' => 'uploads/' . $image, 'alt' => 'user')); ?>
              <div class="el-overlay">
                <ul class="el-info">
                  <li>
                    <?php echo anchor('users/edit/' . $user->id, '<i class="fa fa-pencil"></i>', 'class="btn default btn-outline image-popup-vertical-fit"'); ?>
                  </li>
                  <li>
                    <?php echo anchor('users/delete/' . $user->id, '<i class="fa fa-trash"></i>', 'class="btn default btn-outline"'); ?>
                  </li>
                </ul>
              </div>
            </div>
            <div class="el-card-content">
              <h3 class="box-title">
                <?php echo $user->name; ?>
              </h3>
              <small>
                <!-- <i class="fa fa-phone" aria-hidden="true"></i>
                <?php echo $user->phone; ?><br> -->
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <?php echo mailto($user->email, $user->email); ?>
              </small>
              <br/> </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!--
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users</h4>
        <h6 class="card-subtitle"><?php echo count($users); ?> active users</h6>
        <div class="m-t-40">
          <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Username</th>
                <th>Full name</th>
                <th>Email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
              <tr>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td>
                  <?php echo anchor('users/edit/' . $user->id, '<i class="fa fa-pencil" aria-hidden="true"></i>', 'title="Edit"'); ?>
                  <?php echo anchor('users/delete/' . $user->id, '<i class="fa fa-trash" aria-hidden="true"></i>', 'title="Delete"'); ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
-->
  </div>
</div>
