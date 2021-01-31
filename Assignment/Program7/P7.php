<html>
    <body>
        <form method="post">
            <h3>Enter 1 for array sorting in acsending order.</h3>
            <h3>Enter 2 for counting length of array string.</h3>
            <h3>Enter 3 for reversing the string.</h3>
            <h3>Enter 4 for checking string is palindrome or not.</h3>
            <input type="text" name="choice" placeholder="Enter your choice">
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>
<?php
//Program defination.
//Write a PHP script to implement following function.
//1. Sort of given array in ascending order.
//2. Count length of array string.
//3. Reserved string.
//4. Check whether a passed string is palindrome or not.
//Note that you have to take input from HTML form.

    session_start();
    if(isset($_POST['sub']))
    {
        $c = $_POST['choice'];
        switch($c)
        {
            case 1:
                   header('Location:P7case1.php');
//                    echo "<form method=post>";
//                    for($i=1;$i<6;$i++)
//                    {
//                        echo "<input type=text name=t1 placeholder=text$i />";
//                    }
//                    echo "<input type=submit name=submit placeholder=submit />";
//                    echo "</form>";
//                    $t1 = $_POST['t1'];
//                    $a['axe'] = array();
//                    for($i=0;$i<5;$i++)
//                    {
//                        array_push($a,$t1);
//                    }
//                    print_r($a);

            break;

            case 2:
                    header('Location:P7case2.php');
            break;

            case 3:
                    header('Location:P7case2.php');
            break;

            case 4:
                    header('Location:P7case3.php');
            break;
        }
    }
?>
