<?php
// connect to the MySQL server
$conn = new mysqli('localhost', 'webserve_master', 'master=true', 'webserve_master');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect failed: '. mysqli_connect_error());
}

// sql query for CREATE TABLE
$sql = "CREATE TABLE `users` (
 `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 `name` VARCHAR(25) NOT NULL,
 `pass` VARCHAR(18) NOT NULL,
 `email` VARCHAR(45),
 `reg_date` TIMESTAMP
 ) CHARACTER SET utf8 COLLATE utf8_general_ci"; 

// Performs the $sql query on the server to create the table
if ($conn->query($sql) === TRUE) {
  echo 'Table "users" successfully created';
}
else {
 echo 'Error: '. $conn->error;
}

// SELECT sql query
$sql = "SELECT `id`, `name`, `pass` FROM `users` LIMIT 2"; 

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br /> id: '. $row['id']. ' - name: '. $row['name']. ' - pass: '. $row['pass'];
  }
}
else {
  echo '0 results';
}

$get = $_GET['get'];            // sets the name in a variable

// SELECT sql query
$sql = "SELECT `id`, `email` FROM `users` WHERE `name`='$get'"; 

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo '<br /> id: '. $row['id']. ' - email: '. $row['email'];
  }
}
else {
  echo '0 results';
}


$conn->close();



foreach(PDO::getAvailableDrivers() as $driver) {
  echo $driver.'<br />';
}
?>
