<?php
/**
 * Property Management System
 *
 * Copyright (c) 2018 Shrooms. All rights reserved.
 *
 * Property Management System and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
function property_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'year_built' => $obj->input->post('year_built'),
    'street_address' => $obj->input->post('street_address'),
    'city' => $obj->input->post('city'),
    'route' => $obj->input->post('route'),
    'state' => $obj->input->post('state'),
    'zip_code' => $obj->input->post('zip_code'),
    'country' => $obj->input->post('country'),
  );
}

// TODO: Remove this, please refer to the documentation about property unit statuses.
// define('PROPERTY_AVAILABLE', 0);
// define('PROPERTY_TAKEN', 1);
// define('PROPERTY_HOUSEKEEPING', 2);
// define('PROPERTY_INVOICING', 3);
// define('PROPERTY_CLEANING', 4);

// function property_statuses() {
//   return array(
//     PROPERTY_AVAILABLE => 'Available',
//     PROPERTY_TAKEN => 'Taken',
//     PROPERTY_HOUSEKEEPING => 'For Housekeeping',
//     PROPERTY_INVOICING => 'For Invoicing',
//     PROPERTY_CLEANING => 'For Cleaning',
//   );
// }

// function get_property_status($status = 0) {
//   $status = $status === NULL ? 0 : $status;
//   $statuses = property_statuses();
//   return $statuses[$status];
// }

function to_address($property) {
  return trim("$property->street_address $property->city $property->route $property->state $property->zip_code $property->country");
}