 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// Create connection
$conn = mysql_connect($servername, $username, $password);


// Check connection
if (!$conn) {
    die('Gagal Koneksi: ' . mysql_error());
}


mysql_select_db("test",$conn) or die("Couldn't select database.");

?> 