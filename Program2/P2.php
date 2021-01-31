<html>
        <head>
       <!--<link href="try2.css" rel="stylesheet" type="text/css">-->
    </head>
    <body>        
                <form method="post">
                  <p>Username</p>
                    <input type="text" name="uname" placeholder="Username"><br><br>
                      <p>Password</p>
                    <input type="password" name="pword" placeholder="Password"><br><br>
                    <input id="btn" type="submit" value="Submit">
                 </form>
               
                <?php
                    if(isset($_POST['uname']) && isset($_POST['pword']))
                    {
                        $uname = $_POST['uname'];
                        $pword = $_POST['pword'];
                        
                        if (strcmp($uname,$pword) == 0)
                        {
                            echo "hiiii how are you?";
                            header("Location:P2welcome.php");
                        }
                        else
                        {
                            header("Location:P2fail.php");
                        }
                    }               
                ?>
    </body>
</html>
