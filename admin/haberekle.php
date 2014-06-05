<?php 
 include("../ayar.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Son Dakika Haberleri  Admin</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="content-language" content="TR" />

<style type="text/css">
	td{ text-align: center;}
	#op{text-align: left;}
	
	
</style>
</head>
<body>
<form action="habereklesonuc.php" method="post" name="haberform">	
	<table width="500"  border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td  colspan ="3" align="center" height="20" valign="middle" bgcolor="red"
			font color="#FFFFFF">  Haber Ekleme Formu </font></td>
			
		</tr>
		
		<tr>
			<td width="140" height="20" >Haber başlığı </td>
			<td width="20" height="20"> :</td>
			<td width="340" height="20"> <input type="text" name="baslik" size="50"/></td>
		</tr>
		
		<tr>
			<td width="140" height="20">Haber Başlığı </td>
			<td width="20" height="20">: </td>
			<td width="340" height="20"><textarea name="icerik" rows="10" cols="38"> </textarea> </td>
		</tr>
		
		<tr>
			<td width="140" height="20">Süresi </td>
			<td width="20" height="20"> : </td>
			<td id="op" width="340" height="20" align="left"> <select name="sure">
			<option value="1"> 1 Dakika </option>
			<option value="2"> 2 Dakika </option>
			<option value="3"> 3 Dakika </option>
			<option value="4"> 4 Dakika </option>
			<option value="5"> 5 Dakika </option>
			
			</select>
			</td>
		</tr>
		
		<tr>
			<td width="140" height="20"> </td>
			<td width="20" height="20"> </td>
			<td id="op" width="340" height="20"> <input type="submit" value="kaydet ve yayınla" /> </td>
		</tr>
	
	</table>

</form>


<?php
	
	echo time();
?>

</body>
</html>