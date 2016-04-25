<?php
		
	$YEAR = $_REQUEST['year'];

	$q = "SELECT program as type, expense_revenue, sum($YEAR) as total FROM toronto 
WHERE expense_revenue='Expense'
GROUP BY program
ORDER BY total DESC";

	define('QUERY_STATEMENT', $q);

?>