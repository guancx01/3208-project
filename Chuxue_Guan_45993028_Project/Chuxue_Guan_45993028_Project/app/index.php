<?php 
echo "Welcome to car sales!";
// phpinfo();
echo "<br>";
// $redis = new Redis();
// var_dump($redis);
echo "<br>";

$servername = "mysql";
$username = "guan";
$password = "sql123";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Successfully connected to MySQL! <br>";
// echo "Server Info: ". mysqli_get_server_info($conn);
?>

<?php include ('header.php'); ?>
<?php include ('body.php'); ?>
<?php include ('footer.php'); ?>
