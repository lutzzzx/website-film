-- Create the database
CREATE DATABASE IF NOT EXISTS db_film;

-- Switch to the database
USE db_film;

-- Create the user table
CREATE TABLE IF NOT EXISTS user (
    id INT(12) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);
