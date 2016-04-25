<?php
	require_once('common_mysql.php');
	require_once('../query/q_years.php');

	$result = mysql_query( $q, $connection ) or die(mysql_error()); 
	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print json_encode($rows);
?>
