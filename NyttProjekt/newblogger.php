<!-- Visar nya bloggare på första sidan -->

<?php 

require_once('db.php');

$sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    
    
    while($row = mysqli_fetch_assoc($result)) {

echo ' 
        

        <div id="index" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-8 font-weight-normal">Ny medlem</h1>
     <h3>'.$row['name'].'</h3>
            <form id="myForm" action="getdatanewblogger.php" method="GET">
                 <input type="hidden" name="name" value='.$row["name"].'>
         <button type="submit" class="btn btn-link">Gå till sida</button>
         </form>
  </div>

  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
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
 