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
class Reservation_model extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->model('reservation_event_model');
  }

  function today($date_today){
    $this->db->where('arrival_date <=', $date_today);
    $this->db->where('departure_date >=', $date_today);
    return $this->db->get('reservations')->result();
  }

  function find_active() {
    $this->db->order_by('arrival_date', 'desc');
    return $this->db->get('reservations')->result(); // TODO: Find only active reservations.
  }

  function find_my_active($user_id) {
    $this->db->order_by('arrival_date', 'desc');
    $this->db->where('created_by', $user_id);
    return $this->db->get('reservations')->result();
  }
  
  function find($keyword) {
    $this->db->like('', $keyword); // TODO: Get the like query for finding reservations (i.e. name, number, etc.)
    return $this->db->get('reservations')->result();
  }

  function count_by_date($date_from, $date_to) {
    $this->db->select("count(*) reservations, date_format(arrival_date, '%Y-%m-%d') date_arrived");
    $this->db->group_by('date_arrived');
    $this->db->get('reservations')->result();
  }

  function find_by_date($date_from, $date_to) {
    $this->db->where('arrival_date >=', $date_from);
    $this->db->where('arrival_date <=', $date_to);
    return $this->db->get('reservations')->result();
  }
  
  function count_one_year_onward() {
    $this->db->select("count(*) count, date_format(r.arrival_date, '%Y-%m-%d') date_arrival, date_format(r.departure_date, '%Y-%m-%d') date_departure, SUM(r.no_of_rooms) rooms");
    $this->db->order_by('r.arrival_date', 'desc');
    $this->db->group_by('date_arrival');
    return $this->db->get('reservations r')->result();
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
    return $this->db->get_where('reservations', array('id' => $id))->row();
  }
  
  function _event($reservation_id, $created_by, $event) {
    return array(
      'reservation_id' => $reservation_id,
      'event' => $event,
      'created_by' => $created_by,
    );
  }

  function save($reservation) {
    $this->db->set('created_at', 'NOW()', FALSE);
    $reservation_id = $this->db->insert('reservations', $reservation);
    
    $this->db->set('created_at', 'NOW()', FALSE);
    $this->reservation_event_model->save($this->_event($reservation_id, $reservation['created_by'], 'Created this reservation'));
    return $reservation_id;
  }

  function update($reservation, $id) {
    $this->db->set('updated_at', 'NOW()', FALSE);
    $this->db->update('reservations', $reservation, array('id' => $id));
    
    $this->db->set('created_at', 'NOW()', FALSE);
    $this->reservation_event_model->save($this->_event($id, $reservation['updated_by'], 'Updated the reservation'));
  }

  function cancel($id) {
    $this->db->update('reservations', array('inactive' => 1), array('id' => $id));
    
    $this->db->set('created_at', 'NOW()', FALSE);
    $this->reservation_event_model->save($this->_event($id, $this->session->userdata('user_id'), 'Cancelled the reservation'));
  }

  function reinstate($id) {
    $this->db->update('reservations', array('inactive' => 0), array('id' => $id));
    
    $this->db->set('created_at', 'NOW()', FALSE);
    $this->reservation_event_model->save($this->_event($id, $this->session->userdata('user_id'), 'Reinstated the reservation'));
  }
  
}