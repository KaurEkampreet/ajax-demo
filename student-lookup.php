<?php

$sid = $_POST['sid'];

//conect to db
require("config-student.php");
try {
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $e) {
    echo $e->getMessage();
    return;
}

// define a query
$sql = "SELECT * FROM student WHERE sid = :sid";
$statement = $dbh->prepare($sql);
$statement->bindParam(':sid', $sid);
$statement->execute();


//get the results
$row = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($row);
if (empty($row)){
    $out = "NO match found";
} else {
    $out = "<p>SID: $sid<br>";
    $out .= "Name: {$row['first']} {$row['last']}<br>";
    $out .= "Birthdate: {$row['birthdate']}<br>";
}
echo $out;