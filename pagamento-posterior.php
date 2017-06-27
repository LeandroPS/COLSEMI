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
				<p>
					Use esta página para realizar o pagamento posteriormente a sua inscrição preenchendo os dados abaixo:
				</p>
				<p>
					<form method="post" action="pagamento-posterior2.php">
						<p>
						Preencha o nome completo presente na inscrição:
						</p>
						<input type="text" class="nome" name="nome" placeholder="Nome completo" required>
						<p>
						Selecione a modalidade da inscrição:
						<div class="select-wrapper">
							<select name="modalidade" required>
								
								<option value="prof-doc-com">
                                  Professores - doutores e professores-mestres (comunicação oral ou pôster)
                                </option>
								<option value="alu-pos-com">
                                  Alunos de pós-graduação stricto sensu (comunicação oral ou pôster)
                                </option>
								
								<option value="alu-grad-post">
                                  Alunos de graduação e graduados(pôster)
                                </option>
                                <option value="ouvinte">
                                  Ouvinte (sem apresentação)
                                </option>
								
<!--								<option value="teste">Teste</option>-->
							</select>
						</div>
						</p>
						<p>Você se inscreveu em algum minicurso?</p>
							<input type="radio" name="confirm_minicurso" required id="sim" value="sim"><label for="sim">Sim</label>
							<input type="radio" name="confirm_minicurso" required id="nao" value="nao"><label for="nao">Não</label>	
						<p>
							<input type="Submit" name="Enviar" value="Pagar">
						</p>
					</form>
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