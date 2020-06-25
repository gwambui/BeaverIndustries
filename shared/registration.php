


                <h2>Register for an account</h2>
                <h3>Please provide the requested information. *Indicates required fields </h3>

                <form class="col-12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
                    <label for="inputName" >*User Name
                        <input type="text" placeholder="User Name" size="30" name="userLogin" required autofocus
                            <?php echo !$post ? "disabled='disabled'" : "" ;?>
                            value =  "<?php if (isset($userLogin)){echo $userLogin; }?>" <br>
                    </label>
                    <label for="inputFName" >*First Name
                        <input <?php echo !$post ? "disabled='disabled'" : "";  ?>
                            type="text" placeholder="First Name" size="30" name="firstName" required
                            value =  "<?php if (isset($firstName)){echo $firstName; }?>"><br>
                    </label>
                    <label for="inputLName" >*Last Name
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Last Name" size="30" name="lastName" required
                            value="<?php if (isset($lastname)){echo $lastname; }?>"><br>
                    </label>
                    <label for="inputEmail" >*Email
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="email" placeholder="Email" size="40" name="email" required
                            value="<?php if (isset($email)){echo $email; }?>"><br>
                    </label>
                    <label for="inputbirthday" >*Date of Birth
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="date" placeholder="date" size="30" name="birthdate" required
                            value="<?php if (isset($birthdate)){echo $birthdate; }?>"><br></label>
                    <label for="inputphone" >*Phone Number
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                type="tel" placeholder="000" size="30" name="phoneNumber" required
                                value="<?php if (isset($phoneNumber)){echo $phoneNumber; }?>"><br>
                    </label>
                    <label for="inputPassword" >*Password
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            id="psw" type="password" placeholder="passsword" size="30" name="password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter,
                            and at least 8 or more characters"
                            required>
                    </label>
                    <label for="inputPassword" >*Verify Password
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                id="psw2" type="password"  placeholder="passsword" size="30" name="password2" required>
                    </label>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <h3 id="match"> </h3>
                    <label for="inputAddress" >Address
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Address" size="30" name="address" required
                            value="<?php if (isset($address)){echo $address; }?>"><br>
                    </label>
                    <label for="inputCity" >PO Box
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="PO Box" size="30" name="pobox" required
                            value="<?php if (isset($poBox)){echo $poBox; }?>"><br>
                    </label>
                    <label for="inputCity" >Postal Code
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Postal Code" size="30" name="postalcode" required
                            value="<?php if (isset($postalCode)){echo $postalCode; }?>"><br>
                    </label>
                    <label for="inputCity" >City
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Nairobi" size="30" name="city" required
                            value="<?php if (isset($city)){echo $city; }?>"><br>
                    </label>
                    <label for="inputCity" >Province
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Nairobi" size="30" name="province" required
                            value="<?php if (isset($province)){echo $province; }?>"><br>
                    </label>
                    <label for="inputCountry" >Country
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Kenya" size="30" name="country" required
                            value="<?php if (isset($country)){echo $country; }?>"><br>
                    </label>
                    <label for ="recoveryQuestions"> Recovery Question1
                        <select class="form-control" name="question1" <?php echo !$post ? "disabled='disabled'" : ""; ?>>
                            <?php
                            $isSelected = isset($RecQuestion1)? $RecQuestion1:"";
                            foreach ($RecQuestions as $item => $value) {

                                if (!empty($_POST['RecQuestionsID']))
                                {
                                    $isSelected = $_POST['RecQuestionsID'] == $value['QuestionID'];
                                }

                                echo "<option " . ($isSelected ? "selected" : "") .  " value=" . $value['QuestionID']  . ">" . $value['Question'] . "</option>";

                            } ?>
                        </select>
                    </label>
                    <label for="inputAnswer1" >Answer1
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                type="text" placeholder="Answer"  name="answer1" required
                                value="<?php if (isset($Answer1)){echo $Answer1; }?>"><br>
                    </label>
                    <label for ="recoveryQuestions"> Recovery Question2
                        <select class="form-control" name="question2" <?php echo !$post ? "disabled='disabled'" : ""; ?>>
                            <?php
                            $isSelected =isset($RecQuestion2)? $RecQuestion2:"";
                            foreach ($RecQuestions as $item => $value) {

                            if (!empty($_POST['RecQuestionsID']))
                            {
                                $isSelected = $_POST['RecQuestionsID'] == $value['QuestionID'];
                            }

                            echo "<option " . ($isSelected ? "selected" : "") .  " value=" . $value['QuestionID']  . ">" . $value['Question'] . "</option>";

                        } ?>
                        </select>
                    </label>
                    <label for="inputAnswer2" >Answer2
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Answer"  name="answer2" required
                            value="<?php if (isset($Answer2)){echo $Answer2; }?>"><br>
                    </label>
                    <button  type="submit" class="css3button">Register</button>


                </form>
