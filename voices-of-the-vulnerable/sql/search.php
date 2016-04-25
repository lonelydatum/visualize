<?php
	require_once('common_mysql.php');
	
	$INDIA = $_REQUEST['india'];
	$IRAQ = $_REQUEST['iraq'];
	$MEXICO = $_REQUEST['mexico'];
	$UGANDA = $_REQUEST['uganda'];
	$UKRAINE = $_REQUEST['ukraine'];

	$COUNTRY = $_REQUEST['country'];
	$STATUS_COUNTRY = $_REQUEST['status_country'];
	$STATUS_HOUSEHOLD = $_REQUEST['status_household'];
	
	$countriesSelected = array();
	$countriesSQLappend = "(";
	

	if($INDIA=="true") array_push( $countriesSelected, "india" );	
	if($IRAQ =="true") array_push( $countriesSelected, "iraq" );
	if($MEXICO =="true") array_push( $countriesSelected, "mexico" );	
	if($UGANDA =="true") array_push( $countriesSelected, "uganda" );
	if($UKRAINE =="true") array_push( $countriesSelected, "ukraine" );
		
	for( $i=0; $i<count($countriesSelected); $i++ ){
		$ORappend = "";
		if( $i != 0 ){
			$ORappend = " OR ";
		}
		$countriesSQLappend = $countriesSQLappend . $ORappend. "country='" . $countriesSelected[$i] . "'";
	}
	
	$countriesSQLappend = $countriesSQLappend. ")";
	
	
	$q = "SELECT * FROM allcountries WHERE ".$countriesSQLappend;
	

	$result = mysql_query( $q, $connection ) or die(mysql_error()); 
	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
	    $rows[] = $r;
	}
	print json_encode($rows);	
?>
