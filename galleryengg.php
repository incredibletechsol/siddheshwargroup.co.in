<!DOCTYPE html>
<html lang="en">
   <!-- header-infostack41:44-->
   <head>
    <?php include('head.php'); ?>
      
    <style>
      .myimg  {
    width  : 254px;
    height : 300px;
    }
    </style>
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
        
       
        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
              
                <!-- row -->
                <div class="row">
                    <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                         <?php include('enggsidemenu.php'); ?>
                        
                       
                    </div>
                    <div class="col-lg-9 content-area">
                        <h2><strong>Photo Gallery</strong></h2>
                        <div class="ttm-service-single-content-area">
                            
                               <div class="row mt-50">
                    <div class="portfolio-slide owl-carousel owl-theme owl-loaded" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                         <?php
					include('conn.php');
					$result = mysqli_query($conn,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
					$count = mysqli_num_rows($result);
					if($count > 0) {
						while($row = mysqli_fetch_array($result))
						{
					
							echo "<div class='featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image'>";
								echo "<div class='ttm-box-view-content-inner'>";
									echo "<div class='featured-thumbnail'>";
										echo "<a href='#'> <img class='img-fluid  myimg' src='galleryengg/$row[1]' alt='image'></a>";
									echo "</div>";
									echo "<div class='ttm-box-view-overlay'>";
										echo "<div class='featured-iconbox ttm-media-link'>";
											echo "<a class='ttm_prettyphoto ttm_image' title='$row[2]' data-rel='prettyPhoto' href='galleryengg/$row[1]'><i class='ti ti-search'></i></a>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
								echo "<div class='ttm-box-bottom-content featured-content-portfolio box-shadow2'>";
									echo "$row[2]";
								echo "</div>";
							echo "</div>";
			
						}
					}
					else
						echo "<h4>No Photos Available</h4>";

					?>
                    </div>
                </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

	    <?php include('commonnum.php'); ?>
	     <!-- fid-section -->
       
        <!-- fid-section end -->
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