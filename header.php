<?php

ob_start();
session_start();
include 'baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute([
	'kullanici_tc' =>$_SESSION['userkullanici_tc']
]);
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if($say==0){
	header("location:index.php?izinsiz");
	exit;
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
<link	rel="stylesheet" href	="style.css" type="text/css"/>
<title>Hastane Otomasyon</title>
</head>
<body>
	<div class="container">
		<div class="arkaplan2">
			<div class="logo" >
				<img src="images/pngaaa.com-119565.png" class="res3"></img>
			</div>
			<div class="menu" id="hov">			
				<div class="mleft" >
					<a href="anasayfa.php" ><img src="images/indir.png" class="icon1"></a>
				</div>
				<div class="mleft2" >
					<a href="anasayfa.php" ><h4>Randevu Al</h4></a>
				</div>			
			<br>
			<div class="mmleft" >
				<a href="randevu.php" ><img src="images/clock.png" class="icon2"></a>
			</div>
			<div class="mmleft2">
				<a href="randevu.php" ><h4 >Randevularım</h4></a>
			</div>
			
			<div class="mmmleft">
				<img src="images/prof.png" class="icon3"><a href="hesap.php" ></a>
			</div>
			<div class="mmmleft2">
				<a href="hesap.php" ><h4>Hesabım</h4></a>
			</div>	
				
			<div class="cik1">
				<div class="ciksol">
					<a href="logout.php" ><h4 style="width: 100%" style="height: 60px">Çıkış Yap</h4> </a>
				</div>
				<div class="ciksag">
					<a href="logout.php" ><img src="images/çıkış.png" ></a>
				</div>			
			</div>
			</div>
	  </div>
	</div>
</body>
</html>



