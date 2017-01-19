<!DOCTYPE html>
<html>
	<head>
		<title>COLSEMI 2017 - 6º Colóquio Internacional de Semiótica na UERJ</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" type="text/css" href="css/myriad.css">
		<link rel="stylesheet" type="text/css" href="css/application.css">
		<link rel="stylesheet" type="text/css" href="css/datas_importantes.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/circular.css">
		<link rel="stylesheet" type="text/css" href="css/formularios.css">
		<link rel="stylesheet" type="text/css" href="css/programacao.css">
		<link rel="stylesheet" type="text/css" href="css/resumo.css">
		
		<script type="text/javascript" src="javascript/estado_cidade.js"></script>
		<script type="text/javascript">
			window.onload = function() {
				new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);
			}
		</script>

		<script type="text/javascript">
			function minicurso(){
				var escolha = document.getElementsByName('minicurso');
				if( escolha == "sim"){
					alert("Sim");
				}
				else{
					alert("Nada");
				}
			}
		</script>
	</head>
	<body>
		<header>
			<div class="header">
				<div class="backgrounds" style="background-image: url('images/header.png')"></div>
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
				<span class="button-menu">MENU</span>
				<ul>
					<li>
						<div class="menu-center">
							<a href="index.html">Inicial</a>
						</div>
					</li>
					<li class="com-submenu">
						<div class="menu-center">
							<a >Circulares</a>
						</div>
						<ul class="submenu">
							<li>
								<a href="circular_1.html">1ª Circular</a>
							</li>
						</ul>
					</li>
					<li>
						<div class="menu-center">
							<a href="programacao.html">Programação</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="resumo_simposios.html">Simpósios</a>
						</div>
					</li>
					<li>
						<div class="menu-center">
							<a href="minicursos.html">Minicursos</a>
						</div>
					</li>
					<li class="com-submenu">
						<div class="menu-center">
							<a>Inscrição</a>
						</div>
						
						<ul class="submenu">
							<li>
								<a href="inscricao_ouvinte.html">Inscrição Ouvinte</a>
							</li>
							<li>
								<a href="inscricao_comunicacao_poster.html">Inscrição Comunicação-pôster</a>
							</li>
							<li>
								<a href="valores.html">Valores de inscrição</a>
							</li>
						</ul>

					</li>
					<li class="com-submenu">
						<div class="menu-center">
							<a>Normas</a>
						</div>
						
						<ul class="submenu">
							<li>
								<a href="normas_formatacao.html">Normas de formatação de textos</a>
							</li>
							<li>
								<a href="normas_envio_publicacao.html">Sobre o envio de textos para publicação</a>
							</li>
						</ul>
					</li>
					<li>
						<div class="menu-center">
							<a href="contato.html">Contato</a>
						</div>
					</li>
				</ul>

			</div>
		</header>
		<div class="container">			
			<div class="block em-construcao">
				<h2>
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
				$user->addAddress("leandro.pires.souza@gmail.com");
				$user->addAddress("contatosextocolsemiuerj@gmail.com");
				$user->Subject = "Nova mensagem para COLSEMI: ".$assunto;
				$user->msgHTML($corpo);
				$enviado = $user->send();

				$user->ClearAllRecipients();
				$user->ClearAttachments();
				if ($enviado) {
  					echo "Nós recebemos o seu contato!";
				} 
				else {
  					echo "Não foi possível receber o seu contato, tente novamente mais tarde!";
				}
			?>
					</h2>
			
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