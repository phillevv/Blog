<!-- Tar bort inlägg -->

<?php
require_once('db.php');


$sql = "DELETE FROM content WHERE id = '$_GET[id]'";

if (mysqli_query($con, $sql)) {
    echo "Record deleted";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}

mysqli_close($con);


header("location: mycontent.php");
exit;
?>