<?php

include "test.php";

session_start();
if (isset($_COOKIE["jwt_token"])) {
    $jwt_token = $_COOKIE["jwt_token"];

    $decoded_token = decryptJWT($jwt_token);

    $_SESSION["id"] = $decoded_token->id;
    $_SESSION["username"] = $decoded_token->username;
    $_SESSION["role"] = $decoded_token->role;
    $_SESSION["fullname"] = $decoded_token->fullname;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/register.css">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="reg_container">
    <a href="index.php"><img src="../assets/img/logo-mini.png" class="logo" alt="Logo"></a>
    <h2 align="center" id="page_title">Registration</h2>
    <form id="registrationForm" align="center" action="register.php" method="POST">
        <span id="errorHandlingSpan" class="error-message"></span>
        <label for="firstName"></label>
        <input type="text" id="firstname" name="firstname" placeholder="First name" required><span id="fnSpan"></span>

        <label for="lastname"></label>
        <input type="text" id="lastname" name="lastname" placeholder="Last name" required><span id="lnSpan" class="sp"></span>

        <label for="username"></label>
        <input type="text" id="username" name="username" placeholder="Username" required><span id="uSpan" class="sp"></span>

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <br>
        <span id="eSpan" class="sp"></span>

        <label for="password"></label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br>
        <span id="pSpan" class="sp">
            <h6 id="p_character">&#10007; Password must be 8 characters at least</h6>
            <h6 id="p_number">&#10007; Password must contain at least one number (0-9)</h6>
            <h6 id="p_upper">&#10007; Passsword must contain at least one Uppercase character (A-Z)</h6>
            <h6 id="p_special">&#10007; Password must contain at least one special character (eg: .,!@)</h6>
        </span>

        <label for="cpassword"></label>
        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password" required>
        <br>
        <span id="cpSpan" class="sp"></span>

        <label for="dob"></label>
        <input type="date" id="dob" name="dob" placeholder="Date of Birth" required>
        <br>
        <span id="dobSpan" class="sp"></span>

        <label for="tel"></label>
        <input type="text" id="tel" name="tel" placeholder="Telephone" requirred>
        <br>
        <span id="tSpan" class="sp"></span>

        <label for="acceptRules" style="display: flex; align-items: center; font-size: 12px; line-height: 1.5; margin-top: 5px; margin-bottom: -12px;">
            <input type="checkbox" id="acceptRulesBox" name="acceptRules" style="margin-right: 5px;">
            I accept the terms and rules
        </label>

        <br>
        <div class="g-recaptcha" data-sitekey="6LdDWx4pAAAAADcWOAOv76zKmKlf3Ul3fKzmHNp3"></div>
        <input type="submit" id="submit" value="Register">
        <span id="sumbitSpan"></span>
        <div class="social-buttons">
            <button class="social-button google" data-social="Login with Google">
                <img src="../assets/img/icons/gmail.png" alt="Gmail Icon" class="icon">
            </button>
            <button class="social-button facebook" data-social="Login with Facebook">
                <img src="../assets/img/icons/facebook.png" alt="Facebook Icon" class="icon">
            </button>
            <button class="social-button linkedin" data-social="Login with LinkedIn">
                <img src="../assets/img/icons/linkedin.png" alt="LinkedIn Icon" class="icon">
            </button>
        </div>
        <a href="login.php" id="already_acc">Already have an account? Login</a>

    </form>
</div>
<script src="../assets/js/register.js"></script>
</body>
</html>
<?php
include "../model/user.php";
include "../controller/userC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["dob"]) && !empty($_POST["tel"])) {
        if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"]) && isset($_POST["tel"])) {
            $recaptcha_secret = '6LdDWx4pAAAAAEIrnB48hVDJu_A5DSajYoqAXxA3';
            $recaptcha_response = $_POST['g-recaptcha-response'];
            $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
            $recaptcha_data = [
                'secret' => $recaptcha_secret,
                'response' => $recaptcha_response,
            ];
            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($recaptcha_data),
                ],
            ];
            $context = stream_context_create($options);
            $result = file_get_contents($recaptcha_url, false, $context);
            $recaptcha_response = json_decode($result, true);
            if ($recaptcha_response['success'] == true) {
                $uC = new userC();
                if (count($uC->emailExists($_POST["email"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("eSpan").innerHTML = "<h6>Email already exists</h6>";
                        document.getElementById("email").style.border = "1.5px solid";
                        document.getElementById("email").style.borderColor = "red";
                    </script>';
                } else if (count($uC->emailExistsVIP($_POST["email"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("uSpan").innerHTML = "<h6>Username already exists</h6>";
                        document.getElementById("username").style.border = "1.5px solid";
                        document.getElementById("username").style.borderColor = "red";
                    </script>';
                } else if (count($uC->emailExistsAdmin($_POST["email"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("uSpan").innerHTML = "<h6>Username already exists</h6>";
                        document.getElementById("username").style.border = "1.5px solid";
                        document.getElementById("username").style.borderColor = "red";
                    </script>';
                } else if (count($uC->checkUser($_POST["username"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("uSpan").innerHTML = "<h6>Username already exists</h6>";
                        document.getElementById("username").style.border = "1.5px solid";
                        document.getElementById("username").style.borderColor = "red";
                    </script>';
                } else if (count($uC->checkUserVIP($_POST["username"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("uSpan").innerHTML = "<h6>Username already exists</h6>";
                        document.getElementById("username").style.border = "1.5px solid";
                        document.getElementById("username").style.borderColor = "red";
                    </script>';
                } else if (count($uC->checkAdmin($_POST["username"])) > 0) {
                    echo '<script type="text/javascript">
                        document.getElementById("uSpan").innerHTML = "<h6>Username already exists</h6>";
                        document.getElementById("username").style.border = "1.5px solid";
                        document.getElementById("username").style.borderColor = "red";
                    </script>';
                } else {
                    $tmp = NULL;
                    $currentDate = new DateTime();
                    $birthdate = new DateTime($_POST['dob']);
                    $u = new user($tmp, $_POST["firstname"], $_POST["lastname"], $_POST["username"], password_hash($_POST["password"], PASSWORD_BCRYPT), $currentDate->diff($birthdate)->y ,$_POST["email"], 0, 0, "BASIC", $_POST["tel"]);
                    print_r("DONE");
                    $uC->addUser($u);
                    header("location: login.php");
                }
            } else {
                echo '<script>
                    var ehs = document.getElementById("errorHandlingSpan");
                    ehs.innerHTML = "reCAPTCHA verification failed.";
                </script>';
            }
        }
    }
} else {
    die();
}
?>
