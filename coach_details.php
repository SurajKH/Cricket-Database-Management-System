<!-- Selecting and displaying the data onto the webpage -->
<!-- we have linked an css file as well to the present page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Coach Details</title>
     <link rel='stylesheet' href="select_styles.css">
</head>
<body>
        <h2 style="padding-top:2rem;padding-bottom:2rem;color: black;text-align: center">Coach Details</h2>
    <div class="table_class">
   <table class="table table-hover table-dark">
       <h2 style="padding-bottom: 2rem;padding-top: 2rem;color: black;text-align: center">Batting Coach Details</h2>
  <thead>
    <!--  <tr>
       <th scope="col">#</th> 
      <th scope="col">Player_name</th>
    - <th scope="col">Player_id</th>
      <th scope="col">Team</th>
      <th scope="col">Date-of-Birth</th>
      <th scope="col">Rating</th>
      <th scope="col">Batting-Coach</th>
       <th scope="col">Handle</th> 
    </tr>  -->
 
    <?php
   //STEP 1:ESTABLISHMENT OF CONNECTION IS DONE OVER HERE
    //steps-->1.MySqli and PDO
    $servername="localhost";
    $username="root";
    $password="";
    $database="testing_table_val";
    $connection=mysqli_connect($servername,$username,$password,$database);
    //Connection is Established over here
    //Truthness of the established connection
    if (!$connection)
    {
        //'.' used to connect more than one statements in php

        die("Sorry failed to connect to mysql: ".mysqli_connect_error());
    }
    else
    {
      //now connection gets established over here
      //  echo "Connection is Established!!!!";
    }


    //SELECT QUERIES
    $sql="SELECT * from `batting_coach`";
    //$sql2="SELECT pname,team,date_of_birth,age,coach_name from `testing_val`,`batting_coach` where pid=coach_id and age>1850 limit 1";
    //we are trying to render the information on to the screen
    $result=mysqli_query($connection,$sql);
    //$result1=mysqli_query($connection,$sql2);
   //$num=mysqli_num_rows($result);
  
    //now we have to consider the number of rows over here
    //if($num>0)
   // {
       
        while($row=mysqli_fetch_assoc($result))
        {
             // $row=mysqli_fetch_assoc($result);
             //we have considered the details inside the html file over here 
             echo '<tr>';
             echo '<td>'.$row['coach_id'].'</td>';
             //echo '<td>'.$row['pid'].'</td>';
             echo '<td>'.$row['team_details'].'</td>';
             echo '<td>'.$row['coach_name'].'</td>';
             echo '<td>'.$row['contract'].'<td>';
             echo '<td>'.$row['salary'].'</td>';
             echo '<tr>';
             //echo '<br>';
        }
?>
<!-- 
trail -->
</thead>
</table>
</div>

<!-- table 2 -->
<div class="table_class">
   <table class="table table-hover table-dark">
       <h2 style="padding-bottom: 2rem;padding-top: 2rem;color: black;text-align: center"">Bowling Coach Details</h2>
  <thead>
    <!--  <tr>
       <th scope="col">#</th> 
      <th scope="col">Player_name</th>
    - <th scope="col">Player_id</th>
      <th scope="col">Team</th>
      <th scope="col">Date-of-Birth</th>
      <th scope="col">Rating</th>
      <th scope="col">Batting-Coach</th>
       <th scope="col">Handle</th> 
    </tr>  -->
 
    <?php
   //STEP 1:ESTABLISHMENT OF CONNECTION IS DONE OVER HERE
    //steps-->1.MySqli and PDO
    $servername="localhost";
    $username="root";
    $password="";
    $database="testing_table_val";
    $connection=mysqli_connect($servername,$username,$password,$database);
    //Connection is Established over here
    //Truthness of the established connection
    if (!$connection)
    {
        //'.' used to connect more than one statements in php

        die("Sorry failed to connect to mysql: ".mysqli_connect_error());
    }
    else
    {
      //now connection gets established over here
      //  echo "Connection is Established!!!!";
    }


    //SELECT QUERIES
    $sql="SELECT * from `bowling_coach`";
    //$sql2="SELECT pname,team,date_of_birth,age,coach_name from `testing_val`,`batting_coach` where pid=coach_id and age>1850 limit 1";
    //we are trying to render the information on to the screen
    $result=mysqli_query($connection,$sql);
    //$result1=mysqli_query($connection,$sql2);
   //$num=mysqli_num_rows($result);
  
    //now we have to consider the number of rows over here
    //if($num>0)
   // {
       
        while($row=mysqli_fetch_assoc($result))
        {
             // $row=mysqli_fetch_assoc($result);
             //we have considered the details inside the html file over here 
             echo '<tr>';
             echo '<td>'.$row['coach_id'].'</td>';
             //echo '<td>'.$row['pid'].'</td>';
             echo '<td>'.$row['team'].'</td>';
             echo '<td>'.$row['coach_name'].'</td>';
             echo '<td>'.$row['contract'].'<td>';
             echo '<td>'.$row['salary'].'</td>';
             echo '<tr>';
             //echo '<br>';
        }
?>
<!-- 
trail -->
</thead>
</table>
</div>
 </body>
</html>