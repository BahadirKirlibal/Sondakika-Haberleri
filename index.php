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
					<td height="40"><font color="red" > SON DAKİKA </font></td>
						
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
			$sonhaberbaslikyaz = $sonhaberbaslikkes."<a href='oku.php?id=$sonhaberid'><font color='red'> >>> </font><font color='yeşil'> Devamını Oku</font> </a>";
			
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
						<td height="40"><font color="red" valign="middle"> TÜM HABERLER </font></td>
					</tr>
			</table>		
			</div></td>	
			
	</tr>
	
	<?php
	$tüm_query = @mysql_query("SELECT * FROM haberler WHERE sondakikabitissuresidamgasi <='$zamandamgasi' ORDER BY habereklenmetarihdamgasi DESC");
	
		while($tümhaber = @mysql_fetch_array($tüm_query)){
			
			$tümhaberid = $tümhaber['id'];
			$tümhaberbaslik = $tümhaber['haberbaslik'];
			$tümhaberbaslikkes = substr($tümhaberbaslik,0,75);
			$tümhaberbaslikyaz = $tümhaberbaslikkes."<a href='oku.php?id=$tümhaberid'><font color='red'> >>> </font><font color='yeşil'> Devamını Oku</font> </a>";
			
			$tümhabereklenmetarihi = $tümhaber['habereklenmetarihi'];
	?>
	
	<tr>
		<td align="center" valign="middle">	<?php echo $tümhabereklenmetarihi; ?> <?php  echo $tümhaberbaslikyaz; ?> </td>
	</tr>
	<?php  }  ?>

</table>

<?php
	
?>

</body>
</html>