<?php


if(isset($_POST['email'] && !empty($_POST['email'])))

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$mensagem = addslashes($_POST['mensagem'])


$to = "cristhoperoliveira@gmail.com";
$subject = "Contato - FrontEnd";
$body = "Nome: " .$nome. "\n".
        "Email: " .$email. "\n".
        "Nome: " .$mensagem;

$header = "From: cristhoper.victor@gmail.com" "\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    
    echo("Email Enviado Com Sucesso")

}else{
    echo("O Email não pode ser enviado");
}




}

?>