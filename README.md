# php-sentmail-code

## ADD YOUR DETAILS HERE

$mail->Host = 'smtp.gmail.com';                      # Sets the SMTP hosts of your Email hosting, this for Godaddy

$mail->Port = '465';                                 # Sets the default SMTP server port

$mail->SMTPAuth = true;                               //Sets SMTP authentication. Utilizes the Username and Password variables

$mail->Username = 'example@gmail.com';                //Sets SMTP username

$mail->Password = 'Example@12345';                    //Sets SMTP password

$mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"

$mail->From = 'example@gmail.com';                    //Sets the From email address for the message

$mail->FromName = 'Example';                          //Sets the From name of the message

$mail->AddAddress('testmail@gmail.com', 'Example');   //Adds a "To" address
