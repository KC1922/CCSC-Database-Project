DROP DATABASE ccsc_database;
CREATE DATABASE ccsc_database;
USE ccsc_database;

/* Entities */
CREATE TABLE paper (
	id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(500),
    num_pages INT,
    date_written Date,
    downloads INT,
    abstract Text,
    date_posted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_last_revised TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    abstract_views INT,
    suggested_citation VARCHAR(500),
    series ENUM('Working Paper Series', 'Accepted Paper Series'),
    PRIMARY KEY (id)
);

CREATE TABLE `user` (
	id INT NOT NULL AUTO_INCREMENT,
    fname VARCHAR(100),
    email VARCHAR(500),
    `password` VARCHAR(100),
    phone VARCHAR(100),
    website VARCHAR(500),
    lname VARCHAR(100),
    minitial CHAR,
    PRIMARY KEY (id)
);

CREATE TABLE `organization` (
	id INT NOT NULL AUTO_INCREMENT,
    address VARCHAR(500),
    state CHAR(2),
    city VARCHAR(100),
    country VARCHAR(100),
    zip_code VARCHAR(10),
    `name` VARCHAR(500),
    other VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE topic (
	`name` VARCHAR(100),
    PRIMARY KEY (`name`)
);

CREATE TABLE journal (
	`name` VARCHAR(500),
    PRIMARY KEY (`name`)
);

CREATE TABLE keyword (
	keyword VARCHAR(100),
    PRIMARY KEY (keyword)
);

CREATE TABLE `reference` (
	`reference` VARCHAR(500),
    PRIMARY KEY (`reference`)
);

CREATE TABLE jel_code (
	jel_code VARCHAR(3),
    `name` VARCHAR(100),
    PRIMARY KEY (`jel_code`)
);

CREATE TABLE author (
	verified BOOLEAN,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    PRIMARY KEY (user_id)
);

CREATE TABLE reviewer (
	verified BOOLEAN,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    PRIMARY KEY (user_id)
);
/* End Entities */

/* Relationships */
CREATE TABLE paper_has_topic (
	paper_id INT NOT NULL,
    topic_name VARCHAR(100),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    FOREIGN KEY (topic_name) REFERENCES topic(`name`),
    PRIMARY KEY (paper_id, topic_name)
);

CREATE TABLE user_specializes_topic (
	user_id INT NOT NULL,
    topic_name VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    FOREIGN KEY (topic_name) REFERENCES topic(`name`),
    PRIMARY KEY (user_id, topic_name)
);

CREATE TABLE paper_has_journal (
	paper_id INT NOT NULL,
    journal_name VARCHAR(500),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    FOREIGN KEY (journal_name) REFERENCES journal(`name`),
    PRIMARY KEY (paper_id, journal_name)
);

CREATE TABLE paper_has_keyword (
	paper_id INT NOT NULL,
    keyword_keyword VARCHAR(100),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    FOREIGN KEY (keyword_keyword) REFERENCES keyword(keyword),
    PRIMARY KEY (paper_id, keyword_keyword)
);

CREATE TABLE paper_has_reference (
	paper_id INT NOT NULL,
    reference_reference VARCHAR(500),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    FOREIGN KEY (reference_reference) REFERENCES `reference`(`reference`),
    PRIMARY KEY (paper_id, reference_reference)
);

CREATE TABLE paper_has_jel_code (
	paper_id INT NOT NULL,
    jel_code_jel_code VARCHAR(3),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    FOREIGN KEY (jel_code_jel_code) REFERENCES jel_code(jel_code),
    PRIMARY KEY (paper_id, jel_code_jel_code)
);

CREATE TABLE reviewer_reviews_paper (
	appropriateness_of_topic TINYINT,
    timeliness_of_topic TINYINT,
    supportive_evidence TINYINT,
    technical_quality TINYINT,
    scope_of_coverage TINYINT,
    citation_of_previous_work TINYINT,
    originality TINYINT,
    content_comments TEXT,
    organization_of_paper TINYINT,
    clarity_of_main_message TINYINT,
    mechanics TINYINT,
    written_comments TEXT,
    suitability_for_presentation TINYINT,
    potential_interest_in_topic TINYINT,
    potential_comments TEXT,
    rating TINYINT,
    overall_comments TEXT,
    reviewer_id INT NOT NULL,
    paper_id INT NOT NULL,
    FOREIGN KEY (reviewer_id) REFERENCES reviewer(user_id),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    PRIMARY KEY (reviewer_id, paper_id)
);

CREATE TABLE author_writes_paper (
	author_id INT NOT NULL,
    paper_id INT NOT NULL,
    FOREIGN KEY (author_id) REFERENCES author(user_id),
	FOREIGN KEY (paper_id) REFERENCES paper(id),
    PRIMARY KEY (author_id, paper_id)
);

CREATE TABLE user_affiliated_organization (
	department VARCHAR(100),
    user_id INT NOT NULL,
    organization_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `user`(id),
    FOREIGN KEY (organization_id) REFERENCES `organization`(id),
    PRIMARY KEY (user_id, organization_id)
);
/* End Relationships */