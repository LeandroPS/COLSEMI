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
								<a href="Quinta_Circular.pdf" target="_blank">5ª Circular</a>
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
				<h2>
					Pagamento posterior	
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

						if(check_in_range('2017-01-10', '2017-08-15', $now)){
							return "15/06";
						}else if(check_in_range('2017-08-16', '2017-09-31', $now)){
							return "31/07";
						}else if(check_in_range('2017-10-01', '2017-11-10', $now)){
							return "10/11";
						}else{
							return "erro";
						}
					}

					$titulo["prof-doc-coord"] = "Professores – doutores (coordenador de simpósio)";
					$titulo["prof-doc-com"] = "Professores - doutores e professores-mestres (comunicação oral ou pôster)";
					$titulo["alu-pos-com"] = "Alunos de pós-graduação stricto sensu (comunicação oral ou pôster)";
					$titulo["alu-pos-post"] = "Alunos de pós-graduação lato e stricto sensu (pôster)";
					$titulo["alu-grad-post"] = "Alunos de graduação e graduados(pôster)";
                    $titulo["ouvinte"] = "Ouvinte (Sem apresentação)";

					$preco["minicurso"]["15/06"] = 50;
					$preco["minicurso"]["31/07"] = 70;
					$preco["minicurso"]["10/11"] = 80;

					$preco["ouvinte"]["15/06"] = 40;
					$preco["ouvinte"]["31/07"] = 50;
					$preco["ouvinte"]["10/11"] = 60;

					$preco["prof-doc-coord"]["15/06"] = 130;
					$preco["prof-doc-coord"]["31/07"] = 150;
					$preco["prof-doc-coord"]["10/11"] = 180;

					$preco["prof-doc-com"]["15/06"] = 130;
					$preco["prof-doc-com"]["31/07"] = 150;
					$preco["prof-doc-com"]["10/11"] = 180;

					$preco["alu-pos-com"]["15/06"] = 90;
					$preco["alu-pos-com"]["31/07"] = 100;
					$preco["alu-pos-com"]["10/11"] = 120;

					$preco["alu-pos-post"]["15/06"] = 90;
					$preco["alu-pos-post"]["31/07"] = 100;
					$preco["alu-pos-post"]["10/11"] = 120;

					$preco["alu-grad-post"]["15/06"] = 70;
					$preco["alu-grad-post"]["31/07"] = 90;
					$preco["alu-grad-post"]["10/11"] = 100;

					$preco["teste"]["10/11"] = 1.00;

					$botao["teste"] = "X7X8LHW4BPMQS";

					$nome = $_POST['nome'];
					$modalidade = $_POST['modalidade'];
					$confirm_minicurso = $_POST['confirm_minicurso'];

				?>
  				<p>
						Existem duas formas de pagar pela sua inscrição, por um depósito bancário ou com seu cartão de crédito através do PayPal.
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
					Ou, para utilizar seu cartão de crédito use o botão abaixo:
				</p>
				<p>
<?php if($modalidade != "teste"){ ?>
					
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="darciliasimoes@gmail.com">
	<input type="hidden" name="currency_code" value="BRL">
	<input type="hidden" name="item_name" value="Inscrição COLSEMI - <?php echo $titulo[$modalidade];?> <?php echo $confirm_minicurso=='sim'? ' + Minicurso':''; ?>">
	<input type="hidden" name="on0" value="Nome">
	<input type="hidden" name="os0" maxlength="200" value="<?php echo $nome; ?>">
	<input type="hidden" name="amount" value="<?php echo $confirm_minicurso=='sim'? ($preco[$modalidade][DataVencimento()] + $preco["minicurso"][DataVencimento()]).'.00':$preco[$modalidade][DataVencimento()].'.00'; ?>">
	<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>
				
<?php }else{ ?>
				
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_xclick">
	<input type="hidden" name="business" value="darciliasimoes@gmail.com">
	<input type="hidden" name="currency_code" value="BRL">
	<input type="hidden" name="item_name" value="Inscrição COLSEMI - teste">
	<input type="hidden" name="on0" value="Nome">
	<input type="hidden" name="os0" maxlength="200" value="<?php echo $nome; ?>">
	<input type="hidden" name="amount" value="1.00">
	<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>	
				
<?php } ?>
			
				</p>
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