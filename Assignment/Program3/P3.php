<html>
    <body>
        <form method="post">
            <center>
            <h3>
                Employee
            </h3>
            <table border="1">
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" placeholder="Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Birthdate:
                    </td>
                    <td>
                        <input type="date" name="bdate" placeholder="Birthdate Date">
                    </td>
                </tr>
                <tr>
                    <td>
                        Joining Date:
                    </td>
                    <td>
                        <input type="date" name="jodate" placeholder="Joining Date">
                    </td>
                </tr>
                <tr>
                    <td>
                        Salary:
                    </td>
                    <td>
                        <input type="number" name="salary" placeholder="Salary">
                    </td>
                </tr>
                <tr>
                    <td>
                        Designation
                    </td>
                    <td>
                        <input type="text" name="designation" placeholder="Designation">
                    </td>
                </tr>
                <tr>
                    <td>
                        Area of interest:
                    </td>
                    <td>
                        <input type="text" name="aofi" placeholder="Area of interest">
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact Number:
                    </td>
                    <td>
                        <input type="number" name="cono" placeholder="Contact Number">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
            </center>
        </form>
        <!--<script>
            function letsgo() 
            {
                
            }
        </script>-->
    </body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['bdate']) && isset($_POST['jodate']) && isset($_POST['salary']) && isset($_POST['designation']) && isset($_POST['aofi']) && isset($_POST['cono']))
    {

        
        session_start();
        $_SESSION['name'] = $_POST['name']; 
        $_SESSION['bdate'] = $_POST['bdate'];
        $_SESSION['jodate'] = $_POST['jodate'];
        $_SESSION['salary'] = $_POST['salary'];
        $_SESSION['designation'] = $_POST['designation'];
        $_SESSION['aofi'] = $_POST['aofi'];
        $_SESSION['cono'] = $_POST['cono'];
        
        function submit()
        { 
            header("Location:P3output.php");        
        }
        if(array_key_exists('submit', $_POST)) { 
            submit(); 
        } 
         
    }
?>
