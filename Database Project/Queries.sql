-- Query 1 --
Select FlightID 
From Flight
Where Origin = 'KJFK'; --$Airport A--

-- Query 2 --
Select Count(*)
From Protects
Where FlightID = 'HO1123'; --$Fligt F-- 

-- Query 3 --
Select Count(*)
From Flight
Where FlightDate = '2018-11-27'; --$Given Date--

-- Query 4 --
Select ID
From Airport
Where Gates = ( Select Max(Gates) from Airport); 
 
-- Query 5 --
Select Distinct Cancelled
From Flight
Where FlightID = 'LL7755'; --$Flight F-- 

-- Query 6 --
Select Gates
From Airport
Where ID = 'MCO'; --$Airport A--

-- Query 7 --
Select Count(*)
From Airport
Where Available = 1; 

-- Query 8 --
Select NecessaryCrew
From Plane
Where SerialNumber = 'JE1515'; --$Plane P--

-- Query 9 --
Select Gate.Name
From Gate
Where FlightID = 'QU9835' AND Occupied = 1; --$Flight F--

-- Query 10 --
Select Distinct Delay
From Flight
Where FlightID = 'GG1864'; --$Flight F--

-- Query 11 --
Select Employee.FirstName, Employee.LastName
From Employee Inner Join Pilot On Employee.EmployeeID = Pilot.EmployeeID
Where Employee.Available = 1 AND Pilot.FlightHours > 750; --$FlightHours H--

-- Query 12 --
Select Count(*)
From SkyMarshal
Where Available = 1 AND Location = 'KJFK'; --$Airport A--

-- Query 13 --
Select Distinct MaxWeightCapacity
From Plane
Where Model = 'Boeing767'; --$Model M--

-- Query 14 --
Select Distinct PassengarCapacity
From Plane
Where PassengarCapacity = (Select Max(PassengarCapacity) from Plane);

-- Query 15 --
Select Distinct Model
From Plane
Where MaxWeightCapacity = ( Select Max(MaxWeightCapacity) from Plane);

-- Query 16 --
Select Count(*)
From Flight
Where Origin = 'KJFK' AND FlightDate = '2018-11-27'
AND (Delay = '1' OR Cancelled = '1'); --$Airport A--

-- Query 17 --
Select Count(*)
From Plane
Where Serviced = 1 AND Model = 'Boeing777'; --$Model M-- 

-- Query 18 --
Select Employee.FirstName, Employee.LastName, Employee.Email, Employee.PhoneNum
From Employee INNER JOIN WorksOn On Employee.EmployeeID = WorksOn.EmployeeID
Where FlightID = 'GG1864'; --$Flight F-- 

-- Query 19 --
Select Employee.FirstName, Employee.LastName, Pilot.EmployeeID
From Pilot INNER JOIN Employee On Pilot.EmployeeID = Employee.EmployeeID
INNER JOIN WorksOn on WorksOn.EmployeeID = Pilot.EmployeeID 
AND WorksOn.FlightID = 'JE1515'; --$Flight F--

-- Query 20 --
Select Employee.FirstName, Employee.LastName, Pilot.FlightHours
From Pilot INNER JOIN Employee On Pilot.EmployeeID = Employee.EmployeeID
Where Pilot.FlightHours = (Select Max(FlightHours) From Pilot); 