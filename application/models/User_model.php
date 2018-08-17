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
class User_model extends CI_Model {
  function __construct() {
    parent::__construct();
  }

  function find_active() {
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get('users')->result();
  }

  function find($keyword) {
    $this->db->like("name", $keyword);
    $this->db->or_like("username", $keyword);
    $this->db->or_like("email", $keyword); 
    return $this->db->get('users')->result();
  }

  function read($id) {
    $this->db->where('ifnull(inactive, 0)', ' = 0', FALSE);
    return $this->db->get_where('users', array('id' => $id))->row();
  }

  function read_by_username_and_password($username, $password) {
    $user = $this->db->get_where('users', array('username' => $username))->row();
    if ($user && $user->password == crypt($password, $user->salt)) {
      return $user;
    } else {
      return null;
    }
  }

  function save($user) {
    $this->db->insert('users', $user);
  }

  function update($user, $id) {
    $this->db->update('users', $user, array('id' => $id));
  }

  function delete($id) {
    $this->db->update('users', array('inactive' => 1), array('id' => $id));
  }
}