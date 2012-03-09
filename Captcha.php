<html>
<style type="text/css">
<!--
.Estilo2 {
	color: #FFFFFF;
	font-size: 120px;
	font-weight: bold;
	font-family:"Century Gothic";
}
-->
</style>
<body bgcolor="#0099FF">	
<p>

<table width="100%%" border="0" cellspacing="1" cellpadding="10">
  <tr>
    <th height="542" scope="row">
        <?php
$Usuario=$_POST["Usuario"];
$Contraseña=$_POST["Password"];
$var1='';
$instruccion="SELECT  `Contraseña` FROM  `tblusers` WHERE  `Usuario` ='".$Usuario."'";
$enlace=mysql_connect("mysql4.000webhost.com","a4824502_master","Sbay123");
mysql_select_db("a4824502_users",$enlace);
$Guardado=mysql_query($instruccion,$enlace);
if($row = mysql_fetch_array($Guardado))
{
$var1 = $row["Contraseña"];
}
if ($var1==$Contraseña)
{
echo  '<span class="Estilo2">'.":D".'<br>'."Redirigiendo".'</span>'.'<meta http-equiv="Refresh" content="1;URL=index.html"';
}
else
{
echo '<span class="Estilo2">'.":(".'<br>'."Contraseña incorrecta".'</span>'.'<meta http-equiv="Refresh" content="5;URL=index.html"';
}
mysql_close($enlace);  
?>
    </p>
      <p><img src="IconoStop.png" width="128" height="128" /></p>
    <p class="Estilo2">&nbsp;</p></th>
  </tr>
</table>
</body>
</html>