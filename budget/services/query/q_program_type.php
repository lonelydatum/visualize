<?php
	$YEAR = $_REQUEST['year'];
	$TYPE = $_REQUEST['type'];

	$q = "SELECT category as type, $YEAR as total FROM toronto 
WHERE expense_revenue='Expense' AND
program='$TYPE'
ORDER BY total DESC";

	define('QUERY_STATEMENT', $q);

?>


