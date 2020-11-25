<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Credentials", "true");
header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

$con = new mysqli("localhost","yugdb","yugdhananjay","yugdb");
// $rsdata = json_decode(file_get_contents("php://input"));
// $data = array();

// $x= 79152;
if($con->connect_error){
    die("Connection failed ".$con->connect_error );
 
  }
else
{
    echo"connection successfull";
    
}

$name = $_POST['name'];
$number =$_POST['number'];
$age = $_POST['age'];
$email =$_POST['email'];

$sql = "INSERT INTO home_page VALUES('','$name','$number','$age','$email')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";

  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }



// if ($con->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }


header("Location:http//webtechnoyd.com/");

?>