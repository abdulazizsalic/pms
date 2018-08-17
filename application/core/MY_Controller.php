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
class MY_Controller extends CI_Controller {
  function __parent() {
    parent::__construct();

    if ($this->config->item('enable_profiler')) {
      $this->output->enable_profiler(TRUE);
    }
  }

  function show_503() {
    $this->load->view('503');
  }

  function show_403() {
    $this->load->view('403');
  }
}