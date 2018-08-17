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
class Property_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_active() {
    $this->db->select('p.*, ifnull(ps.status, 0) status');
    // $this->db->join('property_types pt', 'pt.id = p.type_id');
    $this->db->from('properties p');
    $this->db->join('property_statuses ps', 'ps.property_id = p.id', 'left outer');
    $this->db->where('ifnull(p.inactive, 0)', '= 0', FALSE);
    return $this->db->get()->result();
  }
  
  function find($keyword) {
    $this->db->like('', $keyword); // TODO: Put the keyword finding here.
    return $this->db->get('properties')->result();
  }

  function find_active_for_dropdown() {
    $query = $this->find_active();
    $rows = array();
    foreach ($query as $row) {
      $rows[$row->id] = $row->name;
    }
    return $rows;
  }

  function read($id) {
    return $this->db->get_where('properties', array('id' => $id))->row();
  }

  function save($property) {
    $this->db->insert('properties', $property);
  }

  function update($property, $id) {
    $this->db->update('properties', $property, array('id' => $id));
  }

  function delete($id) {
    $this->db->update('properties', array('inactive' => 1), array('id' => $id));
  }
}