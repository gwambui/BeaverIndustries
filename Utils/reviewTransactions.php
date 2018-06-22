<?php
//var_dump($_SESSION['user']);

$tba = new TransactionBA();
$rows = $tba->getTransactions();

if(count($rows )> 0){
    echo "<table class='table '>";
    echo "<tr>";
    foreach ($rows[0] as $item => $value) {
        echo "<th>$item</th>";
    }
    echo "</tr>";

    foreach ($rows as $item => $value) {
        echo "<tr>";
        foreach ($value as $field) {
            echo "<td>$field</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
            echo"<b>Total Transactions: ". count($rows). "</b>";
}else
    echo "<p>No orders found</p>"
    ?>


