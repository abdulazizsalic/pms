<?php
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
