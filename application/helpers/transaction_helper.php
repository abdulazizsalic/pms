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
function transaction_form() {
  $obj = &get_instance();
  return array(
    'checkin_date' => $obj->input->post('checkin_date'),
    'property_id' => $obj->input->post('property_id'),
    'customer_id' => $obj->input->post('customer_id'),
  );
}

define('TRANSACTION_OPEN', 0);
define('TRANSACTION_CLOSED', 1);
define('TRANSACTION_INVALID', 2);

function transaction_statuses() {
  return array(
    TRANSACTION_OPEN => 'Open',
    TRANSACTION_CLOSED => 'Closed',
    TRANSACTION_INVALID => 'Invalid',
  );
}