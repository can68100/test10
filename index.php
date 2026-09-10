<?php 
require_once("inc/baglan.php");

$filename = md5($_SERVER['REQUEST_URI']).".html"; 
$cachefile = "cache/".$filename; 
$cachetime = 15 * 24 * 60 * 60; 
if (file_exists($cachefile)) { 
if(time() - $cachetime < filemtime($cachefile)) { 
readfile($cachefile); 
exit; 
}else { 
unlink($cachefile); 
} } 
ob_start(); 

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	
	<!-- Viewport ile ekran ayarlari -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	
	<!-- Meta  Taglar 
	=================================================================== -->
	<meta charset="UTF-8"/>
	<?php  title_keyw_desc(); ?>



	<!-- Site Şablonları 
	=================================================================== -->
	<link rel="stylesheet" href="<?php echo URL; ?>/css/style.css"/>
	
	<!-- Favicon
	=================================================================== -->
	<link rel="shortcut icon" href="<?php echo URL; ?>/images/favicon.ico"/>
	
	<!-- Google Web Fonts
	=================================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bigelow+Rules&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- Javascript Kodları
	=================================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo URL; ?>/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo URL; ?>/js/script.js"></script>
	
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
</head>
<body>

<!-- Üst Menü -->
<div id="ust-menu">
	<div class="ust-menu">
		
		<!-- Anamenüler -->
		<div class="anamenu">
			<ul class="anamenu-linkler">
				<li><a href="<?php echo URL; ?>/index.html">Anasayfa</a></li>
				<li><a href="<?php echo URL; ?>/turkce-dublaj">Türkçe Dublaj</a></li>
				<li><a href="<?php echo URL; ?>/begenilen-filmler">Beğenilen Filmler</a></li>
				<li><a href="<?php echo URL; ?>/hukuksal">Hukuksal</a></li>
			</ul>
		</div>
		<!-- Anamenüler Son -->
		
		<!-- Logo -->
		<div class="logo">
			<a href="<?php echo URL; ?>/index.html">Logom</a>
		</div>
		<!-- Logo Son -->
		
		<!-- Responsive Üst Menü Linkler -->
		<div id="responsiveustMenuLinkler">
			<h2>Menüler</h2>
			<ul class="responsiveustMenuLinkler">
				<li><a href="<?php echo URL; ?>/index.html">Anasayfa</a></li>
				<li><a href="<?php echo URL; ?>/turkce-dublaj">Türkçe Dublaj</a></li>
				<li><a href="<?php echo URL; ?>/begenilen-filmler">Beğenilen Filmler</a></li>
				<li><a href="<?php echo URL; ?>/hukuksal">Hukuksal</a></li>
			</ul>
		</div>
		<!-- Responsive Üst Menü Linkler Son -->
		
	</div>
</div>
<!-- Üst Menü Son -->

<!-- Alt Menü -->
<div id="alt-menu">
	<div class="alt-menu">
		
		<!-- Arama -->
		<div class="arama">
			<form action="<?php echo URL;?>/index.php" method="get">
				<input type="text" name="kelime" class="ara-input" placeholder="Film veya Dizi Ara" />
				<input type="hidden" value="ara" name="do" />
				<input type="submit" value="Gönder" class="ara-submit" />
			</form>
		</div>
		<!-- Arama Son -->
		
		<!-- Alt Menü Butonlar -->
		<nav class="alt-menu-butonlar">
			
			<ul class="alt-menu-buton">
				<li><a href="#">Bize Destek Olun</a></li>
			</ul>
			
		</nav>
		<!-- Alt Menü Butonlar Son -->
		
	</div>
</div>
<!-- Alt Menü Son -->

<!-- Slider -->
<div id="slider">
	<div class="slider">
		
		<!-- Slider Resimler -->
		<nav class="slider-resim">
			<ul class="slider-resimler">
             <?php tema_manset(); ?>
			</ul>
		</nav>
		<!-- Slider Resimler Son -->
		
		<!-- Slider Kontroller -->
		<nav class="slider-kontrol">
			<ul class="slider-kontroller">
				<li class="slider-kontroller-sol">Sol Ok</li>
				<li class="slider-kontroller-sag">Sağ Ok</li>
			</ul>
		</nav>
		<!-- Slider Kontroller Son -->
		
	</div>
</div>
<!-- Slider Son -->

<!-- Sarmala -->
<div id="sarmala">
	
	<!-- Sol Blok -->
	<div id="sol">
		
		<!-- Kategoriler -->
		<nav class="kategoriler">
			<ul class="kategori-baslik">
				<li>Filmler</li>
				<li>Diziler</li>
			</ul>
			<ul class="kategori-linkler-film">
				<?php kategori_listele(); ?>
			</ul>
			<div class="clear"></div>
			<ul class="kategori-linkler-dizi">
				<li><?php dizi_kat_listele(); ?></li>
			</ul>
			<div class="clear"></div>
		</nav>
		<!-- Kategoriler Son -->
		
		
		
		<!-- Reklam Alanı -->
		<div class="reklam-alani">
			<a href="#"><img src="<?php echo URL; ?>/images/reklam.jpg" alt="reklam-alanı" /></a>
		</div>
		<!-- Reklam Alanı Son -->
		
	</div>
	<!-- Sol Blok Son -->
	
	<!-- Sağ Blok -->
	<div id="sag">
		
	<?php site_icerik(); ?>
	
</div>
<!-- Sarmala Son -->

<div class="clear"></div>

<!-- footer -->
<div id="footer">
	<div class="footer">
		
		<!-- footer Blok -->
		<div class="footer-blok">
			<h2>UYARI</h2>
			<p>
					Sitemizde Bulunan Filmler ; Google.com, Vk.com, Youtube.com , Facebook.com , Mynet.Com gibi sitelerden alınıp olup,içeriklerden sitemiz veya yöneticilerimiz sorumlu değildir.

	<script id="_wau4fq">var _wau = _wau || []; _wau.push(["small", "wvogw4m36qom", "4fq"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
			</p>
		</div>
		<!-- footer Blok Son -->
		
		<!-- footer Blok -->
		<div class="footer-blok">
			<h2>ABONE OL</h2>
			
			<form action="#">
				<input type="text" name="abone"  placeholder="Eposta İle abone olun ?" class="abone-input" />
				<input type="submit" class="abone-submit" value="ABONE OLUN" />
			</form>
			
		</div>
		<!-- footer Blok Son -->
		
		<!-- footer Blok -->
		<div class="footer-blok">
			<h2>SOSYAL AĞLARDA BİZ</h2>
			<nav class="sosyal-aglar">
				<ul>
					<li><a href="https://twitter.com/" class="tw">twitter</a></li>
					<li><a href="https://facebook.com/" class="fb">facebook</a></li>
					<li><a href="https://google.com/" class="gog">google</a></li>
					<li><a href="https://instagram.com/" class="ins">instagram</a></li>
					<li><a href="rss.html" class="rss">rss</a></li>
					<li><a href="https://pinterest.com/" class="pin">pinterest</a></li>
					<li><a href="https://koyunoyun.net" title="oyun oyna" class="tw">oyun oyna</a></li>
				</ul>
			</nav>
		</div>
		<!-- footer Blok Son -->
		
	</div>
</div>
<!-- footer Son -->

</body>
</html>

<?php 
$fp = fopen($cachefile, 'w+');  
fwrite($fp, ob_get_contents());  
fclose($fp);  
ob_end_flush(); 
?>