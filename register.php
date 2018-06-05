<?php
include("shared/header.php");

include ("shared/navmenu.php");
$post = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
$rba = new RecoveryQBA();
$RecQuestions = $rba->GetRecQuestions();

$recQID = empty($_POST['RecQuestionsID']) ? "What primary school did you attend?" : $_POST['RecQuestionsID'];

$post = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;

?>
<div id="content-wrapper">
    <div id="content">
        <section>
            <div class=" login col-10">

<?php

// define variables and set to empty values
if(isset($_POST['userLogin'])){
                /*Client add variables*/
             $userLogin = htmlspecialchars($_POST['userLogin']);
             $firstName = htmlspecialchars($_POST['firstName']);
             $lastName = htmlspecialchars($_POST['lastName']);
             $email = htmlspecialchars($_POST['email']);
             $password = htmlspecialchars($_POST['password']);
             $birthdate = htmlspecialchars($_POST['birthdate']);
             $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
             $address = htmlspecialchars($_POST['address']);
             $city = htmlspecialchars($_POST['city']);
             $country = htmlspecialchars($_POST['country']);
             $poBox = htmlspecialchars($_POST['pobox']);
             $postalCode = htmlspecialchars($_POST['postalcode']);

             $RecQuestion1 = htmlspecialchars($_POST['question1']);
             $Answer1 = htmlspecialchars($_POST['answer1']);
             $RecQuestion2 = htmlspecialchars($_POST['question2']);
             $Answer2 = htmlspecialchars($_POST['answer2']);

             $registration= array( "userLogin"=>$userLogin,"firstName"=>$firstName ,
                 "lastName"=>$lastName , "email"=>$email ,"password"=>$password ,"birthdate"=>$birthdate,
                 "phoneNumber"=>$phoneNumber ,"address"=>$address ,   "city"=>$city ,
                 "country"=>$country , "poBox"=>$poBox ,"postalCode"=>$postalCode ,
                 "RecQuestion1"=>$RecQuestion1 ,"Answer1"=>$Answer1 ,
                 "RecQuestion2"=>$RecQuestion2 , "Answer2"=>$Answer2 );
              $regInfo = new WorkFunctions($registration);
                $verify = $regInfo->Testinput();

            if(!$verify){
                echo "<p>Thank you, Registration is Complete";?><br>
                <?php echo"An Email confirmation will be sent shortly.</p>";
             $cba = new ClientBA();
             $uba= new UserBA();


             $clientDTO = new ClientAddDTO(
                     null, null, 4, $userLogin,
                    $firstName, $lastName,$birthdate, $email, $password,
                     $phoneNumber, $address, $city, $country,
                     $poBox, $postalCode, $RecQuestion1,
                     $Answer1, $RecQuestion2, $Answer2);


            // if(email successfully verified){}
                 $clientID = $cba->AddClient($clientDTO);

            }
            else{var_dump($verify);
                /*foreach ($verify as $value)
                {
                    echo $value;
                }*/
                include("shared/registration.php");
            }
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
