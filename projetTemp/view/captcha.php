<?php
  require_once('../view/recaptcha-php-1.10/recaptcha-php-1.10/recaptchalib.php');
  $privatekey = "6LeCrBspAAAAAAzu-ESNGk8aehfYob66i9VcVgH9";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }
  ?>