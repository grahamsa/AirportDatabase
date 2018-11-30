-- View 1: All Available Marshals-- 
Create View AvailalbeMarshals AS
Select BadgeNum, Rank, Location
From SkyMarshal
Where Available = 1;

-- View 2: All Today's Flights(Today is 2018/11/27)-- 
Create View TodaysFlights AS
Select FlightID, EstDeparture, Delay, Cancelled, Origin, Desination
From Flight
Where FlightDate = '2018-11-27';

-- View 3: AirportInfo-- 
Create View AirportInfo AS
Select ID, Gates, RunwaySpace, International, Available 
From Airport;

-- View 4: All Available Employees --
Create View AvailableEmployees AS
Select EmployeeID, FirstName, LastName, PhoneNum, Email
From Employee
Where Available = 1;

-- View 5: All Serviced Planes-- 
Create View ServicedPlanes AS
Select SerialNumber, Model, Location, NecessaryCrew, PassengarCapacity, MaxWeightCapacity
From Plane
Where Serviced = 1;

-- View 6: Occupied Gates--
Create View OccupiedGates AS
Select Name, FlightID, AirportID
From Gate
Where Occupied = 1;


