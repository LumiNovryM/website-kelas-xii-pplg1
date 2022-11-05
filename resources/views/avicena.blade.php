<!DOCTYPE html>
<html>
<head>
	<title>Portfolio website</title>
	<link rel="stylesheet" type="text/css" href="avi/css/style.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----hero Section start---->

	<div class="hero" id="hero">
		<nav>
			<h2 class="logo">Portfolio<span></span></h2>
			<ul>
				<li><a href="#hero">Home</a></li>
				<li><a href="#about">About Me</a></li>
				<li><a href="#service">Experience</a></li>
				<!-- <li><a href="#">Skills</a></li> -->
				<li><a href="#social">Contact Us</a></li>
			</ul>
			<!-- <a href="#" class="btn">Subscribe</a> -->
		</nav>

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Avicenna<span></span></h1>
			<h3>I'am a Web Developer.</h3>
			<div class="newslatter">
				<!-- <form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form> -->
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about" id="about">
		<div class="main">
			<img src="avi/img/WhatsApp Image 2022-11-05 at 13.27.14.jpeg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Developer <span>& Designer</span></h5>
				<p>I'm Avicenna, a front-end bringing you programming and design from the future.  </p>
				<!-- <button type="button">Let's Talk</button> -->
			</div>
		</div>
	</section>

	<!-----experience section start----------->
	<div class="service" id="service">
		<div class="title">
			<h2>Experence</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Making Web Design</h5>
				<div class="pra">
					<p>
						Every website must have a different design, I have experience in the field of design in html, css and figma.</p>

					<!-- <p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p> -->
				</div>
			</div>

			<!-- <div class="card">
				<i class="far fa-user"></i>
				<h5>Learning About js</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p> 
				</div>
			</div> -->

			<!-- <div class="card">
				<i class="far fa-bell"></i>
				<h5>Web Development</h5>
				<div class="pra">
					<p>Every website should be built with two primary goals: Firstly, it needs to work across all devices. Secondly, it needs to be fast as possible.</p>

					<p style="text-align: center;">
						<a class="button" href="#">Read More</a>
					</p>
				</div>
			</div> -->
		</div>
	</div>

	<!------Contact Me------>
	<!-- <div class="contact-me" id="contact-me">
		<p>Let Me Get You A Beautiful Website.</p>
		<a class="button-two" href="#">Hire Me</a>
	</div> -->

	<!------footer start--------->
	<footer>
		<!-- <p>Avicenna</p> -->
		<div class="social" id="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
		</div>
		<p>© 2022 Avicenna</p>
	</footer>
</body>
</html>