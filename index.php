

<?php


?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Adrienne Yao, Web Designer and Developer</title>

	<!-- main style sheets -->
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slidebars.css">

	<!-- google fonts used: roboto, poppins -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,100italic,300italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">

	<!-- For Futura Font -->
	<script src="https://use.typekit.net/rda7xpp.js"></script>

	<!-- script for invisible reCaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slidebars.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.localScroll.min.js"></script>

	<!-- style sheet and javascript of fancybox -->
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>

</head>
<body>
		<header class="nav-down">
				<div class="menu">
					<p class="hamburger sb-open-left">&#9776;</p>
					<p class="close sb-close">&#10005;</p>
				</div>

				<a href="#home"><img class="logo" src="img/myLogo_blue2.png" alt="adrienne yao logo"></a>
				<nav id="nav" class="sb-slidebar sb-left sb-width-custom" data-sb-width="60%">
						<ul class="navpanel">
							<li><a href="#about">ABOUT</a></li>
							<li><a href="#port">PORTFOLIO</a></li>
							<li><a href="#contact">CONTACT</a></li>
						</ul>
				</nav>
		</header>
		
		<main id="sb-site">

			<div class="html5video" style="position:relative;max-width:100%; width: 100%; position: absolute; z-index:100">
				<video id="backgroundvid" autoplay loop muted playsinline poster="" style="width:100%" title="bokeh" loop="loop" onended="var v=this;setTimeout(function(){v.play()},300)">
					<source src="other/Bokeh_v4.mp4" type="video/mp4" />
					<p>Your browser does not support this html5 video</p>
				</video>

				<div id="home">
					<p style="font-family: poppins; font-weight: 300">adrienne ya<span style="color:  rgba(255, 153, 0,0.9); font-weight: 300; font-size: 1.5em; position: relative; top: 3px;">o</span></p> 
					<p><span style="color: rgba(255, 153, 0,0.9); font-weight:500; font-size: .3em; letter-spacing: 5px; position: relative; top: -8px;">WEB</span> <span style="font-weight:100; font-size:.6em">DESIGNER</span> <span style="font-weight:500; font-size: .4em; letter-spacing: 5px; position: relative; top: -6px; color: rgba(255, 153, 0,0.9);">&</span> <span style="font-weight:100; font-size: .6em">DEVELOPER</span></p>
					<p>Thoughtfully crafted, mobile-friendly websites.</p>
				</div>
			</div>
				
			<div id="content">	
					<div id="about">
						<h1>&nbsp;<span class="purple"> O </span><span class="orange"> O </span>  &nbsp;&nbsp;about adrienne</h1>
						<p>Hello. I am a <b>front-end web designer and developer</b> based in Atlanta. I love to design and code, as I am a creative person trained in the analytical fields of business and economics. </p>
						<p>My personal design philosophy is to remain <b>simple</b>, yet <b>ever-evolving</b>.</p>
						<p>Through exploring your identity, I will turn concepts into a unique brand of visual designs, and build out a functional web presence to help you <b>engage with your audience</b>. Below are just a few of my commonly used skillsets:</p>
						<ul class="skills-left">
							<li>HTML5</li>
							<li>CSS3</li>
							<li>JavaScript (React, jQuery)</li>
							<li>PHP with MySQL</li>
							<li>CMS (WordPress)</li>
						</ul>
						<ul class="skills-right">
							<li>Responsive Web (Mobile & Tablet)</li>
							<li>Adobe Photoshop</li>
							<li>Adobe Illustrator</li>
							<li>SEO (Search Engine Optimization)</li>
							<li>Sketch</li>
						</ul>
						<p style="clear: both">While I am continuously expanding my knowledge base, my area of focus is in front-end web. I work well on interdisciplinary teams with other professionals in <b>digital marketing</b> including graphic designers and backend developers. For an overview of my professional training and experience, view my resume <b><a href="" style="color: #003366;">here</a></b>.</p>
					</div>

					<div id="port">
						<h1>&nbsp;<span class="purple"> O </span><span class="orange"> O </span>  &nbsp;&nbsp;portfolio&nbsp;&nbsp;</h1>
						<div class="row1">
							<a href="project1.html"><div class="img-left"><img class="bw " src="img/sq1.jpg" alt="elaina taylor compassionate psychotherapy"></div></a>
							<a href="project2.html"><div class="img-left"><img class="bw" src="img/sq2.jpg" alt="asia tuina deep tissue massage"></div></a>
							<a href="project3.html"><div class="img-left"><img class="bw" src="img/sq3.jpg" alt="brooklyn air high rise. Image Credit: rew-online.com"></div></a>
							<a href="project4.html"><div class="img-left"><img class="bw" src="img/sq4.jpg" alt="vanessa shyu visual layout designer"></div></a>
						</div>
						<!-- Where the BK AIR image is from -->
						<!-- http://rew-online.com/2014/12/19/new-air-apparent-in-brooklyn-rental-race/ -->
						<div class="row2">
							
							
						</div>
					</div>

					<div id="contact">
						<h1>&nbsp;<span class="purple"> O </span><span class="orange"> O </span>  &nbsp;&nbsp;contact me</h1>

						<form action="php/form-to-email.php" name="myemailform" id="form"  autocomplete="on" method="post" onsubmit="return onSubmit()" >

							<label for="name">Name / Company *</label><br>
							<input type="text" name="name" id="name">	<br>

							<label for="email">Email *</label><br>
							<input type="text" name="email" id="email"> <br>

							<label for="message">Message *</label><br>
							<textarea type="text" name="message" id="message"></textarea><br>
							

							<?php
					          require_once('recaptchalib.php');
					          $publickey = "6LcsJB4UAAAAAMUXk1lCDD11e5wmpb7gQ2d5xhJF"; // you got this from the signup page
					          echo recaptcha_get_html($publickey);
					        ?>
							<!--<button
								id="submit"
								type="submit"
								name="submit"
								value="submit"
								class="g-recaptcha"
								data-sitekey="6LcsJB4UAAAAAMUXk1lCDD11e5wmpb7gQ2d5xhJF"
								data-callback="onSubm">
									Submit
							</button>-->
							
							<input id="submit" type="submit" name='submit' value="submit">
							
						</form>
						
					</div>
			
					<footer>
									<div class="sm clearfix">
										<a href="http://www.linkedin.com/in/adrienneyao" target="_blank"><div class="linkedin"></div></a>
										<a href="https://www.instagram.com/yurigurlie207" target="_blank"><div class="instagram"></div></a>
									</div>
									<a href="index.html">&copy; adrienne yao 2017</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#contact">contact me</p></a>
					</footer>

			</div>

		</main>


	<script type="text/javascript">


			//ADJUST BACKGROUND VIDEO SIZE
			winWidth = $(window).width();  // WINDOW WIDTH
			winHeight = $(window).height(); // WINDOW HEIGHT
			
			if(winWidth >= 768) {
				$(".html5video video").css({height: '100vh'});
			} 

			var v = document.getElementById("backgroundvid");
			v.addEventListener( "loadedmetadata", function (e) {
				adjustVidSize(v); 		
			}, false );
			
			window.addEventListener("resize", function (e) {

				console.log("This is window height: " + winHeight);

				if(winWidth < 768) {
					$(".html5video video").css({height: '100%'});
				}
				else {
					$(".html5video video").css({height: '100vh'});
				}
				
				var v = document.getElementById("backgroundvid");
				adjustVidSize(v);
				
			}, false );
	
	
			/* in this version, i allow the video to go full screen in height, so there isn't a difference bewteen the adjusted and regular window height */
			/* however, this function is built to be able to handle an adjustment on the video height */
			function adjustVidSize(v) {
				var vidWidth = v.videoWidth, vidHeight = v.videoHeight;
				var AR = vidWidth / vidHeight;
				
				var containerAR = winWidth / (winHeight);
				
				if (containerAR = AR) {
					$(this).width(winWidth);
					$(this).height(winHeight);
				}
				else if (containerAR < AR) {		
					vidHeight_adj = winHeight; //to account for the scroll
					vidWidth_adj = AR * vidHeight_adj;
					$(this).height(vidHeight_adj);
					$(this).width(vidWidth_adj);
				}
				else {
					vidWidth_adj = winWidth;
					vidHeight_adj = vidWidth_adj / AR
					$(this).height(vidHeight_adj);
					$(this).width(vidWidth_adj);
				}
			}
			//END OF ADJUST BACKGROUND VIDEO SIZE

	function onSubmit() {
	var temp;
	var errStr = "";
	temp = document.forms["myemailform"]["name"].value;
	if (temp == null || temp == "") {
		errStr += "Please enter your name\n";
	}

	temp = document.forms["myemailform"]["email"].value;
	if (temp == null || temp == "") {
		errStr += "Please enter your email address\n";
	} else if (!validateEmail(temp)) {
		errStr += "Please enter a valid email address\n";
	}

	temp = document.forms["myemailform"]["message"].value;
	if (temp == null || temp == "") {
		errStr += "Please enter a message\n";
	}
	
	if(errStr != ""){
		alert(errStr);
		return false;
	} 
	else {
		return true;

		thankyou(true);
	}
}

	function thankyou(answer) {
		if(answer == 'true' || answer == '1' || answer == 1) {

			console.log("hm");
			$.fancybox("<div style='font-size:12px; font-family: futura, sans-serif; color:#000;text-align:center;padding-top:10px;width: 150px;line-height:1.5'>Thank you!<br /><br />Your message was delivered. <br />I will be in touch shortly.</div>");

		} 
	}

</script>
</body>

<div id="width" style="position:fixed;bottom:0px;right:0px;background:#fff;z-index:9999999; color: black"></div>

<script type="text/javascript">
$(document).ready(function() {
	$("#width").text($(window).width());
});

$(window).resize(function() {
	$("#width").text($(window).width());
});
</script>