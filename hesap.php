<?php 
	include 'header.php';
?>
<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link	rel="stylesheet" href="style4.css">
<title>Hastane Otomasyon</title>
</head>
<body>	
<div class="container">
	<div class="gray">
		<form action="islem.php"  class="hesabim_content"  method="post" id="hescont">
			<div class="label">
				<label>ADI SOYADI :</label>
				<input type="text" name="adsoyadg" placeholder="<?php echo $kullanicicek['kullanici_adsoyad'];?>">
			</div><br>
			<div class="label">
				<label>TELEFON NO :</label>
				<input type="text"  name="telg" placeholder="<?php echo $kullanicicek['kullanici_tel'];?>">
		  </div><br>
			<div class="label">
				<label>MAİL :</label>
				<input type="text" name="mailg" placeholder="<?php echo $kullanicicek['kullanici_mail'];?>">
			</div><br>
		  <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
			<button name="guncel"  class="gun">Güncelle</button>
		</form>
		<br>
		<form action="islem.php"  class="hesabim_content2"  method="post" id="hescont">
			<div class="sifredes"><font color="white">ŞİFRE DEĞİŞTİRME</font></div>
			<div class="label2">
				<label>Şifrenizi girin :</label>
				<input type="password" name="passw" placeholder="Şifrenizi Girin">
			</div><br>
			<div class="label2">
				<label>Yeni Şifre :</label>
				<input type="password"  name="passw1" placeholder="Yeni Şifrenizi Girin">
			</div><br>
			<div class="label2">
				<label>Yeni Şifre (Tekrar) :</label>
				<input type="password" name="passw2" placeholder="Tekrar Yeni şifrenizi Girin">
			</div><br>
			<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
			<input type="hidden" name="kullanici_password" value="<?php echo $kullanicicek['kullanici_password'];?>" >
			<button name="degistir"  class="gun">Değiştir</button>
		</form>
		<br>
			<form action="islem.php"  class="hesabim_content3"  method="post" id="hescont">
			<div class="label3">
				<label>Hesap Silme :</label>
				<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?>" >
				<button name="hesapsil"  class="gun">Sil</button>
			</div><br>
		</form>
	</div>
</div>
</body>
</html>