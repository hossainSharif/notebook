<?php

$user = "root";
$passs ="27622";
$dbname = "test";
$userName = $_POST["username"];
$passWord = $_POST["pass"];
try{
$conn = new PDO("mysql:host=localhost;dbname=$dbname;",$user,$passs);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into tt values(NULL,'$userName','$passWord')";

$conn->exec($sql);
echo "Record created";
}
catch(PDOException $e){
echo "failed";
}
?>