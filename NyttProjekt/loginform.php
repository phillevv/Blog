<!-- Login form -->

<?php 
require_once("db.php");
// Start session
session_start();


//Kontrollerar att användarnamn och lösenord är ok
if(($_POST['username'] && $_POST['password'] && $_POST['password2']) ){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	$sql = "select * from users where name = '".$username."'";
	$rs = mysqli_query($con,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
             header("location:welcome.php");   
		}
		else{
			 header("location:login.php");  
		}
	}
	else{
		echo "Användare finns inte <br> <a href='login.php'>Tillbaka</a>";
	}
    
       
}

if($_POST['password'] !== $_POST['password2']) {
     header("location:login.php");  
}

if(empty($_POST['username'])) {
     header("location:login.php");  
}


if(empty($_POST['password'])) {
     header("location:login.php");  
}

if(empty($_POST['password2'])) {
     header("location:login.php");  
}


// Session
$_SESSION["username"] = $_POST["username"];

?>