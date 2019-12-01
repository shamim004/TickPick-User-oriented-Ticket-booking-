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
			INSERT INTO movies (movie_name, description, cast, crew, trailer_link, image) 
			VALUES (:movie_name, :description, :cast, :crew, :trailer_link, :image)
		");
		$result = $statement->execute(
			array(
				':movie_name'	=>	$_POST["movie_name"],
				':description'	=>	$_POST["description"],
				':cast'			=>	$_POST["cast"],
				':crew'			=>	$_POST["crew"],
				':trailer_link'	=>	$_POST["trailer_link"],
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
			"UPDATE movies 
			SET movie_name = :movie_name, description = :description, cast= :cast, crew= :crew, trailer_link= :trailer_link, image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':movie_name'	=>	$_POST["movie_name"],
				':description'	=>	$_POST["description"],
				':cast'			=>	$_POST["cast"],
				':crew'			=>	$_POST["crew"],
				':trailer_link'	=>	$_POST["trailer_link"],
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