<?php

/*
 * User entered options added to array - $filterOptions
 */
if(!empty($filterOptions)) {
    $filt = new SqlObjFilter($obj);
    $obj = $filt->FilterInput($filterOptions);
}

$count = 0;
if (count($obj) > 0)
{

    echo "<table class='table table-striped'>";
    echo "<tr>";

    //var_dump(array($value));
    foreach ($obj as $item => $value) {
        $itemID = $value['ProductID'];

        $price  = $fmt->formatCurrency($value['Price'], "KES");

        echo "<td  class = 'itemDisplay' > ";
        echo "<form  action='itemdisplay.php' method='post' > 
        <button type='submit' name='ID' value=".$itemID .">
        <a href='itemdisplay.php'   target='_blank'  > ";


        echo '<div>'; echo '<img src =./assets/'.$value['ImageLink'].'.jpg'; echo '>';
        echo '</div>'; echo'<br>';
        echo '<p >'.$value['ProductID'].' <br>';
        echo $value['LineName'].' '.$value['TypeName']."<br>";
        echo '<span >'.$price. "</span></p><br>";

        echo" </a></button></form></td>";
        $count++;

        if ($count%4 ==0)echo "</tr>";
    }

    echo "</table>";
}?>

<!--<input value = '' type='submit'> <input type=\'submit\'  name=\'ID\' value=\''.  $itemID .'\'>-->
<script>
    function itemDisplay($item) {
        let prod = <?php echo $item ?>;

    }



</script>