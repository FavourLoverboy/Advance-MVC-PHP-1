<?php include('includes/header.php');?>
    <form action="registration.php" method="POST">

        <h2>Sign up</h2>

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="register" class="button" value="Sign Up">
        <br>
        <p>Have an account? <a href="login.php">Sign In</a></p>
    </form>    
<?php include('includes/footer.php'); ?>

<?php 
     if($_POST['register']){

        extract($_POST);

        $tblquery = "INSERT INTO tbl_login VALUES(:id, :email, :password, :date)";
        $tblvalue = array(
            ':id' => NULL,
            ':email' => htmlspecialchars($email),
            ':password' => htmlspecialchars($password),
            ':date' => date('Y-m-d')
        );
        //print_r($tblvalue);
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> window.location="login"; </script>';
        }
    }
?>