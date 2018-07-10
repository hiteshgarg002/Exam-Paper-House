<!doctype html>

<head>
<title>Indian University</title>
<link href='/citest/user/css/font2.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/citest/user/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="/citest/user/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/citest/user/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/citest/user/css/simpleline-icons/simple-line-icons.css" media="screen" />
    <link href="/citest/user/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" media="screen" href="/citest/user/css/responsive-leyouts.css" type="text/css" />
    <link href="/citest/user/js/mainmenu/bootstrap.min.css" rel="stylesheet">
	<link href="/citest/user/js/mainmenu/demo.css" rel="stylesheet">
	<link href="/citest/user/js/mainmenu/menu.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/citest/user/js/sidemenu/style.css">
	<link rel="stylesheet" href="/citest/user/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="/citest/user/js/masterslider/skins/default/style.css" />


<script src="/citest/assets/jquery-2.2.1.min.js"></script>
<script src="/citest/assets/semester.js"></script>
<script src="/citest/assets/paper.js"></script>
<script src="/citest/assets/index.js"></script>
</head>

<body>

<div class="wrapper_boxed">

<div class="site_wrapper">

<div class="top_nav">
<div class="container">

    <div class="left">

    <div class="select-style">
      <select>
        <option value="language" style="color:#333;">Language</option>

      </select>
    </div>

    </div><!-- end left -->

    <div class="right">

        <ul class="tplinks">
            <li><strong><i class="fa fa-phone"></i> 0751-1234567</strong></li>
            <li><a href="mailto:info@arka.com"><img src="/citest/user/images/site-icon1.png" alt="" /> info@indianuniversity.com</a></li>
        </ul>
    </div><!-- end right -->
</div>
</div><!-- end top navigation links -->

<header class="header">

	<div class="container">

    <!-- Logo -->
    <div class="logo"><a href="" id="logo"></a></div>

	<!-- Navigation Menu -->
    <div class="menu_main">

      <div class="navbar yamm navbar-default">

          <div class="navbar-header">
            <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  >
              <button type="button" > <i class="fa fa-bars"></i></button>
            </div>
          </div>

          <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">

            <nav>

              <ul class="nav navbar-nav">

                <li> <a href="/citest/index.php/userviewcontroller/userview" class="dropdown-toggle active">Home</a></li>
                <li> <a href="/citest/index.php/adminController/adminLogin" class="dropdown-toggle active">Admin</a></li>




              </ul>

            </nav>

          </div>

      </div>
    </div>
	<!-- end Navigation Menu -->


	</div>

</header>


<div class="clearfix"></div>






<div class="domain_search sty2" style="margin-top:100px;">

	<div class="serch_area">
    <div class="container">
    	<center>



<img src="/citest/user/images/logonew.png" class="img-responsive">
        </center>
    </div>
	</div><!-- end section -->



</div><!-- end featured section 401 -->

<div class="feature_section403">
<div class="container">

<center>
<?php
if(!isset($_SESSION['SCLIENTID']))
{
echo"LF <input type='hidden' value='lf' id='loginstatus'>";
}
else
{
echo"LS <input type='hidden' value='ls' id='loginstatus'>";
}
?>
<table class="table table-bordered" style="width:50%;">
<tr>
<td><img src="/citest/images/university/<?php echo $_SESSION['logo'];?>" width=80 height=80></td>
<td>
<h3><font color='green'><?php echo $_SESSION['uname'];?></font></h3>
<h4><?php echo $_SESSION['ustate'].",".$_SESSION['ucity'];?></h4>
</td>
</tr>
</table>
<h3><?php echo $_SESSION['bname'];?></h3>
<input type='hidden' id='branch' class="form-control" value="<?php echo $_SESSION['bid'];?>">

<table cellspacing='20'>
<tr>
<td><select id='sem' class="form-control"><option>-Semester-</option>
<?php
for($i=1;$i<=$_SESSION['totalsem'];$i++)
{
echo "<option>$i</option>";
}
?>
</select></td>

