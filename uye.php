<!doctype html>
<html lang="tr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style2.css">
<title>Hastane Otomasyon</title>
</head>

<body>
	<div class="container">
		<div class="tableOuther2">
			<img src="images/pngaaa.com-119565.png" class="uyeres">
			<form action="islem.php" method="post">
				<div class="user">
				<input type="text" name="kullanici_tc" placeholder="Tc Kimlik No 11 Haneli Olmalıdır" >
				</div>
				<div class="kullanici">
				<input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad Giriniz">	
				</div>
				<div class="pass">
				<input type="password" name="kullanici_password" placeholder="Şifre En Az 6 Karakterden Oluşmalıdır">
				</div>
				<div class="tel">
				<input type="text" name="kullanici_tel" placeholder="11 Haneli Telefon No Giriniz">
				</div>
				<div class="mail">
				<input type="text" name="kullanici_mail" placeholder="Mail Giriniz">
				</div>
				
				<button type="submit" class="sub" id="g" name="kullanicikaydet">Üye Ol</button>
			</form>	
			<a href="index.php"><button type="submit" class="sub2" id="uye" >Geri Çık</button></a>

		</div>
	</div>
</body>
</html>