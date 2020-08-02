<?php

include 'product.php';

$rowInsert=0;
$x=0;
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";




?>


<form method="POST" action="cart.php" >
<div class="container">

    <?php
    foreach ($guns as $key){

        if($rowInsert==3||$rowInsert==0)
            echo "<div class=\"row\">";

        echo " <div class=\"col-lg-4 col-md-4 col-sm-12\">
            <div class=\"item\">
                <div class=\"item-img\">

                        <img src=\"{$key['Img']}\"></a>
                </div>
                <div class=\"info\">
                    <div class=\"item-id\">
                        <p>{$key['Name']}</p>
                    </div>
                    <div class=\"price\">{$key['Price']}$</div>
                    <div class=\"description\">
                        {$key['Description']}
                    </div>
                    <input type=\"text\" name=\"quantity$x\" value=\"0\" class=\"form-control\" />

						<input type=\"hidden\" name=\"hidden_name$x\" value=\" {$key['Name']}\" />

						<input type=\"hidden\" name=\"hidden_price$x\" value=\"  {$key['Price']} \" />
						
						
						
						
                        <!-- <button class=\"btn btn-dark button1\" onclick=\"displayCart($rowInsert)\">Add to cart</button>-->
                </div>
            </div>
        </div>";
        $rowInsert++;
        $x++;
    }



    ?>

</div>
    <input type="submit" value="Add to cart" />
</form>
<br>
<br>


