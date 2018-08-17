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
function login_form() {
  $obj = &get_instance();
  return array(
    $obj->input->post('username'),
    $obj->input->post('password'),
  );
}

function user_form() {
  $obj = &get_instance();
  $user = array(
    'email' => $obj->input->post('email'),
    'username' => $obj->input->post('username'),
    'name' => $obj->input->post('name')
  );
  if ($obj->input->post('password')) {
    $password = $obj->input->post('password');
    $salt = get_salt();
    $encrypted_password = crypt($password, $salt);
    $user['password'] = $encrypted_password;
    $user['salt'] = $salt;
  }
  return $user;
}

function has_access($token) {
  // TODO: Check token access here!
  return true;
}

function redirect_if($condition, $url) {
  if ($condition) {
    redirect($url);
  }
}

function get_salt() {
  $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
  $randStringLen = 64;

  $randString = "";
  for ($i = 0; $i < $randStringLen; $i++) {
    $randString .= $charset[mt_rand(0, strlen($charset) - 1)];
  }

  return $randString;
}