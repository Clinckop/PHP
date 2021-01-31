<html>
  <body>
    <form method="post">
      <select name="op1">
        <?php


            $host="localhost";  //establishing early connection because of using php code in html section
            $username="root";
            $userpass="";
            $dbname="student";
            $conn=mysqli_connect($host,$username,$userpass,$dbname);

            $records = mysqli_query($conn, "SELECT name From studetails");  // Use select query here

            while($data = mysqli_fetch_array($records))
            {
                echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
            }
        ?>
      </select></br>
      <input type="number" name="js" placeholder="js"></br>
      <input type="number" name="python" placeholder="python"></br>
      <input type="number" name="blender" placeholder="blender"></br></br>
      <input type="submit" name="insert" value="insert">&nbsp;&nbsp;
      <input type="submit" name="home" value="home">
    </form>
  </body>
</html>
<?php
  if(isset($_POST['home']))
  {
    header("Location:P10.php");
  }

  if(isset($_POST['insert']))
  {


    if(!$conn){
      echo "Connection failed".mysqli_error();
    }
    else {
      echo "Connection successfully established.";
    }

    $js=$_POST['js'];
    $python=$_POST['python'];
    $blender=$_POST['blender'];
    $name=$_POST['op1'];

    $sql = "select name from studetails";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // echo "</br>".$row["name"]."</br>";
    // print_r($name);
    $sql2="UPDATE studetails SET js=$js,python=$python,blender=$blender WHERE name='".$name."'";
    // if($conn->query($sql)==TRUE)
    // {
      // echo "Data successfully inserted";
    // }
    // else
    // {
        // echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    if($conn->query($sql2)==TRUE)
    {
      echo "</br>"."Data successfully inserted";
    }
    else
    {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
  }
?>
