<html lang="pt_BR" dir="ltr">
<head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
	<title>Gerenciando Registros</title>
</head>
<body>

<?
   # dados para conex�o com o banco de dados

     $servidor = 'localhost';
	 $usuario = 'root';
     $senha = '';
     $banco = 'livro';

     # executa a conex�o com o MySQL

     $link = mysql_connect($servidor,$usuario,$senha)or die('nao foi possivel conectar: '.mysql_error());

     # seleciona o banco de dados que deseja utilizar

     $select= mysql_select_db($banco);
     $acao = $_SERVER['QUERY_STRING'];

     #verifica se o arquivo foi chamado a partir de um formulario
     if($acao=="alterar")
     {
          $Codigo = $_POST['FormCodigoLivro'];
          $Livro = $_POST['FormNomeLivro'];
          $Autor = $_POST['FormNomeAutor'];
          $Editora = $_POST['FormNomeEditora'];

          # cria a express�o SQL de altera��o
		  $sql = "UPDATE livro SET ";
         $sql .= "titulo = '$Livro', ";
          $sql .= "autor = '$Autor', ";
          $sql .= "edicao = '$Editora'";
          $sql .= " WHERE id = $Codigo";
	
          # executa a express�o sql no servidor, e armazena o resultado
          $result = mysql_query($sql);
          # verifica o sucesso da opera��o
          if (!$result)
          {
                die('Erro: ' .mysql_error());
          }

          # se a opera��o foi realizada com sucesso, informa a tela
          else 
          {
               echo 'A opera��o foi realizada com sucesso.';
          }
     }
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


