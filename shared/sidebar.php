<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-04-25
 * Time: 2:44 PM
 */
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
    <ul class="check-list">
        <li> <label for="asc_desc">

                <select name ="orderByPrice">
                    <option value = "">Order by Price 	&nbsp;  </option>
                    <option value = "Asc">Low to High</option>
                    <option value = "Desc">High to Low</option>

                </select>
            </label>
        </li>



        <li> <div class="filter" >
                <label for="narrow">Narrow Search<br>

                    <?php

                    foreach ($itemLookup as $item=>$value)
                    {
                        //var_dump($value['Details']);
                        echo "<label class=\"container\" 
                                             
                                            value=\"". $value['Details']."\">". $value['Details'];
                        echo "<input name =\"checked[]\" type=\"checkbox\" 
                                           value=\"". $value['Details'] ."\" >
                                           <span class=\"checkmark\"></span><br></label>";
                    }


                    ?>
            </div>
            <!-- </li>
             <li>options</li>
             <li>options</li>-->
    </ul>
    <button  type="submit" class="css3button">Submit</button>

</form>
<?php
if(!empty($_POST['checked']))
{
    //var_dump($_POST['checked']);
    $filterOptions += ["Details" => $_POST['checked']];
}
if(!empty($_POST['orderByPrice']))
{
    $orderByPrice = $_POST['orderByPrice'];
    $filterOptions += ["Price" => $orderByPrice];
}




?>
