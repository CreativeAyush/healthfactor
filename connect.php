
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="keyboard";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $country=$_POST['country'];
    $sql="INSERT INTO `contact` (`fname`, `lname`, `country`) VALUES ($fname,$lname,$country)";
    if($conn->query($sql)==True)
    {
        echo "new record added";
    }
    else
    {
        echo "error";
    }
    
    $conn->close();
    
    
    
?>