<?php
	require_once('common_mysql.php');

$q = "SELECT * FROM toronto WHERE expense_revenue = 'Expense'";
	


	$result = mysql_query( $q, $connection ) or die(mysql_error()); 
	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print json_encode($rows);
?>
