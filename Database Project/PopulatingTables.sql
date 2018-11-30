 INSERT INTO Airport(ID, Gates, RunwaySpace, International, Available) 
VALUES ('IATA', 21, 10500, 1, 1), 
('KJFK', 42, 14000, 1, 1), 
('MCO', 25, 7000, 0, 1), 
('DEN', 10,17000, 1, 1);

INSERT INTO Gate( Name, Occupied, FlightID, AirportID)
VALUES ('Z16', 1, 'LL7755', 'KJFK'),
('A12', 1 , 'TT4511', 'IATA'),
('B19', 1 , 'JE1515', 'DEN'),
('A14', 1 , 'GG1864', 'IATA'),
('G12', 1, 'QU9835', 'MCO'),
('Z18', 1, 'HO1123', 'KJFK');

INSERT INTO SkyMarshal(badgeNum, Rank, Available, Location)
VALUES (005577, 5, 1, 'KJFK'),
(12321, 6 , 1 , 'DEN'),
(12332, 5, 1, 'DEN'),
(14592, 2 , 0, 'KJFK'),
(15231, 8, 1 , 'IATA'); 

INSERT INTO Employee(employeeID, FirstName, LastName ,Email,Salary ,Available ,PhoneNum ,HireDate) 
VALUES (456111, 'Mason', 'Hemmingway', 'pilotmason@email.mail', 150000, 1, 676111111, '2010-06-1'),
( 123456, 'Charles', 'Wells', 'charleswells@email.mail', 75000, 1, 555555555,'1999-06-23'),
  ( 238761, 'Jason', 'Drew', 'jasondrew@email.mail', 90000, 1, 123575145,'1980-11-30'),
( 120861, 'Shaun', 'Moore', 'shuanmoore@email.mail', 65000, 1, 543777555,'2016-04-01'),
( 789101, 'Anna', 'Williams', 'coolgirl@email.mail', 70000, 1, 678999533,'2004-09-19');

INSERT INTO Pilot(employeeID ,Location ,FlightHours )
VALUES (456111, 'MCO', 1500),
( 238761, 'DEN', 1000),
(123456, 'IATA', 500); 

INSERT INTO Plane(SerialNumber ,Model ,Location ,LastMaintenanceDate ,NecessaryCrew ,PassengarCapacity ,MaxWeightCapacity ,Serviced ) 
VALUES ('TT4511','AirbusA300','IATA','2018-11-01',9,253,90000,1),
( 'LL7755', 'Boeing777', 'KJFK', '2018-11-01', 11, 351, 150000, 1),
( 'GG1864', 'Boeing747', 'IATA', '2018-10-19', 10, 240, 100000, 1),
( 'HO1123', 'Boeing777', 'KJFK', '2018-09-05', 11,  351, 150000, 1),
( 'JE1515', 'Boeing767', 'DEN', '2017-05-17', 12, 280, 125000, 0),
( 'QU9835', 'AirbusA300', 'MCO', '2018-11-01', 9, 253, 90000, 1);

INSERT INTO Flight(FlightID ,Desination ,Origin ,EstArrival ,EstDeparture ,Delay ,Cancelled ,Weight ,Passengers ,ActualArrival ,ActualDeparture, FlightDate )
VALUES ('TT4511','KJFK','IATA','5:00','3:00',1,0,75000,145,'6:00','3:50','2018-11-27')
('LL7755', 'MCO', 'KJFK', '3:30', '12:00', 1, 0, 1250000, 350, '3:30', '12:00', '2018-11-26'), 	
('GG1864', 'DEN', 'IATA', '11:00', '8:00', 1, 0, 70000, 230, '12:34', '9:34', '2018-11-27'),
('HO1123', 'IATA', 'KJFK' , '1:00', '11:00', 0, 0, 120000, 332, '1:03', '11:00', '2018-11-27'),
('QU9835', 'KFJK', 'MCO', '7:40', '6:56', 0, 0, 75000, 150, '7:41', '6:58', '2018-11-26'); 

INSERT INTO WorksOn(FlightID, employeeID)
VALUES ('QU9835', 456111),
('GG1864', 123456),
('GG1864', 120861),
('JE1515', 238761),
('HO1123', 789101); 

INSERT INTO Protects(FlightID, badgeNumb)
VALUES ('TT4511', 15231),
('HO1123', 005577),
('GG1864', 12321),
('HO1123', 14592); 