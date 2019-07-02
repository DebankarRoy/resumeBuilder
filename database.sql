create database resume;

use resume;

create table users(
	id int(200) NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL unique,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE profiles(
    id int(200) NOT NULL AUTO_INCREMENT,
    salutation VARCHAR(10),
    name VARCHAR(255),
    email_student VARCHAR(255) NOT NULL,
    phone_number varchar(10),
    city VARCHAR(255) NOT NULL,
    user_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE graduation(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(255),
    degree VARCHAR(255),
    college VARCHAR(255),
    start_year VARCHAR(255),
    end_year VARCHAR(255),
    stream varchar(255),
    performence_scale VARCHAR(255),
    performence_marks VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
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
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);


CREATE TABLE secondary(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(20),
    school VARCHAR(100) ,
    end_year VARCHAR(20) ,
    board varchar(40) ,
    performence_scale VARCHAR(10),
    performence_marks VARCHAR(10),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE post_graduation(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(255),
    degree VARCHAR(255),
    college VARCHAR(255),
    start_year VARCHAR(255),
    end_year VARCHAR(255),
    stream varchar(255),
    performence_scale VARCHAR(255),
    performence_marks VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE diploma(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(255),
    college VARCHAR(255),
    start_year VARCHAR(255),
    end_year VARCHAR(255),
    stream varchar(255),
    performence_scale VARCHAR(255),
    performence_marks VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE phd(
    id int(200) NOT NULL AUTO_INCREMENT,
    degree_status VARCHAR(255),
    college VARCHAR(255),
    start_year VARCHAR(255),
    end_year VARCHAR(255),
    stream varchar(255),
    performence_scale VARCHAR(255),
    performence_marks VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE training_details(
   	id int(200) NOT NULL AUTO_INCREMENT,
   	program_name VARCHAR(255),
   	organization VARCHAR(255),
   	location VARCHAR(255),
   	start_date VARCHAR(255) ,
    end_date VARCHAR(255) ,
    description VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);

CREATE TABLE project_details(
    id int(200) NOT NULL AUTO_INCREMENT,
    project_name VARCHAR(255),
    start_date VARCHAR(255) ,
    end_date VARCHAR(255) ,
    description VARCHAR(255),
    link varchar(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);


CREATE TABLE intern_details(
    id int(200) NOT NULL AUTO_INCREMENT,
    intern_profile VARCHAR(255),
    organization VARCHAR(255),
    location VARCHAR(255),
    start_date VARCHAR(255) ,
    end_date VARCHAR(255) ,
    description VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);


CREATE TABLE job_details(
    id int(200) NOT NULL AUTO_INCREMENT,
    job_profile VARCHAR(255),
    organization VARCHAR(255),
    location VARCHAR(255),
    start_date VARCHAR(255) ,
    end_date VARCHAR(255) ,
    description VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
);


CREATE TABLE other_details(
    id int(200) NOT NULL AUTO_INCREMENT,
    description VARCHAR(255),
    profiles_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (profiles_id) REFERENCES profiles(id)
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