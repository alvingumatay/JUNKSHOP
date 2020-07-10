<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<title>Online | Junk Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<link rel = "shortcut icon" href = "./images/ico1.png" />
 <script src="js/showhide.js"></script>   
 <script src="js2/jquery.min.js"></script>   
  <script src="js3/bootstrap.min.js"></script>
   <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet"> 
  <link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="src../bootstrap.min.css" />
<link rel="stylesheet" href="src../bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4CAF50;">
  <img src = "./images/ico1.png" style = "float:left;" height = "35px" />
  &nbsp;&nbsp;&nbsp;<a class="navbar-brand" href="#">ONLINE JUNK | SHOP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active" style="float: right;">
        <button class="btn btn-success" onclick="window.location.href = 'home.php';"><i class="fa fa-arrow-left"> Back</i></button>
      </li>
      </ul>
  </div>
</nav>
<br/><br/>
 
<div class="container"> 
<div class="card mx-auto" style="width: 50rem;">
 <div class="card-header"> Register </div>
 <?php include'add_register.php';?>
  <div class="card-body">
<form id="form_register" method = "POST" enctype = "multipart/form-data">
  <br/><br/>
          <div style = "" class = "form-group">
            <label for = "email">Email:</label>
            <input class = "form-control" name = "email" type = "email" placeholder="Email" required="required">
             </div>
             <br>
              <div style = "" class = "form-group">
            <label for = "password">Password:</label>
            <input class = "form-control" name = "password" id="userPw" type = "password" placeholder="Password" id="myInput" data-minLength="5" data-error="some error" required/>
            <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <br>
              <div style = "" class = "form-group">
            <label for = "password">Confirm Password:</label>
            <input class = "form-control" name = "confirmPassword" id="userPw2" type = "password" placeholder="Password" id="myInput" data-minLength="5" data-error="some error" required/>
            <input type="checkbox" onclick="myFunction()">Show Password
            </div>
            <br>
      <div class = "form-group">
            <label for = "firstname">Firstname:</label>
            <input class = "form-control" name = "firstname" type = "text" required = "required" placeholder="Firstname">
          </div>
               <br>
           <div style = "" class = "form-group">
            <label for = "middlename">Middle Name:</label>
            <input class = "form-control" name = "middlename" placeholder = "middlename" type = "text" placeholder="Middleman">
            </div>
                 <br>
             <div style = "" class = "form-group">
            <label for = "lastname">Lastname:</label>
            <input class = "form-control" name = "lastname" type = "text" required = "required" placeholder="Lastname">
          </div>
          <br />
          <div class = "form-group">
            <label for = "birthdate" style = "" placeholder="Birtdate">Birthdate:</label>
            <br style = "clear:both;" />
             <input type="text" class="form-control"    style = "width:30%;"  name="birthdate"  id = "birthdate" /> 
           </div>
                <br>
            <div style = "" class = "form-group">
            <br style = "clear:both;"/>
                       <label for = "age">Age:</label>
            <input  type="text" class="form-control"   style = "width:30%;" min = "0" max = "999" name = "age" id="age" readonly/>
            
            </div>
                 <br>
             <div style = "" class = "form-group">
            <label for = "address">Address:</label>
            <input class = "form-control" name = "address" type = "text" required = "required" placeholder="Address">
            </div>
                 <br>
             <div style = "" class = "form-group">
            <label for = "contact">Contact:</label>
            <input class = "form-control" name = "contact" style = "width:30%;" type = "text" required = "required" placeholder="Contact">
            </div>

            <div class = "form-group">
            <button type="submit" class = "btn btn-success" name = "save_register"><span class = "glyphicon glyphicon-save"></span> SIGNUP</button>
                </div>
        </form>
       </div>

     </div>
   </div>

<div id = "footer">
    <label class = "footer-title">&copy; Copyright Online Junk | Shop 2019</label>
  </div>
 </body>
 <script type = "text/javascript" src="js/showhide.js"></script>
 <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <script src='js/bootstrapvalidator.min.js'></script>
<script type="text/javascript">
 
   $(document).ready(function() {
    $('#form_register').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
            middlename: {
                validators: {
                        stringLength: {
                        min: 1,
                    },
                        notEmpty: {
                        message: 'Please enter your middle name'
                    }
                }
            },
             lastname: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your last name'
                    }
                }
            },
          birthdate: {
                validators: {
                    notEmpty: {
                        message: 'Please select your birthdate'
                    }
                }
            },
            age: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your age'
                    }
                }
            },
            
            address: {
                validators: {
                     stringLength: {
                        min: 20,
                    },
                    notEmpty: {
                        message: 'Please enter your street address'
                    }
                }
            },
         contact: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your mobile number'
                    },
                    contact: {
                        country: 'PHL',
                        message: 'Please supply a valid phone number with area code'
                    }
                }
            },
          

            
    
   email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
          
  password: {
            validators: {
              stringLength: {
                         min:8,
                        max: 200,
                        message:'Please enter at least 8 special characters and no more than 200'
                    },
                      notEmpty: {
                        message: 'Please enter your password'
                    },
                identical: {
                    field: 'confirmPassword',
                    message: 'Confirm your password below - type same password please'
                }
            }
        },
        confirmPassword: {
            validators: {
              stringLength: {
                        min:8,
                        max: 200,
                        message:'Please enter at least 8 special  characters and no more than 200'
                    },
               notEmpty: {
                        message: 'Please enter your confirm Password'
                    },
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
         },
      
            
            }
        })
    
  
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


 
 </script>
 <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#birthdate').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
        });
    </script>
</html>