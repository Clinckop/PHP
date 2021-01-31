<html>
    <body>
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
                        <?php 
                            session_start();
                            echo $_SESSION['name']; 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Birthdate:
                    </td>
                    <td>
                        <?php 
                            echo $_SESSION['bdate'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Joining Date:
                    </td>
                    <td>
                        <?php 
                            echo $_SESSION['jodate'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Salary:
                    </td>
                    <td>
                        <?php 
                            echo $_SESSION['salary'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Designation
                    </td>
                    <td>
                        <?php
                            echo $_SESSION['designation'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Area of interest:
                    </td>
                    <td>
                        <?php 
                            echo $_SESSION['aofi'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact Number:
                    </td>
                    <td>
                        <?php 
                            echo $_SESSION['cono'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <a href="P3.php">
                             <input type="submit" name="gback" value="Go back">
                        </a>
                    </td>
                </tr>
            </table>
            </center>
    </body>
</html>
