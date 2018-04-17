<?php

$count = 0;
if (count($obj) > 0)
{

    echo "<table class='table table-striped'>";
    echo "<tr>";

    //var_dump(array($value));
    foreach ($obj as $item => $value) {
        $price  = $fmt->formatCurrency($value['Price'], "KES");
        echo "<td class = 'itemDisplay' > ";
        echo '<div>'; echo '<img src =../beaver/assets/'.$value['ImageLink']; echo '>'; echo '</div>'; echo'<br>';
        echo '<p>'.$value['ProductID']; echo "<br>";
        echo $value['LineName'].' '.$value['TypeName'];echo "<br>";
        echo '<span>'.$price; echo "</span></p><br>";

        echo"</td>";
        $count++;

        if ($count%4 ==0)echo "</tr>";
    }

    echo "</table>";
}?>

