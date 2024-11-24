<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
<link	rel="stylesheet" href="style.css" type="text/css"/>
<title>Hastane Otomasyon</title>
</head>

<body>
	<div id="container">
		<div class="arkaplan">		
		<div class="tableOuther">
			<img src="images/pngaaa.com-119565.png" class="res1">
			<h1>Giriş yap</h1>
			<form action="islem.php" method="post">
			<div class="user">
				<input type="text" name="kullanici_tc" placeholder="Tc Kimlik No" >
			</div>
			<div class="pass">
				<input type="password" name="kullanici_password" placeholder="Şifre">
			</div>	
		<button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
		<br>
		</form>
		<a href="uye.php"><button type"submit" class="sub2" id="uye">Üye ol</button></a>
	</div>		
	</div>
	</div>
</body>
</html>