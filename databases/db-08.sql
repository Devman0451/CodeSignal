CREATE PROCEDURE contestLeaderboard()
BEGIN
	SELECT name FROM leaderboard ORDER BY SCORE DESC LIMIT 3, 5;
END