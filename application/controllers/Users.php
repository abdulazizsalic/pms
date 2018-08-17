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
class Users extends CI_Controller {
  function __construct() {
    parent::__construct();
    // redirect_if(!$this->session->userdata('user_id'), 'login');
    $this->load->model('user_model');
  }

  function index() {
    $searchText = $this->input->get("search");
    $data['searchBreadCrumbs'] = "";
    
    if($searchText != null && $searchText != ""){
      $data['users'] = $this->user_model->find($searchText);
      $data['searchText'] = $searchText;
      $data['searchBreadCrumbs'] = '<li class="breadcrumb-item">Search results for "'.$searchText.'"</li>';
    }else{
      $data['users'] = $this->user_model->find_active();
    }

    $this->layout->view('users/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $user = user_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->user_model->save($user);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $user['image'] = $data['upload_data']['file_name'];
        $this->user_model->save($user);
      }
      redirect('users');
    }
    $this->layout->view('users/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $user = user_form();
      $this->load->library('upload', upload_config());
      if (!$this->upload->do_upload()) {
        $this->user_model->update($user, $id);
      } else {
        $data = array('upload_data' => $this->upload->data());
        $user['image'] = $data['upload_data']['file_name'];
        $this->user_model->update($user, $id);
      }
      if ($id == $this->session->userdata('user_id')) {
        $this->session->set_userdata('username', $user['username']);
        $this->session->set_userdata('name', $user['name']);
        $this->session->set_userdata('email', $user['email']);
        $this->session->set_userdata('image', $user['image']);
      }
      redirect('users');
    }
    $data['user'] = $this->user_model->read($id);
    $this->layout->view('users/edit', $data);
  }

  function delete($id) {
    $this->user_model->delete($id);
    redirect('users');
  }
}