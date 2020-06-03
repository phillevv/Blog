<!-- Visar mina egna inlägg med sessiner -->

<?php 

require_once('db.php');

$sql = "SELECT * FROM content WHERE author = '$_SESSION[username]' ORDER BY id DESC";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {

echo '  



    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="card mb-" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/nedladdning.png" class="card-img" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">'.$row['author'].'</h5>
        <p id="card-text">'.$row['text'].'</p>
        <p class="card-text"><small class="text-muted">'.$row['time'].'<br>'.$row['date'].'</small></p>
            <form id="myForm" action="getdata.php" method="GET">
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