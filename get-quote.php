<?php
require_once 'db.php';
//$tag = $_POST['tags'];
$tag = 'love';


$mysqli = new mysqli($host,$user,$pass,$db) or die(mysqli_error(mysqli));
$sql = "SELECT * FROM quotes WHERE tag='$tag' ORDER BY RAND() LIMIT 1";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data);

?>