<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST["sort_info"])){
  $asc_or_desc = ($_POST["sort_info"] == 'ASC') ? 'DESC' : 'ASC';
  $output = "";
  $query = "SELECT * FROM users ORDER BY name ". $asc_or_desc;
  $result = mysqli_query($conn,$query);
  $output .="
    <table class=\"table table-striped table-hover table-boarded\">
      <thead>
        <tr>
          <th><a id=\"name_sort\" class=\"". $asc_or_desc ."\" >Name <i class=\"fa fa-sort\"></i></a> </th>
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
$conn->close();
?>
