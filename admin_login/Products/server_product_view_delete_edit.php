<?php

// Server information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["product_view"])){
  $output = '';
  $query = "SELECT * FROM books WHERE ISBN='". $_POST["product_view"]. "'";
  $result = mysqli_query($conn,$query);

  $output .='
  <div class="table-responsive">
     <table class="table table-bordered">
  ';
  while($row = mysqli_fetch_array($result)){
    $output .='
    <tr>
      <td class="w-25"><label>Title</label></td>
      <td class="w-75"><label>'.$row["name"].'</label></td>
    </tr>
    <tr>
      <td><label>Author</label></td>
      <td><label>'.$row["author"].'</label></td>
    </tr>
    <tr>
      <td><label>Genre</label></td>
      <td><label>'.$row["genre"].'</label></td>
    </tr>
    <tr>
      <td><label>Date</label></td>
      <td><label>'.$row["date"].'</label></td>
    </tr>
    <tr>
      <td><label>ISBN</label></td>
      <td><label>'.$row["ISBN"].'</label></td>
    </tr>
    <tr>
      <td><label>Description</label></td>
      <td><label>'.$row["short_descr"].'</label></td>
    </tr>
    ';
  }
  $output .='</table></div>';
  echo $output;
}

if(isset($_POST["product_delete"])){
  $output = '';
  $query = "DELETE FROM books WHERE ISBN='". $_POST["product_delete"]. "'";
  $result = mysqli_query($conn, $query);
  if($result){
    if(isset($_POST["search_text"])){
      $search = mysqli_real_escape_string($conn, $_POST["search_text"]);
      $query = "SELECT name,author,genre,date,ISBN FROM books WHERE name LIKE '%$search%' ORDER BY name ASC";
    }
    else{
      $query = "SELECT name,author,genre,date,ISBN FROM books ORDER BY name ASC";
    }
    $result = mysqli_query($conn, $query);
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
  }
}


if(isset($_POST["product_edit"])){
  $output = '';
  $query = "SELECT * FROM books WHERE ISBN='". $_POST["product_edit"]. "'";
  $result = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($result)){
    $output .='
      <label>Title</label>
      <textarea name="title" id="title" class="form-control">'.$row['name'].'</textarea><br/>
      <label>Author</label>
      <textarea name="author" id="author" class="form-control">'.$row['author'].'</textarea><br/>
      <label>Genre</label>
      <textarea name="genre" id="genre" class="form-control">'.$row['genre'].'</textarea><br/>
      <label>Date</label>
      <textarea name="date" id="date" class="form-control">'.$row['date'].'</textarea><br/>
      <label>ISBN</label>
      <textarea name="ISBN" id="ISBN" class="form-control">'.$row['ISBN'].'</textarea><br/>
      <label>Description</label>
      <textarea name="short_descr" id="short_descr" class="form-control">'.$row['short_descr'].'</textarea><br/>
      <input type="submit" name="edit_text" id="edit_text" value="Submit" class="btn btn-success" />
    ';
  }
  $query = "DELETE FROM books WHERE ISBN='". $_POST["product_edit"]. "'";
  $result = mysqli_query($conn, $query);
  echo $output;

}

$conn->close();

?>
