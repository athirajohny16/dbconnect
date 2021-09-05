<?php 
$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "skincare";

$conn     = mysqli_connect($server,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    $name =$_POST['name'];
    $brand =$_POST['brand'];
    $suggestedby =$_POST['suggestedby'];
    $fragrance =$_POST['fragrance'];
    $productype =$_POST['productype'];
    $skintype =$_POST['skintype'];
    $notes =$_POST['notes'];

    $sql = "INSERT INTO products(name,brand,suggestedby,fragrance,productype,skintype,notes) 
    VALUES ('$name','$brand','$suggestedby','$fragrance','$productype','$skintype','$notes')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


?>