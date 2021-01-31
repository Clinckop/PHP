<?php
    session_start();
    $product = $_SESSION["alldata"];
    $id = $product['product_id'];
    $name = $product['product_name'];
    $pckdate = $product['pack_date'];
    $expdate = $product['expiry_date'];
    $quality_Of_Product = $product['quality_Of_Product'];
    $current_date = date("Y/m/d");
    $product_expire_date=ceil(abs(strtotime($current_date)-strtotime($pckdate))/86400);
    $sub_struct_month = ($product_expire_date / 30);
    $sub_struct_month = floor($sub_struct_month);
    if($sub_struct_month<=3)
    {
        $qtyprod='good quality';
    }
    else if($sub_struct_month>=4)
    {
        $qtyprod='average quality';
    }
    else if($sub_struct_month>=5)
    {
        $qtyprod='poor quality';
    }
    else if($sub_struct_month>=6)
    {
        $qtyprod='unused quality';
    }
    if(isset($_POST['home'])){
        header("Location:P8.php" );
    }
?>
<html>
<body>
    <form method="post">
        <table class="table" >
            <thead>
            <tr>
                <th scope="col">Product Id :- </th>
                <th scope="col" > <input type="text" name="product_id" readonly value = "<?php echo $id; ?>"/> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="col">Product Name :- </th>
                <th> <input type="text" name="product_name" readonly value = "<?php echo $name; ?>"/> </th>
            </tr>
            <tr>
                <th scope="row">Packing Date :- </th>
                <td><input type="Date" name="pack_date" readonly value = "<?php echo $pckdate; ?>"></td>
            </tr>
            <tr>
                <th scope="row">Expiry Date :- </th>
                <td><input type="Date" name="expiry_date" readonly value = "<?php echo $expdate; ?>"></td>
            </tr>
            <tr>
                <th scope="row">Quality Of Product :- </th>
                <td><input type="text" name="Quality_Of_Product" readonly value = "<?php echo $qtyprod; ?>"/></td>
            </tr>
            <tr>
              <td>
                <input type="submit" id="submit" name="home" value="home"/>  </th>
              </td>
            </tr>

            </tbody>
        </table>
    </form>
</div>
</body>
</html>
