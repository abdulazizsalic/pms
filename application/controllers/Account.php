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
class Account extends MY_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('property_model');
    $this->load->model('unit_model');
    $this->load->model('reservation_model');
  }

  function login() {
    redirect_if($this->session->userdata('username'), 'dashboard');
    $data['message'] = '';
    if ($this->input->post()) {
      list($username, $password) = login_form();
      $user = $this->user_model->read_by_username_and_password($username, $password);
      if ($user) {
        $this->session->set_userdata('user_id', $user->id);
        $this->session->set_userdata('username', $user->username);
        $this->session->set_userdata('name', $user->name);
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('image', $user->image);
        redirect('dashboard');
      } else {
        $data['message'] = 'Invalid user name or password. Please try again or contact administrator.';
      }
    }
    $this->load->view('account/login', $data);
  }

  function dashboard() {
    redirect_if(!$this->session->userdata('user_id'), 'login');
    $data['active_units'] = $this->unit_model->find_active();
    $data['vacant_units'] = $this->unit_model->find_vacant_for_today();
    $data['occupied_units'] = $this->unit_model->find_occupied_for_today();
    $data['reservations'] = $this->reservation_model->count_one_year_onward();
    $this->layout->view('account/dashboard', $data);
  }

  function profile() {
    redirect_if(!$this->session->userdata('user_id'), 'login');
    if ($this->input->post()) {
      $user = user_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->user_model->update($user, $this->session->userdata('user_id'));
      } else {
        $data = array('upload_data' => $this->upload->data());
        $user['image'] = $data['upload_data']['file_name'];
        $this->user_model->update($user, $this->session->userdata('user_id'));
      }
      $this->session->set_userdata('username', $user['username']);
      $this->session->set_userdata('name', $user['name']);
      $this->session->set_userdata('email', $user['email']);
      if (array_key_exists('image', $user)) {
        $this->session->set_userdata('image', $user['image']);
      }
    }
    $data['user'] = $this->user_model->read($this->session->userdata('user_id'));
    $this->layout->view('account/profile', $data);
  }

  function settings() {
    $this->show_403(); // TODO: Fix this in the near future.
  }

  function logout() {
    $this->session->sess_destroy();
    redirect('.');
  }
}