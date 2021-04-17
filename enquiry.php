<!DOCTYPE html>
<html lang="en">
   <!-- header-infostack41:44-->
   <head>
      <?php include('head.php');  require('constant.php'); ?>
	  <script src="component/jquery/jquery-3.2.1.min.js"></script>
 <script>
     
     function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
       
       function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }
 </script>
 <script>

	$(document).ready(function (e){
		$("#ttm-quote-form").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"address":$('input[name="address"]').val(),
				"message":$('textarea[name="message"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					document.getElementById('ttm-quote-form').reset();
					$("#mail-status").attr("class","success");		
					setTimeout(function () {SUCCESS.innerHTML =""}, 10000);
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>
	<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		.content {width: 960px;margin: 0 auto;}
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}

		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>	
   </head>
   <body>
      <!--page start-->
      <div class="page">
      <?php include('preloader.php'); ?>
      <!--header start-->
      <?php include('header.php'); ?>
      <!--header end-->
     
      <!--site-main start-->
      <div class="site-main">
        <br><br>
        <!--contact-section-->
        <section class="element-row element-style pb-15">
            <div class="container">
			    <div class="row mt_100 ttm-box-view-top-image res-991-mt-0">
                    <div class="col-lg-7">
                        <div class="spacing-5 ttm-bgcolor-white">
                            <!-- section title -->
                            <div class="section box-shadow2-title clearfix">
                                <div class="title-header">
								 <div id="loader-icon" style="display:none;"><img src="images/pre-loader-1.gif" /></div>
				  	                <div id='SUCCESS'><div id="mail-status"></div></div>
                                </div>
                            </div><!-- section title end -->
                            <form id="ttm-quote-form" class="ttm-quote-form wrap-form clearfix" method="POST" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="name" type="text" value="" placeholder="Full Name" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="email" type="text" value="" placeholder="Email Address" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><input name="address" type="text" value="" placeholder="Address" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                             
                                <label>
                                    <span class="text-input"><textarea name="message" cols="35" rows="4" placeholder="Your Message" required="required"></textarea></span>
                                </label>
								<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>		
                                <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- col-bg-img-three -->
                        <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes spacing-4">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="row-title">
                                    <!-- section title -->
                                    <div class="section-title ttm-textcolor-white clearfix">
                                        <h2 class="title ttm-textcolor-skincolor">LETS</h2>
                                        <h2 class="title">GROW</h2>
                                        <h2 class="title ttm-textcolor-skincolor">TOGETHER</h2>
                                    </div><!-- section title end -->
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-white mt-30" href="#">CONTACT US <i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- col-bg-img-three end -->
                    </div>
                </div>
            </div>
        </section>
        <!--contact-section end-->
         <!--footer start-->
         <?php include('footer.php'); ?>
         <!--footer end-->
         <!--back-to-top start-->
         <?php include('gototop.php'); ?>
         <!--back-to-top end-->
         <!-- Color Palate / Color Switcher -->
         <?php include('colorswitcher.php'); ?>
         <!-- Color Palate / Color Switcher end-->
      </div>
      <!-- page end -->
      <?php include('commonjs.php'); ?>
   </body>
   <!-- header-infostack41:45-->
</html>