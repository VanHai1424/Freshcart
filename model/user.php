<?php 
    session_start();

    function signin($user, $pass) {
        $sql = "SELECT * FROM  `user` WHERE user='$user' and pass='$pass'";
        $user = pdo_query_one($sql);

        if ($user != false) {
            $_SESSION['user'] = $user;
        } 
        else {
            return "<span class='text-danger'>Thông tin tài khoản sai</span>";
        }
    }

    function logout() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
    }

    function loadall_user() {
        $sql = "SELECT * FROM `user` WHERE 1";
        $listUser = pdo_query($sql);
        return $listUser;
    }
    
    function insert_user($user, $pass, $email, $role) {
        $sql = "INSERT INTO `user`(`user`, `pass`, `email`, `role`) VALUES ('$user', '$pass', '$email', $role)";
        pdo_execute($sql);
    }

    function loadone_user($id) {
        $sql = "SELECT * FROM `user` WHERE id= $id";
        $user = pdo_query_one($sql);
        return $user;
    }

    function update_user($user, $pass, $email, $role, $id) {
        $sql = "UPDATE `user` SET `user`='$user',`pass`='$pass',`email`='$email',`role`=$role WHERE id=$id";
        pdo_execute($sql);
    }

    function delete_user($id) {
        $sql = "DELETE FROM `user` WHERE id=$id";
        pdo_execute($sql);
    }

    function send_mail($email) {
        $sql = "SELECT * FROM `user` WHERE email = '$email'";
        $user = pdo_query_one($sql);
        if($user != false) {
            send_mail_pass($email, $user['user'], $user['pass']); 
        } else {
            return "<span class='text-danger'>Email không tồn tại !</span>";
        }
    }

    function send_mail_pass($email, $user, $pass) {
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dfec722c6f9084';                     //SMTP username
            $mail->Password   = '3a76d5a9de2d0a';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('vanhai@example.com', 'Van Hai');
            $mail->addAddress($email, $user); 

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Quen mat khau';
            $mail->Body    = 'Mat khau cua ban la: '. $pass;

            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>