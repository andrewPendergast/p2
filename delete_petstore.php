<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

	$del_pst_id = $_POST['pst_id'];
	require_once('global/connection.php');
	require_once('global/functions.php');
	header("Location: index.php"); //sometimes, redirecting is needed (two trips to server)
	delete_petstore($del_pst_id); 
?>
