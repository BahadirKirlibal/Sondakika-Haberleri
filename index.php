<?php 
 include("ayar.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Son Dakika Haberleri</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
	<style type="text/css">
		
		#mavi { width: 800px; height: 40px; background: #FF9999; paddin: 0px; margin: 0px; border-radius: 10px; text-align: center; valign: middle;
		}
		#red { width: 800px; height: 40px; background: #00DDDD; paddin: 0px; margin: 0px; border-radius: 10px; text-align: center; valign: middle;
		}
		#orta {background: yelow; }
	</style>


<meta http-equiv="content-language" content="TR" />
</head>
<body>
<table width="1000"  border="0" cellpadding="0" cellspacing="0">
	<tr height="45">
		<td align="center" valign="middle">
			<div id="mavi">
			<table width="800"  border="0" cellpadding="0" cellspacing="0">	
						
				<tr>
					<td height="40"><font color="red" > SON DAK�KA </font></td>
						
				</tr>
			</table>	
			
			</div></td>	
	</tr>
	
	<?php
	
	$zamandamgasi = time();
	$son_query = @mysql_query("SELECT * FROM haberler WHERE sondakikabitissuresidamgasi >='$zamandamgasi' ORDER BY habereklenmetarihdamgasi DESC");
	
		while($sonhaber = @mysql_fetch_array($son_query)){
			
			$sonhaberid = $sonhaber['id'];
			$sonhaberbaslik = $sonhaber['haberbaslik'];
			$sonhaberbaslikkes = substr($sonhaberbaslik,0,75);
			$sonhaberbaslikyaz = $sonhaberbaslikkes."<a href='oku.php?id=$sonhaberid'><font color='red'> >>> </font><font color='ye�il'> Devam�n� Oku</font> </a>";
			
			$sonhabereklenmetarihi = $sonhaber['habereklenmetarihi'];
	?>
	
	<tr>
		<td align="center" valign="middle">	[<?php echo $sonhabereklenmetarihi; ?>]<?php  echo $sonhaberbaslikyaz; ?> </td>	
	</tr>
	<?php  }  ?>
	
	<tr>
		<td align="center" valign="middle"> &nbsp </td>	
	</tr>
	<tr height="45">
		<td align="center" valign="middle">
			<div id="red">
			<table width="800"  border="0" cellpadding="0" cellspacing="0">	
					<tr>
						<td height="40"><font color="red" valign="middle"> T�M HABERLER </font></td>
					</tr>
			</table>		
			</div></td>	
			
	</tr>
	
	<?php
	$t�m_query = @mysql_query("SELECT * FROM haberler WHERE sondakikabitissuresidamgasi <='$zamandamgasi' ORDER BY habereklenmetarihdamgasi DESC");
	
		while($t�mhaber = @mysql_fetch_array($t�m_query)){
			
			$t�mhaberid = $t�mhaber['id'];
			$t�mhaberbaslik = $t�mhaber['haberbaslik'];
			$t�mhaberbaslikkes = substr($t�mhaberbaslik,0,75);
			$t�mhaberbaslikyaz = $t�mhaberbaslikkes."<a href='oku.php?id=$t�mhaberid'><font color='red'> >>> </font><font color='ye�il'> Devam�n� Oku</font> </a>";
			
			$t�mhabereklenmetarihi = $t�mhaber['habereklenmetarihi'];
	?>
	
	<tr>
		<td align="center" valign="middle">	<?php echo $t�mhabereklenmetarihi; ?> <?php  echo $t�mhaberbaslikyaz; ?> </td>
	</tr>
	<?php  }  ?>

</table>

<?php
	
?>

</body>
</html>