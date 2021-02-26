<?php
                 use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                $email=$_GET['email'];
                $mes=$_GET['mes'];
                require 'PHPMailer/PHPMailer.php';
			    $mail = new PHPMailer();
                
                $mail->setFrom('EventPlanner@gmail.com','EventPlanner');
                $mail->addAddress($email);
                $mail->Subject = "Reply From EventPlanner";
                $mail->isHTML(true);
                $mail->Body = "
                 $mes
                ";

                if ($mail->send()){
                    header("location:index.php");
                }
                else
                    $msg = "Something wrong happened! Please try again!";
			
?>