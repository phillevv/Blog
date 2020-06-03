<!-- Visar det 4 senaste inläggen på första sidan -->

<?php 

require_once('db.php');

$sql = "SELECT * FROM content ORDER BY id DESC LIMIT 4";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {

echo '  



    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card mb-" style="max-width: 540px;">
  <div class="row no-gutters">
       <div class="col-md-4">
      <img src="'.$row['image'].'" class="card-img rounded-circle" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'.$row['author'].'</h5>
        <p id="card-text">'.$row['text'].'</p>
        <p class="card-text"><small class="text-muted">'.$row['date'].'</small></p>
            <form id="myForm" action="getdataloggedin.php" method="GET">
                 <input type="hidden" name="id" value='.$row["id"].'>
         <button type="submit" class="btn btn-link">Läs</button>
         </form>
      </div>
    </div>
  </div>
</div>
    </div>
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