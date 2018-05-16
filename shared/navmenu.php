<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8GN99K"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php

require_once 'BAL/BA.php';
$pba = new ProductBA();

$mainselect = null;
$subselect = null;
$filterOptions = array();
$orderByPrice = '';
$itemID ='';
//$data = $pba->GetProduct($mainselect, $subselect);
$fmt = new NumberFormatter( 'en_KE', NumberFormatter::CURRENCY );
?>
<div id="header-wrapper" >

    <header id="header" >
        <div id = "contact"><a href="cart.php">Cart</a>&nbsp; <a href="contact.php">Contact Us</a></div>
        <div class="col-5">

            <!-- Logo --><div><img src="assets/Images/beaver-logo.svg" width = "80px" height = "80 px" alt="BI logo" /> </div>
            <h1><a href="index.php">Beaver Industries</a></h1>
        </div>

            <nav class = "col-7">

                <a id = "navLivingroom" name = "#navLivingroom"  href="livingroom.php">Livingroom</a>
                <a id = "navDining" name = '#navDining' href="dining.php">Dining</a>
                <a id = "navBedroom" name ="#navBedroom"  href="bedroom.php">Bedroom</a>
                <a id = "navBaby" name ='#navBaby'   href="baby.php">Baby</a>
                <a id = "navKids" name = '#navKids'  href="kids.php">Kids</a>
                <a id = "navOutdoor" name ="#navOutdoor"   href="outdoor.php">Outdoor</a>
                <a id = "navHome" name = "#navHome"   href="home.php">Home</a>


            </nav>
    </header>
    <div  id = "hoverbox" class ="dropdown-content"> </div>


</div>