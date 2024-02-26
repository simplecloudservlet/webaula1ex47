
	<?php

	function executarSQL($db, $sql){

		try {

			if($db->query($sql)){
				echo "<h3>SQL: [". $sql ."] realizada com sucesso!</h3>";
			} else {
				echo "<h3>ERRO na SQL: ". $sql ." </h3>";
			}

		} catch(PDOException $e){
			echo '<h3>EXCEPTION1: ' . $e->getMessage() . '</h3>';
		}
	}

	function imprimir($db){
		$res = $db->query("SELECT * FROM produtos");
		if($res){
			$res->setFetchMode(PDO::FETCH_OBJ);
	
			while( $tupla = $res->fetch() ){ //recupera uma linha por vez
				echo '<h3>';
				foreach($tupla as $coluna){
					echo $coluna . ", ";
				}
				echo '</h3><br>';
			}
			echo "<h3>SELECT: Consulta realizada com sucesso!</h3>";
		} else {
			echo "<h3>ERRO6: Erro na consulta.</h3>";
		}
	}

	//function criarBD(){
		
	//}

	function atualizarTupla($db){

		echo '<div class="selecionado"><h3>TODO11</h3>';
		
		executarSQL($db, "UPDATE produtos SET nome='Caderno' WHERE nome='Borracha'");
		executarSQL($db, "SELECT * FROM produtos");
		
		echo '</div>';
	}

	function inserirTupla($db){

		echo '<div class="selecionado"><h3>TODO5</h3>';

		executarSQL($db, "INSERT INTO produtos VALUES ( 1, 'Lápis', 2)");
		executarSQL($db, "INSERT INTO produtos(id,nome,id_fornecedor) values ( 2, 'Borracha', 1)");

		echo '</div>';
	}

	function limparTabela($db){

		echo "<h3>TODO12</h3><br>";
		executarSQL($db, "delete from produtos where id > 0");
		
	}

	function criarTabela($db){

		echo '<div class="selecionado"><h3>TODO2</h3>';
		var_dump($db);
		executarSQL($db, "CREATE TABLE fornecedor( id int primary key not null, nome varchar(50) not null);");
		executarSQL($db, "CREATE TABLE produtos( id int primary key not null, nome varchar(50) not null, id_fornecedor int not null, foreign key(id_fornecedor) references fornecedor(id))"); 
		echo '</div>';

	}

	function main(){
		//criarBD();

		echo '<h3>TODO1</h3>';
		//$DATABASE = "mysql";
		$DATABASE = "sqlite"; //Não executa com PHP -S localhost:... Utilizar o servidor Apache2
		$HOST = "localhost";
		$DBNAME = "papelaria"; //mysql> create database papelaria;
		$USER = "lucio";
		$PASSWORD = "root";

		try {
			//	$db = new PDO("$DATABASE: host=$HOST; dbname=$DBNAME", $USER, $PASSWORD); //Para o MySQL
			$db = new PDO("$DATABASE:teste.db"); //Para o SQLite
			var_dump($db);
		} catch(PDOException $e){
			echo '<h3>EXCEPTION1: ' . $e->getMessage() . '</h3>';
		}
		
/*		var_dump($db);
		$res = $db->query("CREATE TABLE fornecedor( id int primary key not null, nome varchar(50) not null)");
		if($res){
			echo "<h3>CREATE: Criação da tabela 'fornecedor' realizada com sucesso!</h3>";
		} else {
			echo "<h3>ERRO14: Erro na criação da tabela.</h3>";
		}
*/

		//TODO2
		criarTabela($db);

		//TODO12
		limparTabela($db);

		//TODO5
		inserirTupla($db);
		
		//TODO6
		imprimir($db);

		//TODO11
		atualizarTupla($db);

		//TODO6
		imprimir($db);

	}

		//Invoca as funcoes
		main();
	?>
	