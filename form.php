<?php
    // Getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }

    // Database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rein";

    // Creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // To ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // Using SQL to create a data entry query
    $sql = "INSERT INTO rein2 (name, email, message) VALUES ('$name', '$email', '$message')";
  
    // Send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entry added successfully!";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
  
    // Close connection
    mysqli_close($con);

    
?>
