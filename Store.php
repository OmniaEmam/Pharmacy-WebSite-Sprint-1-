<!DOCTYPE html>
<html>
    <body> 
        <head>
 <!---------------------------Head------------------------------------------->
<title>Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

            
<style>
/*----CSS----*/
/*---------HEADER--------*/
{
  box-sizing: 10px;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color:#ca9ded;
  padding: 10px;
  font: Serif;
  text-align: center;
  color: #000000;
}
/*Sign in*/    
    
.buttonex2 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#360959  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 1100px;
}
    
.buttonex2 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex2:hover span {
  padding-right: 25px;
}

.buttonex2:hover span:after {
  opacity: 1;
  right: 0;
}
    
    /*Sign in*/    
    
.buttonex3 
{
  display: inline-block;
  border-radius: 4px;
  background-color:#360959  ;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  font-family: serif;
  padding: 10px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  position: absolute;
  top: 25px;
  left: 970px;
}
    
.buttonex3 span 
{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonex3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0px;
  right: -20px;
  transition: 0.5s;
}

.buttonex3:hover span {
  padding-right: 25px;
}

.buttonex3:hover span:after {
  opacity: 1;
  right: 0;
}

    
/*--------------------TopBar-----------------*/
  /* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #925cb5;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ca9ded;
  color: black;
}

 /*------------------- background ----------------------*/   
