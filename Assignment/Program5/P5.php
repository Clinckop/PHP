<html>
    <body>
        <h3>(1)Find average marks.</h3>
        <h3>(2)List out the lowest marks out of 60.</h3>
        <h3>(3)List out the highest marks out of 60.</h3>
        <form method="post">
        <input type="text" name="n" placeholder="Enter you choice">
        <input type="submit" name="submit1" value="submit">
        </form>
    </body>
</html>

<?php
//1.find average marks
//2.List out the lowest marks out of 60
//3.List out the highest marks out of 60
//Recorded Marks: 35,50,55,40,45,33,44,47,49,33,38,41,51,58,59,60,53,52//
    if(isset($_POST['n']))
    {

        $no = $_POST['n'];
        session_start();
        $_SESSION['n'] = $no;

            function submit(){
                header('Location:P5output.php');
            }
            if(array_key_exists('submit1',$_POST))
            {
                submit();
            }

    }
?>
