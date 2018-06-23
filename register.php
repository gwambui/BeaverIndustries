<?php


include("shared/header.php");
include ("shared/navmenu.php");
?>
    <div id="content-wrapper">
    <div id="content">
    <section>
    <div class=" login col-12">

<?php
$rba = new RecoveryQBA();
$RecQuestions = $rba->GetRecQuestions();

$recQID = empty($_POST['RecQuestionsID']) ? "What primary school did you attend?" : $_POST['RecQuestionsID'];

$post = $_SERVER['REQUEST_METHOD'] == 'POST'  ? true : false;

// define variables and set to empty values
if(isset($_POST['userLogin'])) {
    ///Client added information
    $userLogin = htmlspecialchars($_POST['userLogin']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $province = htmlspecialchars($_POST['province']);
    $country = htmlspecialchars($_POST['country']);
    $poBox = htmlspecialchars($_POST['pobox']);
    $postalCode = htmlspecialchars($_POST['postalcode']);

    $RecQuestion1 = htmlspecialchars($_POST['question1']);
    $Answer1 = htmlspecialchars($_POST['answer1']);
    $RecQuestion2 = htmlspecialchars($_POST['question2']);
    $Answer2 = htmlspecialchars($_POST['answer2']);

    if (!strcmp($password , $password2)) {
        $registration = array("userLogin" => $userLogin, "firstName" => $firstName,
            "lastName" => $lastName, "email" => $email, 'password' => $password, "birthdate" => $birthdate,
            "phoneNumber" => $phoneNumber, "address" => $address, "city" => $city, "province" =>$province,
            "country" => $country, "poBox" => $poBox, "postalCode" => $postalCode,
            "RecQuestion1" => $RecQuestion1, "Answer1" => $Answer1,
            "RecQuestion2" => $RecQuestion2, "Answer2" => $Answer2);
        $regInfo = new WorkFunctions($registration);
        $verify = $regInfo->Testinput();




        if (!$verify) {

            $cba = new ClientBA();
            $uba = new UserBA();
            $clientDTO = new ClientAddDTO(
                null, null, 4, $userLogin,
                $firstName, $lastName, $birthdate, $email, $password,
                $phoneNumber, $address, $city, $province, $country,
                $poBox, $postalCode, $RecQuestion1,
                $Answer1, $RecQuestion2, $Answer2);

            $clientID = $cba->AddClient($clientDTO);
            // SEND CONFIRMATION EMAIL
            // Please specify your Mail Server - Example: mail.example.com.
            ini_set("SMTP","mail.beaverindustries.co.ke");
            // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
            ini_set("smtp_port","26");
            // Please specify the return address to use
            ini_set('sendmail_from', 'register@beaverindustries.co.ke');
            // the message
            $msg = $firstName." Thank you for opening an account on Beaver Industries \r
                            Please take note of your account information which you will need to access \r
                            Beaver online in future. UserName:".$userLogin." If you would like to modify your \r
                            account, please visit beaverindustries.co.ke/account. ";
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            $headers = "From:beaver@beaverindustries.co.ke" . "\r" .
                "CC: beaver@beaverindustries.co.ke";
            // send email
            mail($email,"Welcome to Beaver Online",
                "Dear ".$msg, "From:register@beaverindustries.co.ke" . "\r" .
                "CC: register@beaverindustries.co.ke");


            echo "<p style=\"text-align:center\">Thank you, Registration is Complete"; ?><br>
            <?php echo "An Email confirmation will be sent shortly.</p>";
        } else {
            foreach ($verify as $value) {
                echo $value . "<br>";
            }

            include("shared/registration.php");
        }


    } else {
        echo "<p style=\"text-align:center\">Passwords did not match</p>";

        include("shared/registration.php");
    }
    unset($_POST);
}


 else {


     include("shared/registration.php");
 }
?>
            </div>

            <div class="clr"></div>
        </section>
    </div>


</div>
<?php

include("shared/footer.php");
