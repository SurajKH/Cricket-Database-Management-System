<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel='stylesheet' type="text/css" href="contact_us.css"> -->
    <!-- <link rel='stylesheet' type="text/css" href="testing.php"> -->
    <link rel='stylesheet' href="contact_us.css">
    <title>CONTACT_US PAGE</title>
  </head>
  <body>
    <h1 style="color: black;text-align: center;padding-top:2rem">CONTACT US</h1>

<?php
//now we are requesting the page with the help of POST REQUEST OVER HERE
  if ($_SERVER['REQUEST_METHOD']=='POST')
  {
    //we are trying to place the data into the same page 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $description=$_POST['desc'];

    $servername="localhost";
    $username="root";
    //$password="root123";
    $password="";
    $database="logincontact";

    //Creating a Connection with MySQL over here

    $connection=mysqli_connect($servername,$username,$password,$database);
    if (!$connection)
    {
        //'.' used to connect more than one statements in php

        die("Sorry failed to connect to mysql: ".mysqli_connect_error());
    }
 //now we have considered entering the details into the database over here
  //$sql="INSERT INTO `logincontacts` (`name`, `email`, `concern`, `date_details`) VALUES ('$name', '$email','$description',current_timestamp())";
  $sql="INSERT INTO `logincontacts` (`name`, `email`, `concern`, `date_details`) VALUES ('$name','$email', '$description', current_timestamp())";
    //Inserting the Values into the table is done over here
$result=mysqli_query($connection,$sql);
if($result)
{
   // echo "The Row is inserted into the table emp_listt which comes under dbcontents database";
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    Success! Your details has been updated successfully!
  </div>';
    echo 'Insertion is Updated Successfully';

}
else{
    echo "Insertion did not happen successfully".mysqli_connect_error();
}

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
    <div class="container" id="containerid" style="color: black;">
        <!-- <h1>Contact Us for your Queries and Concerns</h1> -->
        <form action="/php tutorials/contact_us_page.php" method="post">
            <!-- now we have  considered the getpostphp file and we have posted the result into it -->
           
    <div class="form-group">
    <label for="name" class="udetails" style="color: black;"><strong>Name</strong></label>
    <br>
    <input type="text" name="name" style="color: black;" class="name" id="name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text" style="color: black;"><strong>We'll never share your email with anyone else.</strong></div>
  </div>
  <div class="form-group">
    <label for="email" class="udetails" style="color: black;"><strong>Email address</strong></label>
    <br>
    <input type="email" name="email" class="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text" style="color: black;"><strong>We'll never share your email with anyone else.</strong></div>
    
  </div>
  <!-- <div class="form-group">
    <label for="email">Description</label>
    <input type="email" name="desc" class="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->
  <div class="form-group">
    <label for="desc" class="udetails" style="color: black;"><strong>Description</strong></label>
    <textarea class="form-control" name="desc" id="desc" cols="5" rows="5" style="color: black;"></textarea>
  </div>
  <!-- <div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  <!-- </div> -->
  <br>
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
  </body>
</html>