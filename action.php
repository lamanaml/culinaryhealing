<?php  
 session_start();  

if (isset($_SERVER['HTTP_ORIGIN'])) {
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
} 

 
 $connect = mysqli_connect("localhost", "root", "T@b00@r!", "testing");  
 if(isset($_POST["username"]))  
 {  
      $query = "  
      SELECT * FROM admin_login  
      WHERE admin_name = '".$_POST["username"]."'  
      AND admin_password = '".$_POST["password"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $_SESSION['username'] = $_POST['username'];  
           echo 'Yes';  
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);  
 }  
 ?>  

