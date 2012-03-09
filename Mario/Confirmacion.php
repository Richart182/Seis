<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body bgcolor="#0099FF">
<p>&nbsp;</p>
<p class="Estilo1">&nbsp;</p>
<table width="100%%" border="0" cellspacing="1" cellpadding="10">
  <tr>
    <th scope="row"><span class="Estilo1">
      <?php 
		$Usuario=$_POST["Usuario"];
$Contraseña=$_POST["Contraseña"];
$var1='';
$instruccion="SELECT  `Usuario` FROM  `tblusers` WHERE  `Usuario` ='".$Usuario."'";
$enlace=mysql_connect("mysql4.000webhost.com","a4824502_master","Sbay123");
mysql_select_db("a4824502_users",$enlace);
$Guardado = mysql_query($instruccion,$enlace);
if($row = mysql_fetch_array($Guardado))
{
$var1 = $row["Usuario"];
echo $var1;
}
if ($var1==$Usuario)
{
echo " Lo sentimos el usuario ya esta en uso ):";
}
else
{
$instruccion2 ="INSERT INTO `tblusers`(`Usuario`, `Contraseña`) VALUES ('".$Usuario."','".$Contraseña."')";
$enlace=mysql_connect("mysql4.000webhost.com","a4824502_master","Sbay123");
mysql_select_db("a4824502_users",$enlace);
mysql_query($instruccion2,$enlace);
echo "El usuario se ha guardado satisfactoriamente :D";
}
mysql_close($enlace);
?>
    </span></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
