<html>
  <body>
      <form method="post">
        <input type="submit" name="student" value="Add student">
        <input type="submit" name="insert" value="Insert details">
        <input type="submit" name="result" value="Get result">
      </form>
  </body>
</html>
<?php
  if(array_key_exists('student',$_POST))
  {
      student();
  }
  elseif (array_key_exists('insert',$_POST)) {
      insert();
  }
  elseif (array_key_exists('result',$_POST)) {
      result();
  }

  function student()                          //Student function
  {
    header('Location:addstudent.php');
  }
  function insert()                          //insert function
  {
    header('Location:insertdetails.php');
  }
  function result()                          //result function
  {
    header('Location:result.php');
  }
?>
