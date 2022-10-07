<?php include('includes/header.php');?>
    <form action="resetpassword.php" method="POST">

        <h2>Reset Password</h2>

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <input type="submit" name="login" class="button" value="Sign Up">
        <br>
        <p>Have an account? <a href="login.php">Sign In</a></p>
    </form>
<?php include('includes/footer.php'); ?>