<?php
$servername = "localhost";
$username = "root";
$password = "akash";
$dbname = "kuttart";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE users
SET username='".$_POST["Name"]."',city= '".$_POST["City"]."',address='".$_POST["Address"]."',country='".$_POST["Country"]."',password='".$_POST["psw"]."',pin='".$_POST["Pin"]."'
WHERE email = '".$_POST["email"]."'"; 

    // use exec() because no results are returned
    $conn->exec($sql);
    header('Location: user.php');
    exit;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 