<?php
    include_once "includes/session.inc.php";
?>

<html>
<table width=80% border=1 cellspacing=0 cellpadding=0 align="center">
    <tr>
	    <?php include_once "includes/headerHandler.inc.php"; ?>
    </tr>

    <tr>
        <td align="center" colspan="3" height="30px">
            <a href="">WOMEN</a>|
            <a href="">MEN</a>|
            <a href="">TSHIRT</a>|
            <a href="">SHIRT</a>|
            <a href="">PANT</a>|
            <a href="">CUSTOM</a>
        </td>
    </tr>

    <tr>
        <td align="center" colspan="3" height="350px">
            <form action="">
                <fieldset style="width:350px">
                    <legend>Login</legend>
                    <label>User Name:</label>
                    <input type="Text" name="username" maxlength="20"/><br>
                    <label>Password:</label>
                    <input type="Password" name="password" maxlength="50"/>
                    <hr>
                    <input type="Checkbox"/><label>Remember Me</label>
                    <a href="forgotpassword.php">Forgot Password?</a><br>
                    <input type="Submit" value="Sign in"/>
                    <Button type="Submit" formaction="signup.php"><a href="signup.php">Sign Up</a></Button>
                </fieldset>
            </form>
        </td>
    </tr>

    <tr>
		<?php require "includes/copyright.inc.html"; ?>
    </tr>
</table>
</html>