


<html>
<?php
include("shared/header.php");


?>


<!-- Header -->
<?php
include ("shared/navmenu.php");

$NavSelection = "Outdoor";
$obj = $pba->GetMainProduct($NavSelection);
?>


<!-- Content -->
<div id="content-wrapper">
    <div id="content">
        <div class="5grid">

            <div class="sidebar 4u">

                <!-- Box #1 -->
                <section>
                    <header>
                        <h2> Filter</h2>
                        <h3>side bar sub heading</h3>
                    </header>

                    <ul class="check-list">
                        <li>options</li>
                        <li>options</li>
                        <li>options</li>
                        <li>options</li>
                    </ul>
                </section>

            </div>
            <div class=" main 4u">

                <!-- Box #2 -->
                <section>
                    <header>
                        <h2>Outdoor Furniture</h2>
                        <h3>Beaver values Customer Satisfaction</h3>
                    </header>
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

                </section>

            </div>

        </div>
    </div>

</div>
</div>

<?php include("shared/footer.php"); ?>

</body>
</html>

