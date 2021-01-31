<?php
  $host="localhost";
  $username="root";
  $userpass="";
  $dbname="employee_info";
  $conn = mysqli_connect($host,$username,$userpass,$dbname);

  if(!$conn) {
    echo "Connection failed.".mysqli_error();
  }
  else {
    echo "Connection successfully established.";
  }
?>
