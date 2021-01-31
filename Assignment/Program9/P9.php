<html>
    <body>
        <form method="post">
            <input type="number" name="oneone" placeholder="1,1">
            <input type="number" name="onetwo" placeholder="1,2">
            <input type="number" name="onethree" placeholder="1,3"></br>
            <input type="number" name="twoone" placeholder="2,1">
            <input type="number" name="twotwo" placeholder="2,2">
            <input type="number" name="twothree" placeholder="2,3"></br>
            <input type="number" name="threeone" placeholder="3,1">
            <input type="number" name="threetwo" placeholder="3,2">
            <input type="number" name="threethree" placeholder="3,3">
            <input type="submit" name="insert" value="insert">
        </form>
    </body>
</html>
<?php
    session_start();
    if(isset($_POST["insert"])){

        $data = array (
            array($_POST["oneone"],$_POST["onetwo"],$_POST["onethree"]),
            array($_POST["twoone"],$_POST["twotwo"],$_POST["twothree"]),
            array($_POST["threeone"],$_POST["threetwo"],$_POST["threethree"]),
        );
        $_SESSION['data'] = $data;
        header("location:P9search.php");
    }
?>
