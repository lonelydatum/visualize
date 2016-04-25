<?php
		
	$YEAR = $_REQUEST['year'];
	$q = "SELECT category as type, expense_revenue, sum($YEAR) as total FROM toronto 
WHERE expense_revenue='Expense'
GROUP BY category
ORDER BY total DESC";

	define('QUERY_STATEMENT', $q);

?>