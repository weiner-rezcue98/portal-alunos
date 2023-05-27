<?php
if (!isset($_GET['nome_livro'])) {
	header("Location: index.php");
	exit;
}

$nome = trim($_GET['nome_livro']);

$dbh = new PDO('mysql:host=127.0.0.1;dbname=canaldoti', 'root', '');

$sth = $dbh->prepare('SELECT * FROM `livro` WHERE`nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR" class="default-style layout-navbar-fixed">

	
<!-- Mirrored from descomplica.jacad.com.br/academico/docs by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 14:17:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		
		<meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="baseContext" 		content="https://descomplica.jacad.com.br:443/academico/"/>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111317385-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-111317385-1');
		</script>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
		<title>Validação de Documentos da Instituição | Sistema Acadêmico SWA.JACAD</title>
		
		<link rel="icon" href="assets/img/favicon.ico"/>

		





<!-- Icon fonts -->
<link rel="stylesheet" href="assets/appwork/vendor/fonts/fontawesome.css">
<link rel="stylesheet" href="assets/appwork/vendor/fonts/ionicons.css">




<!-- Core stylesheets -->
<link rel="stylesheet" href="assets/appwork/vendor/css/rtl/bootstrap.css">
<link rel="stylesheet" href="assets/appwork/vendor/css/rtl/appwork.css">


	
	
		<link rel="stylesheet" href="assets/appwork/vendor/css/rtl/theme-swa.css">
	


<link rel="stylesheet" href="assets/appwork/vendor/css/rtl/colors.css">
<link rel="stylesheet" href="assets/appwork/vendor/css/rtl/uikit.css">
<link rel="stylesheet" href="assets/appwork/css/demo.css">


<!-- Libs -->

<link rel="stylesheet" href="assets/css/clients/swa.css">



		
		

<!-- Load polyfills -->
<script src="assets/appwork/vendor/js/polyfills.js"></script>
<script>document['documentMode']===10&&document.write('<script src="../../polyfill.io/v3/polyfill.min8a7a.js?features=Intl.~locale.en"><\/script>')</script>


<script src="assets/appwork/vendor/js/layout-helpers.js"></script>
		
<!-- Theme settings -->
<!-- This file MUST be included after core stylesheets and layout-helpers.js in the <head> section -->

	
		
<!-- Core scripts -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<script type="text/javascript">
	// All scripts to execute after page was loaded.
	// _SCRIPTS.push(function(){ $(...);  });
	var _SCRIPTS = [];
</script>
		















	<style>

    /* Alterar layout dos botões (Cor da borda, cor de fundo e cor da escrita)  */
    .btn-primary {
        border-color: #00E88F;
        background: #00E88F;
        color: #000000;
    }

    /* Alterar layout dos botões quando passa o mouse em cima do mesmo  */
    .btn-primary:hover {
        border-color: #009c60;
        background:#00E88F;
        color:#000000
       }

    
    /* Alterar cor do card com o botão de abrir o sistema academico  */
    .bg-primary {
        border-color: #00E88F !important;
        background-color: #00E88F !important;
        color:#000000
    }

    /* Alterar layout dos demais botões de acesso aos portas */
    .bg-secondary {
        border-color: #00E88F !important;
        background-color: #00E88F !important;
        color:#000000
    }
    /* Altera borda do testo dos cards*/   
    .card-header{
        border-color: #9b9b9b;
        color: #000000 !important;
    }
    /* Alterar a borda do card com o botão de abrir o sistema academico */
    html:not([dir="rtl"]) .border-primary, html[dir="rtl"] .border-primary {
        border-color: #8897AA !important;
    }

</style>


	</head>
	<body>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-1 layout-without-sidenav">
	
		<div class="layout-inner">
<div>
			
	









<!-- Layout navbar -->
<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-navbar-theme container-p-x nav-custom-color nav-doc-api" id="layout-navbar">
	<a href="#" class="navbar-brand app-brand demo py-0 mr-4 ml-2">
		<span class="app-brand-logo demo">
			








	
		<img class="img-fluid logo-portal"
			src="assets/img/org/logos/logo_descomplica_150x45.png" 
			
		/>
	

		</span>
		<span class="app-brand-text demo font-weight-normal ml-2">&nbsp;</span>
	</a>
	<div class="navbar-nav align-items-lg-center ml-auto">
    
	</div>
</nav>



			<!-- Layout container -->
			<div class="layout-container">			 
					
					<!-- Layout content -->
					<div class="layout-content">
					
						<!-- Content -->
						<div class="container-fluid flex-grow-1 container-p-y">
						

</br></br>
</div>
		<?php
		if (count($resultados)) {
			foreach($resultados as $Resultado) {
		?>
		<label><?php echo $Resultado['codigo']; ?></label><br>
		<label><?php echo $Resultado['nome']; ?></label><br>
		
		<?php
		} } else {
		?>
		<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">×</span>
  				</button>
				Nenhum documento encontrado para a código
			</div></center>
			<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item" aria-current="page">
			<a href="%3bjsessionid%3dFC621A73EFCA0003FC5EAEB7C1B1632F.html">Início</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">
			Validação de Documentos
		</li>
	</ol>
</nav>

<div class="row mt-2">
	<div class="col-lg-12 col-xl-12 col-md-12 col-12">
	
		<form action="busca.php" method="GET">
			
			<div class="col-xl-5 col-lg-5 offset-md-3">
				<div class="form-group">
					<div class="input-group input-group-lg">
	  					<input 
			    			type="text" 
			    			class="form-control" 
			    			data-required='true'
			    			name="nome_livro"
			    			id="codigo" 
			    			value=""
			    			placeholder="Código de Segurança"
			    		/>
			    		
						<span class="input-group-append">
							<button class="btn btn-primary bt-cpf" type="submit" title="Validar">
								<span class="d-none d-md-inline">
									Validar
								</span>
								<i class="fas fa-angle-double-right"></i>
							</button>
						</span>
					</div>
					<span class="help-inline"></span>
				</div>
				<p>
					Informe o código de segurança que consta no documento que você possui. Este código geralmente está localizado no rodapé dos documentos.
				</p>
			</div>
		</form>
	</div>
</div>
		<?php
		}
		?>
<div>
	<br>
</div>
</body>
</html>