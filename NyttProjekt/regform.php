<!-- Registrerings formulär -->


<?php 

require_once("db.php");

session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:welcome.php");  
 }  
 if(isset($_POST["username"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]) || ($_POST["password"]) !== ($_POST["password2"]) )  
      {  
            
               header("location:register.php");  
           
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_POST["username"]);  
           $password = mysqli_real_escape_string($con, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO users(name, password) VALUES('$username', '$password')";  
           if(mysqli_query($con, $query))  
           {  
                
                header("location:welcome.php");  
           }  
      }  
 }  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]) || ($_POST["password"]) !== ($_POST["password2"]))  
      {  
            header("location:register.php");  
          
      
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_POST["username"]);  
           $password = mysqli_real_escape_string($con, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE name = '$username'";  
           $result = mysqli_query($con, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          
                          $_SESSION["username"] = $username;  
                          header("location:welcome.php");  
                     }  
                     else  
                     {  
                          header("location:register.php");  
                     }  
                }  
           }  
       
      }  
 }  
 ?>  