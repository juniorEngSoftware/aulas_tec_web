<?PHP

     # dados para conexão com o banco de dados
     $servidor = '127.13.72.2';
     $usuario = 'adminiJEEbbf';
     $senha = 'Zgy3nMsCjgTe';
     $banco = 'tecnologiaweb';

     # executa a conexão com o MySQL
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

          # cria a expressão SQL de inserção
          $sql = "INSERT INTO livro (titulo, autor, edicao) VALUES (";
          $sql .= "'$Livro',";
          $sql .= "'$Autor',";
          $sql .= "'$Editora'"; 
          $sql .= ")";
	
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
     }
?>
     <center><a href="visualizar-registro.php">VISUALIZAR REGISTROS</a><p></center>
	     <br/><br/>
     <center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>
	     <br/><br/> 
     <center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>
             <br/><br/>
     <center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>
