<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="form";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("sorry we failed to connect:".mysqli_connect_error());

    }
    else
    {
        //echo"Connection successful ";
    }
    
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $clgname=$_POST['clgname'];

        if($name!="" && $age!="" && $gender!="" && $email!="" && $phone!="" && $clgname!="" )
        {
            $sql="INSERT INTO trip (name,age,gender,email,phone,clg) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$clgname')";
            echo $sql;
            if(mysqli_query($conn,$sql))
            {
                echo " Successfully inserted";

            }
            else
            {
                echo "ERROR: $sql <br> $conn->error";

            }
        }
        else
        {
            echo "please fill the form";
        }    
        $conn->close();
    }    
    
?>
