<?php 

    include 'database.php';
    
    if (isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

if (strlen($_POST["password"]) < 8) {
    $pass_msg = "Password be must be 8 characters.";
    $p_msg = die(header("location: ../signin-up/signup.php?pass_msg=" .$pass_msg));
        
}

if ( ! preg_match("/[a-z]/", $_POST["password"])) {
    $pass_msg = "Password must contain one letter.";
    $p_msg = die(header("location: ../signin-up/signup.php?pass_msg=" .$pass_msg));
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    $pass_msg = "Password must contain one number.";
    $p_msg = die(header("location: ../signin-up/signup.php?pass_msg=" .$pass_msg));
}

if ($_POST["password"] !== $_POST["cpass"]) {
    $cpass_msg = "Password must match.";
    $c_msg = die(header("location: ../signin-up/signup.php?cpass_msg=" .$cpass_msg));
}

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $used_email = "SELECT * FROM user WHERE email = '$email'";
    $check_mail = $db->query($used_email);
    $email_error = 0;
    if($check_mail->num_rows>0){
        $email_error = 1;
    } 
    
    $used_username = "SELECT * FROM user WHERE username = '$username'";
    $check_username = $db->query($used_username);
    $username_error = 0;
    if($check_username->num_rows>0){
        $username_error = 1;
    }
    
    if($email_error == 1){
        $e_msg = "Email is already used";
        header("location: ../signin-up/signup.php?e_msg=" .$e_msg);
    } else {
    if($username_error == 1){
        $u_msg = "Username is already used";
        header("location: ../signin-up/signup.php?u_msg=" .$u_msg);
    } else {
        $sql = "INSERT INTO user(username, email, password) VALUES(?,?,?)";
        $stmt = $db->prepare($sql);
        $result = $stmt->execute( [$username, $email, $password]);
        
        if ($result){
            header("location: ../signin-up/signin.php?");
        }
    }
    }

?>