<?php include( "config.php" ); ?>
<?php
$oyun_title = "Balon Patlatma Oyunu Oyna";
$oyun_ad = "Balon Patlatma Oyunu";
$oyun_keywords = "oyun oyna, balon patlatma oyna, balon oyunu, balon patlatma, engelsiz oyun oyna, engelsiz balon patlatma, okuldan oyun oyna, okuldan oyun, eğitici oyunlar, eğitici oyun oyna";
$oyun_description = "Balon Patlatma Oyunu Oyna - Okuldan Oyun Oyna";
$oyun_h1_text = "Balon Patlatma Oyunu Oyna";
$oyun_h2_text = "Engelsiz Oyun Oyna, Okuldan Oyun Oyna";
$oyun_h3_text = "Okuldan Balon Patlatma Oyunu Oyna, Engelsiz Balon Patlatma Oyunu";
$oyun_nasil_text = "Farklı renklerdeki balonların eşlerini uygun yerlerde biriktirerek patlatmalısınız. Atış yapılacak balonu aynı renktekilerin üzerine atarak patlatın.";
$oyun_swf_url = "http://www.sheppardsoftware.com/braingames/balloonbounce/balloonbounce.swf";
$oyun_kisa_url = "http://bc.vc/fpMF6O";
$oyun_loading_text = "Oyun yükleniyor, lütfen bekleyin ";
$oyun_seo_text = "oyun oyna, okuldan oyun oyna hemen oyna, oyunlar, oyun siteleri, balon oyunu, balon patlatma oyunu oyna, okuldan balon patlatma oyunu oyna, eğitici oyunlar, eğitici oyun oyna, okuldan oyun indir, okuldan balon patlatma oyunu indir"
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
	<title><?php echo $oyun_title; ?>  | <?php echo $site_title; ?></title>
	<meta name="keywords" content="<?php echo $oyun_keywords; ?>">
	<meta name="description" content="<?php echo $oyun_description; ?>">
</head>
<body link="<?php echo $site_renk_1; ?>" vlink="<?php echo $site_renk_1; ?>" bgcolor="#000000">
<div align="center">
<table border="1" width="728" id="table1" height="698" bgcolor="#FFFFFF" bordercolorlight="#C0C0C0" bordercolordark="#C0C0C0">
	<tr>
		<td width="728" colspan="2" height="49" bgcolor="<?php echo $site_renk_1; ?>">
			<b><font size="6" face="Arial Black" color="#FFFFFF"><?php echo $site_baslik; ?></font></b>
		</td>
	</tr>
	<?php include( "header.php" ); ?>
	
	<tr>
		<td width="728"  colspan="2" valign="top">
			<font color="#333333" face="Verdana" size="2">
			<br />
				<center>
				<h1><?php echo $oyun_h1_text; ?></h1>
				<h2><?php echo $oyun_h2_text; ?></h2>
				<h3><?php echo $oyun_h3_text; ?></h3>
				<br />
				<img src="images/indir1.png" />
				<br />
				<b><?php echo $oyun_ad; ?> Nasıl Oynanır:</b> <?php echo $oyun_nasil_text; ?>
				<br />
				<?php include( "ads_336x280.php" ); ?>
				<br />
				</center>
				<div id="katman12">
				<input type="text" id="alan1">
				</div>
				<script language="Javascript">
				sure=<?php echo $oyun_sure_saniye; ?>;
				function zamanla()
				{
					sure--;
					if(sure == 0)
					{
					document.getElementById("katman12").innerHTML = '<br /><embed type="application/x-shockwave-flash" width="728px" height="500px" src="<?php echo $oyun_swf_url; ?>" wmode="opaque"></embed><br /><br /><center><a href="<?php echo $oyun_kisa_url; ?>" target="_blank"><?php echo $oyun_ad; ?> Tam Ekran Oyna</center></a>';
					}
					if(sure > 0){
					document.getElementById("katman12").innerHTML = '<center><?php echo $oyun_loading_text; ?>:<b>'+sure+'</b></center>';
					setTimeout('zamanla()',1000);
					}
				}
				zamanla();
				</script>
				<center>
				<br />
				<?php echo $oyun_h1_text; ?>
				<br />
				</center>
			</font>
			<br />
			<font size="2" color="#ffffff">
				<?php echo $oyun_seo_text; ?>
			</font>
		</td>
	</tr>
	<?php include( "footer.php" ); ?>

</table>
</div>
<?php include( "links.php" ); ?>

</body>
</html>
