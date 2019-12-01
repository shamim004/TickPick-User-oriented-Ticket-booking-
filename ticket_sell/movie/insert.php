<?php
$conn = new mysqli('localhost', 'dizitech_tickpic', 'my]jgme;SjX?', 'dizitech_tickpick');
$date=$_POST['date'];
$showTime=$_POST['showTime'];
$languages=$_POST['languages'];
$cardName=$_POST['cardName'];
$cardNo=$_POST['cardNo'];
$ex_Date=$_POST['ex_Date'];
$ex_year=$_POST['ex_year'];
$cvv_No=$_POST['cvv_No'];
$sql="INSERT INTO `bookedMovie` (`date`, `venue`, `showtime`, `seatchoose`, `cardNo`, `ex_Date`, `ex_year`, `cvv_No`) VALUES ('$date', '$showTime', '$languages', '$cardName', '$cardNo', '$ex_Date', '$ex_year', '$cvv_No')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>