body {
  background: #360959; /* fallback for old browsers */}  

    
    
h2{
    color: #004445;
    text-align: center;
    margin-right: 20px;
    } 
    
    h3{
    font-size: 100;    
    color: #004445;
    text-align :left;
    margin-right: 200px;
    } 
    
    .form{
        text-align: center;
        margin-top: 50px;
        margin-right: 80px;
        margin-bottom: 20px;
    }
    
    .Name{
        color: #004445
    }
    
        .Emp
    {
        font-size: 20px;
        text-align: center;
        margin-left: 40px;
    }
    
    
    
/*Feed Back Form*/
.Feedback-page {
  width: 380px;
  padding: 30px;
  margin: auto;
}
    
.form {
  
  position:relative;
  z-index: 2;
  background: #94d3ac;
  max-width: 360px;
  margin: 50px auto 100px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #ccedd2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
/*-----------------------زرار ال Login----------------------------*/
input[type=submit] {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #004445;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
input[type=submit]:hover;
input[type=submit]:active;
input[type=submit]:focus {
  background: #4B0082;
}
    
/*ssend*/
    
.buttonex1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #004445;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    
}
    
    
    /*New*/
    
    h4
        {
            font-family: inherit;
            color:white;
            text-align: center;
            font-size: 70px;
            top:30px;
            left:1000px;
            
        }
    
    h3
        {
            font-family: inherit;
            color:#f45905;
            text-align: center;
            font-size: 50px;
            position:absolute;
            top:350px;
            left:20px;
            
        }
    h6
        {
            font-family: inherit;
            color:#fb9224;
            text-align: center;
            font-size: 50px;
            position:absolute;
            top:1050px;
            left:20px;
            
        }
    h7
        {
            font-family: inherit;
            color:#fbe555;
            text-align: center;
            font-size: 50px;
            position:absolute;
            top:1050px;
            left:20px;
            
        }
    
/*MED1*/
.containerex1 {
  position: relative;
  width: 50%;
}

.imageex1 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 70px;
  left:20px;
}

.overlayex1 {
  position: absolute;
  top: 70px;
  left: 20px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex1:hover .overlayex1 
{
  opacity: 1;
}

.textex1 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*MED2*/
.containerex2 {
  position: relative;
  width: 50%;
}

.imageex2 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 70px;
  left:450px;
}

.overlayex2 {
  position: absolute;
  top: 70px;
  left: 450px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex2:hover .overlayex2 
{
  opacity: 1;
}

.textex2 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    
    /*MED3*/
.containerex3 {
  position: relative;
  width: 50%;
}

.imageex3 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 70px;
  left:875px;
}

.overlayex3 {
  position: absolute;
  top: 70px;
  left: 875px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex3:hover .overlayex3 
{
  opacity: 1;
}

.textex3 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*MED4*/
.containerex4 {
  position: relative;
  width: 50%;
}

.imageex4 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 400px;
  left:20px;
}

.overlayex4 {
  position: absolute;
  top: 400px;
  left:20px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex4:hover .overlayex4 
{
  opacity: 1;
}

.textex4 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*MED5*/
.containerex5 {
  position: relative;
  width: 50%;
}

.imageex5 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 400px;
  left:450px;
}

.overlayex5 {
  position: absolute;
  top: 400px;
  left: 450px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex5:hover .overlayex5
{
  opacity: 1;
}

.textex5 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
     /*MED6*/
.containerex6 {
  position: relative;
  width: 50%;
}

.imageex6 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 400px;
  left:875px;
}

.overlayex6 {
  position: absolute;
  top: 400px;
  left: 875px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex6:hover .overlayex6
{
  opacity: 1;
}

.textex6 {
  color:#f45905;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    
    
    
    
    
    
    
    
/*Hair Product*/
    
    /*Pro 1*/
.containerex7 {
  position: relative;
  width: 50%;
}

.imageex7 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 840px;
  left:20px;
}

.overlayex7 {
  position: absolute;
  top: 840px;
  left: 20px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex7:hover .overlayex7 
{
  opacity: 1;
}

.textex7 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*Pro 2*/
.containerex8 {
  position: relative;
  width: 50%;
}

.imageex8 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 840px;
  left:450px;
}

.overlayex8 {
  position: absolute;
  top: 840px;
  left: 450px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex8:hover .overlayex8 
{
  opacity: 1;
}

.textex8 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    
    /*Pro 3*/
.containerex9 {
  position: relative;
  width: 50%;
}

.imageex9 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 840px;
  left:875px;
}

.overlayex9 {
  position: absolute;
  top: 840px;
  left: 875px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex9:hover .overlayex9 
{
  opacity: 1;
}

.textex9 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*Pro 4*/
.containerex10 {
  position: relative;
  width: 50%;
}

.imageex10 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 1170px;
  left:20px;
}

.overlayex10 {
  position: absolute;
    top: 1170px;

  left:20px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex10:hover .overlayex10 
{
  opacity: 1;
}

.textex10 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
    /*Pro 5*/
.containerex11 {
  position: relative;
  width: 50%;
}

.imageex11 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
    top: 1170px;

  left:450px;
}

.overlayex11 {
  position: absolute;
    top: 1170px;

  left: 450px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex11:hover .overlayex11
{
  opacity: 1;
}

.textex11 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    
     /*Pro 6*/
.containerex12 {
  position: relative;
  width: 50%;
}

.imageex12 {
  display: block;
  width: 400px;
  height: 300px;
  position: absolute;
  top: 1170px;
  left:875px;
}

.overlayex12 {
  position: absolute;
  top: 1170px;
  left: 875px;
  width: 400px;
  height: 300px;
  opacity: 0;
  transition: .5s ease;
  background-color: #470e79;
}

.containerex12:hover .overlayex12
{
  opacity: 1;
}

.textex12 {
  color:#fbe555;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
 }
    

    
    </style>
            </head>

      
<!-------------HTML---------------------->
<!------------Header------------------->
<div class="header">
  <h1>P H A R M A</h1>
</div>
 <!----------------TopBar----------------->
 <div class="topnav">
  <a href="#">Home</a>
  <a href="Store.php">Store</a>
     <a href="#">Cart</a>
     <a href="Ask%20for%20Medical%20Advise.php">Ask Us</a>
     <a href="Feed%20back.php">Feedback</a>
</div>
        <h4>Welcome To the Store</h4>
        <h3>1) Medicines Section</h3>
        <h6>2) Hair Product</h6>
        
        
<div class="containerex1">
<img src="Med%201.jpg" class="imageex1">
<div class="overlayex1">
<div class="textex1">
    <strong>Suger Medicines</strong><br>
    Code 101<br>
    Age Category : 45 - 55<br>
    Price : 50$<br>
</div>    
</div>
</div>
        
        
<div class="containerex2">
<img src="Med%202.jpg" class="imageex2">
<div class="overlayex2">
<div class="textex2">
    <strong>Pressure Medicines</strong><br>
    Age Category : 45 - 55 age
    Price : 60$
</div>    
</div>
</div>
        

<div class="containerex3">
<img src="Med%203.jpg" class="imageex3">
<div class="overlayex3">
<div class="textex3">
    <strong>Child Medicines</strong><br>
    Age Category : 2 - 10 age
    Price : 20$
</div>    
</div>
</div>
        
        
<div class="containerex4">
<img src="Med%204.png" class="imageex4">
<div class="overlayex4">
<div class="textex4">
    <strong>lquid Medicines</strong><br>
    Age Category : Any age
    Price : 90$
</div>    
</div>
</div>

        
<div class="containerex5">
<img src="Med%205.jpg" class="imageex5">
<div class="overlayex5">
<div class="textex5">
    <strong>BIO Medicines</strong><br>
    Age Category :60 -70
    Price : 200$
</div>    
</div>
</div>
        
<div class="containerex6">
<img src="Med%206.jpg" class="imageex6">
<div class="overlayex6">
<div class="textex6">
    <strong>Suger Medicines</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        

        
        
        
        
<div class="containerex7">
<img src="Pro%201.jpg" class="imageex7">
<div class="overlayex7">
<div class="textex7">
    <strong>Shampo</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>

        
        
<div class="containerex8">
<img src="Pro%202.jpg" class="imageex8">
<div class="overlayex8">
<div class="textex8">
    <strong>Hair Care</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        
    
        
<div class="containerex9">
<img src="Pro%203.jpeg" class="imageex9">
<div class="overlayex9">
<div class="textex9">
    <strong>Shower Gel</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        

<div class="containerex10">
<img src="Pro%204.jpg" class="imageex10">
<div class="overlayex10">
<div class="textex10">
    <strong>Shampo</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        
        
<div class="containerex11">
<img src="Pro%205.jpg" class="imageex11">
<div class="overlayex11">
<div class="textex11">
    <strong>Spray</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        
        
<div class="containerex12">
<img src="Pro%206.jpg" class="imageex12">
<div class="overlayex12">
<div class="textex12">
    <strong>Beauty Mask</strong><br>
    Age Category : 20 - 70
    Price : 330$
</div>    
</div>
</div>
        
        
        
        <a href="register.php" target="_self">
            <button class="buttonex2" style="vertical-align:middle">Sign In</button> 
        </a>
        
        <a href="pro.php" target="_self">
            <button class="buttonex3" style="vertical-align:middle">Log In</button> 
        </a>
</body>
</html>
