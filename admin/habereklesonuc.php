<?php

include("../ayar.php");


$tarihdamgasi = time();
$tarih        = date("d.m.Y H:i:s");
$baslik       = @trim(@strip_tags(@addslashes($_POST['baslik'])));	
$icerik       = @trim(@strip_tags(@addslashes($_POST['icerik'])));	
$sure         = @trim(@strip_tags(@addslashes($_POST['sure'])));	



		if($sure== 1){
			$bitishesapla = $tarihdamgasi+60;	
			$bitisgoster  = date("d.m.Y H:i:s",$bitishesapla);
		} elseif ($sure== 2){
			$bitishesapla = $tarihdamgasi+(60*2);	
			$bitisgoster  =	date("d.m.Y H:i:s",$bitishesapla);	
				
		}elseif ($sure== 3){
			$bitishesapla = $tarihdamgasi+(60*3);	
			$bitisgoster  =	date("d.m.Y H:i:s",$bitishesapla);	
				
		}elseif ($sure== 4){
			$bitishesapla = $tarihdamgasi+(60*4);	
			$bitisgoster  =	date("d.m.Y H:i:s",$bitishesapla);	
				
		}elseif ($sure== 5){
			$bitishesapla = $tarihdamgasi+(60*5);	
			$bitisgoster  =	date("d.m.Y H:i:s",$bitishesapla);	
				
		}



	if(($baslik == "") or ($icerik== "") or ($sure =="")) {
		
		@header("location: haberekle.php");
		
	
	} else {
	
		$query = @mysql_query("INSERT INTO haberler (haberbaslik,habericerik,habereklenmetarihdamgasi,habereklenmetarihi,sondakikabitissuresidamgasi,sondakikabitissuresi) VALUES ('$baslik','$icerik','$tarihdamgasi','$tarih','$bitishesapla','$bitisgoster')") or die(mysql_error());
			
			if($query){
					echo "<font color='green'> Kay�t ��lemi Ba�ar�yla Tamamland�.</font><br /> Kay�t Formuna Geri D�nmek ��in  L�tfen <a href='haberekle.php'> Buraya T�klay�n�z </a>";	
					
			}else {
					
					echo "<font color='red'>  Kay�t ��lemi S�ras�nda Hata Olu�tu.</a> <br /> Kay�t Formuna Geri D�nmek ��in  L�tfen <a href='haberekle.php'> Buraya T�klay�n�z </a>";	
			
			}
	
	}







?>