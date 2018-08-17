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
class Reservation_event_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_by_reservation($reservation_id) {
    $this->db->select('re.*, u.name user_name, u.image user_image');
    $this->db->join('users u' , 'u.id = re.created_by');
    $this->db->order_by('created_at', 'desc');
    return $this->db->get_where('reservation_events re', array('re.reservation_id' => $reservation_id))->result();
  }

  function save($event) {
    $this->db->insert('reservation_events', $event);
  }
}