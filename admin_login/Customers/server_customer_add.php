<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if(!empty($_POST)){
    $output = "";
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $usrname = mysqli_real_escape_string($conn,$_POST['usrname']);
    $paswrd = mysqli_real_escape_string($conn,$_POST['paswrd']);
    $password = md5($paswrd);
    $query = "INSERT INTO users (name,email,usrname,paswrd)
    VALUES('$name','$email','$usrname','$paswrd')";
    if(mysqli_query($conn,$query)){
      if(isset($_POST['search_input'])){
        $search = mysqli_real_escape_string($conn,$_POST["search_input"]);
        $query = "SELECT * FROM users WHERE name LIKE '%". $search ."%' ORDER BY name ASC";
      }
      else{
        $query = "SELECT * FROM users ORDER BY name ASC";
      }
      $result = mysqli_query($conn,$query);
      $output .="
        <table class=\"table table-striped table-hover table-boarded\">
          <thead>
            <tr>
              <th><a id=\"name_sort\" class=\"ASC\" >Name <i class=\"fa fa-sort-asc\"></i></a> </th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
      ";
      while($row = mysqli_fetch_array($result)){
        if($row['admin'] != '1'){
        $output .= "
          <tbody>
            <tr>
              <td>". $row["name"]. "</td><td>". $row["email"]. "</td><td>". $row["usrname"]. "</td><td>". $row["paswrd"]. "</td><td>".
              "<a id=\"view\" class=\"". $row["paswrd"]. "\" title=\"View\" type=\"button\" data-toggle=\"tooltip\" href=\"#\"> <i class=\"fa fa-eye\"></i></a>".
              "<a id=\"edit\" class=\"". $row["paswrd"]. "\" title=\"Edit\" type=\"button\" data-toggle=\"tooltip\" href=\"#\"> <i class=\"fa fa-edit\"></i></a>".
              "<a id=\"delete\" class=\"". $row["paswrd"]. "\" title=\"Delete\" data-toggle=\"tooltip\" href=\"#\"> <i class=\"fa fa-trash\"></i></a>".
              "</td>
            </tr>
          </tbody>";//ovaj tbody treba sklonit odavde

      }}
      $output .="</table>";
    }
    echo $output;
  }

  $conn->close();
?>
