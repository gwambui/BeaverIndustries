<?php
include("shared/header.php");


?>


<!-- Header -->
<?php
include ("shared/navmenu.php");

$NavSelection = "Dining";
$subSelection = "Dining Sets";
$obj = $pba->GetSubProduct($NavSelection, $subSelection);
?>



<!-- Content -->
<div id="content-wrapper">
    <div id="content">


        <div class="sidebar">

            <!-- Box #1 -->
            <section>
                <header>
                    <h2>Dining sets</h2>
                    <h3>side bar sub heading</h3>
                </header>

                <div>
                    <img src=".\assets\Images\DiningSets\Athna1412.jpg"
                </div>
            </section>

        </div>
        <div class="main">

            <!-- Box #2 -->
            <section>
                <header>
                    <h2>Dining Sets</h2>
                    <h3>A touch of intimacy and comfort at evey meal</h3>
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


