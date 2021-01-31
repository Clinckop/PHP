<html>
  <body>
    <form name="login" method="post">
      <table>
        <tr>
          <td>
            Email
          </td>
          <td>
            <input type="text" name="loginid"></br>
          </td>
        </tr>
        <tr>
          <td>
            Password
          </td>
          <td>
            <input type="password" name="loginpass"></br>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="login" value="login">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
<?php
  if(isset($_POST['login']))
  {
    session_start();
    $loginid=$_POST['loginid'];
    $loginpass=$_POST['loginpass'];
    $sname="";
    $mail="";
    include("P12connection.php");
    $allrecords="SELECT * FROM empinfo WHERE email_id='".$loginid."'";  //fetching id and password from database

    if(mysqli_query($conn,$allrecords)==TRUE)
    {
      echo "</br>Data successfully fetched.";
    }
    else {
      echo "Error".$allrecords."</br>".$conn->error;
    }

    $result=mysqli_query($conn,$allrecords);
    while($data = mysqli_fetch_array($result))
    {
      $_SESSION['empid']=$data['empid'];
      $_SESSION['name']=$data['name'];
      $mail=$data['email_id'];
      $pass=$data['pass'];
    }


    if($loginpass == $pass && $loginid == $mail)  //verifying login id and password
    {
      header("Location:P12worklog.php");
    }
    else {
      echo "Wrong id or password.";
    }


  }
?>
