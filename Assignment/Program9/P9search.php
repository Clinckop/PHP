<?php
  session_start();
  $show = $_SESSION['data'];
    echo $show[0][0].",".$show[0][1].",".$show[0][2]."</br>";
    echo $show[1][0].",".$show[1][1].",".$show[1][2]."</br>";
    echo $show[2][0].",".$show[2][1].",".$show[2][2]."</br>";

    $fvalue = "";
    if(isset($_POST["submit"])){
        $search = $_POST['search'];
        for ($x = 0; $x <= 2; $x++)
        {
            for($y = 0; $y <= 2; $y++)
            {
                if($search == $show[$x][$y])
                {
                    $fvalue = "Element position is = ".$x ." And column = ".$y;
                    break;
                }
            }
        }
        if($fvalue == "")
        {
            $fvalue = "number not found";
        }
    }
    if(isset($_POST["back"])){
        header("location:P9.php");
    }
?>
<html>
  <body>
      <form method="post">
        <input type="number" name="search" placeholder="Number">
        <input type="submit" name="submit" value="search">
        <input type="submit" name="back" value="back">
      </form>
      <lable><?php echo $fvalue;?></lable>
  </body>
</html>
