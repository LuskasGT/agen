<?php 
if(!empty($_POST["email"])){

   
$email = addslashes($_POST["email"]);
$nome = addslashes($_POST["nome"]);
$endereco = addslashes($_POST["endereco"]);
$telefone = addslashes($_POST["telefone"]);

$to = "lucas.g.theodooro@gmail.com";
$subject = "Contato para adoção";
$body = "email: ".$email. "\r\n".
        "nome: ".$nome. "\r\n".
        "endereco: ".$endereco. "\r\n".
        "telefone: ".$telefone;

$header = "From: lucas.g.theodooro@gmail.com"."\r\n".
 "Reply-To:" .$email."\r\n".
 "X=Mailer:PHP/".phpversion();

 // Adicionando para o SMTP responder direito para a porta 25
ini_set("SMTP","smtp.example.com" );
ini_set("smtp_port","587" );

 if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");
    echo $teste;
 }else{
    echo("Email não foi enviado");
    echo $teste;
 }


}
?>