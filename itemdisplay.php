<?php
include("shared/header.php");
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-05-03
 * Time: 1:02 PM
 */

?>


    <!-- Header -->
<?php


include ("shared/navmenu.php");

$var_value = $_POST['ID'];
$obj = $pba->SingleObject($var_value);

?>

<div id="content-wrapper">
    <div id="content">

            <section>
                <div class="secondaryImg">
                    <?php
                        foreach ($obj as $item => $value){
                        //displays available images on side bar
                            $imglink= './assets/'.$value['ImageLink'].'.jpg'; //\''.$value['ImageLink'].'.jpg>\'

                            //src =./assets/'.$value['ImageLink'].'.jpg>'
                            echo '<img class = \'setimg\' src =' .$imglink.'>';

                        }
                        ?>
                </div>
                <div class="largeimg">
                    <?php
                    //Displays final image in larger viewing frame
                    echo '<h2>'.$value['ProductID'].' '.
                        $value['LineName']. ' '.
                        $value['Details']. ': '.
                        $value['TypeName'].' </h2><p>'.
                        $value['Description'].' Perfect for your '.
                        $value['Area'].' <br>';
                         echo '<img id=\'largeimg\' src =./assets/'.$value['ImageLink'].'.jpg>';?>

                </div>
                <div class="singleinfo">
                    <?php
                        $price  = $fmt->formatCurrency($value['Price'], "KES");
                        echo '<h2>'.$value['ProductID'].' '.
                            $value['LineName']. ' '.

                             '<br><span style="font-weight: bold" >'.$price. '</span> </p>';

                    ?><!--?action=add&code=--><?php /*echo $value['ProductID']*/?>
                    <form method="post" action=""  >
                    <label>Add to Cart
                    <input class="input"  type="number" min="1" name="pieces" >
                        <button type="submit" name='ID' value="<?php echo $value['ProductID'] ?>" class="css3button">Add</button>
                    </label>
                    </form>

                </div><div class="clr"></div>

            </section>
    </div>
                <?php
                if(!empty($_POST['pieces']))
                {
                    $myarr= $obj[0];
                    $myarr["Pieces"] = $_POST["pieces"];

                    $addItem = new SqlObjFilter($myarr);
                    $addItem->AddToCart();

                }$myarr= array();
                ?>


</div>
<?php include("shared/footer.php"); ?>