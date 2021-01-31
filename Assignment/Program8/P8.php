<html>
    <body>
        <form method="post">
          <table>
            <tr>
              <td>
                Product id
              </td>
              <td>
                <input type="text" name="pid" placeholder="Product id">
              </td>
            </tr>
            <tr>
              <td>
                Product name
              </td>
              <td>
                <input type="text" name="pname" placeholder="Product name">
              </td>
            </tr>
            <tr>
              <td>
                Packing date
              </td>
              <td>
                <input type="date" name="pckdate" placeholder="Packing date">
              </td>
            </tr>
            <tr>
              <td>
                Expiry date
              </td>
              <td>
                <input type="date" name="expdate" placeholder="Packing date">
              </td>
            </tr>
          </table>
          <input type="submit" name="submit" value="insert">
        </form>
    </body>
</html>

<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $pid = $_POST['pid'];
        $pname = $_POST['pname'];
        $pckdate = $_POST['pckdate'];
        $expdate = $_POST['expdate'];

        $data = array('product_id'=>$pid,'product_name'=>$pname,'pack_date'=>$pckdate,'expiry_date'=>$expdate,'quality_Of_Product' =>"error"); //inserting into array

        $_SESSION['alldata'] = $data;
        header('location:P8output.php');
    }
?>
