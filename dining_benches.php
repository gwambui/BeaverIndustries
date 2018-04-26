

<html>
<?php
include("shared/header.php");


?>


<!-- Header -->
<?php
include ("shared/navmenu.php");

$NavSelection = "Dining";
$subSelection = "Benches";
$obj = $pba->GetSubProduct($NavSelection, $subSelection);
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

                <div>
                    <img src=".\assets\Images\DiningSets\Umbro1418.jpg"
                </div>
            </section>

        </div>
        <div class="main">

            <!-- Box #2 -->
            <section>
                <header>
                    <h2>Dining Room Benches</h2>
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



