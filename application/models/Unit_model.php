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
class Unit_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  
  function find_active() {
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get('property_units')->result();
  }

  function find_vacant_for_today() {
    // TODO: Check only the vacant units for today.
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get('property_units')->result();
  }

  function find_occupied_for_today() {
    // TODO: Check only the occupied units for today.
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get('property_units')->result();
  }

  function find_by_property($property_id) {
    $this->db->where('property_id', $property_id);
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get('property_units')->result();
  }

  function count_by_date($date) {
    return $this->db->get_where()->num_rows();
  }

  function read($id) {
    $this->db->select('pu.*, p.name property_name, p.street_address, p.city, p.county, p.state, p.zip_code, p.country');
    $this->db->join('properties p', 'p.id = pu.property_id');
    $this->db->where('pu.id', $id);
    $this->db->where('ifnull(pu.inactive, 0)', ' = 0', FALSE);
    return $this->db->get('property_units pu')->row();
  }

  function save($unit) {
    $this->db->insert('property_units', $unit); 
  }

  function update($unit, $id) {
    $this->db->update('property_units', $unit, array('id' => $id));
  }

  function delete($id) {
    $this->db->update('property_units', array('inactive' => 1), array('id' => $id));
  }
}