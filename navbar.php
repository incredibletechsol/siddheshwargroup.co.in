<div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
    <div id="site-header-menu" class="site-header-menu">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div id="site-navigation" class="site-navigation">
                    <div class="ttm-menu-toggle">
                        <input type="checkbox" id="menu-toggle-form" />
                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                            <span class="toggle-block toggle-blocks-1"></span>
                            <span class="toggle-block toggle-blocks-2"></span>
                            <span class="toggle-block toggle-blocks-3"></span>
                        </label>
                    </div>
                    <nav id="menu" class="menu">
                        <ul class="dropdown">
                          <?php
                              $pageName = basename($_SERVER['PHP_SELF']);
                            	if($pageName == "index.php") {
                            		echo "<li class='active'><a href='index.php'>Home</a></li>";
                            		echo "<li><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	if($pageName == "aboutus.php") {
                            		echo "<li><a href='index.php'>Home</a></li>";
                            		echo "<li class='active'><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	if($pageName == "aboutengg.php" || $pageName == "deptengg.php" || $pageName == "prouctsengg.php" || $pageName == "galleryengg.php") {
                            		echo "<li><a href='index.php'>Home</a></li>";
                            		echo "<li><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li class='active'><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	if($pageName == "aboutpkg.php" || $pageName == "typespkg.php" || $pageName == "gallerypkg.php" ) {
                            		echo "<li><a href='index.php'>Home</a></li>";
                            		echo "<li><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li class='active'><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	if($pageName == "enquiry.php") {
                            		echo "<li><a href='index.php'>Home</a></li>";
                            		echo "<li><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li class='active'><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	if($pageName == "contactus.php") {
                            		echo "<li><a href='index.php'>Home</a></li>";
                            		echo "<li><a href='aboutus.php'>About Us</a></li>";
                            		echo "<li><a href='#'>Siddheshwar Engineering</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
                            		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
                            		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
                            		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='#'>Siddheshwar Packaging</a>";
                            		echo "<ul>";
                            		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
                            		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
                            		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
                            		echo "</ul>";
                            		echo  "</li>";
                            		echo "<li><a href='enquiry.php'>Enquiry</a></li>";
                            		echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
                            	}
                            	?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>