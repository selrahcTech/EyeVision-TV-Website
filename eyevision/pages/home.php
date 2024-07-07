<?php
    include("../header/header.php");
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
<div class="home">
  <p>EyeVision Screen </p>
</div>

<div class="model1">
  <p>Control the Screen with <br> your eyes</p>
</div>

<br>
<div class="slideshow-container">
<p>Screen by Resolution</p>
<div class="mySlides fade">
  <img src="../css/8k.png" style="width:100%; height:450px; ">
</div>

<div class="mySlides fade">
<img src="../css/4k.png" style="width:100%; height:450px; ">
</div>

<div class="mySlides fade">
<img src="../css/full.png" style="width:100%; height:450px; ">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<p style="font-size: 40px; color: white; text-align: center; font-weight: bold;">Screen Features</p>
<div class="features">
</div>

<div class="last">
<p>

Develop and launch accessible,<br> eye-controlled televisions to enhance the lives of <br>everyone.</p>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

setInterval(function() {
  plusSlides(1);
}, 4000);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
<br>
<?php
    include("../header/footer.php");
?>