<?php
require_once 'BAL/BA.php';
$post = $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;

if ($post)
{
    $username = $_POST['UserName'];
    $password = $_POST['password'];
    $sba = new SessionBA();
    $loggedin = $sba->Login($username, $password);

    if ($loggedin)
    { //{echo "<p>you are logged in as</p>".$_SESSION['user']['LoginID'];

        header("Location: index.php");
        die();
    }
    else
    {
        $error = "Sorry, there was an error logging in!  Try again.";
    }
}
include("shared/header.php");
include ("shared/navmenu.php");
?>

<div id="content-wrapper">
    <div id="content">
        <section>
        <div class=" login col-6">
            <h2>Returning Customer?</h2>
            <h3>Please Sign In</h3>
            <form class="col-6" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method='post'>
                <label for="inputName" >User Name

                <input type="text" placeholder="User Name" size="40" name="UserName" required autofocus><br></label>
                <label for="inputPassword" >Password
                <input type="password" placeholder="passsword" size="40" name="password" required><br></label>
                <button type="submit" class="css3button">SIGN IN</button>
                <?php if ($post) { ?>
                    <br>
                    <div class=""><?php echo "<b>&nbsp;" . $error . "</b>"; ?>
                    </div>

                <?php }?>

            </form>
        </div>
        <div class="login col-6">
            <h2>New to Beaver online?</h2>
            <h3>Register for an account</h3>
            <form class="col-6" action='register.php' method='post'>

                <button type="submit" class="css3button">START REGISTRATION</button>

            </form>
        </div>
            <div class="clr"></div>
        </section>

    </div>
</div>
<?php include("shared/footer.php"); ?>