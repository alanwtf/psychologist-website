
<?php
if (isset($_POST['submit'])){
    

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];

    $mailTo = "alan.mathiasen@outlook.com";
    $headers = "From: " . $mailFrom;
    $txt = "Recibiste un mensaje de " . $name . ". \n\n" . $text;

    mail($mailTo, $subject, $txt, $headers);
    header('Refresh: 3; URL=index.html');
    
    
}
?>

Mensaje enviado correctamente! te estamos redireccionando.