<?php 
 include("ayar.php");

	$gelenid = $_GET['id'];
 
 
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Son Dakika Haberleri</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />
	<style type="text/css">
		
		#mavi { width: 800px; height: 40px; background: #00DDDD	; paddin: 0px; margin: 0px; border-radius: 10px; text-align: center; valign: middle;
		}
		#red { width: 800px; height: 40px; background: #FF9999; paddin: 0px; margin: 0px; border-radius: 10px; text-align: center; valign: middle;
		}
	</style>


<meta http-equiv="content-language" content="TR" />
</head>
<body>
<center>
<table width="800"  border="0" cellpadding="0" cellspacing="0">
	<tr height="45">
		<td align="center" valign="middle">
			<div id="mavi">
			<table width="800"  border="0" cellpadding="0" cellspacing="0">	
					<tr>
						<td height="40"><font color="red" valign="middle"> TÜM HABERLER </font></td>
					</tr>
			</table>	
			</div></td>	
	</tr>
	
	<?php
	
	
	$son_query = @mysql_fetch_array(@mysql_query("SELECT * FROM haberler WHERE id='$gelenid	' ORDER BY id ASC LIMIT 1"));
	
		
			
			$haberid = $son_query['id'];
			$haberbaslik = $son_query['haberbaslik'];
			$habericerik = $son_query['habericerik'];
			$habereklenmetarihi = $son_query['habereklenmetarihi'];
	?>
	
	<tr>
		<td height="19" align="left" valign="middle"> [<?php echo $habereklenmetarihi; ?>]  <b>  <?php echo $haberbaslik; ?> </b><br> <br></td>	
	</tr>
	
		
	<tr>
		<td height="19" align="left" valign="middle"> <?php echo $habericerik; ?>  </td>	
	</tr>

		
	<tr>
		<td height="19" align="left" valign="middle">&nbsp </td>	
	</tr>

	<tr>
		<td height="45" align="center" valign="middle"> Anasayfa ya Dönmek İçin Lütfen<a href='index.php'>  Buraya Tıklayın. </a> </td>	
	</tr>
		
</table>
</center>

</body>
</html>