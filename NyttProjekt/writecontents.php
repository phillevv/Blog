<!-- Sida för att skriva inlägg -->

<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>

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
      
      <?php include('headerloggedin.php') ?>
      

<div id="products" class="album py-5 bg-light">
    
    <div class="container shadow p-3 mb-5 bg-white rounded">
          <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Skriv inlägg</h1>
</div>
        
             
 
        <form enctype="multipart/form-data"  action="insertcontent.php" method="post" id="writecontent">
  <div class="form-group">
       <label for="exampleFormControlTextarea1" id="underline">Författare</label>
       <div><?php echo  $_SESSION["username"]  ?></div>
      <br>
      <input hidden name="author" type="text" value="<?php echo  $_SESSION["username"]  ?>">
    <label for="exampleFormControlInput1" id="underline">Titel</label>
    <input type="text" class="form-control" id="titel" name="title" required>
    <label for="exampleFormControlTextarea1" id="underline">Skriv inlägg</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="text"></textarea>
  </div>
  <div class="form-group">
    
        <label>Lägg till en bild</label><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
        <input type="file" name="file_upload" /><br><br>
        <input type="submit" name="submit" value="Skriv inlägg" />
  
  </div>
                
                        
 
                              
                    </form>

        
        </div>
        </div>
        
      
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
