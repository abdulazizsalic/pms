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
class Layout {
  function __construct($layout = 'layout') {
    $this->layout = $layout;
    $this->obj = &get_instance();
  }

  function view($view, $data = null) {
    $data['content'] = $this->obj->load->view($view, $data, TRUE);
    $this->obj->load->view($this->layout, $data);
  }

  function set_layout($layout) {
    $this->layout = $layout;
  }
}
