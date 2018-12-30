-- Creating and selecting database
CREATE DATABASE IF NOT EXISTS  Organisation;
USE Organisation;

-- Creating the employees table
CREATE TABLE IF NOT EXISTS  employees (id int not null auto_increment,
name varchar(155),
birthdate DATE,
id_code int,
is_current_employee boolean,
email varchar(155),
phone varchar(100),
address varchar(255),
intro_eng varchar(255),
work_exp_eng varchar(255),
education_eng varchar(255),
intro_esp varchar(255),
work_exp_esp varchar(255),
education_esp varchar(255),
intro_fr varchar(255),
work_exp_fr varchar(255),
education_fr varchar(255),
created_by varchar(100),
modified_by varchar(100),
created_at date,
modified_at date,
primary key (id));



-- Inserting dummy data
INSERT INTO `employees` (
  `id`,
  `name`,
  `birthdate`,
  `id_code`,
  `is_current_employee`,
  `email`,
  `phone`,
  `address`,
  `intro_eng`,
  `work_exp_eng`,
  `education_eng`,
  `intro_esp`,
  `work_exp_esp`,
  `education_esp`,
  `intro_fr`,
  `work_exp_fr`,
  `education_fr`,
  `created_by`,
  `modified_by`,
  `created_at`,
  `modified_at`
  ) VALUES (
  NULL,
  'Nair',
  '1992-04-02',
  '555-55522-22',
  TRUE,
  'arju88nair@gmail.com',
  '+91-9567086818',
  'Bangalore,India',
  'I am Nair',
  'I have 5 years of experience',
  'Bachelors in E&C',
  'Soy Nair',
  'Tengo 5 años de experiencia',
  'Licenciatura en E&C',
  'Je suis nair',
  'J''ai 5 ans d''expérience',
  'Bachelors en E & C',
  'admin',
  'user',
  '2018-12-30',
  '2018-12-30'
  );

-- Required query

SELECT name,intro_eng,intro_esp,intro_fr,work_exp_eng,work_exp_esp,work_exp_fr,education_eng,education_esp,education_fr FROM Organisation.employees;