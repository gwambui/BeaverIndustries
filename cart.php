<?php

include("shared/header.php");
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-05-03
 * Time: 1:02 PM
 */

?>


    <!-- Header -->
<?php


include ("shared/navmenu.php");


/*var_dump($_SESSION['cart']);

session_unset();
 session_destroy();
    session_write_close();*/

?>

<div id="content-wrapper">
    <div id="content">
        <section>

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
                        echo "<th>ProductID</th>";
                        echo "<th>Image</th>";
                        echo "<th>Name</th>";
                        echo "<th>Detail</th>";
                        echo "<th>Price</th>";
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
                            $subtotal =$price  = $fmt->formatCurrency($value['SubTotal'], "KES");

                            echo"<tr>" ;
                            //var_dump($value); var_dump($data)  ;

                            echo "<td> $value[ProductID]</td>";
            //echo '<img id=\'largeimg\' src =./assets/'.$value['ImageLink'].'.jpg>';
                            echo '<td><img src=./assets/'.$value['ImageLink'] .'.jpg></td>';
                            echo "<td> $value[LineName]</td>";
                            echo "<td> $value[TypeName]</td>";
                            echo "<td> $price</td>";
                            echo "<td> $value[Pieces]</td>";
                            echo "<td> $subtotal</td>";

                            /*foreach ($value as $data){
                                echo " <td>". $data."</td>";

                                 }*/echo "</tr>";
                        }
                        echo"<tr>" ;
                            echo "<td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";

                            echo "<td> $ordertotal</td>";
                        echo "</tr>";
                    echo "</table>";
                }
                ?>
        </section>
    </div>
</div>

<?php //var_dump($_SESSION['cart']) ;
?>
