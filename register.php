<?php 
    
    // $Full_Name = $_POST['Full_name'];
    // $Email = $_POST['Email_Id'];
    // $gender = $_POST['Gender'];
    // $Password = $_POST['Password'];

    // $conn = mysqli_connect("localhost","root","","registerform");
    // $q = "inert into registration value(NULL,'$$Full_Name','$Email','$gender','$Password')";

    // if(!$conn){
    //     die("Connection failed: ".mysqli_connect_error());
    // }
    // echo "Connected successfully";

$servername="localhost";
$username="root";
$password="";
$dbname="registerform";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
        die("Connection failed");
     }
     echo "Connected successfully";

$fullname=$_POST['Full_name'];
$email=$_POST['Email_Id'];
$gender=$_POST['Gender'];
$date=$_POST['Birthday_day'];
$password=$_POST['Password'];
$sql="INSERT INTO `studentdetails` (`sr`, `fullname`, `email`, `gender`, `date`, `password`) VALUES (NULL, '$fullname', '$email', '$gender', '$date', '$password')";
if($conn->query($sql)==true){
    echo "new record added";
}
else{
    echo "error";
}
$conn->close();

?>