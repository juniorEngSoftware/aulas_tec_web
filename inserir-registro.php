<?PHP

     # dados para conex�o com o banco de dados
     $servidor = '127.13.72.2';
     $usuario = 'adminiJEEbbf';
     $senha = 'Zgy3nMsCjgTe';
     $banco = 'tecnologiaweb';

     # executa a conex�o com o MySQL
     $link = mysql_connect($servidor,$usuario,$senha)or die('nao foi possivel conectar: '.mysql_error());

     # seleciona o banco de dados que deseja utilizar
     $select= mysql_select_db($banco);
     $acao = $_SERVER['QUERY_STRING'];

     #verifica se o arquivo foi chamado a partir de um formulario
     if($acao=="adicionar")
     {      
          $Livro = $_POST['FormNomeLivro'];
          $Autor = $_POST['FormNomeAutor'];  
          $Editora = $_POST['FormNomeEditora'];

          # cria a express�o SQL de inser��o
          $sql = "INSERT INTO livro (titulo, autor, edicao) VALUES (";
          $sql .= "'$Livro',";
          $sql .= "'$Autor',";
          $sql .= "'$Editora'"; 
          $sql .= ")";
	
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
