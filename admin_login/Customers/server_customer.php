<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  if(isset($_POST["customer_view"])){

    $output = '';
    $query = "SELECT * FROM users WHERE paswrd = '".$_POST["customer_view"]."'";
    $result = mysqli_query($conn,$query);

    $output .='
    <div class="table-responsive">
       <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result)){
      $output .='
        <tr>
          <td><label>Name</label></td>
          <td><label>'.$row["name"].'</label></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td><label>'.$row["email"].'</label></td>
        </tr>
        <tr>
          <td><label>Username</label></td>
          <td><label>'.$row["usrname"].'</label></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td><label>'.$row["paswrd"].'</label></td>
        </tr>
      ';
    }
    $output .='</table></div>';
    echo $output;
  }

  if(isset($_POST["customer_delete"])){
    $output = "";
    $query = "DELETE FROM users WHERE paswrd = '".$_POST["customer_delete"]."'";
    $result = mysqli_query($conn,$query);
    if($result){
    //  $output_problem ='Problem with deleting:'. mysqli_error($conn);
      //$output .='Customer successfuly deleted';
      //*$output_success = "Customer successfuly deleted !";
      $select_query = "SELECT * FROM users";
      $result = mysqli_query($conn,$select_query);
      $output .="
        <table class=\"table table-striped table-hover table-boarded\">
          <thead>
            <tr>
              <th>Name <i class=\"fa fa-sort\"></i> </th>
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

  if(isset($_POST["customer_edit"])){

    $output = '';
    $query = "SELECT * FROM users WHERE paswrd = '".$_POST["customer_edit"]."'";
    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($result)){
      $output .='
        <label>Customers name</label>
        <textarea name="name" id="name" class="form-control">'.$row['name'].'</textarea><br/>
        <label>Customers email</label>
        <textarea name="email" id="email" class="form-control">'.$row['email'].'</textarea><br/>
        <label>Customers username</label>
        <textarea name="usrname" id="usrname" class="form-control">'.$row['usrname'].'</textarea><br/>
        <label>Customers password</label>
        <textarea name="paswrd" id="paswrd" class="form-control">'.$row['paswrd'].'</textarea><br/>
        <input type="submit" name="edit_text" id="edit_text" value="Submit" class="btn btn-success" />
      ';

    }
    $query = "DELETE FROM users WHERE paswrd = '".$_POST["customer_edit"]."'";
    $result = mysqli_query($conn,$query);
    echo $output;
  }


$conn->close();
?>
