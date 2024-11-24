<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link	rel="stylesheet" href="style5.css">
<title>Hastane Otomasyon</title>
</head>
<body>
	<div id="container">
		<div class="gray">
			<div class="tabarka">
				<table id="tab" >
					<tr>
					<th>Hastane</th>
					<th>Klinik</th>
					<th>Doktor</th>
					<th>İl</th>
					<th>Tarih</th>
					<th>Sil</th>
					</tr>
					<?php 
					$randevu_sor=$db->prepare("SELECT * FROM randevu
					INNER JOIN kullanici ON randevu.randevu_hasta_id =kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc");
					$randevu_sor->execute([
						'kullanici_tc' =>$_SESSION['userkullanici_tc']
					]);
					while($randevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)){ ?>	

					<tr>
					<td><font color="white"  style="font-weight: bold;"><?php echo $randevu_cek['randevu_hastane'];?></font></td>
					<td><font color="white"  style="font-weight: bold;"><?php echo $randevu_cek['randevu_klinik'];?></font></td>
					<td><font color="white"  style="font-weight: bold;"><?php echo $randevu_cek['randevu_doktor'];?></font></td>
					<td><font color="white"  style="font-weight: bold;"><?php echo $randevu_cek['randevu_sehir'];?></font></td>
					<td><font color="white"  style="font-weight: bold;"><?php echo $randevu_cek['randevu_tarih'];?></font></td>
					<td><a href="islem.php?sil=<?php echo $randevu_cek['randevu_id']; ?>">
							<button  class="silbutton" id="butt" >X</button>
							</a>
						</td>
					</tr>

					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>