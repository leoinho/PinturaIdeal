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

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pintura Ideal</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/pintura.css">
		

	</head>
	<body>

		<header>
			
			<div class="container">
				<img id="logotipo" src="img\logotipo.png" alt="Logotipo">
			</div>

			

			<div class="container">
				
				<div class="row">
					
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="#"></a></li>
							<li><a href=""></a></li>
							<li><a href="#"></a></li>
							<!--<li class="search">
								<div class="input-group">
							      <input type="search" placeholder="pesquisa">
							      <span class="input-group-btn">
							        <button type="button"><i class="fa fa-search"></i></button>
							      </span>
							    </div><!-- /input-group -->
							</li>
						</ul>
					</nav>

				</div>

			</div>			

		</header>
			<div>
			<p class="pform">Fazer seu orçamento gratis é fácil! Preencha todos os campos a baixo, tendo a opção de <br>
			enviar fotos
			(este campo é opcional).Em até 24 horas entraremos em contato com você!</p>
		</div>
		<section>
			<div class="container">
      <span class="borda">
      <!--<form method="post" action="https://leoinho.github.io/PinturaIdeal/">
		<input type="hidden" name="redirect" value="https://leoinho.github.io/PinturaIdeal/">
		<input name="recipient" value="leoinhosagaz@hotmail.com" type="hidden">
		<input name="required" value="nome,email,cidade,bairro,lote,telefone,comentário,arquivo" type="hidden">
		<input type="hidden" name="sort" value="nome,email,cidade,bairro,lote,telefone,comentário,arquivo">
		<input type="hidden" name="subject" value="Orçamento PinturaIdeal">-->
      <form method="post" action="leoinhosagaz@mail.com">
      <input type="hidden" name="redirect" value="index.html">
      <div id="posição1" class="row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault01">Nome</label>
          <input type="text" name="nome" class="form-control" id="validationDefault01" placeholder="digite seu nome" value="" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationDefault02">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com" value="" required>
        </div>
      </div>
      <div id="posição2" class="row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Cidade</label>
          <input type="text" name="didade" class="form-control" id="validationDefault03" placeholder="Cidade onde mora" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Bairro</label>
          <input type="text" name="bairro" class="form-control" id="validationDefault04" placeholder="bairro onde mora" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationDefault05">Lote/número</label>
          <input type="text" name="lote" class="form-control" id="validationDefault05" placeholder="lote/numero da casa" required>
          <div class="invalid-feedback">
            Please provide a valid zip.

          </div>
        </div>
      </div>
      <div id="posição3" class="row">
        <div class="col-md-3 mb-3">
          <label for="validationDefault04">Telefone</label>
          <input type="text" name="telefone" class="form-control" id="validationDefault04" placeholder="Exemplo(xx)xxxxx-xxxx" required>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="col-md-3 mb-3" >
          <label for="validationDefault04">Comentário</label>
          <textarea name="comentário" class="form-control area" id="validationDefault04" placeholder="Exatamente o que deseja" required></textarea>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
          </div>
        </div>
        <div id="posição4">
<div class="form-group">
    <label for="exampleFormControlFile1">Voce pode adicionar uma pasta com as fotos de onde deseja que o serviço seja feito.</label>
    <input type="file" name="arquivo" class="form-control-file" id="exampleFormControlFile1">
  </div>
      <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>

		</section>

		<footer>
			
			<div id="rodapeform" class="row row-cinza-claro">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-md-2 text-center">
							
							<img id="logobaixo" class="logotipo" src="img\logotipo.png">

						</div>
						<div class="col-md-10">
							
							<div class="row row-cols">
								
								<div class="col-md-4 col-links">
									
									<h4></h4>

									<ul class="list-unstyled" id="listacontato">
										<li><i class="fa fa-angle-right"></i>Entre em contato</li>
										<li><i class="fa fa-angle-right">Telefone:</i></li>
										<li><i class="fa fa-angle-right"></i>(21)99850-5047</li>
									</ul>

								</div>
								<!--<div class="col-md-4 col-get-in-touch">
									
									
									<ul class="list-unstyled list-socials">
										<li>
											<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>

										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a>
										</li>
									</ul>

								</div>-->
							</div>

						</div>

					</div>

				</div>

			</div>

			

		</footer>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>