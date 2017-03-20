<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Rewadee', 'Kaewsiri', 'rewadee4837@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Sutthiporn', 'Suthamma', 'melody-3699@hotmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Napaporn', 'Napaporn', 'lovelove@hotmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Nipaporn', 'Nipaporn', 'bowii@hotmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Bowii', 'Bowii', 'bowii@hotmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Max', 'Max', 'bowii@hotmail.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Toey', 'Toey', 'bowii@hotmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
