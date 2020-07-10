
<?php require_once'../logincheck.php';?>
<!DOCTYPE html>
<html lang="en" >
<head>
<title>Online | Junk Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel = "shortcut icon" href = "../images/ico1.png" />
<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
<link href="../css/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
<link rel = "stylesheet" type = "text/css" href = "../css/customize2.css" />
<link  rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="../css/input-to-dropdown.css">
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css6/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="../css6/bootstrap-social.css">
<link rel="stylesheet" href="../css6/bootstrap-select.css">
<link rel="stylesheet" href="../css6/fileinput.min.css">
<link rel="stylesheet" href="../css6/awesome-bootstrap-checkbox.css">
<link rel="stylesheet" href="../css6/style.css">
<link rel="stylesheet" href="../css6/style1.css">
<link  rel="stylesheet" href="../src/bootstrap.min.css">
<link  rel="stylesheet" href="../css2/bootstrap.min.css">
<link  rel="stylesheet" href="../css2/bootstrap.css">

<link rel="stylesheet" href="../css/footer.css">
<script src="../js/jquery.min.js"></script>
 <script src="../js/input-to-dropdown.js"></script>
<?php require 'script.php'?>
</head>
<body background="../images/recycle.jpg">
<?php include('includes/header.php');?>
<br/><br/><br/><br/><br/><br/>
<br/><br/>
<div class="ts-main-content">
<div class="content-wrapper">
<div class="container-fluid">
<div class="row">
<br/><br/>

<div class="card mx-auto" style="width: 50rem;">
  <?php
   require_once'add_booking.php'?>
    <div class="card mx-auto" style="width: 50rem;">
        <div class="alert alert-danger alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           Message! Please read information. You cannot change your appointment once you proceed. .
        </div>

    </div>
 <div class="card-header" style="background-color:yellowgreen;color:#ffffff;display: block;text-align: center;font-size: 20px;"> BOOK APPOINT ONLINE JUNKSHOP FORM</div>
  
 <div class="card-body">
