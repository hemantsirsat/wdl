<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("127.0.0.1", "root", "", "tourism");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = (isset($_POST['name']) ? $_POST['name'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
$interest = (isset($_POST['interest']) ? $_POST['interest'] : '');
$expectations = (isset($_POST['expectations']) ? $_POST['expectations'] : '');
 
// Attempt insert query execution
$sql = "INSERT INTO customer_info (full_name,email,phone,interest,expectations) VALUES ('$first_name', '$email', '$phone', '$interest', '$expectations')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>