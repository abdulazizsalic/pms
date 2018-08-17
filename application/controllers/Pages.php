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
class Pages extends CI_Controller {
  function __construct() {
    parent::__construct();
  }

  function home() {
    $this->layout->view('pages/home');
  }
  
  // TODO: Remove this one, please use the MY_Controller's show_404
  function not_found() {
    $this->load->view('404');
  }
}