CREATE TABLE IF NOT EXISTS users
(
id_users INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(80) UNIQUE NOT NULL,
login VARCHAR(80) UNIQUE NOT NULL,
pass VARCHAR(16)
);

CREATE TABLE IF NOT EXISTS authors
(
id_authors INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(80) NOT NULL UNIQUE
    
);
CREATE TABLE IF NOT EXISTS books_authors
(
id_book INT,
id_author INT,
PRIMARY KEY (id_book, id_author)
);

CREATE TABLE IF NOT EXISTS ganres
(
id_ganre INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(80) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS books_ganres
(
id_ganre INT,
id_book INT,
PRIMARY KEY (id_ganre, id_book)
);

CREATE TABLE IF NOT EXISTS books
(
id_book INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(80) NOT NULL UNIQUE,
cost INT DEFAULT (0),
rating INT DEFAULT (0)
);

CREATE TABLE IF NOT EXISTS review
(
id_review INT PRIMARY KEY AUTO_INCREMENT,
id_book INT NOT NULL,
text_review VARCHAR(250)
);

CREATE TABLE IF NOT EXISTS book_in_favorites_by_user
(
id_book INT NOT NULL,
id_user INT NOT NULL
);

CREATE TABLE IF NOT EXISTS users_library
(
id_order INT,
id_user INT,
id_book INT NOT NULL,
PRIMARY KEY (id_order, id_user)    
);

CREATE TABLE IF NOT EXISTS orders_item
(
id_orders_item INT PRIMARY KEY,   
id_book INT NOT NULL,
id_order INT NOT NULL
);

CREATE TABLE IF NOT EXISTS oreders_status
(
id_status INT PRIMARY KEY AUTO_INCREMENT,
name varchar(50) NOT NULL	
);

CREATE TABLE IF NOT EXISTS orders
(
id_orders INT PRIMARY KEY AUTO_INCREMENT,
id_users INT NOT NULL,
id_status INT NOT NULL,
order_time DATETIME NOT NULL DEFAULT('2000/01/01 00.00.00'),
total_sum INT NOT NULL,
total_amount INT 
);