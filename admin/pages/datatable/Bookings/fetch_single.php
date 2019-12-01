<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM bookedMovie 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["date"] 	= $row["date"];
		$output["venue"] 	= $row["venue"];
		$output["showtime"] 		= $row["showtime"];
		$output["seatchoose"] 		= $row["seatchoose"];
		$output["cardNo"] = $row["cardNo"];
		$output["ex_Date"] = $row["ex_Date"];
		$output["ex_year"] = $row["ex_year"];
		$output["cvv_No"] = $row["cvv_No"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>