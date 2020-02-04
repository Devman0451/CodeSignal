CREATE PROCEDURE expressionsVerification()
BEGIN
	select * 
        from expressions
        where elt(locate(operation, "+-*/"), a+b, a-b, a*b, a/b) = c;
END