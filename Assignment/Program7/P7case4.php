<html>
    <body>
        <form method="post">
            Enter your text here =
            <input type="text" name="str">
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['sub']))
    {
        $str = $_POST['str'];
//        $len = strlen($str);
//        echo $len;
//        for($i=0;$i<$len;$i++)
//        {
//            echo $str[$i]." i= ".$i;
//        }
        $str_rev = strrev($str);
        if($str == $str_rev)
        {
            echo 'Entered string is palindrome.'.' - '.$str;
        }
        else
        {
            echo 'Entered string isn\'t palidrome'.' - '.$str;
        }
    }
?>
