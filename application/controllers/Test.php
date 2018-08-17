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
class Test extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('listing_model');
  }

  function index() {
    $data['listings'] = $this->listing_model->find_all();
    $this->load->view('test/index', $data);
  }
}