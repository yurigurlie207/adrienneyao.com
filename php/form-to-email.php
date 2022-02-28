
<?php

  require_once('recaptchalib.php');
  $privatekey = "6LcsJB4UAAAAANHZANPdh0WCPGAEYWKR257vC2St"; /* private key */
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
        
        if(!isset($_POST['submit']))
        {
          //This page should not be accessed directly. Need to submit the form.
          echo "error; you need to submit the form!";
        }
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        //Validate first
        if(empty($name)||empty($visitor_email)) 
        {
            echo "Name and email are mandatory!";
            exit;
        }

        if(IsInjected($visitor_email))
        {
            echo "Bad email value!";
            exit;
        }

        $email_from = $visitor_email;//<== update the email address
        $email_subject = "New Form submission";
        $email_body = "You have received a new message from the user: $name.\n".
            "Here is the message:\n $message ".
            
        $to = "adrienne.yao@gmail.com";//<== update the email address
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $visitor_email \r\n";
        //Send the email!
        mail($to,$email_subject,$email_body,$headers);
        //done. redirect to thank-you page.
        header('Location: thankyou.html');


        // Function to validate against any email injection attempts
        function IsInjected($str)
        {
          $injections = array('(\n+)',
                      '(\r+)',
                      '(\t+)',
                      '(%0A+)',
                      '(%0D+)',
                      '(%08+)',
                      '(%09+)'
                      );
          $inject = join('|', $injections);
          $inject = "/$inject/i";
          if(preg_match($inject,$str))
            {
            return true;
          }
          else
            {
            return false;
          }
        }
    }
?>






