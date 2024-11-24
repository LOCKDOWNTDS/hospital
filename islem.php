<?php 
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['kullanicikaydet'])){
	$kullanici_tc=isset($_POST['kullanici_tc'])?$_POST['kullanici_tc']:null;
	$kullanici_adsoyad=isset($_POST['kullanici_adsoyad'])?$_POST['kullanici_adsoyad']:null;
	$kullanici_password=isset($_POST['kullanici_password'])?$_POST['kullanici_password']:null;
	$kullanici_tel=isset($_POST['kullanici_tel'])?$_POST['kullanici_tel']:null;
	$kullanici_mail=isset($_POST['kullanici_mail'])?$_POST['kullanici_mail']:null;
	$kontrol = "/\S*(?=\S{11,11})\S*/";
	$kontrol2 = "/\S*(?=\S{6,})\S*/"; 
	if(preg_match($kontrol,$kullanici_tc))
	{
		if(preg_match($kontrol2,$kullanici_password)){
					if(preg_match($kontrol,$kullanici_tel)){
							$sorgu=$db->prepare('INSERT INTO kullanici SET
							kullanici_tc=?,
							kullanici_adsoyad=?,
							kullanici_password=?,
							kullanici_tel=?,
							kullanici_mail=?
							');
							$ekle=$sorgu -> execute([
							$kullanici_tc, 
							$kullanici_adsoyad, 
							$kullanici_password,
							$kullanici_tel,
							$kullanici_mail]);	
							if($ekle){
									header('location:index.php?durum=basarili');
							}else{
									header('location:uye.php?durum=basarisiz');}
			}
			else{
				echo "<script>alert('Telefon no uygun formatta değil.')</script>";
				header('Refresh: 1; url=uye.php');
				}		
	}else{
		echo "<script>alert('Şifre uygun formatta değil.')</script>";
			header('Refresh: 1; url=uye.php');
		}	
}else{
echo "<script>alert('Tc no uygun formatta değil.')</script>";
	header('Refresh: 1; url=uye.php');
}
}

if(isset($_POST['giris_yap'])){
	$kullanici_tc=$_POST['kullanici_tc'];
	$kullanici_password=$_POST['kullanici_password'];
	
	$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
	$kullanicisor->execute([
		'kullanici_tc' => $kullanici_tc,
		'kullanici_password' => $kullanici_password
	]);
	$say=$kullanicisor->rowCount();
	
	if($say==1){
		$_SESSION['userkullanici_tc']=$kullanici_tc;
		header('location:anasayfa.php?durum=girisbasarili' );
		exit;
	}else{
		header('location:index.php?durum=basarisizgiris');
		exit;
	}
}
if(isset($_POST['randevu_kaydet'])){
	$randevu_sehir=isset($_POST['sehir']) ? $_POST['sehir'] : null;
	$randevu_hastane=isset($_POST['hastane']) ? $_POST['hastane'] : null;
	$randevu_doktor=isset($_POST['doktor']) ? $_POST['doktor'] : null;
	$randevu_tarih=isset($_POST['tarih']) ? $_POST['tarih'] : null;
	$randevu_klinik=isset($_POST['klinik']) ? $_POST['klinik'] : null;
	$randevu_hasta_id=isset($_POST['kullanici_id']) ? $_POST['kullanici_id'] : null;
	
	$kaydet=$db->prepare("INSERT INTO randevu SET
	randevu_sehir = ?,
	randevu_hastane = ?,
	randevu_doktor = ?,
	randevu_tarih = ?,
	randevu_klinik = ?,
	randevu_hasta_id = ?
	");
	
	$insert = $kaydet->execute([
		$randevu_sehir,
		$randevu_hastane,
		$randevu_doktor,
		$randevu_tarih,
		$randevu_klinik,
		$randevu_hasta_id
	]);
	if($insert){
		echo "<script>alert('Randevunuz alınmıştır.')</script>";
		header("Refresh: 1; url=anasayfa.php");
		
	}else{
		echo "<script>alert('Randevunuz alınamamıştır.')</script>";
		header("Refresh: 1; url=anasayfa.php");
	}
	
}
if(isset($_POST['guncel'])){	
		$kontrol3 = "/\S*(?=\S{11,11})\S*/";
		$adsoyad=$_POST['adsoyadg'];
		$kul_tel=$_POST['telg'];
		$kul_mail=$_POST['mailg'];
		$id=$_POST['kullanici_id'];
			if(preg_match($kontrol3,$kul_tel)){
					$guncelle=$db->prepare("UPDATE kullanici SET kullanici_adsoyad =:adsoyadg, kullanici_tel=:telg, kullanici_mail=:mailg WHERE kullanici_id=:id " );
					$guncelle->execute(array(":adsoyadg"=>$adsoyad,":telg"=>$kul_tel,":mailg"=>$kul_mail, ":id"=>$id));
					if($guncelle){	
						echo "<script>alert('Güncelleme Başarılı.')</script>";
						header("Refresh: 1; url=hesap.php");

					}else{	
						echo "<script>alert('Güncelleme Başarısız.')</script>";
						header("Refresh: 1; url=hesap.php");
					}
		}else{
				echo "<script>alert('Yeni Telefon no 11 karakter olmalıdır.')</script>";
				header('Refresh: 1; url=hesap.php');	
			}

}
if(isset($_POST['degistir'])){	
		$sifre=$_POST['kullanici_password'];
		$eski_sifre=$_POST['passw'];
		$yeni_sifre=$_POST['passw1'];
		$yeni_sifre_kont=$_POST['passw2'];
		$id=$_POST['kullanici_id'];
		$kontrol2 = "/\S*(?=\S{6,})\S*/";
			if(preg_match($kontrol2,$yeni_sifre)){
					if(($yeni_sifre==$yeni_sifre_kont)&&($eski_sifre==$sifre)){
						$guncelle=$db->prepare("UPDATE kullanici SET kullanici_password =:passw1 WHERE kullanici_id=:id" );
						$guncelle->execute(array(":passw1"=>$yeni_sifre,":id"=>$id));
						if($guncelle){	
						echo "<script>alert('Şifre Değiştirildi.')</script>";
						header("Refresh: 1; url=hesap.php");
					}					
					}else{	
						echo "<script>alert('Girilen Şifreler Uyuşmuyor.')</script>";
						header('Refresh: 1; url=hesap.php');	
					}
			}else{
					echo "<script>alert('Yeni şifre 6 karakterden küçük olamaz.')</script>";
					header('Refresh: 1; url=hesap.php');
				}	
}
if($_GET){	

		$id=$_GET['sil'];
	
		$sil=$db->prepare("DELETE FROM randevu WHERE randevu_id=:id " );
		$sil->execute(array(":id"=>$id));
	if($sil){
		echo "<script>alert('Randevunuz Silindi.')</script>";
		header("Refresh:1; url=randevu.php");
	}else{
		echo "<script>alert('Randevunuz Silinemedi.')</script>";
		header("Refresh:1; url=randevu.php");
	}
	
}	

if(isset($_POST['hesapsil'])){	
		$id=$_POST['kullanici_id'];
	
		$silran=$db->prepare("DELETE FROM randevu WHERE randevu_hasta_id=:id " );
		$silran->execute(array(":id"=>$id));
	
		$sil=$db->prepare("DELETE FROM kullanici WHERE kullanici_id=:id " );
		$sil->execute(array(":id"=>$id));
		if($sil){
		echo "<script>alert('Hesabınız Silindi.')</script>";
		header("Refresh:1; url=index.php?hesapsilme_basarili");
										
		}else{	
		echo "<script>alert('Hesabınız Silinirken Bir Sorun  Oluştu.')</script>";
		header("Refresh:1; url=hesap.php?hesapsilme_basarisiz");	
		}
	
}
	
?>