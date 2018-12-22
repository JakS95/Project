<?php

// Server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$output = '';
if(isset($_POST["search_text"])){
  $search = mysqli_real_escape_string($conn,$_POST["search_text"]);
  $query = "SELECT name,author,genre,date,ISBN FROM books WHERE name LIKE '%$search%' ORDER BY name ASC";
}else{
  $query = "SELECT name,author,genre,date,ISBN FROM books ORDER BY name ASC";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
  $output .='
  <table class="table table-striped table-hover table-boarded">
    <thead>
      <tr>
        <th><a id="title_sort" class="ASC" >Title <i class="fa fa-sort-asc"></i></a> </th>
        <th>Author</th>
        <th>Release date</th>
        <th>Genre</th>
        <th>ISBN</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
  while($row = mysqli_fetch_array($result)){
    $output .='
      <tr>
        <td>'. $row["name"]. '</td><td>'. $row["author"]. '</td><td>'. $row["genre"]. '</td><td>'. $row["date"]. '</td><td>'. $row["ISBN"]. '</td><td>'.
        '<a id="view" class="'. $row["ISBN"]. '" title="View" type="button" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>'.
        '<a id="edit" class="'. $row["ISBN"]. '" title="Edit" type="button" data-toggle="tooltip" href="#"> <i class="fa fa-edit"></i></a>'.
        '<a id="delete" class="'. $row["ISBN"]. '" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>'.
        '</td>
      </tr>';
  }
  $output .='
    </tbody>
  </table>';
  echo $output;
}else{
  echo 'Data not found';
}

$conn->close();

?>
