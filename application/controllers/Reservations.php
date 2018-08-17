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
class Reservations extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('reservation_model');
    $this->load->model('reservation_event_model');
    $this->load->model('reservation_unit_model');
  }
  
  function index() {
    $data['reservations'] = $this->reservation_model->find_active();
    $this->layout->view('reservations/index', $data);
  }

  function show($id) {
    $data['reservation'] = $this->reservation_model->read($id);
    $data['events'] = $this->reservation_event_model->find_by_reservation($id);
    $this->layout->view('reservations/show', $data);
  }
  
  function search() {
    $keyword = $this->input->get('keyword');
    $data['reservations'] = $this->reservation_model->find($keyword);
    $this->layout->view('reservations/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $reservation = reservation_form();
      $reservation['created_by'] = $this->session->userdata('user_id');
      $this->reservation_model->save($reservation);
      redirect('reservations');
    }
    $this->layout->view('reservations/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      list($reservation, $reservation_units) = reservation_form();
      $reservation['updated_by'] = $this->session->userdata('user_id');
      $this->reservation_model->update($reservation, $id);
      $this->reservation_unit_model->save_or_update($id, $reservation_units);
      redirect('reservations');
    }
    $reservation = $this->reservation_model->read($id);
    redirect_if(!$reservation, '.');
    $data['reservation'] = $reservation;
    $this->layout->view('reservations/edit', $data);
  }

  function cancel($id) {
    $this->reservation_model->cancel($id);
    redirect('reservations');
  }

  function reinstate($id) {
    $this->reservation_model->reinstate($id);
    redirect('reservations');
  }
}