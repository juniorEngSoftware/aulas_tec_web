
<html lang="pt_BR" dir="ltr">
<head><meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">

	<title>Gerenciando Registros</title>
</head>
<bodY>
Preencha os campos abaixo
<FORM method="POST" action="inserir-registro.php?adicionar">
<table>
<tr>
<td>Nome do livro</td>	
<td>
    <input  TYPE="text"  name="FormNomeLivro" maxlength=64>
</td>
</tr>	
<tr>
<td>Nome do Autor:</td>	
<td>
	<input  TYPE="text" name="FormNomeAutor" maxlength=32>
</td>
</tr>	
<tr>
<td>Nome da editora</td>	
<td>
	<input  TYPE="text" name="FormNomeEditora" maxlength=16>
</td>
</tr>
<tr>
<tdcolspan=2 align=right>	
<td>
	<input  type="reset" value="Limpar">
	
<input  type="submit" value="Cadastrar">
</td>
</tr>	
</table>
</FORM>
<center><a href="visualizar-registro.php">VISUALIZAR REGISTROS</a><p></center>
	<br/><br/>
<center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>
       <br/><br/>
<center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>
</bodY>
</html>