<td><select id='subject' class="form-control"><option>-Subject-</option></select></td>
<td><select id='year' class="form-control"><option>-Year-</option>
<?php
for($i=2012;$i<=date('Y');$i++)
{
echo "<option>$i</option>";
}
?>
</select></td>
</tr>
</table>
<button  onclick="printDiv()" class="btn btn-info">Print</button>
<div id="printableTable">
<table>
<tr>
<td>
<div id='result'></div>
<td>
<tr>
</table>
</div>
 <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>

</center>


</div>
</div><!-- end featured section 403 -->



<div class="clearfix"></div>



<footer>

<div class="footer">


<div class="copyrights">
<div class="container">
<div class="one_third">Copyright © 2018 Indian University</div>
	<div class="one_third"> <center><ul class="foosocial">
			<li class="faceboox animate" data-anim-type="zoomIn" data-anim-delay="100"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="gplus animate" data-anim-type="zoomIn" data-anim-delay="200"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="youtube animate" data-anim-type="zoomIn" data-anim-delay="250"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="linkdin animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul></center></div>
    <div class="one_third last aliright"><a href="#">Privacy Policy</a>
   </div>

</div>
</div><!-- end copyrights -->


</div>



</footer><!-- end footer -->


<div class="clearfix"></div>


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



<div id="style-selector">

<div class="style-selector-wrapper">

<div>



</div>
</div>
</div><!-- end style switcher -->
</div>








</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->



<script src="/citest/user/js/animations/js/animations.min.js" type="text/javascript"></script>
<script src="/citest/user/js/mainmenu/bootstrap.min.js"></script>
<script src="/citest/user/js/mainmenu/customeUI.js"></script>
<script src="/citest/user/js/masterslider/jquery.easing.min.js"></script>
<script src="/citest/user/js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');

	slider.setup('masterslider' , {
		 width:1400,    // slider standard width
		 height:350,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'boxed',
		 loop:true,
		 preload:0,
		 overPause: true,
		 autoplay:true,
		 view:"parallax"
	});
})(jQuery);
</script>

<script type="text/javascript">
(function($) {
 "use strict";
	var slider = new MasterSlider();
		slider.setup('masterslider2' , {
		 width:1400,    // slider standard width
		 height:350,   // slider standard height
		 space:1,
		 layout:'boxed',
		 loop:true,
		 preload:0,
		 autoplay:true
	});
})(jQuery);
</script>

<script src="/citest/user/js/scrolltotop/totop.js" type="text/javascript"></script>
<script type="text/javascript" src="/citest/user/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="/citest/user/js/mainmenu/modernizr.custom.75180.js"></script>
<script type="text/javascript" src="/citest/user/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="/citest/user/js/cubeportfolio/main.js"></script>
<script src="/citest/user/js/tabs2/index.js"></script>
<script>
(function($) {
 "use strict";

	$('.accordion, .tabs').TabsAccordion({
		hashWatch: true,
		pauseMedia: true,
		responsiveSwitch: 'tablist',
		saveState: sessionStorage,
	});

})(jQuery);
</script>

<script src="/citest/user/js/loopslider/jquery.loopslider.js"></script>
<script>
	$('#slider').loopSlider({
		autoMove : true,
		mouseOnStop : true,
		turn : 9000,
		motion : 'swing',
		delay: 500,
		width : 750,
		height : 350,
		marginLR : 5,
		viewSize : 100,
		viewOverflow : 'visible',
		navPositionBottom : 30,
		navibotton : true,
		navbtnImage : ''
	});
</script>

<script src="/citest/user/js/aninum/jquery.animateNumber.min.js"></script>
<script src="/citest/user/js/carouselowl/owl.carousel.js"></script>
<script type="text/javascript" src="/citest/user/js/accordion/jquery.accordion.js"></script>
<script type="text/javascript" src="/citest/user/js/accordion/custom.js"></script>
<script type="text/javascript" src="/citest/user/js/universal/custom.js"></script>
<script src="/citest/user/js/sidemenu/menuFullpage.min.js"></script>
<script>
	smoothScroll.init();
	$(document).ready(function() {
			$('.menu-link').menuFullpage();
	});
</script>
</body>

</html>







