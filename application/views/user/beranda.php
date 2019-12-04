<?php $this->load->view('tampilan/headerlogin'); ?>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<style type="text/css">
body {
    background-color:   #D2B48C
}</style>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo base_url()?>assets/images/bedugul.jpg?>" width=1500 height=550>
  <div class="text"><h1>BEDUGUL</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo base_url()?>assets/images/beach1.jpg?>" width=1500 height=550>
  <div class="text"><h1>OCEAN TEMPLE</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo base_url()?>assets/images/gunung.jpg?>" width=1500 height=550>
  <div class="text"><h1>UBUD</h1></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div style="background-color:rgba(245, 222, 179, 0.8);">
   <div>
      <br>
      <p><h2>Pantai Pandawa Kutuh</h2>

    <center><img src="<?php echo base_url()?>assets/images/pandawa.jpg?>" width=500 height=350>
    </center>
    <br>
   
    Pantai Pandawa Kutuh, menjadi tempat liburan ke dua favorit wisatawan Indonesia.Daya tarik yang membuat pantai Pandawa Kutuh disukai oleh wisatawan Indonesia sebagai tempat liburan di Bali karena:<br>
    <br>
    -Tersedia aktivitas naik kano tepi pantai dan harga relatif murah.<br>
    -Air laut pantai Pandawa sangat tenang, jadi sangat cocok untuk anak-anak berenang.<br>
    -Kebersihan pantai Pandawa selalu terjaga.<br>
    -Lokasi pantai Pandawa berdekatan dan satu arah dengan tempat liburan terkenal di Bali yang lain, seperti pura Uluwatu, GWK, Tanjung Benoa dan Jimbaran.<br>
    
     <br>
     <p><h2>Tanah Lot</h2>

    <center><img src="<?php echo base_url()?>assets/images/tanahlot.jpg?>" width=500 height=350>
    </center>
    <br>

    Daya tarik utama dari objek wisata Tanah Lot Bali terletak dari keunikan pura Tanah Lot yang berada di atas batu karang besar. Pada saat air laut pasang, askes jalan menuju pura Tanah Lot dari pantai akan digenangi air laut.<br>

    Namun yang paling disukai wisatawan Indonesia saat liburan ke objek wisata Tanah Lot adalah, pemandangan matahari terbenam dengan siluet pura. Oleh sebab itu, objek wisata Tanah Lot lebih ramai dengan kunjungan wisatawan di sore hari sekitar jam 17:00, menjelang sunset.

    <br>
    <p><h2>Garuda Wisnu Kencana</h2>

    <center><img src="<?php echo base_url()?>assets/images/wisnu.jpg?>" width=500 height=350>
    </center>
    <br>
    Objek wisata Garuda Wisnu Kencana lebih dikenal dengan nama tempat wisata GWK Bali. Daya tarik dari GWK Bali terletak pada patung Garuda dan patung dewa Wisnu. Selain dapat melihat patung dalam ukuran besar,<br> di areal GWK Bali juga tersedia banyak fasilitas hiburan, seperti:
    <br>
    -Pementasan tari kecak Bali di sore hari.<br>
    -Aktivitas mengendarai Segway di GWK.<br>
    -Pertujukan film animasi, Petualangan Garuda Cilik.<br>
    -Atraksi parade Kecak pada jam 18:00 – 18:20.<br>

    <br>
    <p><h2>BEDUGUL</h2>

    <center><img src="<?php echo base_url()?>assets/images/bedugul2.jpg?>" width=500 height=350>
    </center>
    <br>

    Pernah memperhatikan gambar pura yang ada di lembaran uang Rp 50.000? Jika belum, mohon dilihat sekarang! Di bagian belangkan lembaran uang Rp 50.000, terdapat gambar pura yang ada ditengah danau. Pura ini bernama Pura Ulun Danu berada ditengah danau Beratan Bedugul, kabupaten Tabanan Bali.
    <br>
    Karena keuikan dari letak pura Ulun Danu yang berada ditengah danau, serta udaranya yang sejuk. Membuat wisatawan Indonesia sangat menyukai liburan ke tempat wisata danau Beratan Bedugul.

   </div>
</div>

</body>
</html> 
