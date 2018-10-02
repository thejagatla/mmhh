<?php
?>

            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="mmhh_info2">
                                <span class="glyphicon glyphicon-phone mmhh-icons2" aria-hidden="true"></span><a href="tel:+91 9348 008 008" class="mh-mrgn">+91 9348 008 008</a> <br> 
                                <span class="glyphicon glyphicon-envelope mmhh-icons2" aria-hidden="true"></span> <a href="mailto:info@mmhhfoundation.com">info@mmhhfoundation.com</a> 
                                </div>
                               
                            </div>
                            <div class="col-md-6 col-xs-12 mh_alignmt">
                                <ul class="social-icons mm-mob">
                                    <li><a href="#" class="social-icon2"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="https://twitter.com/MMHHFoundation" class="social-icon2"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="https://plus.google.com/communities/116985028471449334340" class="social-icon2"> <i class="fa fa-google-plus-square"></i></a></li>
                                </ul>
                            </div>
                            <hr class="mh-line">
                            <br>
                            <p>Copyright 2018 MMHH Foundation <br> All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
            </footer>
        
    
        
        
        </div>
        <!-- END fh5co-page -->
    
        </div>
        <!-- END fh5co-wrapper -->
    
        <!-- jQuery -->
    
    
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/sticky.js"></script>
    
        <!-- Stellar -->
        <script src="assets/js/jquery.stellar.min.js"></script>
        <!-- Superfish -->
        <script src="assets/js/hoverIntent.js"></script>
        <script src="assets/js/superfish.js"></script>
        
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
    <script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>
    <!--- data Tables-->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  
    <script>
     $(document).ready(function() {              
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var $this = $(this),
        c = $this.data('count');    
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });      
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });                                        
}); 

    </script>
    
    
  <script>
      //this is the memebers table 
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
       if ($("#mytable #checkall").is(':checked')) {
           $("#mytable input[type=checkbox]").each(function () {
               $(this).prop("checked", true);
           });

       } else {
           $("#mytable input[type=checkbox]").each(function () {
               $(this).prop("checked", false);
           });
       }
   });
   
   $("[data-toggle=tooltip]").tooltip();
});

   </script>
