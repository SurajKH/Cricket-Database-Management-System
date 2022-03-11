<!-- Selecting and displaying the data onto the webpage -->
<!-- we have linked an css file as well to the present page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Player Details</title>
     <link rel='stylesheet' href="select_styles.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cricket Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/login-page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/login_page.php">Player_Grade_Classification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/display_player_details.php">Player_details</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/php tutorials/Team_Details.php">Team_details</a>
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/contact_us_page.php">Contact Us</a> -->
      <!-- </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/bowling_grade_playerA.php">Grade A Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/bowling_grade_playerB.php">Grade B Players</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php tutorials/bowling_grade_playerC.php">Grade C Players</a>
      </li>
      </div>
</nav>
    <h1 style="padding: 1rem">Player Details</h1>
    <div class="table_class">
   <table class="table table-hover table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <!-- <th scope="col">Player_name</th>
      <th scope="col">Player_id</th>
      <th scope="col">Team</th>
      <th scope="col">Date-of-Birth</th>
      <th scope="col">Player-Details</th> -->
      <!-- <th scope="col">Handle</th> -->
    </tr>
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

      
  //   $row1['player_name']="PLAYER NAME";
  //   $row1['player_id']="PLAYER ID";
  //   $row1['team_details']="TEAM";
  //   $row1['date_of_birth']="DATE OF BIRTH";
  //   $row1['Ratings']="RATINGS";


  //   echo '<tr>';
  //   echo '<td>'.$row1['player_name'].'</td>';
  //   echo '<td>'.$row1['player_id'].'</td>';
  //   echo '<td>'.$row1['team_details'].'</td>';
  //   echo '<td>'.$row1['date_of_birth'].'</td>';
  //   echo '<td>'.$row1['Ratings'].'<td>';
  //  // echo '<td>'.$row['name'].'</td>';
  //   echo '<tr>';

    //SELECT QUERIES
    $sql="SELECT * from `bowler_details`";
    //we are trying to render the information on to the screen
    $result=mysqli_query($connection,$sql);
   //$num=mysqli_num_rows($result);
  
    //now we have to consider the number of rows over here
    //if($num>0)
   // {
       
        while($row=mysqli_fetch_assoc($result))
        {
             // $row=mysqli_fetch_assoc($result);
             //we have considered the details inside the html file over here 
             echo '<tr>';
             echo '<td>'.$row['player_name'].'</td>';
             echo '<td>'.$row['player_id'].'</td>';
             echo '<td>'.$row['team_details'].'</td>';
             echo '<td>'.$row['date_of_birth'].'</td>';
             echo '<td>'.$row['Ratings'].'<td>';
            // echo '<td>'.$row['name'].'</td>';
             echo '<tr>';
        }

?>
    <?php
//now we are requesting the page with the help of POST REQUEST OVER HERE
  if ($_SERVER['REQUEST_METHOD']=='POST')
  {
    //we are trying to place the data into the same page 
    $playername=$_POST['pname'];
    $playerid=$_POST['pid'];
    $team=$_POST['team'];
    //$dateofbirth=$_POST['dob'];
    $rating=$_POST['rating'];
    $dateofbirth=$_POST['date_of_birth'];

    $servername="localhost";
    $username="root";
    //$password="root123";
    $password="";
    $database="bowler_details";

    //Creating a Connection with MySQL over here

    $connection=mysqli_connect($servername,$username,$password,$database);
    if (!$connection)
    {
        //'.' used to connect more than one statements in php

        die("Sorry failed to connect to mysql: ".mysqli_connect_error());
    }
 //now we have considered entering the details into the database over here
  //$sql="INSERT INTO `logincontacts` (`name`, `email`, `concern`, `date_details`) VALUES ('$name', '$email','$description',current_timestamp())";
  // 
  $sql="INSERT INTO `bowler_details`(`player_name`,`player_id`,`team_details`,`date_of_birth`,`Ratings`) VALUES ('$playername','$playerid', '$team','$dateofbirth','$rating')";
    //Inserting the Values into the table is done over here
$result=mysqli_query($connection,$sql);
if($result)
{
   // echo "The Row is inserted into the table emp_listt which comes under dbcontents database";
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Insertion has been updated Successfully!!!!
  </div>';
    echo 'Insertion is Updated Successfully';

}
// else{
//     echo "Insertion did not happen successfully".mysqli_connect_error();
// }

  }
  //submit it to the database with the help of insert statements over here
    //steps-->1.MySqli and PDO
//     $servername="localhost";
//     $username="root";
//     //$password="root123";
//     $password="";
//     $database="logincontact";

//     //Creating a Connection with MySQL over here

//     $connection=mysqli_connect($servername,$username,$password,$database);
//     if (!$connection)
//     {
//         //'.' used to connect more than one statements in php

//         die("Sorry failed to connect to mysql: ".mysqli_connect_error());
//     }
//  //now we have considered entering the details into the database over here
//   //$sql="INSERT INTO `logincontacts` (`name`, `email`, `concern`, `date_details`) VALUES ('$name', '$email','$description',current_timestamp())";
//   $sql="INSERT INTO `logincontacts` (`name`, `email`, `concern`, `date_details`) VALUES (`$name`,`$email`, `$description`, current_timestamp())";
//     //Inserting the Values into the table is done over here
// $result=mysqli_query($connection,$sql);
// if($result)
// {
//     // echo "The Row is inserted into the table emp_listt which comes under dbcontents database";
// //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
// //     <strong>Success!</strong> Your email '.$name.' and password '.$email.' has been updated successfully!
// //   </div>';
//     echo 'Insertion is Updated Successfully';
// }
// else{
//     echo "Insertion did not happen successfully".mysqli_connect_error();
// }

?>
  <div class="container">
        <!-- <h1>Contact Us for your Queries and Concerns</h1> -->
        <form action="/php tutorials/display_player_details.php" method="post">

           
    <div class="form-group">
    <label for="name" style="color:green"><strong>Player Name</strong></label>
      <!-- <p style="color:blue">
        <strong>Player Name</strong></label>
</p> -->
    <br>
    <input type="text" name="pname" class="name" id="name" aria-describedby="emailHelp">
     <br>
  </div>
  <div class="form-group">
    <label for="name" style="color:green;"><strong>Player Id<strong></label>
    <br>
    <input type="text" name="pid" class="name" id="name" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="name" style="color:green"><strong>Team<strong></label>
    <br>
    <input type="text" name="team" class="name" id="name" aria-describedby="emailHelp">

  </div>
  <!-- <div class="form-group">
    <label for="name">Date of birth</label>
    <input type="date" name="dob" class="dob" id="name" aria-describedby="emailHelp"> -->

    <div class="form-group">
    <label for="name" style="color:green"><strong>Date_of_birth</strong></label>
    <br>
    <input type="text" name="date_of_birth" class="name" id="name" aria-describedby="emailHelp">
     <br>
  </div>

  <div class="form-group">
    <br>
    <label for="name" style="color:green"><strong>Ratings</strong></label>
    <br>
    <input type="number" name="rating" class="name" id="name" aria-describedby="emailHelp">
     <br>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </thead>
</table>
      </div>
</body>
</html>

