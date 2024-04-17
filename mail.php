<?php
     
       require  'smtp/PHPMailerAutoload.php';
       function sendmail($email,$service,$doctor,$name,$date,$time){
        $mail = new PHPMailer;
        /// $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'shubham18822@gmail.com'; // SMTP username
        $mail->Password = 'szeivapldlliexyj'; // SMTP password
        $mail->Port = '587'; // TCP port to connect to
        $mail->From = 'shubham18822@gmail.com';
        $mail->FromName = 'TRIPGARE | CRM';
        // $mailto:email='anoopthenotion@outlook.com';
        $mail->addAddress("dheerajmaury017@gmail.com"); // Name is optional
        $mail->isHTML(true); // Set
        $mail->Subject = 'Appointment';
        $mail->Body = '<table border="0" cellpadding="0" cellspacing="0">
                             <tbody><tr>
        <td><span style="font-size:12pt">Hi</span><br><br>
    <span style="font-size:12pt">Your appointment detail <br><br> Service : '.$service.'<br> 
    Doctor : '.$doctor.'<br> Name : '.$name.' <br>Date : '.$date.'<br>Time : '.$time.'<br>
    </span><br><br></td>
                             </tr>
                           </tbody></table>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            die("======");
        } else {
            //echo 'Message has been sent';
            // die("======");
            
        }
		}
		
		function sendemail($email,$name,$subject,$message){
        $mail = new PHPMailer;
        /// $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'rahulrajkosta@gmail.com'; // SMTP username
        $mail->Password = 'hyghpnoynvdzwqsl'; // SMTP password
        $mail->Port = '587'; // TCP port to connect to
        $mail->From = 'rahulrajkosta@gmail.com';
        $mail->FromName = 'Chandanayushhospital';
        // $mailto:email='anoopthenotion@outlook.com';
        $mail->addAddress($email); // Name is optional
        $mail->isHTML(true); // Set
        $mail->Subject = $subject;
        $mail->Body = '<table border="0" cellpadding="0" cellspacing="0">
                             <tbody><tr>
        <td><span style="font-size:12pt">Hi '.$name.'</span><br><br>
		<span style="font-size:12pt">Subject : '.$subject.'</span><br><br>
		<span style="font-size:12pt">Message : '.$message.'</span><br><br>
		<span style="font-size:12pt">Email : '.$email.'</span><br><br>
		<br><br></td>
                             </tr>
                           </tbody></table>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            die("======");
        } else {
            //echo 'Message has been sent';
            // die("======");
            
        }
		}
    function subscribe($email){
        $mail = new PHPMailer;
        /// $mail->SMTPDebug = 3;                               // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'rahulrajkosta@gmail.com'; // SMTP username
        $mail->Password = 'hyghpnoynvdzwqsl'; // SMTP password
        $mail->Port = '587'; // TCP port to connect to
        $mail->From = 'rahulrajkosta@gmail.com';
        $mail->FromName = 'Chandanayushhospital';
        // $mailto:email='anoopthenotion@outlook.com';
        $mail->addAddress($email); // Name is optional
        $mail->isHTML(true); // Set
        $mail->Subject = ' Newletter Subscribe';
        $mail->Body = '<table border="0" cellpadding="0" cellspacing="0">
                             <tbody><tr>
		<span style="font-size:12pt">Email : '.$email.'</span><br><br>
		<br><br></td>
                             </tr>
                           </tbody></table>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            die("======");
        } else {
            //echo 'Message has been sent';
            // die("======");
            
        }
		}
?>