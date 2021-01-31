<html>
  <body>
    <form method="post">
      <table>
        <tr>
          <td>
            <label>Designing</label>
          </td>
          <td>
            <label>Status</label>
          </td>
          <td>
            <select name="designing">
              <option value="finished">finished</option>
              <option value="pending">pending</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Implementation</label>
          </td>
          <td>
            <label>Status</label>
          </td>
          <td>
            <select name="implementation">
              <option value="finished">finished</option>
              <option value="pending">pending</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label>Reporting</label>
          </td>
          <td>
            <label>Status</label>
          </td>
          <td>
            <select name="reporting">
              <option value="finished">finished</option>
              <option value="pending">pending</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            Date
          </td>
          <td colspan="2">
            <input type="date" name="date1">
          </td>
        </tr>
        <tr>
          <td colspan="4">
            <center><input type="submit" name="submit" value="submit"></center>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
<?php
  if(isset($_POST['submit']))
  {
    session_start();
    include("P12connection.php");
    $design=$_POST['designing'];
    $imple=$_POST['implementation'];
    $report=$_POST['reporting'];
    $date=$_POST['date1'];
    echo $design,$imple,$report;

    $allrecords="SELECT * FROM empinfo";
    $result=mysqli_query($conn,$allrecords);
    while ($data = mysqli_fetch_array($result))
    {
      $empid=$data['empid'];
    }
    echo $empid."</br>";
    $id=$_SESSION['empid'];
    $name=$_SESSION['name'];
    print_r($id);
    print_r($name);
    $insert = "insert into worklog(eid,name,designing,implementation,reporting,date)values($id,'".$name."','".$design."','".$imple."','".$report."','".$date."')";
    if(mysqli_query($conn,$insert))
    {
      echo "Data inserted successfully.";
    }
    else {
      echo "Data not inserted.";
    }
  }
?>
