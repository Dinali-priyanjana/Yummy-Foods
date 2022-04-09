<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><div class="table-responsive">
<head>
<title>Contact us</title></head>
<script>

</script>
<style>
body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
    body{
        background-image:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bgimage.jpg);
        background-position: center;
	    background-size:cover;
       
	 }
     header,footer{
    position: absolute;
    background-color: rgb(190, 194, 196);
    width: 99%;
   
    box-shadow: 0 0 3px #000;
}
header {
    height: 100px;
    padding: 15px;
    
    overflow: hidden;
    
}
header  #logo img{
    float: left;
    height: 140px;
    width: 150px;
    padding: 15px;
    margin-top: -30px;
    margin-left: 20px;
}
header  #topic{
    color: rgb(121, 5, 76);
    font-size: 35px;
    padding: 15px;
    margin-top: -50px;
    margin-left: 30px;
    float: left;
}
/*header  #search{
    
   display: flex;
   margin-top: 12px;
   
   height: 40px;
   width: 49%;
   line-height: 50px;
}
header  #search input{
   height: 100%;
    font-size: 18px;
   width: 80%;
}
header  #search button{
    
    top:0;
    right: 0;
    width: 60px;
    height: 47px;
    background: rgb(155, 6, 80);
}*/

header #nav{
    width: 52%;
    height: 50px;
    /*background-color: #000;*/
    float: left;
    margin-top: 20px;
    text-align: center;
    
}
header #nav li{
    display: inline;
    margin-left: 60px;
    margin-top: -10px;
}
header #nav li a{
    
    text-decoration: none;
    font-weight: bold;
    color: rgb(138, 9, 131);
    padding: 1px;
    font-size: 20px;
    transition: .3s ease;
}
header #nav   #cart a img {
    margin-top: -30px;
  
    float: right;
    transition: .3s ease;
    height: 10;
    width: 5%;
}
header #nav li a:hover{
    
    color: crimson;
}
footer{
    height: 40px;
    opacity: 0.5;
 margin-top: -10px;
    text-align: center;
    padding: 10px;
    

}
     
/*---------------contact----------------*/
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
    width: 90%;
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
    background: rgb(236,35,119);
    color: white;
    font-size: 20px;
}
.cake-contact-column .social table{
    text-align: center;
    padding: .5rem;
    border: none;
    border-radius: 1rem;
    background: rgb(236,35,119);
    color: white;
    font-size: 1.5rem;
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
.cake-contact-column input,.cake-contact-column textarea{
    width:80%;
    padding: 1rem;
    margin-bottom: 1.2rem;
    border: none;
    border-bottom: .1rem dotted rgb(236,35,119);
}
.cake-contact-column textarea{
    resize: none;
}
.cake-contact-column button{
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
</style>

<body>
    <header>
        <div id="logo"> <img src="pic/logo4.png"></div>
        <div id="topic"><h1>YUMMY FOODS</h1></div>
        <!--<div id="search"><input type="text" placeholder="search">
                <button>search</button></div>-->
        <div id="nav">
            <ul>
                
            <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <div id="cart"><a href="cart_form.php"> <img src="pic/cart1.png"></a></div>
        </ul>
        </div>
       </header>


    <div class="cake-contact">
        <div class="cake-contact-row">
            <div class="cake-contact-column">
                <img src="cake.jpg" alt="img" class="imgs">
            </div>
            <div class="cake-contact-column">
                <h1>contact us</h1>
                <div class="social">
                    <table >
                        <tr>
                            <td> <i class="fa fa-facebook"></i></td>
                            <td> <i class="fa fa-instagram"></i></td>
                            <td> <i class="fa fa-pinterest"></i></td>
                        </tr>
                    </table>
                 
                </div>
               
                <p >We Want to Hear From U...  Write Us...</p>
                <form action="addform1.php" method="post">
                    <input type="text" name="name" id="name" placeholder="please enter your name" required>
                    <input type="text" name="email" id="email" placeholder="please enter your email" required>
                    <input type="text" name="mobile" id="mobile" placeholder="please enter your mobile" required>
                    <textarea name="message" id="message" cols="10" rows="8" placeholder="please give your message"></textarea>
                    <br>
                    <button class="btn">submit <i class="fa fas-angle-right"></i></button>
                </form>
            </div>
        </div>
        <div class="map">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.928330001859!2d79.90383441426768!3d6.899175220597186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a1d6346087b%3A0xff54f9292850af07!2sYummy%20Foods%20%26%20Catering!5e0!3m2!1sen!2slk!4v1647911564618!5m2!1sen!2slk" 
            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>


   

</body>
</html>