CREATE DATABASE myaccount;
USE myaccount;

CREATE TABLE checked_out(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(500) NOT NULL);
    

CREATE TABLE holds(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(500) NOT NULL);
    
CREATE TABLE available_books(
	id INT auto_increment PRIMARY KEY,
    book_name VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    book_cover VARCHAR(500) NOT NULL);

CREATE TABLE shelf (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES available_books(id)
);


INSERT INTO checked_out (book_name, author, book_cover)
VALUES 
('The Little Prince', 'Saint-Exupéry, Antoine de', 'https://ik.imagekit.io/panmac/tr:f-auto,di-placeholder_portrait_aMjPtD9YZ.jpg,w-270/edition/9781509893478.jpg'),
('The Cat in the Hat', 'Dr. Seuss', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWABL92ciHYPpNSqzqHh4y__kTHOa1WuLLoA&usqp=CAU'),
('The Giving Tree', 'Shel Silverstein', 'https://www.publishersweekly.com/cover/9780060256654'),
('The Graham Effect', 'Elle Kennedy', 'https://www.publishersweekly.com/cover/9781728283272'),
('Witch','Finbar Hawkins','https://i.pinimg.com/474x/24/a4/5e/24a45ea1c745c53fdce803b9e5eb7a1a.jpg'),
('1984','George Orwell','https://i.pinimg.com/474x/bd/29/34/bd293499ee09b8fa4182f2ae24d83133.jpg'),
('The Maker of Swans','Paraic O‘Donnell','https://i.pinimg.com/474x/d2/0b/29/d20b291bd20bf99262d4dbdc41ded105.jpg'),
('Over the Sirens','Zelda Reese','https://i.pinimg.com/474x/a3/25/a1/a325a16a9897d88d89ea3b0ab88393cd.jpg');

INSERT INTO holds (book_name, author, book_cover)
VALUES 
('I Love You To The Moon And Back', 'Amelia Hepworth', 'https://m.media-amazon.com/images/I/8144Vic9C5L._AC_UF894,1000_QL80_.jpg'),
('The Legend of Skeleton Man','Joseph Bruchac','https://i.pinimg.com/474x/50/d7/42/50d7423684d49c5fd23ff9a94ad118b4.jpg'),
('Nightbooks','J.A.White','https://i.pinimg.com/474x/19/e7/b2/19e7b21490babaac9fa218d7594f6e90.jpg'),
('The Rambling','Jimmy Cajoleas','https://i.pinimg.com/474x/70/f0/13/70f013a9cf9113ec6f84b5c346a6a20a.jpg'),
('Misery','Stephen King','https://i.pinimg.com/474x/d2/d9/30/d2d9306df7f3c37b25351665eeefd669.jpg'),
('The Great Gatsby','F.Scott Fitzgerald','https://i.pinimg.com/474x/71/d4/68/71d468eb9c5d0ae01b4352215f9b7ea3.jpg'),
('The Truth Lies Here','Lindsey Klingele','https://i.pinimg.com/474x/fa/e3/ae/fae3ae68345bd83b7c590d6c4318c58b.jpg'),
('The Bird','Jules Michelet','https://i.pinimg.com/474x/9c/9f/0c/9c9f0c501fcee45aafcfd6c73c6050df.jpg');

INSERT INTO available_books (book_name, author, book_cover)
VALUES 
('Twisted Love', 'Ana Huang', 'https://www.publishersweekly.com/cover/9781728274867'),
('Pride and Prejudice','Jane Austen','https://i.pinimg.com/474x/1b/d3/e1/1bd3e19e7d97b3a888de90a6c04ca1ad.jpg'),
('The Bell Jar','Sylvia Plath','https://i.pinimg.com/474x/f8/f3/62/f8f36209ad40e4eb92eab5084d5b916a.jpg'),
('Taxi Driver','Robert De Niro','https://i.pinimg.com/474x/16/7a/e6/167ae63140c22596175ae0356aa5ab76.jpg');