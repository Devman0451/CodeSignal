CREATE PROCEDURE suspectsInvestigation()
BEGIN
	SELECT id, name, surname FROM Suspect
    WHERE height <= 170 AND surname LIKE 'Gre_n' AND name LIKE 'b%'
    ORDER BY id;
END