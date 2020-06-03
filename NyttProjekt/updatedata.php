<!-- Uppdaterar inlägg -->

<?php
require_once('db.php');


//Sätter tidzonen
date_default_timezone_set("Europe/Stockholm");

$author= $_POST["author"];
$title= $_POST["title"];
$text = $_POST["text"];
$date = date("d-M");
$time = date("H:i:s");




$sql = "UPDATE content SET title = '$title', text = '$text', date = '$date', time = '$time'  WHERE id = '$_POST[id]' ";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}

mysqli_close($con);


header("location: mycontent.php");
exit;
?>