<!--En sidomeny för att visa alla bloggare som finns registrerade -->


<?php 

require_once('db.php');

$sql = "SELECT name FROM users";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {

echo ' 
        <div id="aside">
            <form id="myForm" action="gotoblogger.php" method="GET">
            
                 <input type="hidden" name="author" value='.$row['name'].'>
         <button type="submit" class="btn btn-link">'.$row['name'].'</button>
         </form>
      </div>
  
              
        ';
        
     
    }
} else {
    echo 
     '<p> Inga inlägg ännu </p>
        '
        ; 
}



?>
 