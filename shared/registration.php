



                <h2>Register for an account</h2>
                <h3>Please provide the requested information. *Indicates required fields </h3>
                <form class="col-12" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='post'>
                    <label for="inputName" >*User Name
                    <input type="text" placeholder="User Name" size="30" name="userLogin" required autofocus
                        <?php echo !$post ? "disabled='disabled'" : "" ."value =\"" .!$populate ? "" : $userLogin ."\"";?>><br></label>
                    <label for="inputFName" >*First Name
                    <input <?php echo !$post ? "disabled='disabled'" : "";  ?>
                            type="text" placeholder="First Name" size="30" name="firstName" required><br></label>
                    <label for="inputLName" >*Last Name
                    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Last Name" size="30" name="lastName" required><br></label>
                    <label for="inputEmail" >*Email
                    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="email" placeholder="Email" size="40" name="email" required><br></label>

                    <label for="inputbirthday" >*Date of Birth
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                type="date" placeholder="date" size="30" name="birthdate" required><br></label>

                    <label for="inputphone" >*Phone Number
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                type="tel" placeholder="000" size="30" name="phoneNumber" required><br></label>

                    <label for="inputPassword" >*Password
                    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>

                            type="password" placeholder="passsword" size="30" name="password" required><br></label>
                    <label for="inputPassword" >*Verify Password
                    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="password" placeholder="passsword" size="30" name="password" required><br></label>


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
                            type="text" placeholder="City" size="30" name="city" required><br></label>
                    <label for="inputCountry" >Country
                    <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                            type="text" placeholder="Kenya" size="30" name="country" required><br></label>
                    <br>
                    <label for ="recoveryQuestions"> Recovery Question1
                    <select class="form-control" name="question1" <?php echo !$post ? "disabled='disabled'" : ""; ?>>
                        <?php
                        foreach ($RecQuestions as $item => $value) {

                            if (!empty($_POST['RecQuestionsID']))
                            {
                                $isSelected = $_POST['RecQuestionsID'] == $value['QuestionID'];
                            }

                            echo "<option " . ($isSelected ? "selected" : "") .  " value=" . $value['QuestionID']  . ">" . $value['Question'] . "</option>";

                        } ?>
                    </select></label>


                    <label for="inputAnswer1" >Answer1
                        <input <?php echo !$post ? "disabled='disabled'" : ""; ?>
                                type="text" placeholder="Answer"  name="answer1" required><br></label>
                    <br><label for ="recoveryQuestions"> Recovery Question2
                        <select class="form-control" name="question2" <?php echo !$post ? "disabled='disabled'" : ""; ?>>
                        <?php
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
                                type="text" placeholder="Answer"  name="answer2" required><br></label>
                    <button  type="submit" class="css3button">Register</button>


                </form>
