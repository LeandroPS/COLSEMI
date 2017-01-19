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
			<div class="block">
				<h2>
					Obrigado	
				</h2>
			<?php

				function check_in_range($start_date, $end_date, $date_from_user)
				{
					// Convert to timestamp
					$start_ts = strtotime($start_date);
					$end_ts = strtotime($end_date);
					$user_ts = strtotime($date_from_user);

					// Check that user date is between start & end
					return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
				}

				function DataVencimento(){
					$now = date("y-m-d");
					
					if(check_in_range('2017-01-10', '2017-06-15', $now)){
						return "15/06";
					}else if(check_in_range('2017-06-16', '2017-07-31', $now)){
						return "31/07";
					}else if(check_in_range('2017-08-01', '2017-11-10', $now)){
						return "10/11";
					}else{
						return "erro";
					}
				}

				$preco["minicurso"]["15/06"] = 50;
				$preco["minicurso"]["31/07"] = 70;
				$preco["minicurso"]["10/11"] = 80;

				$preco["ouvinte"]["15/06"] = 40;
				$preco["ouvinte"]["31/07"] = 50;
				$preco["ouvinte"]["10/11"] = 60;

				$botao["ouvinte"]["nao"]["15/06"] = "3JUBRCFFKRGEG";
				$botao["ouvinte"]["nao"]["31/07"] = "AKKL2FL36XFAG";
				$botao["ouvinte"]["nao"]["10/11"] = "6SPBCR8YZMT8J";
				
				$botao["ouvinte"]["sim"]["15/06"] = "BWEJEKSDGAUBS";
				$botao["ouvinte"]["sim"]["31/07"] = "REUXKQGDNERHQ";
				$botao["ouvinte"]["sim"]["10/11"] = "AGGGZFMBQDT4S";
				
				$botao["teste"] = "X7X8LHW4BPMQS";

				include "PHPMailer/PHPMailerAutoload.php";
				$nome = $_POST['nome'];
				$endereco = $_POST['endereco'];
				$bairro = $_POST['bairro'];
				$cep = $_POST['cep'];
				$estado = $_POST['estado'];
				$cidade = $_POST['cidade'];
				$sexo = $_POST['sexo'];
				$email = $_POST['email'];
				$confirm_minicurso = $_POST['confirm_minicurso'];
				$minicurso = $_POST['minicursos'];
				
				if($confirm_minicurso=="sim"){
					$corpo = 
						"Nome: ".$nome
						."<br/><b>Endereço:</b> ".$endereco
						."<br/><b>Bairro:</b> ".$bairro
						."<br/><b>CEP:</b> ".$cep
						."<br/><b>Estado:</b> ".$estado
						."<br/><b>Cidade:</b> ".$cidade
						."<br/><b>Sexo:</b> ".$sexo
						."<br/><b>E-mail:</b> ".$email
						."<br/><b>Com Minicurso:</b> ".$confirm_minicurso
						."<br/><b>Minicurso:</b> ".$minicurso;
				}else{
					$corpo = 
						"Nome: ".$nome
						."<br/><b>Endereço:</b> ".$endereco
						."<br/><b>Bairro:</b> ".$bairro
						."<br/><b>CEP:</b> ".$cep
						."<br/><b>Estado:</b> ".$estado
						."<br/><b>Cidade:</b> ".$cidade
						."<br/><b>Sexo:</b> ".$sexo
						."<br/><b>E-mail:</b> ".$email
						."<br/><b>Com Minicurso:</b> ".$confirm_minicurso;
				}

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

				$user->addAddress("ouvintessextocolsemiuerj@gmail.com");
				$user->addAddress("leandro.pires.souza@gmail.com");
				$send->addAddress($email);

				$user->Subject = "Nova inscrição ouvinte - ".$nome;
				$send->Subject = "Inscricao Colsemi";

				$user->msgHTML($corpo);
				$send->msgHTML("
				<h1>Sua inscrição foi recebida</h1>
				<p>Obrigado por se inscrever no 6º Colsemi. Sua inscrição foi recebida com sucesso, se você ainda não pagou realize seu pagamento.</p>");

				$enviado = $user->send();
				$send->send();

				$user->ClearAllRecipients();
				$user->ClearAttachments();

				if ($enviado) {
					?>
  				<p>
						Sua inscrição foi recebida com sucesso, para realizar o pagamento é possível fazer um depósito bancário ou utilizar seu cartão de crédito através do PayPal.
					</p>
					<p>
						Caso opte pelo depósito bancário utilize os dados abaixo e em seguida envie um e-mail com o comprovante de pagamento escaneado para o seguinte e-mail: <a href="mailto:ouvintessextocolsemiuerj@gmail.com">ouvintessextocolsemiuerj@gmail.com</a>
					</p>
					<p>
						<strong>DADOS PARA DEPÓSITO:</strong><br>
						Banco Bradesco (CÓDIGO 237)<br>
						<strong>Agência:</strong> 6124<br>
						<strong>Conta poupança:</strong> 1000047-5<br>
						<strong>Nome:</strong> Darcilia M. P. Simões (CPF: 906.279.117- 49)<br>
					</p>
				<p>
					Em 72 horas, você receberá um e-mail que irá comprovar a sua inscrição no 6o COLSEMI.
				</p>
				<p>
					Ou, para utilizar seu cartão de Crédito use o botão abaixo:
				</p>
				<p>

					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $botao["ouvinte"][$confirm_minicurso][DataVencimento()]; ?>">
						<input type="hidden" name="on0" value="Nome">
						<input type="hidden" name="os0" maxlength="200" value="<?php echo $nome; ?>">
						<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
				</form>
			
				</p>
				<?php
				} 
				else {
					?>
  				<p>
						Houve um erro ao processar a sua inscrição por favor, tente novamente mais tarde!
					</p>
			<?php
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