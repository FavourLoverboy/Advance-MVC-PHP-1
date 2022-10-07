<?php include('includes/header.php');?>

    <form action="login.php" method="POST">

        <h2>Sign In</h2>

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" class="button" value="Sign Up">
        <br>
        <p>Create an account? <a href="registration.php">Sign Up</a></p>
        <br>
        <p>Forgot password? <a href="resetpassword.php">Reset Password</a></p>
    </form>

<?php include('includes/footer.php'); ?>

<?php

    if($_POST['login']){

        extract($_POST);

        $tblquery = "SELECT * FROM tbl_login WHERE email = :email && password = :password";
        $tblvalue = array(
            ':email' => htmlspecialchars($email),
            ':password' => htmlspecialchars($password)
        );
        print_r($tblvalue);
        $select = $collect->tbl_select($tblquery, $tblvalue);
        if($select){
            foreach($select as $data){
                extract($data);

                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;

                header ('Location: dashboard');
                echo '<script> window.location="dashboard"; </script>';
            }
        }else{
            echo "Invali Login Info";
        }
    }
?>