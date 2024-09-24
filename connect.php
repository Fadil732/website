
<?php
$Email = $_POST['Email'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Password = $_POST['Password'];
$DateOfBirth = $_POST['DateOfBirth'];
$Gender = $_POST['Gender'];
 
include db_connect.php;

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Email,FisrtName,LastName,Password,DateOfBirth,Gender)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssis,$Email,$FisrtName,$LastName,$Password,$DateOfBirth,$Gender");
    $stmt->execute();
    echo "registration successfull";
    
    $conn->close();
}
 

$conn->close();

<?php



// Retrieve form data



// SQL query to insert data into database



// Close connection


?>