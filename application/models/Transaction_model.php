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
class Transaction_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_all() {
    $this->db->select('t.*, c.last_name last_name, c.first_name first_name, c.middle_name middle_name, p.name property_name');
    $this->db->join('customers c', 'c.id = t.customer_id');
    $this->db->join('properties p', 'p.id = t.property_id');
    return $this->db->get('transactions t')->result();
  }

  function read($id) {
    return $this->db->get_where('transactions', array('id' => $id))->row();
  }

  function read_open_by_property($property_id) {
    $this->db->select('t.*, c.last_name last_name, c.first_name first_name, c.middle_name middle_name, p.name property_name');
    $this->db->order_by('t.checkin_date');
    $this->db->join('customers c', 'c.id = t.customer_id');
    $this->db->where('t.property_id', $property_id);
    $this->db->where('ifnull(t.status, 0)', '= 0', FALSE);
    return $this->db->get_where('transactions t')->row();
  }

  function save($transaction) {
    $this->db->insert('transactions', $transaction);
  }

  function update($transaction, $id) {
    $this->db->update('transactions', $transaction, array('id' => $id));
  }

  function delete($id) {
    $this->db->update('transactions', array('status' => TRANSACTION_INVALID), array('id' => $id));
  }
}