<!-- Visar en bloggare -->

<?php 

require_once('db.php');

$sql = "SELECT * FROM content LIMIT 1";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {

echo ' 
        

        <div id="index" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-8 font-weight-normal">Populäraste bloggaren </h1>
     <h3>'.$row['author'].'</h3>
            <form id="myForm" action="getdatabloggerloggedin.php" method="GET">
                 <input type="hidden" name="author" value='.$row["author"].'>
         <button type="submit" class="btn btn-link">Gå till sidan</button>
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
 