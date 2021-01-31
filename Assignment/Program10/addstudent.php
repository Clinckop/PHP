<html>
  <body>
      <form method="post">
        <input type="text" name="stuname" placeholder="name"></br>
        <input type="text" name="e_mail" placeholder="email"></br></br>
        <input type="submit" name="add" value="insert">&nbsp;&nbsp;
        <input type="submit" name="home" value="home">
      </form>
  </body>
</html>
<?php
  if(isset($_POST['home']))
  {
    header("Location:P10.php");
  }
  if(isset($_POST['add']))
  {
    $host="localhost";
    $username="root";
    $userpass="";
    $dbname="student";
    $conn = mysqli_connect($host,$username,$userpass,$dbname);
    if(!$conn)
    {
      echo "Connectionn failed.".mysqli_error();
    }
    else
    {
      echo "Connection successfully established.";
    }

    //defining variables
    $stuname=$_POST['stuname'];
    $email=$_POST['e_mail'];

    $sql = "insert into studetails(name,email_id)values('".$stuname."','".$email."')";
    if($conn->query($sql)==TRUE)
    {
      echo "Data successfully inserted".$sql;
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
  }
?>
