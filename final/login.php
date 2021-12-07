<?php

include('server.php');
include('includes/header-form.php');

?>
<div id="wrapper">
<h1 class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
    <label for="username">Username</label>
    <input name="username" type="text" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

    <label for="password">Password</label>
    <input name="password" type="password">

    <button type="submit" class="button" name="login_user">Login</button>

    <button type="button" class="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>' ">Reset</button>

    <?php include('errors.php'); ?>
    </fieldset>
</form>
<h3>Not a member?</h3>
<span><a href="register.php">Click here</a> to register</span>
</div><!-- end wrapper -->
</body>
</html>