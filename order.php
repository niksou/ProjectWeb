
<h3>Order Details</h3>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>

        </tr>

<?php

$total=0;
$itemCount=0;
$first=false;
for($i=0;$i<6;$i++) {

    $title = ($_POST['hidden_name'.$i]);

    $price = ($_POST['hidden_price' . $i]);

    $quantity = ($_POST['quantity' . $i]);
?>



<?php



    if($quantity>0){
        $shortStr= substr($price,1,-1);
        $flatVal=(float)$shortStr;
        $flatVal=$flatVal*$quantity;
        $totalItem=$flatVal*$quantity;
        $total+=$flatVal;
?>

        <tr>
            <td><?php echo $title; ?></td>
            <td><?php echo $quantity; ?></td>
            <td> <?php echo $price; ?></td>
            <td> <?php echo $totalItem;?></td>
            <td>
        </tr>
<?php


}
    if($i==5){
        echo"Order total : $total";
    }





}







?>
<br>
<br>
<br>
