<?php

	$YEAR = $_REQUEST['year'];
	$TYPE = $_REQUEST['type'];
		
	$q = "SELECT program as type, $YEAR as total FROM toronto 
WHERE expense_revenue='Expense' AND 
category='$TYPE'
ORDER BY total DESC";

	define('QUERY_STATEMENT', $q);

?>