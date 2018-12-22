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
  $up_or_down = str_replace(array('ASC','DESC'),array('up','down'),$asc_or_desc);
  if(isset($_POST["search_text"])){
    $search = mysqli_real_escape_string($conn, $_POST["search_text"]);
    $query = "SELECT name,author,genre,date,ISBN FROM books WHERE name LIKE '%$search%' ORDER BY name $asc_or_desc";
  }
  else{
    $query = "SELECT name,author,genre,date,ISBN FROM books ORDER BY name $asc_or_desc";
  }
  $output = '';
  $result = mysqli_query($conn, $query);
  $output .='
  <table class="table table-striped table-hover table-boarded">
    <thead>
      <tr>
        <th><a id="title_sort" class="'. $asc_or_desc. '" >Title <i class="fa fa-sort-'. $up_or_down. '"></i></a> </th>
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
}

$conn->close();
?>
