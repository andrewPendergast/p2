<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

$add_pst_name = $_POST['name'];
$add_pst_street = $_POST['street'];
$add_pst_city = $_POST['city'];
$add_pst_state = $_POST['state'];
$add_pst_zip = $_POST['zip'];
$add_pst_phone = $_POST['phone'];
$add_pst_email = $_POST['email'];
$add_pst_url = $_POST['url'];
$add_pst_sales = $_POST['sales'];
$add_pst_note = $_POST['note'];
$add_pst_id = $_POST['id'];

$pattern = '/^[\w\-\s]+$/';
$valid_name = preg_match($pattern, $add_pst_name);


$pattern = '/^[a-zA-Z0-9,\s\.]+$/';
$valid_street = preg_match($pattern, $add_pst_street);

$pattern = '/^[a-zA-Z\.\s]+$/';
$valid_city = preg_match($pattern, $add_pst_city);

$pattern = '/^[a-zA-Z]{2,2}+$/';
$valid_state = preg_match($pattern, $add_pst_state);


$pattern = '/^\d{5,9}+$/';
$valid_zip = preg_match($pattern, $add_pst_zip);

$pattern = '/^\d{10}+$/';
$valid_phone = preg_match($pattern, $add_pst_phone);

$pattern = '/^\d{1,8}(?:\.\d{0,2})?$/';
$valid_sales = preg_match($pattern, $add_pst_sales);


if (empty($add_pst_name) || empty($add_pst_street) || empty($add_pst_city) || empty($add_pst_state) || empty($add_pst_zip) || empty($add_pst_phone) || empty($add_pst_email) || empty($add_pst_url) || !isset($add_pst_sales)) {
	$error = "All fields require data, except <strong>notes</strong>.  Check all fields and try again.";
	include('global/error.php');
}
else if (!is_numeric($add_pst_sales) || $add_pst_sales <= 0) {
	$error = "YTD Sales can only contain numbers (other than a decimal point); and must be greater than or equal to zero";
	include('global/error.php');
}
else if ($valid_name === false) {
	echo("Error in pattern!");
}
else if ($valid_name === 0) {
	$error = "Name can only contain letters, numbers, hyphens, and underscore";
	include('global/error.php');
}
else if ($valid_street === false) {
	echo("Error in pattern!");
}
else if ($valid_street === 0) {
	$error = "Street address can only contain letters or numbers";
	include('global/error.php');
}
else if ($valid_city === false) {
	echo("Error in pattern!");
}
else if ($valid_city === 0) {
	$error = "City can only contain letters";
	include('global/error.php');
}
else if ($valid_state === false) {
	echo("Error in pattern!");
}
else if ($valid_state === 0) {
	$error = "State must be 2 characters";
	include('global/error.php');
}
else if ($valid_zip === false) {
	echo("Error in pattern!");
}
else if ($valid_zip === 0) {
	$error = "Zip must contain 5-9 digits, and can only contain numbers";
	include('global/error.php');
}
else if ($valid_phone === false) {
	echo("Error in pattern!");
}
else if ($valid_phone === 0) {
	$error = "Phone must must contain 10 digits, and can only contain numbers";
	include('global/error.php');
}
else if ($valid_sales === false) {
	echo("Error in pattern!");
}
else if ($valid_sales === 0) {
	$error = "YTD Sales can only contain numbers";
	include('global/error.php');
}
else {
	require_once('global/connection.php');
	require_once('global/functions.php');
	edit_petstore($add_pst_id, $add_pst_name, $add_pst_street, $add_pst_city, $add_pst_state, $add_pst_zip, $add_pst_phone, $add_pst_email, $add_pst_url, $add_pst_sales, $add_pst_note);
	header("Location: index.php"); //sometimes, redirecting is needed (two trips to server)
}
?>
