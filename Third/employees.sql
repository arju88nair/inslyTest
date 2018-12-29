-- Creating and selecting database
CREATE DATABASE Organisation;
USE Organisation;

-- Creating the employees table
CREATE TABLE employees (id int not null auto_increment,
name varchar(155),
birthdate DATE,
id_code int,
is_current_employee boolean,
email varchar(155),
phone varchar(100),
address varchar(255),
intro_eng varchar(255),
workexp_eng varchar(255),
edu_eng varchar(255),
intro_esp varchar(255),
workexp_esp varchar(255),
edu_esp varchar(255),
intro_fr varchar(255),
workexp_fr varchar(255),
edu_fr varchar(255),
created_by varchar(100),
modified_by varchar(100),
created_at date,
modified_at date,
primary key (id));

