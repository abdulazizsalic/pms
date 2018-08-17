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
class Properties extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('property_model');
    $this->load->model('unit_model');
    $this->load->model('transaction_model');
  }

  function index() {
    $data['properties'] = $this->property_model->find_active();
    $this->layout->view('properties/index', $data);
  }

  function show($id) {
    $data['property'] = $this->property_model->read($id);
    $data['units'] = $this->unit_model->find_by_property($id);
    $this->layout->view('properties/show', $data);
  }

  function add() {
    if ($this->input->post()) {
      $property = property_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->property_model->save($property);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $property['image'] = $data['upload_data']['file_name'];
        $this->property_model->save($property);
      }
      redirect('properties');
    }
    $data = array();
    $this->layout->view('properties/add', $data);
  }

  function edit($id) {
    if ($this->input->post()) {
      $property = property_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->property_model->update($property, $id);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $property['image'] = $data['upload_data']['file_name'];
        $this->property_model->update($property, $id);
      }
      redirect('properties');
    }
    $data['property'] = $this->property_model->read($id);
    $this->layout->view('properties/edit', $data);
  }
  
  function archive($id) {
    $this->property_model->archive($id);
  }

  function delete($id) {
    $this->property_model->delete($id);
    redirect('properties');
  }
}
