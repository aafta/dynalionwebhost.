<?php
include('database_connection.php');
?>

<?php
if(isset($_POST)){
$name=$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$query="INSERT INTO `formstore`(`name`, `address`, `contact`, `email`) 
VALUES ('$name','$address','$contact','$email')";

if(mysqli_query($conn, $query)){
    header('Location:index.html');
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
mysqli_close($conn);
}
}
?>