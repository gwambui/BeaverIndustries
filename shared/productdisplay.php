<?php

/*
 * User entered options added to array - $filterOptions

if(!empty($_POST['pieces']))
{


    $oneObj = $pba->SingleObject($_POST['ID']);


    $myarr= $oneObj[0];
    $myarr["Pieces"] = $_POST["pieces"];
    //var_dump($myarr);
    $addItem = new SqlObjFilter($myarr);
    $addItem->AddToCart();

    session_write_close();

    $myarr= array();
} */
if(!empty($filterOptions)) {
    $filt = new SqlObjFilter($obj);
    $obj = $filt->FilterInput($filterOptions);

}


$count = 0;
if (count($obj) > 0)
{


    echo "<table class='table '>";
    echo "<tr>";

    //var_dump(array($value));<a href='itemdisplay.php'   target='_blank'  > </a>
    foreach ($obj as $item => $value) {
        $itemID = $value['ProductID'];

        $price  = $fmt->formatCurrency($value['Price'], "KES");

        echo "<td  class = 'itemDisplay' > ";
        echo "<form  action='itemdisplay.php' method='post' > 
        <button type='submit' name='ID' value=".$itemID ."> ";



        echo '<div>'; echo '<img src =./assets/'.$value['ImageLink'].'.jpg'; echo '>';
        echo '</div>'; echo'<br>';
        echo '<p >'.$value['ProductID'].' <br>';
        echo $value['LineName'].' '.$value['TypeName']."<br>";
        echo '<span >'.$price. "</span></p>";

        echo" </button></form>
        
      
        <form method=\"post\" action=\"\" class='addCart' >
             <label>
                   
                  <input class=\"input\"  type=\"number\" min=\"1\" name=\"pieces\" >
                  <button type=\"submit\" name='ID' value=\"  $itemID \" class=\"css3button\"> Add to cart</button>
                   
             </label>
        </form>
        
               
        </td>";
        $count++;

        if ($count%4 ==0)echo "</tr>";
    }

    echo "</table>";






}?>

<!--<input value = '' type='submit'> <input type=\'submit\'  name=\'ID\' value=\''.  $itemID .'\'>-->
