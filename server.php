<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "project";

  $user = "";
  $pass = "";
  $errors = array();
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if(isset($_POST['log_user'])){
    $user = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);

    $user_check_query = "SELECT * FROM users WHERE usrname='$user' OR email='$user'";
    $result = mysqli_query($conn,$user_check_query);
    $arr = mysqli_fetch_assoc($result);
    if($arr){
      if($arr['admin'] == '1'){
        header('location: admin_login/dashboard.html');
      }else{
    //  session_start();
        $_SESSION['user'] = $user;
        $_SESSION['success'] = "You are logged in !";
        header('location: index_login.php');
      }
    }else{
      array_push($errors,"Wrong username/password combination");
      //print_r($errors);
    }
  }

  $conn->close();
?>
