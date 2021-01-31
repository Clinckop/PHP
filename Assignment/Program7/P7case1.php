<html>
    <body>
        <form method="post">
            <input type="text" name="t1">
            <input type="text" name="t2">
            <input type="text" name="t3">
            <input type="text" name="t4">
            <input type="submit" name="sub" value="submit">    
        </form>
    </body>
</html>
<?php
    if(isset($_POST['sub']))
    {
        $t1 = $_POST['t1'];
        $t2 = $_POST['t2'];
        $t3 = $_POST['t3'];
        $t4 = $_POST['t4'];
        $ray = array($t1,$t2,$t3,$t4);
        echo 'Values before sorting.</br>';
        print_r($ray);
        sort($ray);
        echo'</br>';
        echo 'Values after sorting.</br>';
        foreach($ray as $r)
        {
            echo $r.'</br>';
        }
        print_r($ray);
    }
?>
