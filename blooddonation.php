<?php
 include 'header.php';


 if(isset($_GET['fullname']))
 {
    //echo "<script>alert('klklk')</script>";
    $message = "";
  mail('caffeinated@example.com', 'My Subject', $message);


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
            <form action="" method="get" accept-charset="utf-8" class="form_algn" role="form">  
             <legend>BLOOD REQUEST FOR NEEDY PATIENTS</legend>
                   
                     <div class="form-group ">
                        <input type="text" name="fullname" value="" required class="form-control input-lg" placeholder="fullname"  />
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
                    <div class="form-group ">  
                    <input type="number" name="age" value="" class="form-control input-lg" required placeholder="age" />
                    </div>
                    <div class="form-group ">
                        <select class="form-control input-lg" required name="bloodgroup">
                            <option value="">---  select blood group  ---</option>
                            <option value="A +">A +</option>
                            <option value="A -">A -</option>
                            <option value="B +">B +</option>
                            <option value="B -">B -</option>
                            <option value="O +">O +</option>
                            <option value="O -">O -</option>
                            <option value="AB +">AB +</option>
                            <option value="AB -">AB -</option>
                            
                            
                        </select>
                    </div>
                    <div class="form-group">
                    <input type="tel" name="mobile" value="" class="form-control input-lg" required placeholder="phone number"  />
                    </div>
                    <div class="form-group">
                     <input type="text" name="email" value="" class="form-control input-lg" required placeholder="email"  />
                    </div>
                    <div class="form-group">
                     <input type="text" name="place" value="" class="form-control input-lg" required placeholder="location"  />
                    </div>
                    <div class="form-group">
                     <input type="date" name="lastdate" value="" class="form-control input-lg" required  />
                      <small>Previous Date Of Blood Donation</small>
                    </div>
                    
                    <button type="submit" class="btn btn-lg btn-block mmhh-signup-btn" >
                        submit</button>
            </form>          
          </div>
</div>            
</div>
<?php
 include 'footer.php';
?>