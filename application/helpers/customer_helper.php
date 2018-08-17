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
function customer_form() {
  $obj = &get_instance();
  return array(
    'last_name' => $obj->input->post('last_name'),
    'first_name' => $obj->input->post('first_name'),
    'middle_name' => $obj->input->post('middle_name'),
    'display_as_company' => $obj->input->post('display_as_company'),
    'company_name' => $obj->input->post('company_name'),
    'email' => $obj->input->post('email'),
    'phone' => $obj->input->post('phone'),
    'date_of_birth' => $obj->input->post('date_of_birth'),
    'gender' => $obj->input->post('gender'),
    'type' => $obj->input->post('type'),
  );
}

function customer_types() {
  return array(
    'TA' => 'Travel Agency',
    'OTA' => 'Online Travel Agency',
    'FIT' => 'Individual Others',
  );
}

function genders() {
  return array(
    0 => 'None',
    1 => 'Female',
    2 => 'Male',
  );
}

function to_name($customer) {
  $last_name = property_exists($customer, 'last_name') ? $customer->last_name : '';
  $first_name = property_exists($customer, 'first_name') ? $customer->first_name : '';
  $middle_name = property_exists($customer, 'middle_name') ? $customer->middle_name : '';
  $display_as_company = property_exists($customer, 'display_as_company') ? $customer->display_as_company == 1 : false;
  if ($display_as_company) {
    $company_name = property_exists($customer, 'company_name') ? $customer->company_name : '';
    return $company_name;
  }  
  return trim("$last_name, $first_name $middle_name");
}