<?php
function get_all_petstores()
{
	global $db;
	$query = "SELECT * FROM petstore ORDER BY pst_id;";
	try {
		$statement = $db->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;
	}
	catch (PDOException $e) {
		$error=$e->getMessage();
		display_db_error($error);
	}
}

  //get individual petstore
function get_petstore($pst_id) 
{
	global $db;
	$query = "SELECT * FROM petstore WHERE pst_id = :pst_id_p";
	try {
		$statement = $db->prepare($query);
		$statement->bindParam(':pst_id_p', $pst_id);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		//exit(print_r(array_values($result)));
		return $result[0];
	}
	catch (PDOException $e) {
		$error=$e->getMessage();
		display_db_error($error);
	}
}

  //add petstore
function add_petstore($add_pst_name, $add_pst_street, $add_pst_city, $add_pst_state, $add_pst_zip, $add_pst_phone, $add_pst_email, $add_pst_url, $add_pst_sales, $add_pst_note) 
{
	global $db;
	$query = "INSERT INTO petstore(pst_name, pst_street, pst_city, pst_state, pst_zip, pst_phone, pst_email, pst_url, pst_ytd_sales, pst_note) VALUES(:add_pst_name, :add_pst_street, :add_pst_city, :add_pst_state, :add_pst_zip, :add_pst_phone, :add_pst_email,:add_pst_url, :add_pst_sales, :add_pst_note);";
	try {
		$statement= $db->prepare($query);
		$statement->bindParam(':add_pst_name', $add_pst_name);
		$statement->bindParam(':add_pst_street', $add_pst_street);
		$statement->bindParam(':add_pst_city', $add_pst_city);
		$statement->bindParam(':add_pst_state', $add_pst_state);
		$statement->bindParam(':add_pst_zip', $add_pst_zip);
		$statement->bindParam(':add_pst_phone', $add_pst_phone);
		$statement->bindParam(':add_pst_email', $add_pst_email);
		$statement->bindParam(':add_pst_url', $add_pst_url);
		$statement->bindParam(':add_pst_sales', $add_pst_sales);
		$statement->bindParam(':add_pst_note', $add_pst_note);
		//exit($statement);
		$statement->execute();
		
		$statement->closeCursor();
	}
	catch (PDOException $e) {
		$error= $e->getMessage();
		display_db_error($error);
	}
}

  //edit petstore
function edit_petstore($add_pst_id, $add_pst_name, $add_pst_street, $add_pst_city, $add_pst_state, $add_pst_zip, $add_pst_phone, $add_pst_email, $add_pst_url, $add_pst_sales, $add_pst_note) 
{
	global $db;
	try {
		$query = "UPDATE petstore
				SET 
					pst_name = :add_pst_name, 
					pst_street = :add_pst_street, 
					pst_city = :add_pst_city, 
					pst_state = :add_pst_state, 
					pst_zip = :add_pst_zip,
					pst_phone = :add_pst_phone,
					pst_email = :add_pst_email,
					pst_url = :add_pst_url,
					pst_ytd_sales = :add_pst_sales,
					pst_note = :add_pst_note
				WHERE
					pst_id = :add_pst_id;
					";
		$statement= $db->prepare($query);
		$statement->bindParam(':add_pst_name', $add_pst_name);
		$statement->bindParam(':add_pst_street', $add_pst_street);
		$statement->bindParam(':add_pst_city', $add_pst_city);
		$statement->bindParam(':add_pst_state', $add_pst_state);
		$statement->bindParam(':add_pst_zip', $add_pst_zip);
		$statement->bindParam(':add_pst_phone', $add_pst_phone);
		$statement->bindParam(':add_pst_email', $add_pst_email);
		$statement->bindParam(':add_pst_url', $add_pst_url);
		$statement->bindParam(':add_pst_sales', $add_pst_sales);
		$statement->bindParam(':add_pst_note', $add_pst_note);
		$statement->bindParam(':add_pst_id', $add_pst_id);
		$statement->execute();
		
		$statement->closeCursor();
	}
	catch (PDOException $e) {
		$error= $e->getMessage();
		display_db_error($error);
	}	
}

  //delete petstore
function delete_petstore($del_pst_id)
{
	global $db;
	
	$query = "DELETE FROM petstore WHERE pst_id = :del_pst_id;";
	
	try {
		$statement= $db->prepare($query);
		$statement->bindParam(':del_pst_id', $del_pst_id);
		$statement->execute();	
		$statement->closeCursor();
	}
	catch (PDOException $e) {
		$error= $e->getMessage();
		display_db_error($error);
	}
}
?>
