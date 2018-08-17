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
class Calendar extends CI_Controller {
  function __construct() {
    parent::__construct();
    redirect_if(!$this->session->userdata('user_id'), 'login');
    
    $this->load->model('reservation_model');
  }

  function index() {
    $reservations = $this->reservation_model->count_one_year_onward();
    $nr = array();
    $b = array();

    foreach($reservations as $reservation){
      
      $date1 = $reservation->date_arrival;
      $date2 = $reservation->date_departure;
      
      $diff = abs(strtotime($date2) - strtotime($date1));
      
      $years = floor($diff / (365*60*60*24));
      $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
      $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

      for ($x = 0; $x <= $days; $x++) {
        $strDate = date('Y-m-d', strtotime($date1. ' + '.$x.' days')) . " ";

        $nr[$strDate]['reservations'] = isset($nr[$strDate]['reservations']) ? $nr[$strDate]['reservations'] + $reservation->count:$reservation->count; 
        
        $nr[$strDate]['rooms'] = isset($nr[$strDate]['rooms']) ? $nr[$strDate]['rooms'] + $reservation->rooms:$reservation->rooms; 
        
        

      } 
    }
    $data['reservations'] = $nr;
    $this->layout->view('calendar/index', $data);
  }

  function today(){
    
    $date = $this->input->get('date');  
    
    $data = $this->reservation_model->today($date);
    echo json_encode($data);
    // $this->layout->view( $data);
  }
}