<?php
		
	$YEAR = $_REQUEST['year'];

	$q = "SELECT sum( `2009actual` ) AS 2009actual, sum( `2010budget` ) AS 2010budget, sum( `2011outlook` ) AS 2011outlook, sum( `2012outlook` ) AS 2012outlook
FROM `toronto`
WHERE expense_revenue = 'Expense'";

	define('QUERY_STATEMENT', $q);

?>