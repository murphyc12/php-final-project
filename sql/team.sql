DROP TABLE players;
DROP TABLE coaches; 

CREATE TABLE players(
playerid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name CHAR(50),
position CHAR(20),
year CHAR(30),
nationality CHAR(30)
);

CREATE TABLE coaches(
coachid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name CHAR(50) NOT NULL,
nationality CHAR(30) NOT NULL
);

CREATE TABLE recruited(
playerid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
recruit text
);


INSERT INTO players VALUES
(1,"Jim Barkei","Goalkeeper", "Red-Shirt Junior", "American"),
(2,"Victor Bjurhall","Defender","Freshman","Swedish"),
(3, "Calvin Murphy","Defender","Junior","Irish"),
(4, "Vladimir Babaew", "Defender" , "Sophomore", "Russian"),
(5, "Felix Komolong", "Defender","Freshman", "Papua New Guinean"),
(6, "Bastian Beckers", "Midfielder", "Junior","German"),
(7, "Alex  Grieve", "Midfielder", "Freshman", "New Zealander"),
(8, "Brett Wilson", "Midfielder", "Graduate Student", "American"),
(9, "Tom Suchecki", "Forward","Junior","American"),
(10, "Rikard Lindqvist","Forward","Sophomore","Swedish"),
(11, "Edoardo Durante" ,"Forward", "Freshman","Italian"),
(12, "TJ Harris", "Defender","Sophomore","American"),
(13, "Christian Carey", "Goalkeeper", "Senior","American"),
(14, "Abdul Kooistra" ,"Defender" , "Red-Shirt Sophomore", "American"),
(15, "Dylan Carss", "Defender", "Senior", "American"),
(17, "Nick Perez", "Midfielder", "Junior", "American"),
(19, "Harvey Moyes", "Midfielder", "Freshman","Scottish"),
(20, "Isaiah Schatz", "Goalkeeper","Freshman","American"),
(21, "Campbell Morris","Midfielder","Senior","American"),
(22, "Liam Evans", "Midfielder","Junior","Burmudian"),
(23, "Rizwaan Dharsey","Forward","Junior","South African");

INSERT INTO coaches VALUES
(1, "Stuart Riddle", "New Zealander"),
(2, "Blair Stevenson", "Scottish"),
(3, "Scott Lamont", "Scottish"),
(4, "Roger Lane", "American");

INSERT INTO recruited VALUES
(1, "Jim transferred to NKU from Loyola Chicago in 2017"),
(2,"Victor was recruited straight out of Stockholm"),
(3,"Calvin Murphy was recruited in 2014 when he was on a trip to New Jersey"),
(4,"Vladimir came to join the norse from his club in Germany"),
(5,"Felix was recommended to us by his older brother Alwin Komolong that graduated from NKU in 2016"),
(6,"Bastian Beckers was recruited in 2013 and came over in the Spring Semester of 2014"),
(7,"Alex made contacted with the coaches from New Zealand and sent them film of his play"),
(8,"Brett Wilson came to NKU after playing his first 3 years at Presbytarian College"),
(9, "Tom transferred to the Norse after one year at Pittsburgh"),
(10,"Rikard transferred to NKU after playing under Coach Riddle at the University of Buffalo"),
(11,"Edo joined us from his youth club in Italy"),
(12,"TJ played for both his highschool and club in Louisville"),
(13,"Christian Carey was brought to NKU from his highschool in Cyntiana"),
(14,"Abdul transferred to NKU from Wisconsin"),
(15,"Dylan Carrs played for his highschool in Harrodsburg"),
(17,"Nick played for Aurora Highschool where he won 4 straight district titles"),
(19,"Harvey Moyes was brought to NKU from his club in Scotland"),
(20,"Isaiah arrived at NKU from his highschool Cedar Springs"),
(21, "Campbell Morris came to NKU in 2013 after being scouted from his highschool Male"),
(22, "Liam was scouted after he played for his National Team"),
(23,"Rizwaan was scouted from Darlington Academy");
