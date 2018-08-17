<?php
/**
 * Property Management System
 *
 * Copyright (c) 2018 Digital Excellence Group. All rights reserved.
 *
 * Property Management System and its user interface are protected by trademark
 * and other pending or existing intellectual property
 * rights in the Philippines.
 */
function unit_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('unit_name'),
    'type' => $obj->input->post('type'),
    'size' => $obj->input->post('size'),
    'beds' => $obj->input->post('beds'),
    'baths' => $obj->input->post('bath'),
    'rent' => $obj->input->post('rent'),
    'deposit' => $obj->input->post('deposit'),
  );
}

function unit_types() {
  return array(
    1 => 'Room'
  );
}

function unit_statuses() {
  return array(
    'VC' => 'Vacant Clean',
    'OS' => 'Out of Service',
    'OD' => 'Occupied Dirty',
    'VD' => 'Vacant Dirty',
    'OC' => 'Occuupied Clean',
    'DO' => 'Due Out',
  );
}

function room_categories() {
  return array(
    0 => 'Standard',
  );
}