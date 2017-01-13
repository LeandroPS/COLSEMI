<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>COLSEMI - 6º Colóquio Internacional de Semiótica</title>
		<link rel="stylesheet" type="text/css" href="css/myriad.css">
		<link rel="stylesheet" type="text/css" href="css/application.css">
		<link rel="stylesheet" type="text/css" href="css/datas_importantes.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">

		<script type="text/javascript"></script>
	</head>
	<body>
		<header>
			<div class="header">
				<div class="backgrounds" style="background-image: url('images/header.png')"></div>
				<!--<h1>6° Colóquio 
					Internacional de 
					Semiótica</h1>-->
				<!-- <%= image_tag "LOGO.png" %>
			-->
				<div class="container">
					<div class="narrow-header">

						<img src="images/logo_colsemi.png">

					</div>
					<div class="datas">
						<div class="data white">
							<span class="ano">2017</span>
							<span class="mes">NOV</span>
							<span class="dia">10</span>
						</div>
						<div class="data white">
							<span class="ano">2017</span>
							<span class="mes">NOV</span>
							<span class="dia">13</span>
						</div>
						<div class="data white">
							<span class="ano">2017</span>
							<span class="mes">NOV</span>
							<span class="dia">14</span>
						</div>
					</div>
				</div>
			</div>
			<div class="menu">
				<ul>
					<li>
						<div class="menu-center">
							<a href="#">Inicial</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="circular1.html">Circulares</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="programacao.html">Programação</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="#">Resumos de Simpósios</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="#">Normas</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="#">Contato</a>
						</div>
					</li>
					<li>
						<button>Inscreva-se</button>
					</li>
				</ul>

			</div>
		</header>
		<div class="container">			
			<div class="block">
			<?php
				include "PHPMailer/PHPMailerAutoload.php";
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$assunto = $_POST['assunto'];
				$mensagem = $_POST['mensagem'];

				$corpo = "Nome: ". $nome . "<br>Email: " . $email . "<br>Assunto: " . $assunto . "<br>Mensagem: " . $mensagem;
				$user = new PHPMailer();
				$user->isSMTP();
				$user->Host = "smtp.gmail.com";
				$user->Port = 587;
				$user->SMTPSecure = 'tls';
				$user->SMTPAuth = true;
				$user->Username = "ouvintessextocolsemiuerj@gmail.com";
				$user->Password = "umbertoeco";
				$user->setFrom($email, $nome);
				$user->FromName = $nome;
				$user->addAddress("higor.italva@gmail.com");
				$user->Subject = $assunto;
				$user->msgHTML($corpo);
				$enviado = $user->send();

				$user->ClearAllRecipients();
				$user->ClearAttachments();
				if ($enviado) {
  					echo "E-mail enviado com sucesso!";
				} 
				else {
  					echo "Não foi possível enviar o e-mail.";
				}
			?>
			
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="contato">
					<h2>Contatos</h2>
					<p>
						
						Submissão de resumos: <a href="mailto: resumos.colsemi@gmail.com">resumos.colsemi@gmail.com</a>
						<br/>
						Remessa do texto integral: <a href="mailto: resumos.colsemi@gmail.com">texto.completo.colsemi@gmail.com</a>
						<br/>
						Inscrição de ouvintes: <a href="mailto: resumos.colsemi@gmail.com">inscricao.colsemi@gmail.com</a>
						<br/>
						Contato organização: <a href="mailto: resumos.colsemi@gmail.com">admin.colsemi@gmail.com</a>
						<br/>
						Contato monitoria: <a href="mailto: resumos.colsemi@gmail.com">monitoria.colsemi@globo.com</a>
						<br/>
						Sobre pagamento de taxa: <a href="mailto: resumos.colsemi@gmail.com">paga.inscricao.colsemi@globo.com</a>
					</p>
				</div>

				<div class="realizacao">
					<h2>Realização</h2>
					<img src="images/UERJ_LOGO.png">
				</div>
			</div>
			<div class="creditos">
				<img src="images/creditos.png" >
			</div>
		</footer>
		<script src="javascript/jquery.js"></script>
		<script src="javascript/script.js"></script>
	</body>
</html>