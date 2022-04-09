<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><div class="table-responsive">
<head>
<title>Order now</title>


<style>
/*---------------contact----------------*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}

.contact{
    padding-top: 8.5rem;
}
.cake-contact{
    width: 100%;
    background: whitesmoke;

}
.cake-contact-row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.cake-contact-column{
margin: 2rem;
flex: 1 1 20rem;
text-align: center;

}
.cake-contact-column.imgs{
    border: 1px solid #fff;

}
.cake-contact-column img{
    width: 100%;
    height: auto;
    margin: 1.5rem;
    padding: 1rem;
    flex: 1 1 21rem;
    border: 1px solid transparent;
    border-radius: 1rem;
    
}
.cake-contact-column h1{
    padding: 1rem 0;
    color: rgb(236,35,119);
    letter-spacing:.1rem ;

}
.cake-contact-column .social{
    padding: .8rem;
    border: none;
    border-radius: 1rem;
    background: rgb(133, 212, 87);
    color: white;
    font-size: 8px;
}
.cake-contact-column .social table{
    text-align: center;
    padding: .2rem;
    border: none;
    border-radius: 1rem;
    background: rgb(236,35,119);
    color: white;
    font-size: 1.0rem;
}
.cake-contact-column .social i:hover{
    background: rgb(207, 85, 142);
    opacity: 50%;
    color: white;
    transition: Ss ease;
}
.cake-contact-column p{
    padding: 5rem 0;
    line-height: 1.5rem;
    color: limegreen;
    font-size: 30px;
}
.cake-contact-column input,.cake-contact-column textarea,.cake-contact-column select{
    width:80%;
    padding: 1rem;
    margin-bottom: 1.2rem;
    border: none;
    border-bottom: .1rem dotted rgb(236,35,119);
}
.cake-contact-column textarea{
    resize: none;
}
.cake-contact-column btn{
    background-color: bisque;
    font-size: 20px;
    border-radius: 1rem;
    border: 1.5px silver solid;
    text-decoration-color: red;
    padding: 10px;
    width: 300px;
    
}
.cake-contact-column td{
    text-align: center;
    padding: 50px;
}
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: ;
  height:50%;
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
  animation-name: fade;
  animation-duration: 1.5s;
}
.cake-contact-column btn{
  color:rgb(54,22,54);
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100px) {
  .text {font-size: 11px}
}
 .button{
   margin-top:5px;
  width:300px;
  height:50px;
  color:white;
  background-color:limegreen;
  border:2px silver solid;
  text-align:center;
  font-size:20px;
}
</style>
</head>
<body>
<div class=header>
  <table align="center"><tr>
    <td>
    <a href="home.php"> <input type="button " class="button" value=" Back to Home"></input></a>
    </td>
  </tr>
   
  </table>
</div>
    
<footer class="contact" id="contact">
    <div class="cake-contact">
        <div class="cake-contact-row">
            <div class="cake-contact-column">
                <img src="strawberry.jpg" alt="img" class="imgs">
            </div>
            <div class="cake-contact-column">
                <h1>Make Orders with Yummy Foods</h1>
                <div class="social">
                    <table >
                        <tr>
                            <td>Fast </td>
                            <td>Reliable</i></td>
                            <td> Tasty</i></td>
                        </tr>
                        <tr >
                            <td colspan="3">Hotline:+94-134-5678 </td>
                            
                        </tr>
                    </table>
                 
                </div>
               
                <p >Make Your Order now...</p>
                <form action="addform.php" method="post">
                    <input type="text" name="name" id="name" placeholder="please enter your name" >
                    <input type="text" name="email" id="email" placeholder="please enter your email" required >
                    <input type="text" name="address" id="address" placeholder="please enter Address to deliver" required>
                   
                    <textarea name="message" id="" cols="10" rows="8" placeholder="please write the quantity you want and a message regarding delivery, if any"></textarea>
                    <label for="cakes" placeholder="Choose a food item:"></label>

                    <select name="foods" id="foods" >
                      <option value="wedding cake">Choose a food item:</option>
                      <option value="wedding cake">wedding cake</option>
                      <option value="Birthday cake">Birthday cake</option>
                      <option value="chocolate cakes">chocolate cake</option>
                      <option value="short-eats">short-eats</option>
                      <option value="beverages">beverages</option>
                    </select>
                    <br>
                    <input type="submit" class="btn"> </input>
                </form>
            </div>
        </div>
        </div>
    </div>
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 6</div>
              <img src="ribbon2.jpg" style="width:100%">
              <div class="text">wedding cakes</div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 6</div>
              <img src="cu.jpg" style="width:100%">
              <div class="text"></div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 6</div>
              <img src="cake2.jpg" style="width:100%">
              <div class="text">chocolate cakes</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="shorteats.jpg" style="width:100%">
                <div class="text"></div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">5/ 6</div>
                <img src="beverages.jpg" style="width:100%">
                <div class="text"></div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">6/ 6</div>
                <img src="sand.jpg" style="width:100%">
                <div class="text"></div>
              </div>
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            
    
</footer>
<script>

    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
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


</body>
</html>