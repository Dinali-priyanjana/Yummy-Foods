<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><div class="table-responsive">
<head>
<title>About us</title>
<script>

</script>
<style>
    *box-sizing{
        box-sizing: border-box;
    }
    body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
    body{
       
        background-image:url("back.jpg");
	    background-size:1800px 1300px;
        background-repeat:no-repeat;
       
	 }
.inner-background{
background-color:black;
width:99.5%;
height:440px;
text-align:center;
opacity:80%;
position:fixed;
bottom: 50px;
 right: 0;
left:5px;
}
.inner-background h1{
    color: rgb(224, 95, 134);
}
.inner-background pre{
    color: beige;
    font-size: 20px;
    line-height: 25px;
}
.inner-background p{
color: rgb(64, 230, 86);
line-height: 5px;

}
 
header,footer{
    position: absolute;
    background-color: rgb(190, 194, 196);
    width: 99%;
   
    box-shadow: 0 0 3px #000;
}
header {
    height: 60px;
    padding: 15px;
    
    overflow: hidden;
    
}
header  #logo img{
    float: left;
    height: 100px;
    width: 110px;
    padding: 15px;
    margin-top: -30px;
    margin-left: 20px;
}
header  #topic{
    color: rgb(121, 5, 76);
    font-size: 35px;
    padding: 15px;
    margin-top: -70px;
    margin-left: 30px;
    float: left;
}
/*header  #search{
    
   display: flex;
   margin-top: 20px;
   
   height: 40px;
   width: 40%;
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
    width: 50px;
    height: 45px;
    background: rgb(155, 6, 80);
}*/

header #nav{
    width: 50%;
    height: 50px;
    /*background-color: #000;*/
    float: left;
    margin-top: 10px;
    text-align: center;
    
}
header #nav li{
    display: inline;
    margin-left: 50px;
    margin-top: -20px;
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
    width: 4%;
    
}
header #nav li a:hover{
    
    color: crimson;
}
footer{
    height: 40px;
    opacity: 0.5;
 margin-top: 780px;
    text-align: center;
    padding: 10px;
    

}

</style>
</head>
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
    <div class="background">
    
    </div>
        <div class="inner-background">
<h1>ABOUT US...</h1>
<pre>
    Founded in 2021, 
    Yummy Foods Cake Shop mission is to
         “Bring home baked goodness to everyone.” 
    Using our traditional recipe and the finest of ingredients, 
    every item is lovingly handmade with passion.   
    We are ready to be part of your precious and 
    joyous occasions by accentuating the moments with our cakes. 
</pre>


<table cellspacing="70px" align="center" font-size="2px">
    <tr>
        <td>
            <p>
                552/3/4, 1<sup>st</sup>Lane,</p>
                <p>Athurugirya, Sri Lanka.
            </p>
        </td>
        <td><p>
            open hours:</p>
           <p> weekdays 8 a.m -10p.m</p>
           <p>weekends 9 a.m - 7 p.m
        </p>
        </td>
        <td>
           <p>
               Tel:0112743567</p> 
        </td>
        <td>
<p>
    Yummyfoods@gmail.com</p>
        </td>
    </tr>
</table>
        </div>

       
    
</body>
</html>