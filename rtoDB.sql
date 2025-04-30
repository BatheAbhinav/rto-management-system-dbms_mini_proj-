Create database firstxampp;

use firstxampp;

create table userdetails(
First_Name varchar(100) NOT NULL,
Last_Name varchar(100) NOT NULL,
Contact_Number varchar(10),
Gender varchar(100),
Aadhar_Number varchar(12) PRIMARY KEY,
DOB DATE,
Address varchar(100),
LoginID varchar(100),
Password varchar(100)); 

desc userdetails;

create table rto(
RTO_ID varchar(100) PRIMARY KEY,
RTO_name varchar(100) NOT NULL,
contact_no int(10) NOT NULL);

DESC rto;

create table Fitness_test(
Fitness_ID int PRIMARY KEY,    
Test_date date NOT NULL,
Result varchar(50),
RTO_ID varchar(100),
FOREIGN KEY (RTO_ID) REFERENCES rto(RTO_ID));

desc fitness_test;


create table vehicledetails(
Chasis_Number int(100) PRIMARY KEY,
Engine_Number int(100) NOT NULL,
Model varchar(100) NOT NULL,
Year int(4) NOT NULL,
Fuel_type varchar(100) NOT NULL,
colour varchar(100),
Aadhar_Number varchar(12) NOT NULL,
FOREIGN KEY (Aadhar_Number) REFERENCES userdetails(Aadhar_Number),
Fitness_ID int,	
FOREIGN KEY (Fitness_ID) REFERENCES Fitness_test(Fitness_ID) ON DELETE CASCADE);
desc vehicledetails;

create table registrationdetails(
Registration_ID int(100) PRIMARY KEY,
Registration_Date DATE NOT NULL,
Registration_Status varchar(100) NOT NULL,
Registration_type varchar(100) NOT NULL,
Expiry_date DATE NOT NULL,
RTO_ID varchar(100),
FOREIGN KEY (RTO_ID) REFERENCES RTO(RTO_ID),
Aadhar_Number varchar(12) NOT NULL,
FOREIGN KEY (Aadhar_Number) REFERENCES userdetails(Aadhar_Number) ON DELETE CASCADE,  
Chasis_Number int(100) NOT NULL,
foreign key (Chasis_Number) References vehicledetails(Chasis_Number) ON DELETE CASCADE);

desc registrationdetails;


create table Payment(
Payment_ID int(100) unique,
Payment_method varchar(100) NOT NULL,
Payment_type varchar(100) NOT NULL,
Amount int(100) NOT NULL,
Registration_ID int(100),
Foreign key (Registration_ID) references registrationdetails(Registration_ID) ON DELETE CASCADE);


DELIMITER //

CREATE TRIGGER AgeChk
BEFORE INSERT ON userdetails
FOR EACH ROW 
	BEGIN
		IF ((datediff(CURDATE(),NEW.DOB)) / 365 ) < 18 THEN 
        SIGNAL SQLSTATE '45000'
		SET MESSAGE_TEXT = 'Age of Donor must be above 18';
		END IF;
        
	END//
