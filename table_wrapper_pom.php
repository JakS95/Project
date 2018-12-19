<table class="table table-striped table-hover table-boarded">
  <thead>
    <tr>
      <th>Name <i class="fa fa-sort"></i> </th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $conn = new mysqli("localhost","root","","project");
      if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
      }
      $user_check_query = "SELECT * FROM users";
      $result = mysqli_query($conn,$user_check_query);
      if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
          if(!($row["admin"] == 1)){
        ?>
        <tr>
          <td><?php echo $row["name"] ?></td>
          <td><?php echo $row["usrname"] ?></td>
          <td><?php echo $row["email"] ?></td>
          <td><?php echo $row["paswrd"] ?></td>
          <td><a id="view" class="<?php echo $row["paswrd"] ?>" title="View" type="button" data-toggle="tooltip" href="#"> <i class="fa fa-eye"></i></a>
          <a id="edit" title="Edit" class="<?php echo $row["paswrd"] ?>" data-toggle="tooltip" type="button" href="#"> <i class="fa fa-edit"></i></a>
          <a id="delete" class="<?php echo $row["paswrd"] ?>" title="Delete" data-toggle="tooltip" href="#"> <i class="fa fa-trash"></i></a>
          </td>
          </tr>
          <?php
          }
        }
      }
      $conn->close();
    ?>
  </tbody>
</table>
