<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Confirmation page</title> 
</head> 
  
<body> 
    <center> 
        <?php 
  
        // servername => localhost 
        // username => root 
        // password => empty 
        // database name => Mahesh 
        $conn = mysqli_connect("", "", "", ""); 
          
        // Check connection 
        if($conn === false){ 
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
        } 
          
        $name =  $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$date = $_REQUEST['date'];
		$phone = $_REQUEST['phone'];
		$message = $_REQUEST['message'];
          
      
        $sql = "INSERT INTO hospital  VALUES (NULL,'$name',  
            '$email','$date','$phone','$message')"; 
          
        if(mysqli_query($conn, $sql)){ 
            echo "<h3>Your appointment has been booked successfully.\n" 
                . " For further clarification please refer your email.\n" 
                . " Thank you</h3>";  
  
            echo nl2br("\n$name\n $email\n "
                . "$date\n $phone\n"); 
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        }
        session_start();
        $_SESSION['Name'] = $name;
        $_SESSION['Email'] = $email;

        echo "<h3>To view current appointments-<a href='fetch.php'>click here</a></h3>";
          
        // Close connection 
        mysqli_close($conn); 
        ?> 
    </center> 
</body> 
  
</html> 
