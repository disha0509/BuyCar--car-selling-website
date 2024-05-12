<?php

   /* $email= $_POST['email'];
    $password=$_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'login_db');
    if($conn->connect_error){
      die('connection failed : '.$conn->connect_error);
    }else{
      $stmt= $conn->prepare("insert into login_form(email, password) values(?,?)");
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
      echo "registration successfull";
      $stmt->close();
      $conn->close();
    }*/
   $conn = mysqli_connect('localhost', 'root', '', 'login_db');

   if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
   

   $request = "insert into login_form(email, password) values('$email', '$password')";


   mysqli_query($conn, $request);
   echo 'successfully logged in';

   }
   else {
    echo 'something went wrong try again';
   }

  /* $con = mysqli_connect('localhost', 'root', '', 'login_db');

   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = " INSERT INTO 'login_form' ('email','password') VALUES ('$email', '$password') ";
   $rs = mysqli_query($con, $sql);

   if($rs)
   {
    echo "successfully logged in";
   }
   else{
    echo "something went wrong";
   }*/
 /*if(isset($_POST['submit']));
{
   $email = $_POST['email'];
   $password = $_POST['password'];
}

$con = mysqli_connect('localhost', 'root', '', 'login_db');

   $sql = " INSERT INTO 'login_form' ('email','password') VALUES ('$email', '$password') ";
   $rs = mysqli_query($con, $sql);

   if($rs)
   {
    echo "successfully logged in";
   }
   else{
    echo "something went wrong";
}
*/

?>