/*Please add ; after each select statement*/
CREATE PROCEDURE gradeDistribution()
BEGIN
	SELECT Name, ID FROM Grades
    WHERE Final > (Midterm1 + Midterm2) / 2 AND Final > (Midterm1 / 4) + (Midterm2 / 4) + (Final / 2)
    ORDER BY SUBSTR(name, 1, 3) ASC, id ASC; 
END