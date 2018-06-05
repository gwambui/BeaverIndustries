<?php

include("shared/header.php");

?>

    <!-- Header -->
<?php if(isset($_POST['ClearCart']))
{
session_unset();
session_destroy();
session_write_close();
}

include ("shared/navmenu.php");



/*if(isset($_POST['RemoveItem']))
{
    $obj =  $pba->SingleObject($_POST['RemoveItem']);
    $myarr =$obj[0];
    $removeItem = new SqlObjFilter($myarr);
    $removeItem->RemoveFromCart();

    if(count($_SESSION["cart"])==0){
        session_unset();
        session_destroy();
        session_write_close();
    }

}*/



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
                        echo "<th>ID</th>";
                        echo "<th>Image</th>";
                        echo "<th>Name</th>";
                        echo "<th>Detail</th>";
                        echo "<th>Price</th>";
                        echo"<th>Pieces</th>";
                        echo"<th>&nbsp;</th>";
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
                            echo "<td> $value[LineName]</td>";
                            echo "<td> $value[TypeName]</td>";
                            echo "<td> $price</td>";
                            echo "<td> $value[Pieces]</td>";
                            echo "<td><form  action='' method='post' ><button type='submit' 
                            class=\"css3button\" name='RemoveItem' value=".$value['ProductID']."> 
                            Remove </button></form></td>";
                            echo "<td> $subtotal</td>";

                            /*foreach ($value as $data){
                                echo " <td>". $data."</td>";

                                 }*/echo "</tr>";
                        }
                        echo"<tr>" ;
                            echo "<td>Total</td><td> </td><td> </td><td> </td><td> </td><td> </td><td> </td>";

                            echo "<td> $ordertotal</td>";
                        echo "</tr>";
                    echo "</table>";
                echo "<div class='cartButtons'>
            <form  action='' method='post' > 
        <button type='submit' class=\"css3button\" name='ClearCart' value=".$itemID .">Empty Cart</button></form> ";
                echo "<form  action='checkout.php' method='post' >
        <button type='submit' class=\"css3button\" name='Payment' value=".$itemID .">Check Out</button></form></div> ";
            }
            else{
                echo"<h3>Your Shopping Cart is empty.</h3>";
            }
                ?>

        </section>
    </div>
</div>



<?php include("shared/footer.php"); ?>