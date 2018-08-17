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
function upload_config($allowed_types = 'gif|jpg|png|jpeg') {
	$config['upload_path'] = './uploads/';
	$config['allowed_types'] = $allowed_types;
	$config['max_size']	= '2000';
	$config['max_width']  = '2048';
	$config['max_height']  = '2048';
	return $config;
}

function echod($val, $default = '-') {
	if (!empty($val)) {
		echo $val;
	} else {
		echo $default;
	}
}