 <?php
  $server = "localhost";
  $user ="root";
  $pass = "";
  $db = "e-get-coffe"; 
  
  $conn = mysqli_connect($server, $user, $pass, $db);
  if(!$conn){
    echo "Ntibigerayo ".mysqli_error($con);
  }
 ?>