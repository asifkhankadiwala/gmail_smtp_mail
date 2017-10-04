 
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
       
                     // $email = 'cears.ramila@gmail.com';                    
                     // $password = 'Ram@321$';
                   
                    $email = ' ';                    
                    $password = ' ';
                    $to_id = ' ';
                    
                    $message = 'hello';
                    $subject = 'its subject';

                    $mail = new PHPMailer;

                    $mail->isSMTP();
                  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'First Last');

                    $mail->addReplyTo('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       echo $error = "Mailer Error: " . $mail->ErrorInfo;
                       die;
                        
                    } 
                    else {
                       echo 'sent';
                    }
              
        ?>
   