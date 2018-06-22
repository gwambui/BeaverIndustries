<?php
include("shared/header.php");
include ("shared/navmenu.php");
$uba = new UserBA();


            if(isset($_POST['phoneNumber']) )
            {
                echo "<p>Your Phone number has been saved</p>";
                $newPhone = $_POST['phoneNumber'];

                $uba->UpdatePhone($newPhone);

                unset($_POST['phoneNumber']);
                $_POST['SelectAction'] = "details";
            }
            if(isset($_POST['address']))
            {
                echo "<p>Your Address has been saved</p>";
               $newadd = $_POST['address'];
                $newbox = $_POST['pobox'];
                $newcity = $_POST['city'];
                $newprov = $_POST['province'];
                $newpostal = $_POST['postalcode'];
                $newcountry = $_POST['country'];

                $addressUpdate =array('Address' =>$newadd,
                    'PoBox'=>$newbox,
                    'City' => $newcity, 'Province' => $newprov,
                    'PostalCode' => $newpostal,
                    'Country' => $newcountry);

                $uba->UpdateAddress($addressUpdate);
                $_POST['SelectAction'] = "details";
            }



            ?>



<div id="content-wrapper">
    <div id="content">
        <section>
            <?php echo" <h3> Welcome ".$_SESSION['user']['FirstName']."! </h3>";?>
            <div class=" col-9">
                <h3>What would you like to do?</h3>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
                    <label for="acc-Actions" class="floatl">

                        <select name ="SelectAction">
                            <option value = "review">&nbsp;Review past transactions&nbsp; </option>
                            <option value = "password">&nbsp;Update Password &nbsp;</option>
                            <option value = "details">&nbsp;Modify account details &nbsp;</option>
                            <option value = "info">&nbsp;Request Information &nbsp;</option>

                        </select>

                    </label>
                    <button  type="submit" class="css3button">Submit</button>
                </form>


            </div>

            <div class="col-9"><hr>
                <?php
                if(isset($_POST['SelectAction']))
                {
                    $action = $_POST['SelectAction'];
                    if ($action =="review") {
                        include ("Utils/reviewTransactions.php");
                    }
                    elseif ($action == "password"){
                        include("Utils/updatePassword.php");
                    }
                    elseif ($action == "details"){
                        include ("Utils/accountDetails.php");
                    }
                    elseif ($action == "info"){
                        include ("Utils/requestInfo.php");
                    }
                    else{
                        echo "<p>Thank you</p>";
                    }
                }
                ?>
            </div>
            <div class="clr"></div>
        </section>
    </div>
</div>
<?php include("shared/footer.php"); ?>
