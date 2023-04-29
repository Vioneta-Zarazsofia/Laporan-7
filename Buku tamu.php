<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
//Create database
$sql = "CREATE DATABASE db_bukutamu";
if (mysqli_query($conn, $sql)){
    echo "Database created successfully..........";
}else{
    echo "Error creating database:".mysqli_error($conn);
}

// Create table buku_tamu
mysqli_select_db($conn, "db_bukutamu");
$sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI TEXT
    )";
if(mysqli_query($conn, $sql)){
    echo "Table Buku Tamu Berhasil Dibuat...";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
