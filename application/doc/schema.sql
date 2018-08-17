--
-- Property Management System
-- 
-- Copyright (c) 2018 Shrooms. All rights reserved.
-- 
-- Property Management System and its user interface are protected by trademark
-- and other pending or existing intellectual property
-- rights in the Philippines.
-- 
 
create database deghq_rentals;
use deghq_rentals;

create table users(
  id integer not null primary key auto_increment,
  name varchar(255),
  password varchar(255),
  salt varchar(255),
  username varchar(255)
);

create table listings(
  id integer not null primary key auto_increment,
  name varchar(255),
  type integer
);

create table listing_types(
  id integer not null primary key auto_increment,
  name varchar(255),
  description varchar(255)
);

alter table users add email varchar(255);
alter table listings change type type_id integer;
alter table listings add price double;
alter table listings add description varchar(255);

create table customers(
  id integer not null primary key auto_increment,
  name varchar(255),
  address varchar(255),
  phone varchar(255),
  email varchar(255)
);

rename table listings to rooms;
rename table listing_types to room_types;

alter table rooms add status integer;

create table transactions(
  id integer not null primary key auto_increment,
  room_id integer,
  customer_id integer
);

alter table transactions add date datetime;
alter table transactions change date checkin_date datetime;
alter table transactions add checkout_date datetime;

rename table rooms to properties;
rename table room_types to property_types;

alter table properties add inactive integer;
alter table property_types add inactive integer;
alter table users add inactive integer;
alter table customers add inactive integer;
alter table transactions change room_id property_id integer;
alter table transactions add status integer;

create table reservations(
  id integer not null primary key auto_increment,
  date datetime,
  user_id integer,
  notes varchar(255)
);

create table customer_types(
  id integer not null primary key auto_increment,
  name varchar(255)
);

alter table customer_types add inactive tinyint;

alter table customers add customer_type_id integer;

create table property_statuses(
  id integer not null primary key auto_increment,
  property_id integer,
  status integer,
  date datetime
);

alter table properties drop status;

drop table property_types;

create table property_units(
  id integer not null primary key auto_increment,
  property_id integer,
  name varchar(255),
  type integer,
  size varchar(255),
  beds integer,
  baths integer,
  rent double,
  deposit double
);

alter table customers change name first_name varchar(255); 
alter table customers add last_name varchar(255);
alter table customers add middle_name varchar(255);
alter table customers add company_name varchar(255);
alter table customers add date_of_birth datetime;

alter table property_units add inactive tinyint;

alter table customers add gender tinyint;

alter table properties change type_id year_built varchar(255);
alter table properties change price street_address varchar(255);
alter table properties change description city varchar(255);
alter table properties add county varchar(255);
alter table properties add state varchar(255);
alter table properties add zip_code varchar(255);
alter table properties add country varchar(255);

alter table reservations add inactive tinyint;
alter table reservations change user_id created_by integer;
alter table reservations change notes special_requests mediumtext;
alter table reservations change date arrival_date datetime;

alter table reservations add last_name varchar(255);
alter table reservations add first_name varchar(255);
alter table reservations add departure_date datetime;
alter table reservations add no_of_rooms integer;
alter table reservations add room_category varchar(255);
alter table reservations add email varchar(255);
alter table reservations add mobile varchar(255);

alter table customers add notes mediumtext;
alter table customers add display_as_company tinyint;

alter table properties add image varchar(255);

alter table users add image varchar(255);

alter table customers add image varchar(255);

alter table reservations add created_at datetime;
alter table reservations add updated_at datetime;
alter table reservations add updated_by integer;

alter table customers add type varchar(255);

create table reservation_events(
  id integer not null primary key auto_increment,
  reservation_id integer,
  event varchar(255),
  updated_at datetime,
  created_at datetime,
  updated_by integer,
  created_by integer
);

alter table property_units add image varchar(255);

alter table reservation_events drop updated_at;
alter table reservation_events drop updated_by;

alter table reservations add no_of_adults integer;
alter table reservations add no_of_kids integer;

alter table reservations add type integer;

alter table reservations change room_category room_category integer;

alter table properties change county route varchar(255);

create table reservation_units(
  id integer not null primary key auto_increment,
  reservation_id integer,
  unit_id integer
);

create table reservation_unit_guests(
  id integer not null primary key auto_increment,
  reservation_unit_id integer,
  guest_name varchar(255),
  age integer
);
