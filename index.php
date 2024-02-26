
<!-- Observacoes para o SQLite -->
<!-- Antes de alterar qualquer tabela, executar a SQL: "PRAGMA foreign_keys = ON;" -->

<!-- TODO1: PHP: Execute um script que conecte com um banco de dados suportado no servidor -->
<!-- TODO2: PHP: Execute um script que crie uma tabela 'produtos' com os seguintes campos: id, nome-->
<!-- TODO3: PHP: Execute um script que liste as tabelas criadas -->
<!-- TODO4: PHP: Execute um script que liste as colunas da tabela 'produtos' -->
<!-- TODO5: PHP: Execute um script que insira um conteúdo na tabela 'produtos' -->
<!-- TODO6: PHP: Execute um script que exiba todas as colunas das tuplas da tabela 'produtos' -->
<!-- TODO7: PHP: Execute um script que exiba apenas a coluna 'nome' das tuplas da tabela 'produtos' -->
<!-- TODO8: PHP: Execute um script que exiba apenas a coluna 'nome' da tupla com 'id=1' da tabela 'produtos'  -->
<!-- TODO9: PHP: Execute um script que exiba as tuplas ordenadas em ordem crescente pelo 'nome'  -->
<!-- TODO10: PHP: Execute um script que crie uma visao (view) das tuplas ordenadas em ordem decrescente pelo 'nome'  -->
<!-- TODO11: PHP: Execute um script que altere o nome da tupla que contem 'nome=Borracha' para 'nome=Caderno'  -->

<!-- TODO12: PHP: Execute um script que remova o conteúdo das tuplas da tabela 'produtos' -->
<!-- TODO13: PHP: Execute um script que remova a tabela 'produtos' -->

<!-- TODO14: PHP: Apresente um exemplo com chave estrangeira. 
                  'produtos(id_fornecedor)' tal que 'id_fornecedor' eh chave primaria na tabela 'fornecedor'-->

<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<div id="todo1">
		<?php 
			//Encerra a execucao do carregamento da pagina caso o arquivo contenha erros.
			//Nao usou 'require_once' porque outras páginas podem invocar o conteudo de 'db_sqlite.php' novamente.
			require("db_sqlite.php");   
		?>
	</div>


</body>

</html>