<html>
    <body>
        <form method="post">
            <h3>Enter 1 to get shortest string length.</h3>
            <h3>Enter 2 to get longest string length.</h3>
            <input type="text" name="in" placeholder="Enter here">
            <input type="submit" name="submit" value="Get">
        </form>
    </body>
</html>
<?php
    $rawdata = [
        ["name"=>"Arjun"],
        ["name"=>"Vyanktesh"],
        ["name"=>"Utsav"],
        ["name"=>"Mahendarshin"],
        ["name"=>"Ambati Raydu"],
        ["name"=>"zeel"]];
    $temp = [
        ["name"=>"default"]];


    if(isset($_POST['in']))
    {
        $in = $_POST['in'];

        switch($in)
        {
            case 1:
                
                foreach ($rawdata as $raw)
                {
                    foreach ($temp as $tech)
                    {
                        $r = strlen($raw["name"]);
                        $t = strlen($tech["name"]);
                        if ( $r < $t )
                        {
                            array_pop($temp);
                            $temp[0]["name"] = $raw["name"];

                        }  
                    }                  
                }
                echo $temp[0]["name"].'<br/>';
                echo strlen($temp[0]["name"]);     
                break;
            
            case 2:
                
                foreach ($rawdata as $raw)
                {
                    foreach ($temp as $tech)
                    {
                        $r = strlen($raw["name"]);
                        $t = strlen($tech["name"]);
                        if ( $r > $t )
                        {
                            array_pop($temp);
                            $temp[0]["name"] = $raw["name"];

                        }  
                    }                  
                }
                echo $temp[0]["name"].'<br/>';
                echo strlen($temp[0]["name"]);     
                break;
        }
    }
?>
