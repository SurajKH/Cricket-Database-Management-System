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
    $database="dbcontents";
    //CONNECTION ESTABLISHMENT AND DETECTING THE EXISTENCE OF THE CONNECTION

    $connection=mysqli_connect($servername,$username,$password,$database);
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

    //$sql="USE  projectdocs";
    //Creation of the my_sql_table in php is done over here
    $sql="CREATE TABLE `emp_list` ( `id` INT NOT NULL , `name` VARCHAR(10) NOT 
    NULL , `desig` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`))";
    $result=mysqli_query($connection,$sql);

    if($result)
    {
        echo "The Table was Created Successfully";
    }
    else{
        echo "The table was not created successfully".mysqli_error($connection);
    }

 ?>   