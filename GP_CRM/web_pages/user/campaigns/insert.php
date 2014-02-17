 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sub-Menu</button>
          </p>

          <ol class="breadcrumb">
			  <li><a href="../index.html">Painel Principal</a></li>
              <li><a href="./index.html">Campanhas</a></li>
			  <li class="active">Inserir</li>
			</ol>

          <div class="page-header">
				<h1>Inserir Campanha</h1>
			</div>
			<p class="lead">Introduza os dados da nova campanha comercial.</p>
			
			<div class="col-lg-10">
	
				<form action="">
			
					<fieldset>
						<legend>
							Dados da Campanha
						</legend>
					
						<div class="col-lg-6">
							<label for="num" title="Introduza o número da campanha comercial" >Número da campanha</label>
							<p class="form-control-static">[Número da campanha]</p>
							</br>
							
							<label for="nome" title="Introduza o nome da campanha" >Nome</label>
							<input type="text" class="form-control" placeholder="Nome da campanha" title="Introduza o nome da campanha" id="name">
							<span class="help-block">Introduza o nome da campanha</span>
							</br>
						
							<label for="email" title="Introduza a data de início da campanha" >Data de início</label>
							<input type="date" class="form-control" placeholder="Data de início da campanha" title="Introduza a data de início da campanha" id="email">
							<span class="help-block">Introduza a data de início da campanha</span>
							</br>
              
              <label for="email" title="Introduza a data de fim da campanha" >Data de fim</label>
							<input type="date" class="form-control" placeholder="Data de fim da campanha" title="Introduza a data de fim da campanha" id="email">
							<span class="help-block">Introduza a data de fim da campanha</span>
							</br>
							
							<label for="email" title="Introduza as observações da campanha" >Observações</label>
							<textarea class="form-control" rows="3" title="Introduza as observações da campanha"></textarea>
							<span class="help-block">Introduza as observações da campanha</span>
							</br>
						
						</div>
					
					</fieldset>

					<fieldset>
						<legend>
							Agendamentos
						</legend>
						<span class="help-block">Escolha os clientes e <i lang="en">leads</i> associados à campanha</span>
					
						<input type="checkbox" id="check" value="toc"> Todos os <i>leads</i></br>
						<input type="checkbox" id="check" value="toc"> Todos os clientes</br>
						

					</fieldset>
					</br>
			
					<button type="submit" class="btn btn-lg btn-primary">Criar</button>
				</form>
			</div>
			
		
		
        </div>
      </div>
    </div><!--/.container-->