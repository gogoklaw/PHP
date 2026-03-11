<?php
require "connect.php";

//$n = "1" . " or '1=1"
$cid = $_GET["CustomerID"];
$sql = "SELECT * FROM customer where CustomerID = :CustomerID";
$stmt = $conn->prepare($sql);


$stmt->bindParam(':CustomerID', $cid);

$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $stmt->fetch()){
    echo $row['CustomerID'] . '' . $row['Name'] . "<br/>";
}

$conn = null;