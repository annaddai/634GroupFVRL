CREATE DATABASE myaccount;
USE myaccount;

CREATE TABLE checked_out(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(100) NOT NULL);
    

CREATE TABLE holds(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(100) NOT NULL);
    
INSERT INTO checked_out (book_name, author, book_cover)
VALUES 
('The Little Prince', 'Saint-Exupéry, Antoine de', 'https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-270/edition/9781509893478.jpg');

INSERT INTO holds (book_name, author, book_cover)
VALUES 
('I Love You To The Moon And Back', 'Amelia Hepworth', 'https://m.media-amazon.com/images/I/8144Vic9C5L._AC_UF894,1000_QL80_.jpg');