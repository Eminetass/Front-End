<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8";>
   <title> WEB SİTESİ </title>
   <style>
 body,h1,ul,li{
    margin: 0;
    padding: 0;
}
 
body{
    background:url(images/pattern.png) #252525;
    font-family: sans-serif;
}
 
.sayfa{
    width: 950px;
    margin:50px auto;
}
 
#baslik{
    float: left;
    font-size: 1.2em;
    color: white;
    text-decoration: none;
}
 
#menu{
    float: right;
    list-style: none;
    margin-top: 1em;
}
 
#menu li{
    float: left;
    
}
 
#menu li a{
    color: white;
    text-decoration: none;
    margin: 5px;
    padding: 10px 20px;
}
 
#menu a:hover{
    background: #444;
    border-radius: 15px;
}
 
.orta{
    margin-top: 15px;
    background: #333;
 
}
 
.orta-sol{
    float: left;
    width: 450px;
}
 
 
.orta-sag{
    float: left;
    margin: 15px;
    width: 470px;
    color: #bbb;
}
 
.alt{
    background: #555;
    padding: 20px;
    text-align: center;
    color: #fff;
}
.alt a{
     color: #fff;
}
 
.temizle{
    clear: both;
}
 
   </style>
</head>

<body class="sayfa">
<div class="sayfa">
    <div class="ust">
        <a id="baslık" href="#">
	        <h1> WEB TASARIMI </h1>  
	    </a>
		<ul id="menu">
		<li><a href="#" >Anasayfa</a></li>
		<li><a href="#" >Hakkımda</a></li>
		<li><a href="#" >Çalışmalarım</a></li>
		<li><a href="#" class="aktif">Yazılar</a></li>
		<li><a href="#" >İletişim</a></li>
		</ul>
		<div class="temizle"></div>
    </div>
    <div class="orta">
        <div class="orta-sol">
		    <img style= "width: 50px; height: 50px;" src="C:\Users\Asus\OneDrive\Masaüstü\kismanzarasi2.jpg">
		</div>
		<div class="orta-sag">
		    <h1></h1>
			<p>
			Video, size görüşünüzü kanıtlamak için güçlü bir yol sunar. Çevrimiçi Video'ya tıkladığınızda, eklemek istediğiniz videoya ait ekleme kodunu yapıştırabilirsiniz. Belgenize en iyi uyan videoyu çevrimiçi olarak aramak için bir anahtar sözcük de yazabilirsiniz. Word, belgenizin profesyonelce üretilmiş görünmesini sağlamak için birbirini tamamlayan üst bilgi, alt bilgi, kapak sayfası ve metin kutusu tasarımları sağlar. Örneğin, birbiriyle uyumlu bir kapak sayfası, başlık ve kenar çubuğu ekleyebilirsiniz. Ekle'ye tıklayın ve ardından farklı galerilerden eklemek istediğiniz öğeleri seçin. Temalar ve stiller de belgenizin düzenli kalmasına yardımcı olur. Tasarım'a tıklayıp yeni bir Tema seçtiğinizde, resimler, grafikler ve SmartArt grafikleri, yeni temanızla eşleşecek şekilde değiştirilir. Stilleri uyguladığınızda, başlıklarınız yeni tema ile eşleşecek şekilde değiştirilir
			</p>
			<p>
			Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.
			</p>
		</div>
		<div class="temizle"></div>
	</div>
    <div class="alt">
        <p>
		    <a href="#">Anasayfa</a> | <a href="#">Hakkımda</a> |  <a href="#">Çalışmalarım</a> | <a href="#">Yazılar</a> | <a href="#">İletişim</a>
		</p>
		<p>
		    © 2016 Tüm hakları saklıdır.| Tasarım: <a href="#">www.yazilimkodlama.com</a>
		</p>
		<div class="temizle"></div>
	</div>
</div>
</body>
</html>