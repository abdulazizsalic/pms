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
class Reservation_unit_guest_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function save_or_update($reservation_unit_id, $guests) {
    foreach ($guests as $guest) {
      $guest['reservation_unit_id'] = $reservation_unit_id;
      $this->save($guest);
    }
  }

  function save($guest) {
    $this->db->insert('reservation_unit_guests', $guest);
  }
}