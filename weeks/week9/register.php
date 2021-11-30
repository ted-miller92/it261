<?php // register.php
include('server.php');
include('includes/header-form.php');






?>

<div id="wrapper">
<h1>Register Today</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" >
    <fieldset>
        <label for="first_name">First Name</label>
        <input name="first_name" type="text" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">

        <!-- <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>"> -->

        <label for="last_name">Last Name</label>
        <input name="last_name" type="text" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

        <label for="email">Email</label>
        <input name="email" type="text" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

        <label for="username">Username</label>
        <input name="username" type="text" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">
        
        <label for="password1">Enter Password</label>
        <input name="password1" type="password" value="<?php if(isset($_POST['password1'])) echo htmlspecialchars($_POST['password1']) ;?>">

        <label for="password2">Enter Password</label>
        <input name="password2" type="password" value="<?php if(isset($_POST['password2'])) echo htmlspecialchars($_POST['password2']) ;?>">

        <button type="submit" name="reg_user" class="button">Register</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>

        <?php include('errors.php'); ?>

    </fieldset>
</form>
<h3>Already registered?</h3>
<span><a href="login.php">Click here</a> to log in</span>
</div><!-- end wrapper -->
</body>
</html>