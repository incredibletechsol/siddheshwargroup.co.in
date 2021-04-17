<aside class="widget widget-nav-menu">
<ul class="widget-menu">
 <?php
  $pageName = basename($_SERVER['PHP_SELF']);
	if($pageName == "aboutengg.php") {
	    echo "<li><img src='images/siddeshwer.jpg' border=0></li>";
	    echo "<li class='active'><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
	}
	if($pageName == "deptengg.php") {
        echo "<li><img src='images/siddeshwer.jpg' border=0></li>";
		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
		echo "<li class='active'><a href='deptengg.php'>Our Departments</a></li>";
		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
	}
	if($pageName == "prouctsengg.php") {
	    echo "<li><img src='images/siddeshwer.jpg' border=0></li>";
		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
		echo "<li class='active'><a href='prouctsengg.php'>Our Products</a></li>";
		echo "<li><a href='galleryengg.php'>Photo Gallery</a></li>";
	}
	if($pageName == "galleryengg.php") {
        echo "<li><img src='images/siddeshwer.jpg' border=0></li>";
		echo "<li><a href='aboutengg.php'>About Siddheshwar Engineering</a></li>";
		echo "<li><a href='deptengg.php'>Our Departments</a></li>";
		echo "<li><a href='prouctsengg.php'>Our Products</a></li>";
		echo "<li class='active'><a href='galleryengg.php'>Photo Gallery</a></li>";
	}
	?>
</ul>
</aside>

<aside class="widget contact-widget">
    <h3 class="widget-title">Get in touch</h3>      
    <ul class="contact-widget-wrapper">
        <li><i class="fa fa-map-marker"></i>Gat No. 686, Milkat No. 719, Near Hassia Packaging, Pune Nagar Road, Sanaswadi, Pune – 412208.</li>
        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@siddheshwargroup<br>.com</a></li>
        <li><i class="fa fa-phone"></i>+91 8888687106</li>
        <li><i class="ti ti-alarm-clock"></i>Fri - Wed 09am - 05pm Thursday CLOSED</li>
    </ul>
</aside>