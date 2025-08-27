<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$id=			$_POST["id"];
$nome=		$_POST["nome"];
$email= 		   $_POST["email"];
$fone=			   $_POST["fone"];
$senha=			   $_POST["senha"];
$foto=	$_FILES["foto"];

$con=mysqli_connect("localhost","root","","empresa") or die ("erro!"); //faz a conexão com o banco de dados empresa

$in = "insert into usuarios values ('$id',
									         '$nome',
									         '$email',
									         '$fone',
									         '$senha',
									         '$foto')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   	id	nome	email	fone	senha	foto
   echo "
   id:		$id<BR>
   nome:		$nome<BR>
   email:		$email<BR>
   fone:			$fone<BR>
   senha:			$senha<BR>
   foto:    $foto<BR><hr>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

