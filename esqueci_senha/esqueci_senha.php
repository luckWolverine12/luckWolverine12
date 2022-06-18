<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta property="ogg:title"content="repair fogoes">
        <meta property="ogg:description" content="nossa loja online contem os nossos produtos sobre fogões">
        <meta property="ogg:url" content ="https://repairfogoes.com.br">
        <meta property="ogg:type"content="website">
        <title>::recuperação de senha::</title>
        </head>
<body>
    <link href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" href="../js/bootstrap.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
      <div id ="menu"></div>
    <div id="resetarsenha">insira seu E-mail</div>
      <form name="botaoy" action="https://repairfogoes.com.br/esqueci_senha/esqueci_senha.php" method="post">
<br>
<input type="hidden" name="password" id="password" value="none"></input>
<br>
<input type="email" required placeholder="E-mail" name="emailReset" id="emailReset" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
<br>
<input type="text" required placeholder="USUARIO" name="usernameReset" title="No minimo 3, no máximo 10 letras MAIÚSCULAS" id="usernameReset" pattern="[A-Z]{3,}" maxlength="10"></input>
<br>
<div class="g-recaptcha" data-sitekey="6LdVrGceAAAAAJQNX2GtB9LOYCX8l88M9vr2DOcc"></div>
<input onClick="knautiluzPassMathFramework();" type="submit" name="botaoy" id="gologin" value="⟳"/>
<br>
</form>
</body>
<footer></footer>

<?php
if(isset($_POST["botaoy"])) {

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

if (!$captcha_data) {
echo "<span id=\"captchaError\">Complete o reCAPTCHA</span>";
    return true;
}
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=meucodigo&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
if ($resposta.success) {
require_once'../bd/bd_connect.php';
require_once'../function.php';

$usuario = mysqli_real_escape_string($mysqli,$_POST['usuarioreset']);
$senha= mysqli_real_escape_string($mysqli,$_POST['senha']);
$email = mysqli_real_escape_string($mysqli,$_POST['emailreset']); 
$sql =$mysqli->query("SELECT * FROM `data` WHERE email = '$email'");
$get = $sql->fetch_array();
$db_usuario = $get['usuario'];
$db_email= $get['email'];
$db_senha=$get['senha'];

if($usuario !=$db_usuario || $email !=$db_email || $senha !=$db_senha){
    echo'<span id \= \"MsgOne\">dados incorretos</span>;
}else{
    $sql = "UPDATE `data` SET `senha`="'.md5($senha). WHERE email = '$email'";
    
    $sendEmail= $mysql->query("SELECT * FROM data WHERE email='$emailReset'");
    $row = $sendEmail->$num_rows;
    $assunto= "sua senha foi alterada!!";
    $email = $_POST["emailreset"];
    $mensagem = "ola! alteramos sua senha com sucesso!mude ela no painel de usuario.<br>sua senha é.$senha";

$enviar ="$mensagem"

$define("gpuser" ,'email@email.com');
$define("gpWD",'senha@exemplo');

function smtpmailer($de,$de_nome,$para,$assunto,$corpo){
     global $error;
     
     $mail = new PHPMailer();
     $mail->charset="utf-8";
     $mail-> IsSMTP();
     $mail-> SMTPDEBUG=0;
     $mail->SMTPAuth=true;
     $mail-> HOSTSecure='tls';
     $mail-> Host = 'mail.google.com';
     $mail->port = 587;
     $mail->usuario = repairfogoes@gmail.com;
     $mail->senha = g#f3hca90;
     $mail->SetFrom($de,$de_para);
     $mail->Subject= $assunto;
     $mail->Body= $corpo;
     $mail->IsHTML(true);
     $mail->AddAddress($para);
     if($mail-> $send(){
         $error= 'mailError:'.$mail->Errorinfo;
         return false;
     }else{
         $error = 'mensagem foi enviada';
         return true;
     
     
}
}
if (smtpmailer($emailz, 'noreply@repairfogoes', 'repairfogoes', $assunto, $enviar)) {
echo "<span id=\"msgTwo\">Senha alterada! Verifique seu e-mail com a nova senha.</span>";
 return true;

} else {
if (!empty($error)) echo $error;}}}
}
?>
?>
</body>
</html>