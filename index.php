<?php
 include 'header.php';
?>
<style>
section {
    padding-top: 100px;
    padding-bottom: 100px;
}

.quote {
    color: rgba(0,0,0,.1);
    text-align: center;
    margin-bottom: 30px;
}

/*-------------------------------*/
/*    Carousel Fade Transition   */
/*-------------------------------*/

#fade-quote-carousel.carousel {
  padding-bottom: 60px;
}
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-indicators {
  bottom: 10px;
}
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
    border: none;
}
#fade-quote-carousel .profile-circle {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 100px;
}
	
</style>
<!--div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(assets/images/cover_bg_1.jpg);">
        <div class="desc animate-box">
        <h2><strong style="color:red">M<strong>ISSILE <strong style="color:red">M<strong>AN <strong style="color:red">H</strong>ELPING <strong style="color:red">H</strong>ANDS</h2>
          
            <span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
        </div>
    </div>

</div-->
<!-- end:header-top -->

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Mussile Man Helping Hands</h1>        
           <h3>We Can't Help EVERYONE, <br> But Being TOGTHER We Can Help EVERYONE</h3>
        </hgroup>
        <a href="signup.php"><button class="btn btn-hero btn-lg" role="button">Join with us</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
      <hgroup>
      <h1>Mussile Man Helping Hands</h1>        
     <h3>We Can't Help EVERYONE, <br> But Being TOGTHER We Can Help EVERYONE</h3>
  </hgroup>
  <a href="signup.php"><button class="btn btn-hero btn-lg" role="button">Join with us</button></a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
      <hgroup>
      <h1>Mussile Man Helping Hands</h1>        
     <h3>We Can't Help EVERYONE, <br> But Being TOGTHER We Can Help EVERYONE</h3>
  </hgroup>
  <a href="signup.php"><button class="btn btn-hero btn-lg" role="button">Join with us</button></a>
      </div>
    </div>
  </div> 
</div>


<div id="fh5co-features" class="animate-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="feature-left">
                
                    <div class="feature-copy">
                        <h3>MISSION</h3> <hr class="mmhh_underlines">
                        <p>Our mission is to change lives of such orphanage and poor people of our society by providing financial assistance in the field of education, health.
                           Through education we can bring a positive revolution in the society.</p>
                        
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="feature-left">
                   <div class="feature-copy">
                        <h3>VISION</h3>  <hr class="mmhh_underlines">
                        <p>This is non-profit organization and vision to bring about a significant positive change in the socio-economic status of every individual." we are not handsome guys but we can give our hands to someone who is needy.."</p>
                       
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="feature-left">
                   
                    <div class="feature-copy">
                        <h3>VALUES</h3>  <hr class="mmhh_underlines">
                        <p>To provide quality social welfare services to enable them to meet life's challenges
We will involve the community in attaining our service goals.
Financial assistance for the medical treatment for the poor people, who have no means to go for the treatment to save their lives.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wellcard_home animate-box">
    <div class="col-md-6 col-xs-12 founder-text fadeIn">
    <h3 class="founder-hdng text-center">WHO WE ARE ?</h3>
    <p> Teamwork is the secret that enables someone or something achieve remarkable results, <br>
and this has worked well for us at MMHHFoundation.</p>
 <p>MMHHFoundation has in just above 2 years of its incorporation, achieved some exceptional recognition . 
     Team with the guidance of the founders and the support of their volunteers has initiated and organized numerous health and awareness programs for MMHHFoundation and has served in picking up several cases of people with critical ailments.</p>
   <p>and the volunteers who have participated in our various programms and helped us generate funds, including our NRI friends, constitute and represent the wider MMHHFoundation.
        We welcome each of you like-minded and warm-hearted souls to join our team as a volunteer and play your bit towards this generous cause. </p>
   
    </div>
    <div class="col-md-6 col-xs-12">
    <div id="myCarousel" class="carousel slide mm-top_home" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/images/ab01.jpg" alt=" " style="width:100%;">
      </div>

      <div class="item">
        <img src="assets/images/ab02.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="assets/images/ab03.jpg" alt=" " style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
     </div>
  </div>


<div id="fh5co-blog-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Recent From Blog</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="assets/images/ab03.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="" #="">Medical Mission in Southern Kenya</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="assets/images/ab02.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="">Medical Mission in Southern Kenya</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="assets/images/blog1.jpg" alt=""></a>
                    <div class="blog-text">
                        <div class="prod-title">
                            <h3><a href="" #="">Medical Mission in Southern Kenya</a></h3>
                            <span class="posted_by">Sep. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p><a href="#">Learn More...</a></p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="clearfix visible-md-block"></div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                <a href="#" class="btn btn-primary btn-lg">Our Blog</a>
            </div>
        </div>

    </div>
</div>
<!-- fh5co-blog-section -->
<section id="carousel">        			
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 ">
             <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
              <h3>Testimonials </h3>
             </div>
            
                
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="8000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
                    
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				   
				    <div class="active item">
                       
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    
				  </div>
				</div>
			</div>							
		</div>
	</div>
</section>


 <div class="mmhh_signup_link">
  <div class="col-md-8 col-xs-12">
   <h3 class="footer_title">We Can't Help EVERYONE, <br> But Being TOGTHER We Can Help EVERYONE</h3>
  </div>
  <div class="col-md-4 col-xs-12">
 <a href="signup.php"> <button type="submit" class="btn mmhh-signup-btn_home">Sign Up</button></a>
  </div>
 </div>

<?php
 include 'footer.php';
?>
            