<?php
 include 'header.php';
 include 'connection.php';
if(isset($_GET['firstname']))
{
   //echo "<script>alert('klklk')</script>";
   $firstname = $_GET['firstname'];
   $lastname = $_GET['lastname'];
   $gender = $_GET['gender'];
   $mobile = $_GET['mobile'];
   $email = $_GET['email'];
   $profession = $_GET['profession'];
   $address = $_GET['address'];

   $sql = "INSERT INTO `mmhh_members`(`fname`, `lname`, `gender`, `phone`, `email`, `profession`, `address`) 
   VALUES ('$firstname','$lastname','$gender','$mobile','$email','$profession','$address')";
   
   
   if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registered Successfully....')</script>";
    }
     else
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
}

?>
<style>

#wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
.mmhh-signup-btn {
    font-family: Arial;
    color: #f05e23;
    background: #fff;
    font-size: 20px;
    font-weight: bold;
    padding: 10px 20px 10px 20px;
    border: solid #f05e23 2px;
    text-decoration: none;
}

.form_algn{
    padding-top: 40px;
    padding-bottom: 20px;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}
</style>
<div class="container-fluid" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="" accept-charset="utf-8" class="form_algn" role="form">   <legend>Join With US</legend>
                    <h4></h4>
                    <div class="row">
                        <div class="form-group col-xs-6 col-md-6">
                            <input type="text" name="firstname" value="" required class="form-control input-lg" placeholder="First Name"  />
                            </div>
                        <div class="form-group col-xs-6 col-md-6">
                            <input type="text" name="lastname" value="" required class="form-control input-lg" placeholder="Last Name"  />        
                            </div>
                          
                    </div>
                    <div class="form-group col-xs-6 col-md-6">         
                     <label class="radio-inline">
                        <input type="radio" required name="gender" value="male" id=male />  Male
                    </label>
                    </div>
                    <div class="form-group col-xs-6 col-md-6">  
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="female" id=female />Female
                    </label>
                    </div>
                    <div class="form-group">
                    <input type="tel" name="mobile" value="" class="form-control input-lg" required placeholder="phone number"  />
                    </div>
                    <div class="form-group">
                     <input type="text" name="email" value="" class="form-control input-lg" required placeholder="Your Email"  />
                    </div>
                    <div class="form-group">
                     <input type="text" name="profession" value="" class="form-control input-lg" required placeholder="profession"  />
                    </div>
                    
                    <div class="form-group">
                    <textarea name="address" required class="form-control input-lg" placeholder="Address"></textarea>
                   </div>
                    
                    
                    
                    <br />
              <span class="help-block text-center"><input type="checkbox" name="accept" required>&nbsp;<a href="#" style="font-weight:bold" data-toggle="modal" data-target="#myModal">I Accept the Terms and Condition.</a></span>
                    <button type="submit" class="btn btn-lg btn-block mmhh-signup-btn" >
                        submit</button>
            </form>          
          </div>
</div>            
</div>
<!--model pop up-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
 include 'footer.php';
?>