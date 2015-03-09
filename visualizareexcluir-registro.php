<html lang="pt_BR" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">

	<title>Visualizando Registros</title>

</head>


<body>



<?


     
# dados para conexão com o banco de dados

     $servidor = 'http://tecnologiaweb-juniorlobatose.rhcloud.com/phpmyadmin';
     $usuario = 'adminiJEEbbf';
     $senha = 'Zgy3nMsCjgTe';
     $banco = 'tecnologiaweb';



# executa a conexão com o MySQL

     $link = mysql_connect($servidor,$usuario,$senha)

       or die('nao foi possivel conectar: '.mysql_error());




# seleciona o banco de dados que deseja utilizar

     $select= mysql_select_db($banco);



     # Cria a expressão sql de consulta aos registros

     $sql="SELECT * FROM livro";



?>


    <TABLE border=1>
<TR>


   <TD>Código</TD>
<TD>Livro</TD>
<TD>Autor</TD>
<TD>Editora</TD>
</TR>


<?


# executa a expressão sql no servidor, e armazena o resultado

     $result = mysql_query($sql);


     while ($tbl = mysql_fetch_array($result))

     {
  

          $Codigo= $tbl["id"];

          $Livro= $tbl["titulo"];

          $Autor= $tbl["autor"];

          $Editora= $tbl["edicao"];


          echo "<TR>";

          echo "<TD>$Codigo";
          //alterar
echo
         "<A href= \"excluir-registro.php?acao=excluirporlink&buscacodigo=$Codigo\">";
         //alterar
echo
          "(Excluir)</A>";
          //alterar
echo
          "</TD>";	
         //alterar
echo 
         "<TD>$Livro</TD>";

         echo "<TD>$Autor</TD>";

         echo "<TD>$Editora</TD>";

         echo "</TR>";	

     } 
 
     echo 'A operação foi realizada com sucesso.';


?>


</TABLE>


      Digite o identificador do registro a ser excluido
<form method="post" action="excluir-registro.php?acao=excluirpornumero"> 
      //alterar 

<table>

     <tr>
<td>Identificador do livro</td>	
<td>
	<input  TYPE="text"  name="FormCodigoLivro" maxlength=64>
</td>
</tr>	

<tr>
<tdcolspan=2 align=right>	
<td>
      <input  type="reset" value="Limpar">
<input  type="submit" value="Excluir">
</td>
</tr>	


</table>


</form>


     <center><a href="visualizar-registro.php">VISUALIZAR REGISTROS</a><p></center>

	     <br/><br/>

     <center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>

	     <br/><br/>

      <center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>



</body>


</html>


