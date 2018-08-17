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
class Units extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('property_model');
    $this->load->model('unit_model');
  }

  function index() {
    $properties = $this->property_model->find_active();
    foreach($properties as $property){
      $property->units = $this->unit_model->find_by_property($property->id);
    }
    $data['properties'] = $properties;
    $this->layout->view('units/index', $data);
  }

  function show($id) {
    $data['unit'] = $this->unit_model->read($id);
    $this->layout->view('units/show', $data);
  }

  function movein($id) {
    $data['unit'] = $this->unit_model->read($id);
    $this->layout->view('units/movein', $data);
  }

  function add($property_id) {
    if ($this->input->post()) {
      $unit = unit_form();
      $unit['property_id'] = $property_id;
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->unit_model->save($unit);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $unit['image'] = $data['upload_data']['file_name'];
        $this->unit_model->save($unit);
      }
      redirect('units');
    }
    $data['property'] = $this->property_model->read($property_id);
    $this->layout->view('units/add', $data);
  }

  function copy($unit_id) {
    if($unit_id > 0){
      $clone = $this->unit_model->read($unit_id);
      $data['clone'] = $clone;
    }

    if ($this->input->post()) {
      $unit = unit_form();
      $unit['property_id'] = $clone->property_id;
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $unit['image'] = $clone->image;
        $this->unit_model->save($unit);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $unit['image'] = $data['upload_data']['file_name'];
        $this->unit_model->save($unit);
      }
      redirect('units');
    }
    $data['property'] = $this->property_model->read($clone->property_id);
    $this->layout->view('units/clone', $data);
  }

  function edit($id) {
    if ($this->input->post()) {
      $unit = unit_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->unit_model->update($unit, $id);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $unit['image'] = $data['upload_data']['file_name'];
        $this->unit_model->update($unit, $id);
      }
      redirect('units');
    }
    $data['unit'] = $this->unit_model->read($id);
    $this->layout->view('units/edit', $data);
  }

  function delete($id) {
    $this->unit_model->delete($id);
    redirect('units');
  }
}