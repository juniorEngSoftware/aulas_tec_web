<html lang="pt_BR" dir="ltr">
<head>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
		<title>Gerenciando Registros</title>

</head>
<body>
<?
		# dados para conexão com o banco de dados
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$banco = 'livro';
		# executa a conexão com o MySQL
		$link = mysql_connect($servidor,$usuario,$senha)or die('nao foi possivel conectar: '.mysql_error());
		# seleciona o banco de dados que deseja utilizar
		$select= mysql_select_db($banco);
		$acao = $_REQUEST['acao'];
		#verifica se o arquivo foi chamado a partir de um formulario
		if($acao=="excluirpornumero")
		{ 
			 $Codigo = $_POST['FormCodigoLivro'];

		}
		if($acao=="excluirporlink")
		{
  		   $Codigo = $_REQUEST['buscacodigo']; 
		}
		//alterar 5 linhas anteriores
		# cria a expressão SQL de exclusão
		$sql = "DELETE FROM livro WHERE id = $Codigo";
		//alterar linha acima
		# executa a expressão sql no servidor, e armazena o resultado
		$result = mysql_query($sql);
		# verifica o sucesso da operação
		if (!$result)
		{
			die('Erro: ' .mysql_error());
		}
		# se a operação foi realizada com sucesso, informa a tela
		else 
		{ 
			echo 'A operação foi realizada com sucesso.';
		}
		//retirar a chave fechando
?>
<center><a href="visualizar-registro.php">VISUALIZAR REGISTROS</a><p></center>
	<br/><br/>
<center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>
	<br/><br/>
<center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>
        <br/><br/>
<center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>
</body>
</html>


