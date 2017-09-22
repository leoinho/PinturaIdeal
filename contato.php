<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['titulo'];

$cidade=$_POST['cidade'];

$bairro=$_POST['bairro'];

$lote=$_POST['lote'];

$telefone=$_POST['telefone'];

$comentario=$_POST['comentario'];

$arqueivo=$_POST['arquivo'];

$Destinatario="leoinhosagaz@hotmail.com";


$Titulo="$titulo";


$mensagem1="

Uma mensagem vinda do site !

Algum vistante mandou essa mensagem pelo site.

Nome: $nome

cidade: $cidade

Bairro: $bairro

Lote/numero: $lote

Telefone: $telefone

Email: $email

Mensagem: $comentario";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email");

?>

<html>

<body>

Enviado com sucesso !

</body>

</html>
