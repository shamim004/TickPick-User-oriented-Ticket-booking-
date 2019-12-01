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
			INSERT INTO bookedMovie (date, venue, showtime, seatchoose, cardNo, ex_Date, ex_year, cvv_No image) 
			VALUES (:date, :venue, :showtime, :seatchoose, :cardNo, :ex_Date, :ex_year, :cvv_No, :image)
		");
		$result = $statement->execute(
			array(
				':date'	=>	$_POST["date"],
				':venue'	=>	$_POST["venue"],
				':showtime'			=>	$_POST["showtime"],
				':seatchoose'			=>	$_POST["seatchoose"],
				':cardNo'	=>	$_POST["cardNo"],
				':ex_Date'	=>	$_POST["ex_Date"],
				':ex_year'	=>	$_POST["ex_year"],
				':cvv_No'	=>	$_POST["cvv_No"],
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
			"UPDATE bookedMovie 
			SET date = :date, :venue, :showtime, :seatchoose, :cardNo, :ex_Date, :ex_year, :cvv_No, :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':date'	=>	$_POST["date"],
				':venue'	=>	$_POST["venue"],
				':showtime'			=>	$_POST["showtime"],
				':seatchoose'			=>	$_POST["seatchoose"],
				':cardNo'	=>	$_POST["cardNo"],
				':ex_Date'	=>	$_POST["ex_Date"],
				':ex_year'	=>	$_POST["ex_year"],
				':cvv_No'	=>	$_POST["cvv_No"],
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