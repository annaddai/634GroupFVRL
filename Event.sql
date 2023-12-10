CREATE DATABASE Event;
USE Event;

CREATE TABLE events(
	id INT auto_increment PRIMARY KEY,
    event_name VARCHAR(100) NOT NULL,
    starttime VARCHAR(100) NOT NULL,
    endtime VARCHAR(100) NOT NULL,
    Dates Date NOT NULL);
    


    
INSERT INTO events(event_name, starttime, endtime, Dates)
VALUES 
('Kid story', '15:00', '17:00', '2023-12-20');

INSERT INTO events(event_name, starttime, endtime, Dates)
VALUES 
('Library Museum', '15:00', '17:00', '2023-12-21');