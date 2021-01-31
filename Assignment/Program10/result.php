<html>
  <body>
      <form method="post">
        <select name="op1">
            <option disabled selected>-- Select City --</option>
              <?php
                echo "hiiii";
                $host="localhost";  //establishing early connection because of using php code in html section
                $username="root";
                $userpass="";
                $dbname="student";
                $conn=mysqli_connect($hsot,$username,$userpass,$dbname);


                $records = mysqli_query($conn, "SELECT name FROM studetails");  // Use select query here

                while ($data = mysqli_fetch_array($records))
                {
                  echo "<option value='". $data['name'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                }

                $name=$_POST['op1'];
                $result="SELECT * FROM studetails WHERE name='".$name."'";
                $allrecords=mysqli_query($conn,$result);
                while ($data = mysqli_fetch_array($allrecords))
                {
                  $sname = $data['name'];
                  $mail = $data['email_id'];
                  $j = $data['js'];
                  $p = $data['python'];
                  $b = $data['blender'];
                }


              ?>


        </select>
        </br>
        </br>
        <input type="submit" name="submit" value="show">&nbsp;&nbsp;
        <input type="submit" name="home" value="home">
        <?php
          if(isset($_POST['home']))
          {
            header("Location:P10.php");
          }
        ?>
        <?php if(isset($_POST['submit'])){ ?>
        </form>
        <table align="center" border="1">
          <th colspan="2">Marksheet</th>
          <tr>
            <td>
              Student name
            </td>
            <td>
                <?php print_r($sname); ?>
            </td>
          </tr>

          <tr>
            <td>
              Email ID
            </td>
            <td>
                <?php print_r($mail); ?>
            </td>
          </tr>

          <tr>
            <td>
              JS marks
            </td>
            <td>
                <?php print_r($j) ?>
            </td>
          </tr>

          <tr>
            <td>
              Python marks
            </td>
            <td>
                <?php print_r($p) ?>
            </td>
          </tr>

          <tr>
            <td>
              Blender marks
            </td>
            <td>
                <?php print_r($b) ?>
            </td>
          </tr>

          <tr>
            <td>
              Total marks
            </td>
            <td>
                <?php print_r($b+$p+$j); ?>
            </td>
          </tr>

          <tr>
            <td>
              Percentage
            </td>
            <td>
                <?php
                  $per = (($b+$p+$j)*100)/300;
                  print_r($per);
                ?>
            </td>
          </tr>

          <tr>
            <td>
              Grade
            </td>
            <td>
                <?php
                    if($per > 85){
                      echo "First Destinction";
                    }
                    elseif($per > 70 && $per < 85)
                    {
                      echo "First class";
                    }
                    elseif ($per > 60 && $per < 69) {
                      echo "Second class";
                    }
                    elseif ($per > 50 && $per < 59) {
                      echo "Pass class";
                    }
                 ?>
            </td>
          </tr>
        </table>
      <?php } ?>
  </body>
</html>
<?php

?>
