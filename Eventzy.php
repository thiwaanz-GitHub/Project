<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="Css/footer.css">
    <link rel="stylesheet" href="Css/image.css">
    <link rel="stylesheet" href="Css/navigation.css">
      <link rel="stylesheet" href="Css/grid.css">
      <link rel="stylesheet" href="Css/scroll.css">
      <link rel="stylesheet" href="Css/main.css">
      <link rel="stylesheet" href="Css/about.css">
       <script src="Js/scroll.js"></script>

       <style>
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

h2{
  text-align: center;
}
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 5px;
  /* display: grid; */
  /* grid-template-columns: auto; */
  /* grid-area: auto; */
}

.card:hover{
  box-shadow: 0 4px 8px 0 rgb(0, 0, 0); 
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.containe {
  padding: 0 16px;
}

.containe::after, .roww::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  text-align: center;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: rgb(255, 136, 0);
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

       </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Eventzy </title>

    <script>
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementsByClassName("navbar").style.top = "0";
        } else {
          document.getElementsByClassName("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
      }
      </script>

  </head>
  <body>
    
      <div class="hero-image"  id="Home">
        
        <div class="logo"> <a href=""> <img src="Image/Eventzy_logo.png" alt=""> </a></div>
           
           <div class="topnav">
            
            <a href="User/login.php">Login</a>
            <a href="#About">About</a>
            <a href="#contact">Contact</a>
            <a href="#Services">Services</a>
            <!-- <a href="#Gallary">Gallary</a> -->
            <a href="#Home">Home</a>
           
          </div>
          

        </div> 

        <div class="hero-text">
          <h1 style="font-size:50px">PLACE YOUR CHOISE</h1><br><br>
          <p style="font-size:20px">We are here!</p>
          <br>
          <a href="#About"> <button >About Us</button> </a>
         
        </div>
      </div>


  </div>
</div> 

<div class="main" id="Services">
  
<section class="book" id="book">

  <h1 class="heading">
      <span>S</span>
      <span>E</span>
      <span>R</span>
      <span>V</span>
      <span>I</span>
      <span>C</span>
      <span>E</span>
      <span>S</span>
  </h1>

  </section>

</div>


<div class="grid-container">
<?php
include_once 'Admin/connection.php';

$sql = $conn->query("SELECT * FROM category_table");
while ($array = $sql->fetch_assoc())
{
?>

  <div class="container" >
    <img src="uploads/<?php echo $array['Image']; ?>" alt="Avatar" class="image" style="width:100%">
    <div class="middle">
    
          <a href="User/usercard.php?Id=<?php echo $array['Id']; ?>" target="_blank"><button class="my" ><?php echo $array['C_name']; ?></button></a>
    </div>
  </div>
<?php
}
?>

  </div>

<div class="main" id="Services">
  
  <section class="book" id="book">
  
    <h1 class="heading" id="contact">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
        
    </h1>
        <br><br>

        <div class="column">
          <div class="card">
            <img src="Image/pngwing.com(5).png" alt="image" style="width:100%">
            <div class="containe">
              <h2 style="color: rgb(255, 123, 0);">Mr. Adarsha Thiwangana</h2>
              <p class="title">CEO & Owner</p><br><br>
              <p>text</p><br>
              <p style="font-size: 13px;"> adarsha@gmail.com</p><br><br>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>

        <div class="roww">
          <div class="column">
            <div class="card">
              <img src="Image/pngwing.com(5).png" alt="img" style="width:100%">
              <div class="containe">
                <h2 style="color: rgb(255, 123, 0);">Eventzy</h2>
                <p class="title">The Eventzy.pvt</p><br><br>
                <p>text </p><br>
                <p style="font-size: 13px;">eventzy@gmail.com</p><br><br>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
          
          <div class="column">
            <div class="card">
              <img src="Image/pngwing.com(5).png" alt="image" style="width:100%">
              <div class="containe">
                <h2 style="color: rgb(255, 123, 0);">Mr. Unknown</h2>
                <p class="title">CEO & Owner</p><br><br>
                <p>text</p><br>
                <p style="font-size: 13px;">unknown@gmail.com</p><br><br>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
          </div>
  
    </section>
  
  </div>


  <div class="main" id="About">
      
      <section class="" id="">
        <h1 class="heading">
          <span>A</span>
          <span>B</span>
          <span>O</span>
          <span>U</span>
          <span>T</span>
      </h1>
<br><br>
<div class="mygrid">

  <div class="mbox">
    <video autoplay muted loop id="myVideo">
      <source src="Image/about.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    
    <div class="con">
      <h1>Are you looking for better services?</h1> <br>
      <p>Yes! this is the place you were looking for. eventzy is the best place to 
        choose better and trustful services. eventzy has trustful suppliers to supplie their 
        services. and also we are able to getting responsibilities.
      </p>
    </div>

  </div>

  <div class="mbox">
    <video autoplay muted loop id="myVideo">
      <source src="Image/about.mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    
    <div class="con">
      <h1>Do you wanna post your services?</h1> <br>

      <p>Eventzy is the best place to posting your advertisements for getting 
        better values for your services. We are able to manage your services and create better 
      connection with customers to choose your services. </p>
    </div>
  </div>

</div>
    

    
    
    </div>
    <br><br><br>
<!-- fooooooooooooooooooooooooooooter -->
<section class="footer">

<div class="box-container" id="Footer">

    <div class="box">
        <h3>ABOUT US</h3>
        <p>We are responsible for our customers to give better service in here!
        Our team always forcusing on our clients and we are responsible for any kind of situation</p>
    </div>
    <!-- <div class="box">
        <h3>branch locations</h3>
        <a href="#">india</a>
        <a href="#">USA</a>
        <a href="#">japan</a>
        <a href="#">france</a>
    </div> -->
    <div class="box">
        <h3>QUICK LINKS</h3>
        <a href="#">Home</a>
        <a href="#About">About</a>
        <a href="#Services">Services</a>
        <a href="#contact">Contact</a>
        <!-- <a href="#Footer">About</a> -->

    </div>
    <div class="box">
        <h3>FOLLOW US</h3>
        <a href="#">Facebook</a>
        <a href="https://www.instagram.com/the_eventzy/" target="_blank">Instagram</a>
        <a href="#">Twitter</a>
        <a href="#">Linkedin</a>
        <a href="#">eventzy@gmail.com</a>

    </div>

</div>
  <div id="contact"></div>
<h1 class="credit"> created by <span> mr. Adarsha Thiwangana</span> </h1>

</section>
 <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Home</button> -->
  </body>
</html>
