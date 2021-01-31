<html>
  <body>
      <form method="post" style="margin: 0; padding:0;">
        <table border="1" align="center">
          <th colspan="2">Emoplyee</th>
          <tr>
            <td>
              Name
            </td>
            <td>
              <input type="text" name="empname">
            </td>
          </tr>
          <tr>
            <td>
              Designation
            </td>
            <td>
              <input type="text" name="designation">
            </td>
          </tr>
          <tr>
            <td>
              Date of birth
            </td>
            <td>
              <input type="date" name="dob">
            </td>
          </tr>
          <tr>
            <td>
              Salary
            </td>
            <td>
              <input type="number" name="salary">
            </td>
          </tr>
          <tr>
            <td>
              Email
            </td>
            <td>
              <input type="email" name="mail">
            </td>
          </tr>
          <tr>
            <td>
              Password
            </td>
            <td>
              <input type="password" name="pass">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <center><input type="submit" name="register" value="register"></center>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <center><input type="submit" name="home" value="home"></center>
            </td>
          </tr>
        </table>
      </form>
  </body>
</html>
<?php
if(array_key_exists('home',$_POST))
{
  header('Location:P12.php');
}
  if(isset($_POST['register']))
  {
    include("P12connection.php");
    // Copying html field values to variables
    $name=$_POST['empname'];
    $designation=$_POST['designation'];
    $dob=$_POST['dob'];
    $salary=$_POST['salary'];
    $email=$_POST['mail'];
    $pass=$_POST['pass'];
    $insert = "insert into empinfo(name,designation,dob,salary,email_id,pass)values('".$name."',
    '".$designation."','".$dob."',$salary,'".$email."','".$pass."')";
    if(mysqli_query($conn,$insert)==TRUE)
    {
      echo "Data successfully inserted.";
    }
    else {
      echo "Data not inserted.";
    }

  }
?>
