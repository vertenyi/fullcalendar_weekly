1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28

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
 
$sql = "select * from booking ORDER BY id asc";
$result = mysqli_query($conn, $sql);
$book_array = array();
if (mysqli_num_rows($result) > 0) 
{ 
 while($row = mysqli_fetch_assoc($result)){
    $book_array[] = array(
   'id'   => $row["id"],
   'title'   => $row["title"],
   'start'   => $row["start"],
   'end'   => $row["end"]
 );
 }
}
echo json_encode($book_array);
?>