<form id = "form_register"  method = "POST" action=""  enctype = "multipart/form-data">
  <br/><br/>
          <div style = "" class = "form-group">
            <label text-align="justify">SEND YOUR REQUEST ABOUT WASTE OR SCRAP TO US,
            FILLUP THIS FORM AND SUBMIT ON TIME! WE WILL CONTACT YOU AS SOON...</label>
     

            <div class = "form-group">
           <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-check"></span> BOOK NOW</a>
                </div>
        </form>
       </div>

     </div>
   </div>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <!-- Modal1 -->
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
      <?php
        $conn = new mysqli("localhost","root","","junkshop") or die(mysqli_error());
        $q = $conn->query("SELECT * FROM `jk` WHERE `jk_no` = '$_SESSION[jk_no]'") or die(mysqli_error());
        $f = $q->fetch_array();
      ?>
      <div class="modal-header">
      <h4>ONLINE<span>JUNKSHOP</span></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
     
        <div class = "modal-body">
        <form  id = "form_booking"  method = "POST" enctype = "multipart/form-data">
          <br/>
            
          <br/>
          <div class = "form-group">
              <input  type="hidden" name="jk_no" value="<?php echo $f['jk_no']?>">
            </div>
            <div class = "form-group">
              
              <input  type="hidden" name="firstname" value="<?php echo $f['firstname']?>">
            </div>
            <div class = "form-group">
              
              <input  type="hidden"  name="lastname" value="<?php echo $f['lastname']?>">
            </div>
            <div class = "form-group">
              
              <input  type="hidden"  name="contact" value="<?php echo $f['contact']?>">
            </div>
          <div class = "form-group">
              <label for = "servtype">Choose Services: </label>
               <div class="input-group">
                                 <div class="input-group-addon">
                                 <i class="fa fa-folder">
                                </i>
                               </div>
                       <div class="radio-group-1">
                            <div class="item"><label for="val9"><input name="servtype"  value="Bare Bright Wire Php25.00/kilo." type="radio"> Bare Bright Wire  &#8369 25.00/kilo.</label></div>
                            <div class="item"><label for="val10"><input name="servtype"  value="Copper Tubling/Flashing Php30.00/kilo" type="radio"> Copper Tubling/Flashing &#8369 30.00/kilo</label></div>
                            <div class="item"><label for="val11"><input name="servtype"  value="Copper Tubling Bus Bar Php30.00/lb." type="radio"> Copper Tubling Bus Bar &#8369 30.00/lb.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Roofing Copper Php30.00/kilo." type="radio">Roofing Copper &#8369 30.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Brass(Plumbing, Pipe)Php25.00/kilo." type="radio"> Brass(Plumbing, Pipe) &#8369 25.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Brass Shells Php25.00/kilo." type="radio"> Brass Shells &#8369  25.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Washers(Tingga)Php5.00/kilo." type="radio"> Washers(Tingga) &#8369 5.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="G.I. Sheets(Yero)Php0.25/kilo." type="radio"> G.I. Sheets(Yero) &#8369 0.25/kilo.</label></div>
                            <div class="item"><label for="val9"><input name="servtype"  value="Zinc Php5.00/kilo." type="radio"> Zinc &#8369  5.00/kilo.</label></div>
                            <div class="item"><label for="val9"><input name="servtype"  value="Catridge of Computers Php10.00/kilo." type="radio"> Catridge of Computers &#8369 10.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Hips Plastics Cups Php1.00/kilo." type="radio"> Hips Plastics Cups &#8369 1.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Paper Php40.00/kilo." type="radio"> Paper &#8369 40.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="News Print Php40.00/kilo." type="radio"> News Print &#8369 40.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="CardBoard Php1.00/kilo." type="radio"> CardBoard &#8369 1.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Broken Bottle(White)Php0.30/kilo." type="radio"> Broken Bottle(White) &#8369 0.30/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Broken Bottle (Coloured)Php0.20/kilo." type="radio"> Broken Bottle (Coloured) &#8369 0.20/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Beer Php0.50/kilo." type="radio"> Beer &#8369 0.50/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Medicine Bottle Php0.10/kilo." type="radio"> Medicine Bottle &#8369 0.10/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Tanduay Bottle(Lapad)Php0.50/kilo." type="radio"> Tanduay Bottle(Lapad) &#8369 0.50/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Long Neck Bottle Php1.00/kilo." type="radio"> Long Neck Bottle &#8369 1.00/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Steel Php65-105/kilo." type="radio"> Steel &#8369 65-105/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Light Iron Php65-Php80/kilo." type="radio"> Light Iron &#8369 65-Php80/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Cast Iron Php75-Php110/kilo." type="radio"> Cast Iron &#8369 75-Php110/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Whole Yero Sheets Php70-Php110." type="radio"> Whole Yero Sheets &#8369 70-Php110.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="CleanGreenMotherBoards Php50/kilo." type="radio">CleanGreenMotherBoards &#8369 50/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="NoneGreenMotherBoards Php75/kilo." type="radio"> NoneGreenMotherBoards &#8369 75/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="HardDrive Pc Boards Php75/kilo." type="radio"> HardDrive Pc Boards &#8369 75/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Memory Chips Php50-Php100/kilo." type="radio"> Memory Chips &#8369 50 - &#8369 100/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="CPU Processor Chips Php50/kilo." type="radio"> CPU Processor Chips &#8369 50/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Cell Phones (No Battery)Php20/kilo." type="radio"> Cell Phones (No Battery) &#8369 20/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Insulated Wire Php40/kilo." type="radio"> Insulated Wire &#8369 40/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="WholeComp.Towersw/HD Php23/kilo." type="radio"> WholeComp.Towersw/HD  &#8369 23/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Laptops Php40/kilo." type="radio"> Laptops &#8369 40/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Hard Drives w/Boards Php50/kilo." type="radio"> Hard Drives w/Boards  &#8369 50/kilo.</label></div>
                            <div class="item"><label for="val12"><input name="servtype"  value="Telecom Equipment Php50/kilo." type="radio"> Telecom Equipment &#8369 50/kilo.</label></div>
                             <div class="item"><label for="val12"><input name="servtype"  value="Power Supply Php50/kilo." type="radio"> Power Supply &#8369 50/kilo.</label></div>
                             <div class="item"><label for="val12"><input name="servtype"  value="Servers Php30/kilo." type="radio"> Servers &#8369 30/kilo.</label></div>
                             <div class="item"><label for="val12"><input name="servtype"  value="Low Grade None PC Boards Php10/kilo." type="radio"> Low Grade None PC Boards &#8369 10/kilo.</label></div>
                             <div class="item"><label for="val12"><input name="servtype"  value="All Heat Sinks Php51/kilo." type="radio"> All Heat Sinks &#8369 51/kilo.</label></div> 
                          </div>
                        <script>inputsToDropdown('.radio-group-1', 'Select Services Type & Price', 'radio', '.radio-group-1', '');</script>
                            </div>
              </div>
              <hr/>
             <div class = "form-group">
            <label for = "select your image">Select your Image :</label>
            <input type="file" name="image"/>
           </div>
            <br />
          <div class = "form-group">
          <label for = "tdate">Date: </label>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-calendar">
           </i>
          </div>
           <input type="text" id='tdate' name="tdate" value="<?php echo date("Y-m-d")?>" onchange="showUser(this.value)"/>
          </div>
            </div>
        <hr />
         
         <div class = "form-group">
          <div id="sample1" class="ui-widget-content" style="padding: .5em;">
          <label for = "dtime">Time: </label>
          <div class="input-group clockpicker"  data-align="top" data-autoclose="true">
          <div class="input-group-addon">
            <i class="fa fa-clock-o">
            </i>
          </div>
          <input type="text" id="timepicker1" class="form-control" name="dtime" required="required">
            </div>
            </div>
          </div>
            <div class = "form-inline">
            <button  class = "btn btn-success" name = "save_booking"><span class = "glyphicon glyphicon-check"></span> SUBMIT</button>
              <br />
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>




<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>

 </body>
 <script>
  $( function() {
    $('#tdate').datepicker();
  } );
  </script>
  <script src="../js/selectdate.js" type="text/javascript"></script>
  <script src="../js/dropdown.js" type="text/javascript"></script>
<script src="../js/option.js" type="text/javascript"></script>
<script src="../js/bootstrap-timepicker.js"></script>
<script src="../js2/jquery-ui.js"></script>
<script src="../js3/bootstrap.min.js"></script>
<script src="../js5/bootstrap-select.min.js"></script>
<script src="../js5/bootstrap.min.js"></script>
<script src="../js5/fileinput.js"></script>
<script src="../js5/main.js"></script>
<script>
      $( function() {
        $('#timepicker1').timepicker();
      } );
</script>
<script src="../js/jquery-ui.js"></script>
 </html>
