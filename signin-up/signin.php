<?php 
    include '../Main/header.php'
?>

<div class="signin" id="signin">
        <div class="signin-form">
            <a class="exit" href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
            <h1>SIGN IN</h1>
            <form action="../logics/signin-config.php" method="POST">
                <div class="inner">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" required>

                    <?php
                    if (isset($_GET['f_msg'])){
                        $f_msg = $_GET['f_msg'];
                        echo '<p class="signin-fail">' .$f_msg, '</p>';
                    }
                    ?>
                    
                    <div class="btn">
                        <input type="submit" value="Sign In" name="signin">
                    </div>
                </div>
                <p>Don't have an account yet?</p>
                <a href="./signup.php">Sign Up</a>
            </form>
        </div>
    </div>