<?php 
    include '../Main/header.php'
?>

<div class="signup" id="signup">
        <div class="signup-form">
            
            <form action="../logics/signup-config.php" method="POST">
            <a class="exit" href="../index.php" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
            <h1>SIGN UP</h1>
                <div class="inner-signup">
                    <label for="username">Create Username</label>
                    <input type="text" name="username" required>
                        <?php
                            if (isset($_GET['u_msg'])){
                                    $u_msg = $_GET['u_msg'];
                                    echo '<p id="username">' .$u_msg, '</p>';
                                }
                        ?>

                    <label for="email">Create Email</label>
                    <input type="email" name="email" required>
                        <?php
                            if (isset($_GET['e_msg'])){
                                    $e_msg = $_GET['e_msg'];
                                    echo '<p id="email">' .$e_msg, '</p>';
                                }
                        ?>

                    <label for="password">Create Password</label>
                    <input type="password" name="password" required>
                        <?php
                            if (isset($_GET['pass_msg'])){
                                    $pass_msg = $_GET['pass_msg'];
                                    echo '<p id="pass">' .$pass_msg, '</p>';
                                }
                        ?>

                    <label for="cpass">Re-enter Password</label>
                    <input type="password" name="cpass" required>
                        <?php
                            if (isset($_GET['cpass_msg'])){
                                    $cpass_msg = $_GET['cpass_msg'];
                                    echo '<p id="confirm">' .$cpass_msg, '</p>';
                                }
                        ?>

                    <div class="btn">
                        <input type="submit" value="Sign Up" name="signup">
                    </div>
                </div>
                <p>Already have an account? </p>
                <a href="./signin.php">Sign In</a>
            </form>
        </div>
    </div>