


<html>
<?php
include("shared/header.php");


?>


<!-- Header -->
<?php
include ("shared/navmenu.php");

$NavSelection = "Home";
$subSelection = "Door Locks";
$obj = $pba->GetSubProduct($NavSelection, $subSelection);
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
                        <h2>Interior and Exterior Door Locks</h2>
                        <h3>Beaver values Customer Satisfaction</h3>
                    </header>
                    <?php
                    include("shared/productdisplay.php");
                    ?>
                </section>

            </div>

        </div>
    </div>

</div>
</div>

<?php include("shared/footer.php"); ?>

</body>
</html>

