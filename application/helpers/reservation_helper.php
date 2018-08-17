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
function reservation_form() {
  $obj = &get_instance();
  $reservation = array(
    'arrival_date' => $obj->input->post('arrival_date'),
    'departure_date' => $obj->input->post('departure_date'),
    'last_name' => $obj->input->post('last_name'),
    'first_name' => $obj->input->post('first_name'),
    'no_of_rooms' => $obj->input->post('no_of_rooms'),
    'room_category' => $obj->input->post('room_category'),
    'email' => $obj->input->post('email'),
    'mobile' => $obj->input->post('mobile'),
    'special_requests' => $obj->input->post('special_requests'),
  );
  $units = reservation_units_form();
  return array($reservation, $units);
}

function reservation_units_form() {
  $obj = &get_instance();
  $reservation_units = array();
  $units = $obj->input->post('units', true);
  // $schools = $obj->input->post('education_school', true);
  // $majors = $obj->input->post('education_major', true);
  // $date_froms = $obj->input->post('education_date_from', true);
  // $date_tos = $obj->input->post('education_date_to', true);
  // $descriptions = $obj->input->post('education_description', true);
  for ($i = 0; $i < count($units) - 1; $i++) {
    $reservation_units[] = array(
      'unit_id' => $units[$i],
      // 'major' => $majors[$i],
      // 'school' => $schools[$i],
      // 'date_from' => $date_froms[$i],
      // 'date_to' => $date_tos[$i],
      // 'description' => $descriptions[$i],
    );
  }
  return $reservation_units;
}

function to_events($reservations) {
  $events = array();
  foreach ($reservations as $key => $value) {
    $event = array(
      'title' => $value->reservations . " reservation". ($value->reservations > 1 ? "s ": " ") . $value->rooms . " room". ($value->rooms > 1 ? "s ": "") ,
      'start' => $key,
      'className' => 'bg-info',
      'allDay' => true,
    );
    array_push($events, $event);
  }
  return $events;
}


function reservation_type() {
  return array(
    1 => 'Standard'
  );
}
