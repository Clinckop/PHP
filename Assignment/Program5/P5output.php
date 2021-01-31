<?php
session_start();
$rawdata = [35,50,55,40,45,33,44,47,49,33,38,41,51,58,59,60,53,52];
$opdata =0;      
    switch($_SESSION['n'])
    {
        case 1:
            foreach ($rawdata as $raw)
            {
                $opdata = $raw + $opdata;
                
            }
            $avg = $opdata / count($rawdata);
            echo 'Sum is = '.$opdata.'<br/>';
            echo 'Average is = '.$avg;
        break;
            
        case 2:
            foreach ($rawdata as $raw)
            {
                if ($raw < 60)
                {
                    echo $raw.'&nbsp;,&nbsp;';
                }
            }
        break;
            
        case 3:
            foreach ($rawdata as $raw)
            {
                if($raw >= 60)
                {
                    echo $raw;
                }
            }
        break;
    }
?>
