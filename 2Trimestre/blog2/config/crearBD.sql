DROP DATABASE IF EXISTS bd_blog;
CREATE DATABASE bd_blog CHARACTER SET utf8mb4;
USE bd_blog;
 
CREATE TABLE blog (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(120) NOT NULL,
    blog VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    tags VARCHAR(50) NOT NULL,
    created DATE NOT NULL,
    updated DATE NOT NULL

);

CREATE TABLE comment (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(50) NOT NULL,
    comment VARCHAR(120) NOT NULL,
    approved VARCHAR(50) NOT NULL,
    created DATE NOT NULL,
    updated DATE NOT NULL,
    id_blog INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_blog) REFERENCES blog(id)

);