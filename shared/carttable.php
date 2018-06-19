<?php


if (isset($_SESSION['cart']))
{
    $calculator = new SqlObjFilter($_SESSION['cart']);

    $order = $calculator->OrderSubTotals();
    $ordertotal  = $fmt->formatCurrency($calculator->OrderTotal(), "KES");

//var_dump($order);
    echo "<table class=\"order\">";

    echo"<tr><bold>" ;
    /*table headings
    foreach ($order[0] as $item => $value) {
        echo "<th>$item</th>";
    }*/
    echo "<th>ID</th>";
    echo "<th>Image</th>";

    echo"<th>Pieces</th>";
    echo"<th>Total</th>";

    /*number of pieces ordered
    foreach ($order[1] as $item => $value)
    {
        echo "<th> $item</th>";
    }*/
    echo '</bold></tr>';

    foreach($order as $item =>$value){

        $price  = $fmt->formatCurrency($value['Price'], "KES");
        $subtotal   = $fmt->formatCurrency($value['SubTotal'], "KES");

        echo"<tr>" ;
        //var_dump($value); var_dump($data)  ;

        echo "<td> $value[ProductID]</td>";
        //echo '<img id=\'largeimg\' src =./assets/'.$value['ImageLink'].'.jpg>';
        echo '<td><img src=./assets/'.$value['ImageLink'] .'.jpg></td>';


        echo "<td> $value[Pieces]</td>";
        echo "<td> $subtotal</td>";

        /*foreach ($value as $data){
            echo " <td>". $data."</td>";

             }*/echo "</tr>";
    }
    echo"<tr>" ;
    echo "<td>Total</td><td>  </td><td> </td>";

    echo "<td> $ordertotal</td>";
    echo "</tr>";
    echo "</table>";
}
else{
    echo"<h3>Your Shopping Cart is empty.</h3>";
}
?>