<?php 
header('Content-Type: application/json');
$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1822085';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM Hu";
$r = mysqli_query($conn, $q);

echo "[";
while ($item = mysqli_fetch_object($r)) {
    echo json_encode($item);
}
echo "]";
