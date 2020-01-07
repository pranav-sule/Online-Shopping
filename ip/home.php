<?php  ?>
<html>
<head>
<meta charset="utf-8">
  <title>Kraft New</title>


  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body background="img.png" background-size="cover" >
          
<div class="header">


  <div class="mid_header">

<div class="logo">
<h1>KRAFT<span>NEW</span> </h1>
</div>
<div class="inner_header">
          <ul>
         <a href="home.php" style="text-decoration: none"><li>Home</li></a> 
          <a href="abt.html" style="text-decoration: none"><li>About</li></a>
          <a href="prd1.html" style="text-decoration: none"><li>Products</li></a> 
          <a href="contact.html" style="text-decoration: none"><li>Contact Us</li></a>

      </ul>
</div>
</div></div>



<div class="tag">

<span class="txt1">WELCOME TO</span>
<span class="txt2">KRAFT NEW</span>
 </div>


 <div>
<p id="k2">
<a href="abt.html" style="text-decoration: none"><button class="k">ABOUT US</button> </a>
<a href="contact.html" style="text-decoration: none"><button class="k" id="k1"> CONTACT US</button></a></p>

</div>

<div class="top">
<center>
<pre>



</pre>
<p> <h3>REACH NEW HEIGHTS WITH US...</h3></p></center>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">KRAFT NEW EXCLUSIVE</div>

  <img src="gift2.jpg" style="width:100%">
  <div class="text">Gifts</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">KRAFT NEW EXCLUSIVE</div>
  <img src="doll2.jpg" style="width:100%">
  <div class="text">Jaipur Handicraft Rajasthani Puppets</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">KRAFT NEW EXCLUSIVE</div>
  <img src="kerala.jpg" style="width:100%">
  <div class="text">Kerala Handicraft</div>
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
</div>

<div class="container">

  <h1 class="main-text">
</h1>
<div class="card card-1">
         
<h1 class="text1">
<B>Promotion Details</B></h1>
<p>Our products promote your business in the most unique way</p>


         </div>
<div class="card card-2">
          <h1 class="text1">Fully Customisable
</h1>
<p> Easy customizable products available according to your need</p>

         </div>
<div class="card card-3">
          <h1 class="text1">Souvenir
</h1><p>Our products act as souvenir  <p>-<i>"Good memories should always be remembered"</i></p></p>

         </div>
</div>



<div class="kn">
<div class="split kn1">
<h2>KRAFT NEW</h2>
    <p>REACH NEW HEIGHTS WITH US...</p>
</div>
<div class="split kn2">
<p><center>
   We hereby present you one of the most innovative, affordable and price competitive promotional products provider for the latest and unique brand promotional activities ,source and collected from all over the world with rigorous  market research providing best quality products for your company and to make brand more exclusive and helping reach your brand name to the public uniquely combined with both traditional and latest promotional methods meeting the international standards to make your brands stand, worldwide.</center> </p>
</div>
</div>

<div class="box">


<h4>FEEL FREE TO DROP YOUR QUERY !!!</h4><br>
<form action="home1.php" method="POST">
<div class="ipbox">
<input type="text" name="name" required>
<label>NAME</label>
</div><div class="ipbox">
<input type="text" name="email" required>
<label>EMAIL</label>
</div><div class="ipbox">
<input type="text" name="query" required>
<label>MESSAGE</label>
</div>
<!-- <center><label for="name"><b>NAME</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" required>
<br>


    <label for="email"><b>EMAIL</b></label><br>
    <input type="email" placeholder="Enter Email" id="text1" name="email" required>
<br>
    <label for="query"><b>MESSAGE</b></label><br>
    <input type="text" placeholder="Enter Message" name="query" required>
<br><br> -->

<input type="submit" name="" value="SUBMIT">

<!-- </center>

</div> -->
</div>




<div class="rights">
<h1><center>All Rights Reserved.  || 2019 KRAFT NEW</center></h1>
<h1><center>Created By:</center></h1>

</div>

<div class="main">

 <!--cards -->
<center>
<div class="card">

<div class="image">
   <img src="pic1.jpg">
</div>
<div class="title">
 <h1>
SHRUTI SINGH</h1>
</div>
<div class="des">
 <p>
TE-IT (66)</p>
<p> STUDENT OF ST. JOHN COLLEGE OF ENGINEERING AND MANGEMENT</p>

</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="pic2.jpg">
</div>
<div class="title">
 <h1>
PRANAV SULE</h1>
</div>
<div class="des">
 <p>
TE-IT (67)</p>
<p> STUDENT OF ST. JOHN COLLEGE OF ENGINEERING AND MANGEMENT</p>

</div>
</div></center>
<!--cards -->
</div>
</body>
</html>
