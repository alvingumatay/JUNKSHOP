200px<!doctype html> 
<html lang=en> 
<head> 
<title>Online Junk | Shop</title> 
<meta charset=utf-8> 
<link rel="stylesheet" type="text/css" href="./css/style5.css">
<link rel="stylesheet" type="text/css" href="./css/style3.css"> 
<link rel="stylesheet" type="text/css" href="./css/cs.css"> 
<link rel = "shortcut icon" href = "./images/ico1.png" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="css/css.css">
<style>
  hr.new5 {
  border: 10px solid green;
  border-radius: 5px;
}
</style>
<script type="text/javascript"> 
window.onload=function(){ Nifty("#container","big"); 
Nifty("#mainpanel","same-height normal"); 
Nifty("#leftcol,#rightcol", "same-height big"); 
Nifty("#hdr,#ftr","normal"); } 
</script> 
</head> 
<body> 
<div id="container"> 
<div id="hdr"><br> <h1>Online Junk Shop <small style="color:yellow;">&reg;</small></h1> </div><br> 

<div id="mainpanel">
<br> <br> <br> <br> <br> 
<nav>   <ul> 
<li><a href="home.php" title="Home">Home</a></li> 
<li><a href="scrap.php" title="Scrap Metal and Plastic Pictures">Scrap Metal and Plastic Pictures</a></li> 
<li><a href="pickup.php" title="Scrap Metal and Plastic Pickup">Scrap Metal and Plastic Pickup </a></li> 
<li><a href="learn.php" title="Let's Learn to Scrap">Let's Learn to Scrap</a></li> 
<li><a href="company.php" title="Company">Company</a></li> 
<center><li><a href="#" onclick="document.getElementById('modal-wrapper').style.display='block'" title="Contact Us/Request Info">Contact Us/Request Info</a></li></center>
</ul>  </nav>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" enctype = "multipart/form-data" action = "login.php" role = "form" method = "POST">
        
    <div class="imgcontainer">
      <a href="#" onclick="document.getElementById('modal-wrapper').style.display='none'" class="close">X</a>
      
      <h2 style="text-align:center; font-family: big john; color:yellow;">Enter You Details Here</h2>
    </div>

    <div class="container1">
      <input type="email" placeholder="Enter Email" name="email">
      <input type="password" placeholder="Enter Password" name="password">        
      <button type="submit" name="login">Login</button>
     </div>
    <a href="#" class="forgotPassword">
                   <center> Forgot Password?</center>
                </a>
        <div class="or"><hr width="200px" style="float:left;"/>or<hr  width="200px" style="float:right;"/></div>
        
<button type="submit" class="btnRegister" class="btnRegister" onclick="window.location.href = 'register.php';">REGISTER</button>
         <a href="#"> <div class="not">not now</div></a>
  </form>
</div>
  <ul id="services1">
<li>
<h3 style="color:green;">Contact Us for Picking Selling Junk Materials Services.</h3>
<hr class="new5"/>
<form>
<div class="form-row">
    <div class="form-group col-md-5">
      <label style="float:left;">First Name*</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label style="float:left; margin-left:30px;">Last Name*</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label style="float:left;">Email*</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label style="float:left; margin-left:30px;">Phone*</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label style="float:left;">Address of pickup scraps location*</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label style="float:left; margin-left:30px;">Please attach photos of materials which picking*</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
      <label style="float:left; margin-left:30px;">Comments*</label>

      <textarea style="width:980px; height:80px; float:left;"></textarea>
  
  </div>


  <p align="left">
  <button style="width:150px;"  class="btn btn-info" type="submit" >Request for Pickup</button>
</p>
</form>
</li>
</ul>
<div id="ftr"> online junkshop philippines &copy; 2020 </div>
</div> 
</body>
<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</html> 