<html lang="pt_BR" dir="ltr">

<head>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-15">
	
    <title>Visualizando Registros</title>


</head>


<body>

<?PHP

    # dados para conexão com o banco de dados

    $servidor = 'http://tecnologiaweb-juniorlobatose.rhcloud.com/phpmyadmin';
     $usuario = 'adminiJEEbbf';
     $senha = 'Zgy3nMsCjgTe';
     $banco = 'tecnologiaweb';



    # executa a conexão com o MySQL

    $connection = mysql_connect($servidor, $usuario, $senha) or die('nao foi possivel conectar: '.mysql_error());


    # seleciona o banco de dados que deseja utilizar

    $select= mysql_select_db($banco);

    # Cria a expressão sql de consulta aos registros

    $sql= "select * from livro";
?>

    <TABLE border=1>
<TR>
 
    <TD>Código</TD>
	<TD>Livro</TD>
	<TD>Autor</TD>
	<TD>Editora</TD>
</TR>

<?PHP
    # executa a expressão sql no servidor, e armazena o resultado

    $result = mysql_query($sql);
	
    while ($tbl = mysql_fetch_row($result))
	{


        $Codigo= $tbl["id"];
		$Livro= $tbl["titulo"];
        $Autor= $tbl["autor"];
		$Editora= $tbl["edicao"];
		
        echo "<TR>";
        echo "<TD>$Codigo </TD>";
        echo "<TD>$Livro</TD>";
        echo "<TD>$Autor</TD>";
        echo "<TD>$Editora</TD>";
        echo "</TR>";
	}
		echo 'A operação foi realizada com sucesso.'
?>
    </TABLE>
    <center><a href="cadastrar-registro.php">INSERIR NOVO REGISTRO</a><p></center>
	<br/><br/>
    <center><a href="visualizarealterar-registro.php">ALTERAR REGISTRO</a></center>
    <br/><br/>
    <center><a href="visualizareexcluir-registro.php">EXCLUIR REGISTRO</a></center>
</body>
</html>


