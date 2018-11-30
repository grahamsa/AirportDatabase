CREATE TABLE Airport( 
ID VARCHAR(4), 
Gates INT(3), 
RunwaySpace INT(5), 
International TINYINT(1), 
Available TINYINT(1), 
PRIMARY KEY(ID) );

CREATE TABLE Gate(
Name VARCHAR(4),
Occupied TINYINT(1),
FlightID VARCHAR(6),
AirportID VARCHAR(4),
PRIMARY KEY(Name));

ALTER TABLE Gate
ADD CONSTRAINT
FOREIGN KEY(FlightID) REFERENCES Plane(SerialNumber);

ALTER TABLE Gate
ADD CONSTRAINT
FOREIGN KEY(airportID) REFERENCES Airport(ID);

CREATE TABLE Flight(
FlightID VARCHAR(6),
Desination VARCHAR(4),
Origin VARCHAR(4),
EstArrival TIME,
EstDeparture TIME,
Delay TINYINT(1),
Cancelled TINYINT(1),
Weight INT(6),
Passengers INT(3),
ActualArrival TIME,
ActualDeparture TIME,
FlightDate DATE,
PRIMARY KEY(FlightID)) ;

ALTER TABLE Flight
ADD CONSTRAINT
FOREIGN KEY(FlightID) REFERENCES Plane(SerialNumber);

CREATE TABLE SkyMarshal(
badgeNum INT(6),
Rank INT(1),
Available TINYINT(1),
Location VARCHAR(4), 
PRIMARY KEY(badgeNum));

CREATE TABLE Plane(
SerialNumber VARCHAR(6),
Model VARCHAR(16),
Location VARCHAR(4),
LastMaintenanceDate Date,
NecessaryCrew INT(2),
PassengarCapacity INT(3),
MaxWeightCapacity INT(6),
Serviced TINYINT(1),
PRIMARY KEY(Plane)) ;

CREATE TABLE Employee(
employeeID VARCHAR(6),
FirstName VARCHAR(20),
LastName VARCHAR(20),
Email VARCHAR(35),
Salary INT(7),
Available TINYINT(1),
PhoneNum INT(10),
HireDate DATE,
PRIMARY KEY(employeeID)) ;

CREATE TABLE Pilot(
employeeID VARCHAR(6),
Location VARCHAR(4),
FlightHours INT(6),
PRIMARY KEY(employeeID));

ALTER TABLE Pilot
ADD CONSTRAINT
FOREIGN KEY(employeeID) REFERENCES Employee(employeeID);

CREATE TABLE WorksOn(
FlightID VARCHAR(6),
employeeID VARCHAR(6));

CREATE TABLE Protects(
FlightID VARCHAR(6),
badgeNumb INT(6));


