<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
/* Code for searching customers */
$output = "";
if(isset($_POST["search_result"])){
  $search = mysqli_real_escape_string($conn,$_POST["search_result"]);
  $query = "SELECT * FROM users WHERE name LIKE '%". $search ."%'";
}
else{
  $query = "SELECT * FROM users";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){ //swap this to the others statements
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
  echo $output;
}
else{
  echo 'Data Not Found';
}

$conn->close();
?>
