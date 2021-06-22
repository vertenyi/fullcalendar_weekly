
<?php
$hostname="localhost";
$username="";
$password="";
$dbname="";
 
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 
$sql = "INSERT INTO booking (title, start, end)  VALUES('".$_POST['title']."','".$_POST['start']."','".$_POST['end']."')";
if (mysqli_query($conn, $sql)) {
    echo "success";
} else {
    echo "error";
}
 
mysqli_close($conn);
 
?>