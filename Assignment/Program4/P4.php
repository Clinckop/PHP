<?php
    //index array
    $products1 = ['notebook','pen','pencil','eraser'];
    
    //assosiative indside index array
    $products = [
        ['content' => 'notebook',],
        ['content' => 'pen'],
        ['content' => 'pencil'],
        ['content' => 'eraser']
    ];
    //echo $product['content'];
?>
<html>
    <body>
        
        <h1>Index Array</h1>
        <?php for($i=0;$i<count($products1);$i++) { ?>
            <?php echo $products1[$i].','; ?>
        <?php } ?>
        <br/>
        <ul>
            <?php for($i=0;$i<count($products1);$i++) { ?>
                <li><?php echo $products1[$i]; ?></li>
            <?php } ?>
        </ul>
        
        <br/>
        <br/>
        
        <h2>Assosiative array indside index array</h2>
        <?php foreach($products as $product) { ?>
            <?php echo $product['content'].','; ?>
        <?php } ?>
        <br/>
        <ul>
            <?php foreach($products as $product) { ?>
            <li><?php echo $product['content']; ?></li>
            <?php } ?>
        </ul>
        
    </body>
</html>

