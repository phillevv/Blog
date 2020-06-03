<!-- Registrerings formulär -->

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
    
      
  <div id="products" class="album py-5 bg-light">
    
    <div class="container shadow p-3 mb-5 bg-white rounded">
        


<div id="Reg" class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Registrera</h1>
  <p class="lead">Har du ett konto? Logga in <a href="login.php">här</a></p>
</div>
      <form id="myForm" method="post" action="regform.php" onsubmit="validateForm();">
  <div class="form-group">
    <label for="username">Användarnamn</label>
    <input type="username" class="form-control" id="username" aria-describedby="username" name="username" value="<?php '$_SESSION[username]' ?>">
    <small id="emailHelp" class="form-text text-muted">Dina uppgifter är alltid privata</small>
  </div>
  <div class="form-group">
    <label for="password1">Lösenord</label>
    <input type="password" class="form-control" id="password1" name="password">
  </div>
  <div class="form-group">
    <label for="password2">Upprepa Lösenord</label>
    <input type="password" class="form-control" id="password2" name="password2">
  </div>
  <button type="submit" class="btn btn-primary">Registrera</button>
             
</form>
        
        
    
        
        </div>
        </div>

      
    <!-- Validerings Script -->
<script src="javascript/valideringreg.js"></script>
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    </body>
</html>
