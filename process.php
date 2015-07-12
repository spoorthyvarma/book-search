 <?php include 'database.php'; ?>
 
<?php

// create a variable
/*$servername = "localhost";
$bookname="bookname";
$author="author";

//Execute the query
 


$sql = "SELECT bookname, FROM ";
$result = $conn->query($sql);

if ($resuiflt->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: "$row["bookname"]. " " . $row["authornamr"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


if(mysqli_affected_rows($connect) > 0){
echo "<p>book</p>";
echo "<a href="orgina.html">Go Back</a>";
} else {
echo "Book not available<br />";
echo mysqli_error ($connect);
} */


$servername = "localhost";
$username = "username";
//$password = "password";
//$dbname = "myDB";

// Create connection
$conn = new mysqli($servername,$username);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT bookname, authorname  FROM shop1";
$sql = "SELECT bookname, authorname  FROM shop2";
$sql = "SELECT bookname, authorname  FROM shop3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["bookname"]. " - Name: " . $row["authorname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>