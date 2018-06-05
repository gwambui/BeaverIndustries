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

//********************Session updates when items are added to shopping cart: previously placed in product display
// and cart file but session did not update until second refresh******************************//
if(!empty($_POST['pieces']))
{

    $oneObj = $pba->SingleObject($_POST['ID']);


    $myarr= $oneObj[0];
    $myarr["Pieces"] = $_POST["pieces"];
    //var_dump($myarr);
    $addItem = new SqlObjFilter($myarr);
    $addItem->AddToCart();

    $myarr= array();
}
if(isset($_POST['RemoveItem']))
{
    $obj =  $pba->SingleObject($_POST['RemoveItem']);
    $myarr =$obj[0];
    $removeItem = new SqlObjFilter($myarr);
    $removeItem->RemoveFromCart();

    if(count($_SESSION["cart"])==0){
        session_unset();
        session_destroy();
        session_write_close();
    }

}
?>
<div id="header-wrapper" >

    <header id="header" >
        <div id = "contact"><a href="login.php">Sign In&nbsp;|&nbsp;</a><a href="login.php">Account&nbsp;|&nbsp;</a>
            <a href="cart.php"><span class="cart glyphicon glyphicon-shopping-cart"></span>&nbsp;|&nbsp;</a><a href="contact.php">Contact Us</a></div>
        <div class="cartpreview"> <?php include 'shared/carttable.php'?></div>


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