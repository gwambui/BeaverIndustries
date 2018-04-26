<?php
include("shared/header.php");


?>


<!-- Header -->
<?php

$NavSelection = "Babysbedroom";
include ("shared/navmenu.php");

/*
 * retrieve item details as sidebar options
 */
$itemLookup = $pba->GetDetails($NavSelection);
/*
 * retrieve main section items from DB
 */
$obj = $pba->GetMainProduct($NavSelection);
?>



<!-- Content -->
<div id="content-wrapper">
    <div id="content">


        <div class="sidebar">

            <!-- Box #1 -->
            <section>
                <header>
                    <h2> Filter</h2>
                    <h3>side bar sub heading</h3>
                </header>

                <?php
                include("shared/sidebar.php");
                ?>
            </section>

        </div>
        <div class="main">

            <!-- Box #2 -->
            <section>
                <header>
                    <h2>Baby's Room Furniture</h2>
                    <h3>Beaver values Customer Satisfaction</h3>
                </header>
                <?php
                include("shared/productdisplay.php");
                ?>

            </section>

        </div>
    </div>
    <div class ="clr"></div>
</div>


<?php include("shared/footer.php"); ?>

</body>
</html>

