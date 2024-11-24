<?php 
 include 'header.php';
?>
<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="Widht=device-width, initial-scale=1,maximum-scale=1">
		<title>Hastane Otomasyon</title>
		<link rel="stylesheet" href="style3.css">
	</head>
<body>
	<div class="container">
		<div class="gray">
		<div class="orta_div" id="randevu_div">
			<div class="kullaniciismi">Sn. <?php echo $kullanicicek['kullanici_adsoyad'];?>
			</div>
			<br>
			<form action="islem.php" method="post">
			<div class="randevu">
				<label>Tarih Seçin :</label>
				<input type="date" name="tarih">
				</div>
				<div class="randevu">
					<label>İl Seçin :</label>
					<select name="sehir" class="sehir">
					<option value="İl Seçin">İl seçin</option>
					<option value="Adana">Adana</option>
					<option value="Adıyaman">Adıyaman</option>
					<option value="Afyonkarahisar">Afyonkarahisar</option>
					<option value="Ağrı">Ağrı</option>
					<option value="Amasya">Amasya</option>
					<option value="Ankara">Ankara</option>
					<option value="Antalya">Antalya</option>
					<option value="Artvin">Artvin</option>
					<option value="Aydın">Aydın</option>
					<option value="Balıkesir">Balıkesir</option>
					<option value="Bilecik">Bilecik</option>
					<option value="Bingöl">Bingöl</option>
					<option value="Bitlis">Bitlis</option>
					<option value="Bolu">Bolu</option>
					<option value="Burdur">Burdur</option>
					<option value="Bursa">Bursa</option>
					<option value="Çanakkale">Çanakkale</option>
					<option value="Çankırı">Çankırı</option>
					<option value="Çorum">Çorum</option>
					<option value="Denizli">Denizli</option>
					<option value="Diyarbakır">Diyarbakır</option>
					<option value="Edirne">Edirne</option>
					<option value="Elazığ">Elazığ</option>
					<option value="Erzincan">Erzincan</option>
					<option value="Erzurum">Erzurum</option>
					<option value="Eskişehir">Eskişehir</option>
					<option value="Gaziantep">Gaziantep</option>
					<option value="Giresun">Giresun</option>
					<option value="Gümüşhane">Gümüşhane</option>
					<option value="Hakkâri">Hakkâri</option>
					<option value="Hatay">Hatay</option>
					<option value="Isparta">Isparta</option>
					<option value="Mersin">Mersin</option>
					<option value="İstanbul">İstanbul</option>
					<option value="İzmir">İzmir</option>
					<option value="Kars">Kars</option>
					<option value="Kastamonu">Kastamonu</option>
					<option value="Kayseri">Kayseri</option>
					<option value="Kırklareli">Kırklareli</option>
					<option value="Kırşehir">Kırşehir</option>
					<option value="Kocaeli">Kocaeli</option>
					<option value="Konya">Konya</option>
					<option value="Kütahya">Kütahya</option>
					<option value="Malatya">Malatya</option>
					<option value="Manisa">Manisa</option>
					<option value="Kahramanmaraş">Kahramanmaraş</option>
					<option value="Mardin">Mardin</option>
					<option value="Muğla">Muğla</option>
					<option value="Muş">Muş</option>
					<option value="Nevşehir">Nevşehir</option>
					<option value="Niğde">Niğde</option>
					<option value="Ordu">Ordu</option>
					<option value="Rize">Rize</option>
					<option value="Sakarya">Sakarya</option>
					<option value="Samsun">Samsun</option>
					<option value="Siirt">Siirt</option>
					<option value="Sinop">Sinop</option>
					<option value="Sivas">Sivas</option>
					<option value="Tekirdağ">Tekirdağ</option>
					<option value="Tokat">Tokat</option>
					<option value="Trabzon">Trabzon</option>
					<option value="Tunceli">Tunceli</option>
					<option value="Şanlıurfa">Şanlıurfa</option>
					<option value="Uşak">Uşak</option>
					<option value="Van">Van</option>
					<option value="Yozgat">Yozgat</option>
					<option value="Zonguldak">Zonguldak</option>
					<option value="Aksaray">Aksaray</option>
					<option value="Bayburt">Bayburt</option>
					<option value="Karaman">Karaman</option>
					<option value="Kırıkkale">Kırıkkale</option>
					<option value="Batman">Batman</option>
					<option value="Şırnak">Şırnak</option>
					<option value="Bartın">Bartın</option>
					<option value="Ardahan">Ardahan</option>
					<option value="Iğdır">Iğdır</option>
					<option value="Yalova">Yalova</option>
					<option value="Karabük">Karabük</option>
					<option value="Kilis">Kilis</option>
					<option value="Osmaniye">Osmaniye</option>
					<option value="Düzce">Düzce</option>
				</select>
				</div>	
				<div class="randevu">
				<label>Hastane Seçin :</label>
				<select name="hastane" class="hastane">
					<option value="Hastane seciniz">Hastane seçiniz</option>
					<option value="Acıbadem Hastanesi">Acıbadem Hastanesi</option>
					<option value="Bölge eğitim araştırma Hastane">Bölge eğitim araştırma Hastanesi</option>
					<option value="Şehir Hastanesi">Şehir Hastanesi</option>
					<option value="Özel Ortadoğu Hastanesi">Özel Ortadoğu Hastanesi</option>
					<option value="Ortaköy Devlet Hastanesi">Ortaköy Devlet Hastanesi</option>
					<option value="Sarıyahşi Devlet Hastanesi">Sarıyahşi Devlet Hastanesi</option>
					<option value="Atatürk Devlet Hastanesi">Atatürk Devlet Hastanesi</option>
					<option value="Özel Medisu Hastanesi">Özel Medisu Hastanesi</option>
					<option value="Sağlık Vakfı Hastanesi">Sağlık Vakfı Hastanesi</option>
					<option value="Yaşam Hastanesi">Yaşam Hastanesi</option>
					<option value="Tabriz Şifa Evi">Tabriz Şifa Evi</option>
					<option value="Çekirge Devlet Hastanesi">Çekirge Devlet Hastanesi</option>
					<option value="Zübeyde Hanım Doğumevi">Zübeyde Hanım Doğumevi</option>
					<option value="Anadolu Hastanesi">Anadolu Hastanesi</option>
					<option value="Aritmi Hastanesi">Aritmi Hastanesi</option>
					<option value="Selenay Tıp Merkezi">Selenay Tıp Merkezi</option>
					<option value="Lapseki Devlet Hastanesi">Lapseki Devlet Hastanesi</option>
					<option value="Çan Devlet Hastanesi">Çan Devlet Hastanesi</option>
					<option value="Gökçeada Devlet Hastanesi">Gökçeada Devlet Hastanesi</option>
					<option value="Medical Park">Medical Park</option>
					<option value="Mecitözü Devlet Hastanesi">Mecitözü Devlet Hastanesi</option>
					<option value="Özel Elitpark Hastanesi">Özel Elitpark Hastanesi</option>
					<option value="Özel Yaşam Polikliniği">Özel Yaşam Polikliniği</option>
					<option value="Özel Gülhan Tıp Merkezi">Özel Gülhan Tıp Merkezi</option>
					<option value="Özel Yaylalı Göz Hastanesi">Özel Yaylalı Göz Hastanesi</option>

				</select></div>
				<div class="randevu">
				<label>Klinik Seçin :</label>
				<select name="klinik" class="klinik">
					<option value="Klinik seciniz">Klinik seçiniz</option>
					<option value="Göz Hastalıkları">Göz Hastalıkları</option>
					<option value="Ortopedi">Ortopedi</option>
					<option value="Allerji Hastalıkları">Allerji Hastalıkları</option>
					<option value="Beyin ve Sinir Cerrahisi ">Beyin ve Sinir Cerrahisi </option>
					<option value="Damar Hastalıkları">Damar Hastalıkları</option>
					<option value="Çocuk Kardiyolojisi">Çocuk Kardiyolojisi</option>
					<option value="Çocuk Cerrahisi">Çocuk Cerrahisi</option>
					<option value="Gastroenteroloji">Gastroenteroloji</option>
					<option value="Genel Cerrahi">Genel Cerrahi</option>
					<option value="Göğüs Cerrahisi">Göğüs Cerrahisi</option>
					<option value="İç Hastalıkları (Dahiliye)">İç Hastalıkları (Dahiliye)</option>
					<option value="Nöroloji">Nöroloji</option>
					<option value="Psikiyatri">Psikiyatri</option>
					<option value="Radyoloji">Radyoloji</option>
					<option value="Üroloji">Üroloji</option>
					<option value="Estetik Cerrahi">Estetik Cerrahi</option>
					<option value="Hematoloji">Hematoloji</option>
					<option value="Perinatoloji">Perinatoloji</option>
					<option value="Tıbbi Genetik">Tıbbi Genetik</option>
					<option value="Kadın Hastalıkları ve Doğum">Kadın Hastalıkları ve Doğum</option>
					<option value="Geriatri">Geriatri</option>
					
					
				</select></div>
				<div class="randevu">
				<label>Doktor Seçin :</label>
				<select name="doktor" class="doktor">
					<option value="Doktor seciniz">Doktor seçiniz</option>
					<option value="Ahmet hamdi">Ahmet hamdi</option>
					<option value="Kazım karabekir">Kazım karabekir </option>
					<option value="Ata ŞEN">Ata ŞEN</option>
					<option value="Recep Ali Samet">Recep Ali Samet</option>
					<option value="Kerime Akıllı">Kerime Akıllı</option>
					<option value="Buğra Alparslan">Buğra Alparslan</option>
					<option value="Hiba Alpuğan">Hiba Alpuğan</option>
					<option value="Tatkan Altıntaş">Tatkan Altıntaş</option>
					<option value="Merve Ece Altıok">Merve Ece Altıok</option>
					<option value="Nebahat Ansen">Nebahat Ansen</option>
					<option value="Cansev Arat">Cansev Arat</option>
					<option value="İzlem Arınç">İzlem Arınç</option>
					<option value="Nunazlı Arpacı">Nunazlı Arpacı</option>
					<option value="Mustafa Askın">Mustafa Askın</option>
					<option value="Paksoy Ateş">Paksoy Ateş</option>
					<option value="Saime Avıandı">Saime Avıandı</option>
					<option value="İsmail Babacan">İsmail Babacan</option>
					<option value="Gökay Bağış">Gökay Bağış</option>
					<option value="Pırıltı Bahçeli">Pırıltı Bahçeli</option>
					<option value="Ecren Baldo">Ecren Baldo</option>
					<option value="Serdar Kaan Barbaros">Serdar Kaan Barbaros</option>
					<option value="Özgür Baştuğ">Özgür Baştuğ</option>
					
				</select></div>
			<br>
			<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'];?> ">
			<button name="randevu_kaydet">Randevuyu kaydet</button>	
			</form>
				
		</div>
	</div>
	</div>
</body>
</html>