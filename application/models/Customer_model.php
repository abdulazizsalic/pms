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
class Customer_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_active_by_type($type = '') {
    $this->db->select("c.*, ifnull(c.type, 'FIT') type, (case when (type = 'TA') then 1 when (type = 'OTA') then 2 else 3 end) as type_int, (case when (type = 'FIT') then concat(c.last_name, c.first_name) else c.company_name end) as name");
    $this->db->where('ifnull(c.inactive, 0)', '= 0', FALSE);
    if ($type != '') {
      $this->db->where('c.type', $type);
    }
    $this->db->order_by("type_int", "asc");
    $this->db->order_by("name", "asc");
    return $this->db->get('customers c')->result();
  }
  
  function find($keyword) {
    $this->db->like("last_name", $keyword);
    $this->db->or_like("middle_name", $keyword);
    $this->db->or_like("first_name", $keyword); 
    $this->db->or_like("company_name", $keyword); 
    $this->db->or_like("email", $keyword); 
    return $this->db->get('customers c')->result();
  }

  function find_active_for_dropdown() {
    $query = $this->find_active();
    $rows = array();
    foreach ($query as $row) {
      $rows[$row->id] = to_name($row);
    }
    return $rows;
  }

  function read($id) {
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    $this->db->where('id', $id);
    return $this->db->get('customers')->row();
  }

  function save($customer) {
    $this->db->insert('customers', $customer);
  }

  function update($customer, $id) {
    $this->db->update('customers', $customer, array('id' => $id));
  }

  function delete($id) {
    $this->db->update('customers', array('inactive' => 1), array('id' => $id));
  }
}
