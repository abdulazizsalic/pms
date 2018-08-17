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
class Api extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('property_model');
    $this->load->model('reservation_model');
    
    header('Content-Type: application/json');
  }

  function login($name, $password) {
    $user = $this->user_model->read_by_name_and_password($name, $password);
    if ($user) {
      echo json_encode(array('status' => 'OK', 'data'));
    }
  }

  function getvacantproperties($token = '') {
    try {
      $properties = $this->property_model->find_by_status(PROPERTY_AVAILABLE);
      echo json_encode(array('status' => 'OK', 'data' => $properties));
    } catch (Exception $ex) {
      echo json_encode(array('status' => 'Failed'));
    }
  }

  function reserveproperty() {
    try {
      $reservation = reservation_form();
      $this->reservation_model->save($reservation);
      echo json_encode(array('status' => 'OK'));
    } catch (Exception $ex) {
      echo json_encode(array('status' => 'Failed'));
    }
  }

  function getproperties($token = '') {
    // TODO: Check for valid token here!
    if (has_access($token)) {
      $properties = $this->property_model->find_active();
      echo json_encode(array('status' => 'OK', 'data' => $properties));
    } else {
      echo json_encode(array('status' => 'Failed'));
    }
  }
  
  function housekeepproperty($id) {
    $this->property_model->update(array('status' => PROPERTY_HOUSEKEEPING), $id);
  }
}