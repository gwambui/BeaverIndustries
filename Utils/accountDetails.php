<?php
/**
 * Created by PhpStorm.
 * User: wambu
 * Date: 2018-06-21
 * Time: 11:24 AM
 */
//var_dump($_SESSION['user']);

$add = $uba->GetAddress($_SESSION['user']['UserID']);
//var_dump($add);
?>
<?php



//|| isset($_POST['address'])







?>
<h3>Here are your personal details.</h3>
<?php
    echo "<p>User name:   ".$_SESSION['user']['LoginID']." <br>";
    echo "First name:     ".$_SESSION['user']['FirstName']." <br>";
    echo "Last name:  ".$_SESSION['user']['LastName']." <br>";
    echo "Phone Number:   ".$_SESSION['user']['PhoneNumber']." <br>";

    echo "Address:    ".$add['Address']." <br>";
    echo "PoBox:      ".$add['PoBox']." <br>";
    echo "City:   ".$add['City']." <br>";
    echo "Province:   ".$add['Province']." <br>";
    echo "PostalCode:     ".$add['PostalCode']." <br>";
    echo "Country:    ".$add['Country']." </p>";
?>

<h3>Click to update: <u id ="addUpdate" style="cursor: pointer">Address</u> | <u id="phUpdate" style="cursor: pointer">phone number. </u></h3>

<form class="col-12 phEdit " <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='post'>

    <label for="inputphone" class="floatl" >Phone Number:
        <input  <?php echo !$post ? "disabled='disabled'" : ""; ?>
                type="tel" placeholder="000" size="30" name="phoneNumber" required></label>
    <button  type="submit" class="css3button ">Update</button>
</form>


<form class="col-12 addEdit" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='post'>
<br><label for="inputAddress" >Address
    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
            type="text" placeholder="Address" size="30" name="address" required><br></label>

<label for="inputCity" >PO Box
    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
            type="text" placeholder="PO Box" size="30" name="pobox" required><br></label>
<label for="inputCity" >Postal Code
    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
            type="text" placeholder="Postal Code" size="30" name="postalcode" required><br></label>


<label for="inputCity" >City
    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
            type="text" placeholder="Nairobi" size="30" name="city" required><br></label>
<label for="inputCity" >Province
    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
            type="text" placeholder="Nairobi" size="30" name="province" required><br></label>

<label for="inputCountry" >Country</label>
<input <?php echo !$post ? "disabled='disabled'" : ""; ?>
        type="text" placeholder="Kenya" size="30" name="country" required><br>
    <button  type="submit" class="css3button">Update</button>


</form>