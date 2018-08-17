<?php
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