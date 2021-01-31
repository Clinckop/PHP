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
        echo strrev($str);
    }
?>
