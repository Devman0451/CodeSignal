CREATE PROCEDURE movieDirectors()
BEGIN
    SELECT
        moviesInfo.`director` AS `director`
    FROM
        moviesInfo
    WHERE
        moviesInfo.`year` > 2000
    GROUP BY
        moviesInfo.`director`
    HAVING
        SUM(moviesInfo.`oscars`) > 2;
END