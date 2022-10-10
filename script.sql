CREATE TABLE Customer
(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
        code VARCHAR(255),
        name VARCHAR(255) NOT NULL,
        notes TEXT(1000)
);


CREATE TABLE Host
(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        code VARCHAR(255),
        name VARCHAR(255) NOT NULL,
        notes TEXT(1000)
);

CREATE TABLE Contact
(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        email VARCHAR(255),
        phone_number VARCHAR(255),
        role VARCHAR(255),
        host_id INT,
        customer_id INT,
        FOREIGN KEY (host_id) REFERENCES Host(id),
        FOREIGN KEY (customer_id) REFERENCES Customer(id)
);

CREATE TABLE Project
(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        code VARCHAR(255),
        lastpass_folder VARCHAR(255),
        link_mock_ups VARCHAR(255),
        managed_server TINYINT(1),
        notes TEXT(1000),
        host_id INT NOT NULL,
        customer_id INT NOT NULL,
        FOREIGN KEY (host_id) REFERENCES Host(id),
        FOREIGN KEY (customer_id) REFERENCES Customer(id)
);

CREATE TABLE Environment
(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255),
        link VARCHAR(255),
        ip_address VARCHAR(255),
        ssh_port INT(6),
        ssh_userame VARCHAR(255),
        phpmyadmin_link VARCHAR(255),
        ip_restriction TINYINT(1),
        project_id INT,
        FOREIGN KEY (project_id) REFERENCES Project(id)
);