<?php



header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin", "*");
header("Access-Control-Allow-Credentials", "true");
header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers");

$con = new mysqli("localhost","root","","bruj");

if($con->connect_error){
    die("Connection failed ".$con->connect_error );
 
  }
else
{
    echo"connection successfull";
    
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$number =$_POST['number'];
$email = $_POST['email'];
$city = $_POST['city'];
$area =$_POST['area'];
$date =$_POST['date'];
$messages =$_POST['message'];

$to = "webtechnoyd@gmail.com,yugchandak1@gmail.com,sonidhanesh007@gmail.com";
$subject = "Interior Query";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>$fname $lname </p>
<p>Number : $number </p>
<p>City : $city </p>
<p>Area : $area </p>
<p>Date To Start : $date </p>
<p>To do  : $messages </p>
<p>Email : $email </p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// // More headers
$headers .= 'From: <'.$email.'>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

echo "email successfull ";
die;







$sql = "INSERT INTO contact VALUES('','$fname','$lname','$number','$email','$city','$area' ,'$date','$messages')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
    // header("Location: localhost:8080/");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }



// if ($con->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }


header("Location:  http://localhost:8080/#/contact");



?>