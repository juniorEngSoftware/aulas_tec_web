<html lang="pt_BR" dir="ltr">
<head>
     <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">

	     <title>Atualizando Registros</title>

</head>
<bodY>
<?PHP
     # dados para conexão com o banco de dados
    $servidor = 'http://tecnologiaweb-juniorlobatose.rhcloud.com/phpmyadmin';
     $usuario = 'adminiJEEbbf';
     $senha = 'Zgy3nMsCjgTe';
     $banco = 'tecnologiaweb';
     # executa a conexão com o MySQL
     $link = mysql_connect($servidor,$usuario,$senha)or die('nao foi possivel conectar: '.mysql_error());
     # seleciona o banco de dados que deseja utilizar
     $select= mysql_select_db($banco);
     $acao = $_REQUEST['acao'];
     //alterar   
#verifica se o arquivo foi chamado a partir de um formulario
     if($acao=="alterarpornumero")
     {    
          $Codigo = $_POST['FormNumeroLivro'];
     }
     if($acao=="alterarporlink")
     {    
          $Codigo = $_REQUEST['buscacodigo']; 
     }     

     #Cria a expressão sql de consulta ao registro a ser alterado
      $sql= "SELECT * FROM livro WHERE id = $Codigo";    
     # executa a busca pelos dados
     $result = mysql_query($sql);    
     #valida se o registro existe no banco de dados
     if($tbl=mysql_fetch_array($result))       
     {        

          # Armazena os dados para preencher no formulario

          $Codigo = $tbl["id"];
 
          $Livro = $tbl["titulo"];
 
          $Autor = $tbl["autor"];
   
          $Editora = $tbl["edicao"];
          
     }  

     
     # Exibe a mensagem de erro se não existir
  
     else 
	
     { 
        
          echo 'registro não encontrado';
       
     }



?>



     Preencha os campos abaixo<form method="post" action="efetua-registro.php?alterar" >

     <input  TYPE="hidden"  name="FormCodigoLivro" value="<?echo $Codigo;?>">


<table>

     <tr>
<td>Nome do livro</td>	
<td>
	<input  TYPE="text"  name="FormNomeLivro" maxlength=64 value="<?echo $Livro;?>">
</td>
</tr>	



     <tr>
<td>Nome do Autor:</td>	
<td>
	<input  TYPE="text" name="FormNomeAutor" maxlength=32 value="<?echo$Autor;?>">
</td>
</tr>


     <tr>
<td>Nome da editora</td>	
<td>
	<input  TYPE="text" name="FormNomeEditora" maxlength=16 value="<?echo$Editora;?>">
</td>
</tr>



     <tr>
<tdcolspan=2 align=right>	
<td>
	<input  type="reset" value="Limpar">
	<input  type="submit"      value="Alterar">
</td>
</tr>	


</table>

</form>


      <center><a href="visualizar-registro.php">VISUALIZAR REGISTROS</a><p></center>

	     <br/><br/>

      <center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>

	     <br/><br/>

      <center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>

             <br/><br/>

      <center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>


</bodY>

</html>
