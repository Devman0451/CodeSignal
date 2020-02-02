CREATE PROCEDURE testCheck()
    SELECT id, IF ( given_answer IS NULL, "no answer", IF ( STRCMP(correct_answer, given_answer) = 0, "correct", "incorrect") ) AS checks
    FROM answers
    ORDER BY id;
