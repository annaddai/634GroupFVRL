CREATE DATABASE myaccount;
USE myaccount;

CREATE TABLE checked_out(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(200) NOT NULL);
    

CREATE TABLE holds(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(200) NOT NULL);
    
CREATE TABLE available_books(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(200) NOT NULL);

CREATE TABLE shelf (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES available_books(id)
);


INSERT INTO checked_out (book_name, author, book_cover)
VALUES 
('The Little Prince', 'Saint-Exupéry, Antoine de', 'https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-270/edition/9781509893478.jpg'),
('The Cat in the Hat', 'Dr. Seuss', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWABL92ciHYPpNSqzqHh4y__kTHOa1WuLLoA&usqp=CAU');

INSERT INTO holds (book_name, author, book_cover)
VALUES 
('I Love You To The Moon And Back', 'Amelia Hepworth', 'https://m.media-amazon.com/images/I/8144Vic9C5L._AC_UF894,1000_QL80_.jpg');

INSERT INTO available_books (book_name, author, book_cover)
VALUES 
('I Love You To The Moon And Back', 'Amelia Hepworth', 'https://m.media-amazon.com/images/I/8144Vic9C5L._AC_UF894,1000_QL80_.jpg'),
('The Little Prince', 'Saint-Exupéry, Antoine de', 'https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-270/edition/9781509893478.jpg'),
('My Murder', 'Katie Williams', 'https://s26162.pcdn.co/wp-content/uploads/2023/05/81rtLd2TvNL-678x1024.jpg'),
('Biography of X', 'Catherine Lacey', 'https://s26162.pcdn.co/wp-content/uploads/2023/03/biography-of-x.jpeg');
