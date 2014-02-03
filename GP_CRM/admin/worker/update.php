<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="José Monteiro">
    <link rel="shortcut icon" href="../../../assets/ico/favicon.png">

    <title>Inserir Funcionarios</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
      a.navbar-brand {
      padding-bottom: 1px;
      padding-top: 1px;
    }
    </style>
   </head>


  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html" title="Ir para página principal" ><img src="../../logo.png" title="cloud CRM" ></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.html" title="Ir para o painél de administração" ><span class="glyphicon glyphicon-home"></span> Painel de Administração</a></li>
            <li><a href="../application/index.html" title="Ir para o módulo de gestão da aplicação" >Aplicação</a></li>
            <li class="active"><a href="./index.html" title="Ir para o módulo de gestão dos funcionários" >Funcionários</a></li>
            <li><a href="../personal/index.html" title="Ir para o módulo de gestão da área pessoal">Área Pessoal</a></li>
          </ul>
          	
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container">

		<div class="row row-offcanvas row-offcanvas-right">
		<div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
          </p>

          <ol class="breadcrumb">
			  <li><a href="../index.html"><?php echo $lang_worker_update_text_1;?></a></li>
			  <li><a href="./index.html"><?php echo $lang_worker_update_text_2;?></a></li>
			  <li class="active"><?php echo $lang_worker_update_text_3;?></li>
			</ol>

			<div class="page-header">
				<h1><?php echo $lang_worker_update_text_4;?></h1>
			</div>
			<p class="lead"><?php echo $lang_worker_update_text_5;?></p>
          
			<div class="col-lg-10">
	
				<form action="">
			
					<fieldset>
						<legend>
							<?php echo $lang_worker_update_text_6;?>
						</legend>
					
						<div class="col-lg-8">
							<label for="nome" ><?php echo $lang_worker_update_text_7;?></label>
							<p class="form-control-static">1</p>
							<br>
						</div>
						
						<div class="col-lg-8">
							<label for="nome" ><?php echo $lang_worker_update_text_8;?></label>
							<p class="form-control-static">Daniela Pacheco</p>
							<br>
						</div>
						
						<div class="col-lg-6">
						
							<label for="email" title="Introduza o correiro eletrónico do funcionário" ><?php echo $lang_worker_update_text_9;?></label>
							<p class="form-control-static"><a href="mailto:daniela.pacheco@email.com">daniela.pacheco@email.com</a></p>
							<br>		
						</div>
						
						<div class="col-lg-8">
							<label for="inputfile" title="Introduza uma fotografia do funcionário"><?php echo $lang_worker_update_text_10;?></label>
							<br>
							<img src="../../logo.png" alt="..." class="img-thumbnail">
							</br>
							</br>
						</div>

					</fieldset>

					<fieldset>
						<legend>
							<?php echo $lang_worker_update_text_11;?>
						</legend>
						<span class="help-block"><?php echo $lang_worker_update_text_12;?></span>
						<table class="table table-striped table-hover">
							
							<tr>
								<th></th>
								<th><?php echo $lang_worker_update_text_13;?></th>
								<th><?php echo $lang_worker_update_text_14;?></th>
								<th><?php echo $lang_worker_update_text_15;?></th>
							</tr>
						
							<tr>
								<th><?php echo $lang_worker_update_text_16;?><i lang="en-uk"><?php echo $lang_worker_update_text_17;?></i></th>
								<td><input type="checkbox" id="gli" value="gli"></td>
								<td><input type="checkbox" id="gle" value="gle"></td>
								<td><input type="checkbox" id="gld" value="gld"></td>
							</tr>
							
							<tr>
								<th><?php echo $lang_worker_update_text_18;?></th>
								<td><input type="checkbox" id="gci" value="gci"></td>
								<td><input type="checkbox" id="gce" value="gce"></td>
								<td><input type="checkbox" id="gcd" value="gcd"></td>
							</tr>
						
							<tr>
								<th><?php echo $lang_worker_update_text_19;?></th>
								<td><input type="checkbox" id="gcpi" value="gcpi"></td>
								<td><input type="checkbox" id="gcpe" value="gcpe"></td>
								<td><input type="checkbox" id="gcpd" value="gcpd"></td>
							</tr>
							
							<tr>
								<th><?php echo $lang_worker_update_text_20;?></th>
								<td><input type="checkbox" id="gei" value="gei"></td>
								<td><input type="checkbox" id="gee" value="gee"></td>
								<td><input type="checkbox" id="ged" value="ged"></td>
							</tr>
							
							<tr>
								<th><?php echo $lang_worker_update_text_21;?></th>
								<td><input type="checkbox" id="gfi" value="gfi"></td>
								<td><input type="checkbox" id="gfe" value="gfe"></td>
								<td><input type="checkbox" id="gfd" value="gfd"></td>
							</tr>

						</table>

					</fieldset>
					</br>
			
					<button type="submit" class="btn btn-lg btn-primary"><?php echo $lang_worker_update_text_22;?></button>
				</form>
			</div>
		  
        </div><!--/span-->

      </div><!--/row-->

      <hr>

      <footer>
        <p>
           &copy; Interface e código realizado por
           <a href="mailto:lei123002@alunos.estgoh.ipc.pt" title="Enviar e-mail a José Monteiro" >José Monteiro</a>,
           <a href="mailto:lmfcc_5@hotmail.com" title="Enviar e-mail a Luis Costa" >Luis Costa</a>,
           <a href="mailto:godlike.mailbox@gmail.com" title="Enviar e-mail a Manuel Rama" >Manuel Rama</a>,
           <a href="mailto:marcomotagds@gmail.com" title="Enviar e-mail a Marco Mota" >Marco Mota</a> e 
           <a href="mailto:tom3silva@gmail.com" title="Enviar e-mail a Tomé Silva" >Tomé Silva</a>.
        </p>
        <p>Código licenciado pela licença <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blanck" title="Ver termos e condições para o uso, reprodução e distribuição da licensa Apache 2.0" >Apache 2.0</a>.</p>
        <p>Versão 1.0 &#8226; 2013 &#8226; <a href="../help.html" target="_blanck" title="Ver manual do utilizador" >Ajuda</a></p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../../assets/js/jquery.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
    <style>
    	a.navbar-brand {
    		padding-bottom: 1px;
    		padding-top: 1px;
    	}
    	
    </style>
  </body>
</html>
