<div class="row page-titles">
  <div class="col-md-6 col-6 align-self-center">
    <h3 class="text-themecolor m-b-0 m-t-0">Units</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
      <li class="breadcrumb-item active">Units</li>
    </ol>
  </div>
  <div class="col-md-6 col-6 align-self-center">
    <!-- <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button> -->
    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i> Add Property', 'class="btn pull-right hidden-sm-down btn-success"'); ?>
    <div class="dropdown pull-right hidden-sm-down m-r-10">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        All
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('units', 'All', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/occupied', 'Occupied', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/vacant', 'Vacant', 'class="dropdown-item"'); ?>
      </div>
    </div>

    <?php echo anchor('properties/add', '<i class="mdi mdi-plus-circle"></i>', 'class="btn pull-right visible-sm-down hidden-md-up btn-success"'); ?>
    <div class="dropdown pull-right hidden-md-up m-r-10">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php echo anchor('units', 'All', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/occupied', 'Occupied', 'class="dropdown-item"'); ?>
        <?php echo anchor('units/vacant', 'Vacant', 'class="dropdown-item"'); ?>
      </div>
    </div>
  </div>
</div>


<?php foreach($properties as $property): ?>
<?php $image = !empty($property->image) && file_exists('uploads/' . $property->image) ? $property->image : 'preview.jpg'; ?>

<div class="container-fluid bg-white rounded box-shadow mb-3">

<?php echo anchor('properties/show/' . $property->id, '
<div class="row border-bottom border-gray pb-3">
  <div class="col-1">
    <img src="uploads/'. $image .'" class="rounded float-left" style="width:70px; height:70px;">
  </div>
  <div class="col ml-3">
    <h5>'. $property->name .'</h5>
    <h6>'. to_address($property) .'</h6> 
  </div>
</div>      
'); ?>

<div class="container-fluid p-1 pl-4">
  <?php foreach($property->units as $unit): ?>
  <?php $unitImage = $unit->image && file_exists('uploads/' . $unit->image) ? $unit->image : 'preview.jpg'; ?>
    <div class="row align-items-center border-bottom border-gray p-2">
      <div class"col">
        <img src="uploads/<?php echo $unitImage; ?>" class="rounded float-left" style="width:80px; height:80px;">
      </div>
      <div class="col" >
        <small>
          Unit # <?php echo $unit->name ." - ". unit_types() [$unit->type]; ?>
          - <?php echo $unit->beds; ?> Beds / 
          <?php echo $unit->baths; ?> Bath / 
          <?php echo $unit->size; ?> Sqm<br>
          PHP&nbsp;<?php echo number_format($unit->rent, 2); ?></strong>&nbsp; Market rent
        </small><br>
        <button class="btn btn-sm" style="border-color: green; color: green; background-color: white;">move in</button>
        <button class="btn btn-sm" style="border-color: green; color: green; background-color: white;">list</button>
      </div>
      <div class="col">
        <?php echo anchor('units/show/' . $unit->id, 'View Unit', 'class="btn btn-sm btn-outline-info" style="float: right !important;"'); ?>
      </div>
    </div>
  <?php endforeach; ?> 
</div>

</div>
<?php endforeach; ?>


 
<!--
<div class="row border-bottom border-gray" >
        <div class="col">
          <img src="uploads/<?php
	echo $image; ?>" class="rounded" style="width:80px; height:80px;">
  </div>
  <div class"col">
    <h5><?php
echo $property->name; ?></h5>
    <p><?php
echo to_address($property); ?><br />
    <?php
echo anchor('properties/show/' . $property->id, 'View details'); ?></p> 
  </div>
</div>

<?php
foreach($property->units as $unit): ?>

<div class="row align-items-center border-bottom border-gray">
  <div class"col">
  <img src="uploads/preview.jpg" class="rounded float-left" style="width:100px; height:100px;">
  </div>
  <div class="col" >
    <small>
      <strong class="d-block text-gray-dark">Unit # <?php
echo $unit->name; ?></strong>
      <em><?php
echo unit_types() [$unit->type]; ?></em><br />

      <strong><?php
echo $unit->beds; ?></strong> Beds / 
      <strong><?php
echo $unit->baths; ?></strong> Bath / 
      <strong><?php
echo $unit->size; ?></strong> Sqm<br />

      <strong>PHP&nbsp;<?php
echo number_format($unit->rent, 2); ?></strong>&nbsp; Market rent
    </small><br />
    <button class="btn  btn-sm" style="border-color: green; color: green; background-color: white;">move in</button>&nbsp;&nbsp;&nbsp;
    <button class="btn  btn-sm" style="border-color: green; color: green; background-color: white;">list</button>
  </div>
  <div class="col">
    <?php
echo anchor('units/show/' . $unit->id, 'View Unit', 'class="btn btn-outline-info" style="float: right !important;"'); ?>
  </div>
</div>
<?php
endforeach; ?> 
</div>

-->
