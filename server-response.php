<?php

$table = 'user_time';
 
// Table's primary key
$primaryKey = 'rid';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array(
    array( 'db' => 'date', 'dt' => 0 ),
    array( 'db' => 'whours',  'dt' => 1 )
	);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'attendance',
    'host' => 'localhost'
);
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
  
require( 'ssp.class.php' );

if(isset($_REQUEST['usid'])){
	
	$user_id = $_REQUEST['usid'];
	
	echo json_encode(
		SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, "id_user='$user_id'", null )
	);
}

?>