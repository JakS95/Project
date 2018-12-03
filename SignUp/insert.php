<html>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $dbname = "project";
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql="INSERT INTO users (name, email, usrname, paswrd)VALUES('$_POST[name]','$_POST[email]','$_POST[usrname]','$_POST[paswrd]')";
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    ?>
  </body>
</html>
