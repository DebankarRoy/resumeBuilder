create database resume;

use resume;

create table users(
	id int(200) NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL unique,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone_number varchar(10),
    PRIMARY KEY (id)
);

CREATE TABLE profiles(
    id int(200) NOT NULL AUTO_INCREMENT,
    salutation VARCHAR(10),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email_student VARCHAR(255) NOT NULL,
    phone_number varchar(10),
    city VARCHAR(255) NOT NULL,
    user_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE graduation(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(20),
    degree VARCHAR(100) ,
    college VARCHAR(100) ,
    start_year VARCHAR(20) ,
    end_year VARCHAR(20) ,
    stream varchar(40),
    performence_scale VARCHAR(10),
    performence_marks VARCHAR(10),
    resume_profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES resume_profiles(id)
);

CREATE TABLE senior_secondary(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(20),
    school VARCHAR(100) ,
    end_year VARCHAR(20) ,
    board varchar(40) ,
    stream varchar(40),
    performence_scale VARCHAR(10),
    performence_marks VARCHAR(10),
    resume_profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES users(id)
);



CREATE TABLE resume_work_exps(
   	id int(200) NOT NULL AUTO_INCREMENT,
   	work_name varchar(40),
   	program_name VARCHAR(255),
   	organization VARCHAR(255),
   	location VARCHAR(255),
   	start_year VARCHAR(20) ,
    end_year VARCHAR(20) ,
    description VARCHAR(255),
   	link VARCHAR(255),
    resume_education_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (resume_education_id) REFERENCES users(id)
);

CREATE TABLE skills(
   	id int(200) NOT NULL AUTO_INCREMENT,
   	skill VARCHAR(255),
    rating VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE work_samples(
    id int(200) NOT NULL AUTO_INCREMENT,
    blog varchar(255),
    github VARCHAR(255),
    playstore VARCHAR(255),
    behance VARCHAR(255),
    other varchar(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);