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
class Customers extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('customer_model');
  }

  function index($type = '') {
    $data['customers'] = array();
    $searchText = $this->input->get("search");
    $data['searchBreadCrumbs'] = "";
    
    if($searchText != null && $searchText != ""){
      $data['customers'] = $this->customer_model->find($searchText);
      $data['searchText'] = $searchText;
      $data['searchBreadCrumbs'] = '<li class="breadcrumb-item">Search results for "'.$searchText.'"</li>';
    }else{
      $data['customers'] = $this->customer_model->find_active_by_type($type);
    }
    $this->layout->view('customers/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $customer = customer_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $data = array('upload_data' => $this->upload->data());
        $customer['image'] = $data['upload_data']['file_name'];
        $this->customer_model->save($customer);
      } else {
        $this->customer_model->save($customer);
      }
      redirect('customers');
    }
    $this->layout->view('customers/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $customer = customer_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->customer_model->update($customer, $id);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $customer['image'] = $data['upload_data']['file_name'];
        $this->customer_model->update($customer, $id);
      }
      redirect('customers');
    }
    $data['customer'] = $this->customer_model->read($id);
    $this->layout->view('customers/edit', $data);
  }

  function delete($id) {
    $this->customer_model->delete($id);
    redirect('customers');
  }
}