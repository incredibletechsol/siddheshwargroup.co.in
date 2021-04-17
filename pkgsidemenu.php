<aside class="widget widget-nav-menu">
<ul class="widget-menu">
  <?php
  $pageName = basename($_SERVER['PHP_SELF']);
	if($pageName == "aboutpkg.php") {
	    echo "<li><img src='images/siddeshwarpacking.jpg' border=0></li>";
		echo "<li class='active'><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
	}
	if($pageName == 'typespkg.php') {
	    echo "<li><img src='images/siddeshwarpacking.jpg' border=0></li>";
		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
		echo "<li class='active'><a href='typespkg.php'>Types Of Packaging</a></li>";
		echo "<li><a href='gallerypkg.php'>Photo Gallery</a></li>";
	}
	if($pageName == 'gallerypkg.php') {
	    echo "<li><img src='images/siddeshwarpacking.jpg' border=0></li>";
		echo "<li><a href='aboutpkg.php'>About Siddheshwar Packaging</a></li>";
		echo "<li><a href='typespkg.php'>Types Of Packaging</a></li>";
		echo "<li class='active'><a href='gallerypkg.php'>Photo Gallery</a></li>";
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