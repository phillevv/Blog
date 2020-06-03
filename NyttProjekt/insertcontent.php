<?php
require_once('db.php');

//För att ladda upp bilder och skicka inlägg till databasen


// Följande definition kan med fördel ligga i en separat config-fil.
$upload_errors = array(
    // http://www.php.net/manual/en/features.file-upload.errors.php
    UPLOAD_ERR_OK          => "Inga fel.",
    UPLOAD_ERR_INI_SIZE    => "Filen är större än den storlek som anges i php.ini (upload_max_filesize).",
    UPLOAD_ERR_FORM_SIZE   => "Filen är större än den största filstorlek som angets i formuläret (MAX_FILE_SIZE).",
    UPLOAD_ERR_PARTIAL     => "Filen blev delvis uppladdad.",
    UPLOAD_ERR_NO_FILE     => "Ingen fil är vald.",
    UPLOAD_ERR_NO_TMP_DIR  => "Ingen temporär katalog finns på webbservern.",
    UPLOAD_ERR_CANT_WRITE  => "Kan inte skriva till disk.",
    UPLOAD_ERR_EXTENSION   => "Filuppladdningen är stoppad av ett tillägg (extension)."
);

// Om formuläret har skickats
if(isset($_POST['submit']))
{
    // Utskrift av $_FILES för att se vad den innehåller, tas bort när scriptet är klart!
    echo "<pre>";
    print_r($_FILES['file_upload']);
    echo "</pre><hr />";

    // Hantera formulärets data
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $upload_dir = "uploads/";
    $target_file = basename($_FILES['file_upload']['name']);

    // Glöm inte att kontrollera om filen redan finns,
    // och bestäm vad som ska hända om den gör det.
    // Använd php-funktionen file_exists() för att kontrollera
    // detta och utför sedan lämplig åtgärd om den finns.

    // Om move_uploaded_file returnerar true så gick uppladdningen bra
    if(move_uploaded_file($tmp_file, $upload_dir . $target_file))
    {
        $message = "Filen har laddats upp.";
    }

    // Något gick fel vid uppladdningen
    else
    {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    }
}


//Använder timezone för att få rätt tid till databasen
date_default_timezone_set("Europe/Stockholm");

$author= $_POST["author"];
$title= $_POST["title"];
$text = $_POST["text"];
$image = $target_file;
$date = date("d-M");
$time = date("H:i:s"); 




$sql = "INSERT INTO content (author, title, text, image ,date, time)
VALUES ('$author', '$title', '$text', 'uploads/$image', '$date', '$time')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cnn);
}


mysqli_close($con);


header("location: mycontent.php");
exit;
?>