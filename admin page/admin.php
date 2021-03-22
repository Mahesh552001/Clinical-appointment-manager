<?php 
  

$user = ''; 
$password = '';  
  

$database = '';  
  

$servername=''; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  

if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  

$sql = "DELETE FROM hospital LIMIT 1"; 
$result = $mysqli->query($sql);  

$sql = "ALTER TABLE `hospital` DROP `No.`"; 
$result = $mysqli->query($sql); 

$sql = "ALTER TABLE  `hospital` ADD `No.` INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST"; 
$result = $mysqli->query($sql); 
echo "<h3>Done</h3>";
 

$mysqli->close();
?> 
