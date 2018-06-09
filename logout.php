<?php



include("shared/header.php");
unset($_SESSION['user']);
include ("shared/navmenu.php");


?>
<div id="content-wrapper">
    <div id="content">
        <section>
            <div class=" login col-12">
                <p style="text-align:center">You have successfully logged out <br>Thank you for visiting Beaver Industries!</p>
                <p style="text-align:center"><a href="login.php"> Sign Back In</a></p>


            </div>


            <div class="clr"></div>
        </section>
    </div>


</div>

<?php include("shared/footer.php"); ?>