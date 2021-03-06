<!DOCTYPE html>
<html lang="en">
<head>
<title>AutoCar</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
</head>
<body>
	<div class="header">
		<div class="header_left">
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Juiz de Fora - MG</li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(32) 3232-3232</li>
			</ul>
		</div>
		<div class="header_right">
				<div class="cd-main-header">
					<a class="cd-search-trigger" href="#cd-search"> <span></span></a>
					
				</div>
				<div id="cd-search" class="cd-search">
					<form action="#" method="post">
						<input name="search" type="search" placeholder="Pesquisar...">
					</form>
				</div>
			</div>
		</div>
			<div class="clearfix"></div>
		
		<div class="header-bottom">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a href="index.html"><img src="images/logo.png" alt=" " class="img-responsive"/><br></a></h1>
			</div>

			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html"><span data-hover="Página Inicial">Página Inicial</span></a></li>
						<li><a href="#.html"><span data-hover="Sobre">Sobre</span></a></li>
						<li><a href="#.html"><span data-hover="Aulas">Aulas</span></a></li>
						<li><a href="#.html"><span data-hover="Contato">Contato</span></a></li>
                                                <li><a href="#.html"><span data-hover="Area do Aluno">Area do Aluno</span></a></li>
                                                <li><a href="#.html"><span data-hover="Area do Funcionario">Area do Funcionario</span></a></li>
                                        </nav>
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="logoutFuncionario.php">logout</a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<div class="banner-bottom-icons">
		<div class="container">
			<div class="w3l-heading">
				<h2 class="w3ls_head"><?php 
                                $nome_cookie = $_COOKIE['nome'];
                                    if(isset($nome_cookie)){
                                      echo"Bem-Vindo, $nome_cookie <br>";
                                      }?></h2>
			</div>
		<div class="col-md-4 w3_banner_bottom_icons_left hover15">
			<div class="w3_agile_banner_bottom">
				<figure><img src="images/13.png" alt=" " class="img-responsive" /></figure>
			</div>
		</div>
		<div class="col-md-8 w3_banner_bottom_icons_right">
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="index.html"><i class="fa-car"></i></a>
					<h3>Aulas</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
                            
                            <div class="w3_banner_bottom_icons1_effect">
					<a href="agenda.php"><i class="far fa-clock"></i></a>
					<h3>Horários</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
                            </div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class="fa fa-support"></i>
					<h3>Simulador</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
					<i class=" fa fa-bookmark"></i>
					<h3>Exames</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
                    <div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="CadastroAluno.html"><i class="fa fa-user-plus"></i></a>
					<h3>Alunos</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
			<div class="col-xs-6 w3_banner_bottom_icons1">
				<div class="w3_banner_bottom_icons1_effect">
                                    <a href="CadastroFuncionario.html"><i class="fa fa-user-plus"></i></a>
                                    
					<h3>Instrutores</h3>
					<p>Curabitur ac enim et augue consectetur elementum sed vitae neque.</p>
				</div>
			</div>
                    
                    
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	
</div> 

	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Endereço</h4>
					</div>
					<div class="footer-grid-info">
						<p>Auto Escola AutoCar
							<span>Rua Medeiros Maré,Exemplo, Número 56.</span>
						</p>
						<p class="phone">Phone :(32) 3232 - 3232
							<span>Email : <a href="mailto:exemplo@email.com">exemplo@email.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navegação</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="index.html">Página Inicial</a></li>
							<li><a href="lessons.html">Aulas</a></li>
							<li><a href="about.html">Sobre</a></li>
							<li><a href="mail.html">Contato</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h6>Sempre guiando você para o caminho certo!</h6>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<h1><a href="index.html"><figure><img src="images/logo.png" alt=" " class="img-responsive"/></figure></br></figure></a></h1>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p> CENTRO DE ENSINO SUPERIOR DE JUIZ DE FORA - DESENVOLVIDO PARA A DISCIPLINA DE PROJETOS 2 E PROJETOS 3. </p>
			</div>
		</div>
	</div>
	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>
</html>