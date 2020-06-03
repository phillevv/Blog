<!-- Visar nya bloggare sida -->

<!doctype html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> </title>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet" type="text/css">

  </head>
  <body>
      
    <?php include('header.php') ?>
<?php 


require_once('db.php');

$sql = "SELECT * FROM content WHERE author = '$_GET[name]' ORDER BY id DESC";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    
    
    while($row = mysqli_fetch_assoc($result)) {

echo ' 
      
        
 <div class="container">

                    
<div class="card">
  <div class="card-header">
    ' . $row['title'] . '
  </div>
  <div class="card-body text-center">
      <div class="col-md-2">
      <img src="'.$row['image'].'" class="card-img rounded-circle" alt="">
    </div>
      <p>' . $row['text'] . '</p>
    <blockquote class="blockquote mb-0">

      <footer class="blockquote-footer text-center"> '. $row['author'] . '<cite title="Source Title"></cite> </footer>
    </blockquote>
      
      <small class="text-muted " > <p class="text-right"> <br> ' . $row['time'] . '<br> ' . $row['date'] .  '</p> </small>

  </div>
</div>
  </div>


     
        
        <br>
        
        ';
        
     
    }
} else {
    echo 
     '<p> Inga inlägg ännu </p>
        '
        ; 
}


?>
      
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>




