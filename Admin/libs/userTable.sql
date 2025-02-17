
CREATE DATABASE IF NOT EXISTS online_course;
USE online_course;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY;
    name VARCHAR(255) NOT NULL;
    email VARCHAR(255) UNIQUE NOT NULL;
    password VARCHAR(255) NOT NULL;
    role  TINYINT(1) ;
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
)