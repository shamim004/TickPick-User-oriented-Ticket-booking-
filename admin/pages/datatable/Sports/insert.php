<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO sports (sports_name, description, date, ticket_price, image) 
			VALUES (:sports_name, :description, :date, :ticket_price, :image)
		");
		$result = $statement->execute(
			array(
				':sports_name'	=>	$_POST["sports_name"],
				':description'	=>	$_POST["description"],
				':date'			=>	$_POST["date"],
				':ticket_price'	=>	$_POST["ticket_price"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE sports 
			SET sports_name = :sports_name, description = :description, date = :date, ticket_price = :ticket_price, image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':sports_name'	=>	$_POST["sports_name"],
				':description'	=>	$_POST["description"],
				':date'			=>	$_POST["date"],
				':ticket_price'	=>	$_POST["ticket_price"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>