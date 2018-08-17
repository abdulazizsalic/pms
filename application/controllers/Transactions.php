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
class Transactions extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('transaction_model');
    $this->load->model('property_model');
    $this->load->model('customer_model');
  }

  function index() {
    $data['transactions'] = $this->transaction_model->find_all();
    $this->layout->view('transactions/index', $data);
  }

  function add($property_id = 0) {
    if ($this->input->post()) {
      $transaction = transaction_form();
      $this->transaction_model->save($transaction);
      redirect('transactions');
    }
    $data['properties'] = $this->property_model->find_all_for_dropdown();
    $data['property_id'] = $property_id;
    $data['customers'] = $this->customer_model->find_active_for_dropdown();
    $this->layout->view('transactions/add', $data);
  }

  function edit($id) {
    if ($this->input->post()) {
      $transaction = transaction_form();
      $this->transaction_model->update($transaction, $id);
      redirect('transactions');
    }
    $data['transaction'] = $this->transaction_model->read($id);
    $data['customers'] = $this->customer_model->find_active_for_dropdown();
    $this->layout->view('transactions/edit', $data);
  }

  function delete($id) {
    $this->transaction_model->delete($id);
    redirect('transactions');
  }
}