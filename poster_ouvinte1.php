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
								<a href="Primeira Circular.pdf" target="_blank">1ª Circular</a>
							</li>
							<li>
								<a href="Segunda_Circular.pdf" target="_blank">2ª Circular</a>
							</li>
							<li>
								<a href="Terceira_Circular.pdf" target="_blank">3ª Circular</a>
							</li>
							<li>
								<a href="Quarta_Circular.pdf" target="_blank">4ª Circular</a>
							</li>
							<li>
								<a href="Cartaz_a4.pdf" target="_blank">Cartaz A4</a>
							</li>
							<li>
								<a href="Cartaz_a3.pdf" target="_blank">Cartaz A3</a>
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
								<a href="inscricao.html">Inscrição</a>
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
			<div class="block">
				<h2>Obrigado!</h2>
			<?php
				include "PHPMailer/PHPMailerAutoload.php";
				$modalidade = $_POST['modalidade'];
				$titulo = $_POST['titulo'];
				$nome = $_POST['nome'];
				$endereco = $_POST['endereco'];
				$bairro = $_POST['bairro'];
				$cep = $_POST['cep'];
				$estado = $_POST['estado'];
				$cidade = $_POST['cidade'];
				$sexo = $_POST['sexo'];
				$email = $_POST['email'];
				$formacao = $_POST['formacao'];
				$instituicao = $_POST['vinculo'];

				$confirma_minicurso = $_POST['confirm_minicurso'];
				$minicurso = $_POST['minicursos'];
				$simposio = $_POST['simposios'];

				$autor = $_POST['autor'];
				$coautor = $_POST['coautor'];
				$resumo = $_POST['resumo'];
				$chave1 = $_POST['chave1'];
				$chave2 = $_POST['chave2'];
				$chave3 = $_POST['chave3'];
				$chave4 = $_POST['chave4'];
				$chave5 = $_POST['chave5'];
				
				//if($confirma_minicurso == "nao"){
					$corpo = "<b>Nome: </b>". $nome 
						."<br><b>Endreço: </b>". $endereco 
						."<br><b>Bairro: </b>". $bairro 
						."<br><b>CEP: </b>". $cep 
						."<br><b>Estado: </b>". $estado 
						."<br><b>Cidade: </b>". $cidade 
						."<br><b>Sexo: </b>" . $sexo 
						."<br><b>Email: </b>" . $email 
						."<br><b>Formação: </b>" . $formacao 
						."<br><b>Com minicurso: </b>" . $confirma_minicurso				
						.($confirma_minicurso == "nao"? "": "<br><b>Minicurso: </b>" . $minicurso)
						."<br><br>Informações sobre resumo: <br><br>"
						."<br><b>Titulo: </b>" . $titulo 
						."<br><b>Modalidade: </b>" . $modalidade 
						.($modalidade == "Pôster"? "": "<br><b>Simposio: </b>" . $simposio)
						."<br><b>Instituição Vinculada: </b>" . $instituicao 
						."<br><b>Autor: </b>". $autor 
						."<br><b>Coautor: </b>" . $coautor 
						."<br><b>Resumo: </b>" . $resumo 
						."<br><b>Chaves: </b>" . $chave1 . ", " . $chave2 . ", " . $chave3 . ", " . $chave4 . ", " . $chave5 . "<br>";
/*
				}else{
					$corpo = "<b>Nome: </b>". $nome 
						."<br><b>Endreço: </b>". $endereco 
						."<br><b>Bairro: </b>". $bairro 
						."<br><b>CEP: </b>". $cep 
						."<br><b>Estado: </b>". $estado 
						."<br><b>Cidade: </b>". $cidade 
						."<br><b>Sexo: </b>" . $sexo 
						."<br><b>Email: </b>" . $email 
						."<br><b>Formação: </b>" . $formacao 
						."<br><b>Com minicurso: </b>" . $confirma_minicurso
						."<br><b>Minicurso: </b>" . $minicurso
						."<br><br>Informações sobre resumo: <br><br>"
						."<br><b>Titulo: </b>" . $titulo 
						."<br><b>Modalidade: </b>" . $modalidade 
						."<br><b>Instituição Vinculada: </b>" . $instituicao 
						."<br><b>Autor: </b>". $autor 
						."<br><b>Coautor: </b>" . $coautor 
						."<br><b>Resumo: </b>" . $resumo 
						."<br><b>Chaves: </b>" . $chave1 . ", " . $chave2 . ", " . $chave3 . ", " . $chave4 . ", " . $chave5 . "<br>";
				}
		*/
				$user = new PHPMailer();
				$send = new PHPMailer();
				
				$user->isSMTP();
				$send->isSMTP();
				
				$user->Host = "smtp.gmail.com";
				$send->Host = "smtp.gmail.com";
				
				$user->Port = 587;
				$send->Port = 587;

				$user->SMTPSecure = 'tls';
				$send->SMTPSecure = 'tls';

				$user->SMTPAuth = true;
				$send->SMTPAuth = true;

				$user->Username = "comunicapostersextocolsemiuerj@gmail.com";
				$send->Username = "comunicapostersextocolsemiuerj@gmail.com";

				$user->CharSet = 'UTF-8';
				$send->CharSet = 'UTF-8';

				$user->Password = "ugovolli";
				$send->Password = "ugovolli";

				$user->setFrom($email, $nome);
				$send->setFrom("comunicapostersextocolsemiuerj@gmail.com", "Colsemi 2017");

				$user->FromName = $nome;
				$send->FromName = "Colsemi";

				$user->addAddress("comunicapostersextocolsemiuerj@gmail.com");
				$user->addAddress("leandro.pires.souza@gmail.com");
				$send->addAddress($email);

				$user->Subject = "Nova inscrição na modalidade: ".$modalidade;
				$send->Subject = "Inscricao Colsemi";

				$user->msgHTML($corpo);
				$send->msgHTML("<p>
					ATENÇÃO: ESTE AINDA NÃO É O E-MAIL DE ACEITAÇÃO DA SUA INSCRIÇÃO
				</p>
				<p>Obrigado por se inscrever no 6º Colsemi.</p>");

				$enviado = $user->send();
				$send->send();

				$user->ClearAllRecipients();
				$user->ClearAttachments();
				
				if ($enviado) {
					echo "<p>Você se inscreveu na modalidade ". $modalidade ."</p>";
					echo "<p>Qualquer erro de confirmação ou dúvida, entre em contato conosco.</p>";
				} 
				else {
  					echo "Não foi possível realizar seu cadastro agora, tente novamente mais tarde.";
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
					<div class="center"> 						<img src="images/SELEPROT_COLOR.png" class="seleprot-logo"> 						<img src="images/UERJ_LOGO.png"> 					</div> 					<div class="compartilhar"> 						<a href="https://www.facebook.com/sharer/sharer.php?u=http://colsemi2017.com.br"> 							<img src="images/fb-footer.png"> 						</a> 						<a href="http://twitter.com/intent/tweet?url=http://colsemi2017.com.br"> 							<img src="images/twitter-footer.png"> 						</a> 					</div>
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
