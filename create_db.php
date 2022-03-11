<?php
   echo "Connection of MySQL along with PHP\n";
   echo "working with mysql database as followed";
echo "<br>";
echo "<br>";
    //steps-->1.MySqli and PDO
    $servername="localhost";
    $username="root";
    //$password="root123";
    $password="";

    //CONNECTION ESTABLISHMENT AND DETECTING THE EXISTENCE OF THE CONNECTION

    $connection=mysqli_connect($servername,$username,$password);
    echo "Connection Establishment between Php and Mysql was successfull!!!";
    echo "<br>";
    //echo $password;
    //Connection Establishment is done over here
    //to display the password on the screen over here
    echo "<br>";
    echo "<br>";
    //echo "the password is $password";
    echo "<br>";
    echo "<br>";
    if (!$connection)
    {
        //'.' used to connect more than one statements in php

        die("Sorry failed to connect to mysql: ".mysqli_connect_error());
    }
    echo "ThankYou";

    echo "<br>";
    echo "<br>";
    echo "<strong>Creation of a database and table in php</strong>";

    
    
    //CREATION OF THE DATABASE
    $sql="CREATE DATABASE dbcontents";
    $result=mysqli_query($connection,$sql);
   //parameters-->connection and the query to be executed over here
    
    echo "<br>";
    echo "<br>";

    if($result)
    {
        echo "The result is ";
        echo var_dump($result);
        echo "<br>";
    }
    else
    {
        echo "Database wasnot created over here!!!!";
    }
?>

