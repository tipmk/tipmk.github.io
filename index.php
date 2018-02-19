﻿<?php
$usuario    = "cafe";
$senha      = "cafedb";
$db         = "processoSeletivo";
$server     = "172.16.0.6";

/**
 * URL: http://cafe.local
 * Nesta tela tera que listar numa taleba todos os usuarios cadastrados na tabela usuario. Listar o nome, email, endereço e telefone
 * Se possivel utilizar AJAX com jQuery. O jquery esta na pasta js
 * Em cada linha da tabela, criar um botao 'Atualizar' que levara para a tela de atualizacao deste usuario, em edit.php
 * Em cada linha da tabela, criar um botao 'Deletar' que ira deletar o usuario do banco de dados
 * Criar um botao 'Novo Item' que levara para a tela de cadastro add.php
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Processo Seletivo - Desenvolvedor Web</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Processo Seletivo - Desenvolvedor Web</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="./">In&iacute;cio</a></li>
    </ul>
   </div>
  </div>
 </nav>

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Itens</h2>
		</div>
		<div class="col-sm-6">
			<form action="./">
				<div class="input-group h2">
					<input name="buscar" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</form>			
		</div>
		<div class="col-sm-3">
			<a href="add.php" class="btn btn-primary pull-right h2">Novo Item</a>
		</div>
	</div> <!-- /#top -->
 
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Email</th>
                    <th>Telefone</th>
					<th>Endereço</th>                                        
					<th class="actions">Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1001</td>
					<td>Rogério de Ozarias Silva</td>
					<td>rogerio@pmk.com.br</td>
                    <td>11 5054-3601</td>
					<td>Av Jandira, 295, cj 505</td>
					<td class="actions">
						<a class="btn btn-warning btn-xs" href="edit.php">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#">Excluir</a>
					</td>
				</tr>
				<tr>
					<td>1002</td>
					<td>Rogério de Ozarias Silva</td>
					<td>rogerio@pmk.com.br</td>
                    <td>11 5054-3601</td>
					<td>Av Jandira, 295, cj 505</td>
					<td class="actions">
						<a class="btn btn-warning btn-xs" href="edit.php">Editar</a>
						<a class="btn btn-danger btn-xs"  href="#">Excluir</a>
					</td>
				</tr>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Proximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>