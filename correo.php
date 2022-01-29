<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msj']) && !empty($_POST['email'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $msj = $_POST['msj'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: noreply@example.com" . "\r\n";
            $header.= "X-Mailer: PHP/".phpversion();
            $mail = @mail ($email, $asunto, $msj, $header);
            if($mail){
                echo "<h4>Mail enviado exitosamente!</h4>";
            }
        }
    }
?>