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
class Reservation_unit_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function save_or_update($reservation_id, $units) {
    foreach ($units as $unit) {
      $unit['reservation_id'] = $reservation_id;
      $reservation_unit_id = $this->save($unit);
    }
  }

  function save($unit) {
    $reservation_unit_id = $this->db->insert('reservation_units', $unit);
    return $reservation_unit_id;
  }
}