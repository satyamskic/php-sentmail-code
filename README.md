# php-sentmail-code

## ADD YOUR DETAILS HERE

### Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Host = 'smtp.gmail.com';                      

### Sets the default SMTP server port
$mail->Port = '465';                                 

### Sets SMTP authentication. Utilizes the Username and Password variables
$mail->SMTPAuth = true;                               

### Sets SMTP username
$mail->Username = 'example@gmail.com';                

### Sets SMTP password
$mail->Password = 'Example@12345';                    

### Sets connection prefix. Options are "", "ssl" or "tls"
$mail->SMTPSecure = 'ssl';                            

### Sets the From email address for the message
$mail->From = 'example@gmail.com';                    

### Sets the From name of the message
$mail->FromName = 'Example';                         

### Adds a "To" address
$mail->AddAddress('testmail@gmail.com', 'Example');   
