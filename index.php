<!doctype html>
<html>
	<head>
		<link rel="shortcut icon" href="images/Learn Supercross Tab Logo.png">
		<title>Learn Supercross</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<style>
			body{
				background: #000;
				color: #fff;
				font-family: Nunito Semibold, Nunito;
				text-align: center;
			}
			
																/*Tablet/Phone*/
			@media screen and (max-width: 759px){
							
																		/* Navbar Start */
			ul.navbar {
				list-style-type: none;
				margin: 0px auto;
				padding: 0;
				overflow: hidden;
				background-color: #333;
				display: block;
				justify-content: center;
				border: 1px solid #5271FF;
				border-radius: 10px;
				text-align: center;
				max-width: 300px;
				float: none;
			}
			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 20px;
				text-decoration: none;
				width: 260px;
				border-bottom: 1px solid #5271FF;
				border-top: 1px solid #5271FF;
				border-right: none;
				border-left: none;
			}
			li a, .dropbtn:last-child {
				border-top: none;
			}
			li.dropdown:last-child {
				border-bottom: none;
			}
			li.dropdown:first-child {
				border-left: none;
				border-top: none;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #333333;
				min-width: 140px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			.dropdown-content a {
				color: white;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
				border: 1px solid #5271FF;
				border-bottom: none;
				width: 120px;
			}
			.dropdown-content a:last-child {
				border-bottom: 1px solid #5271FF;;
			}
			.dropdown-content a:hover {background-color: #5271FF;}

			.dropdown:hover .dropdown-content {
				display: block
			}
								
																		/* Navbar End */
				#content{
					display: grid;
					grid-template-columns: repeat(1, 1fr);
					grid-auto-rows: minmax(50px, auto);
					max-width: 960px;
					margin: 0 auto;
					grid-gap: 10px;
					grid-template-areas:
					"header"
					"nav"
					"section"
					"main"					
					"footer";
					}
				#content >*{
					padding: 20px;
				}
				header{
					grid-area: header;
				}
				#content header{
					padding: 0;
				}
				nav{
					grid-area: nav;
				}
				#content nav{
					padding: 0;
				}
				section{
					grid-area: section;
					color: #5271FF;
				}
				main{
					background: #333;
					border: 1px solid #5271FF;
					border-radius: 10px;
					grid-area: main;
				}
				footer{
					grid-area: footer;
				}
				footer hr{
					border-color: #5271FF;
				}
				.nested-main{
					display: grid;
					grid-template-columns: repeat(2, 1fr);
					grid-auto-rows: minmax(50px, auto);
					grid-gap: 10px;
					grid-template-areas:
					"intro-text intro-text"
					"pic pic"
					"vid vid"
					"vid2 vid2";
				}
				.nested-main >*{
					border: 1px solid #5271FF;
					border-radius: 10px;
					padding: 10px;
					margin; 0;
				}
				intro-text{
					text-align: center;
					grid-area: intro-text;
				}
				.nested-main intro-text{
					border: none;
					padding: 0;
				}
				pic{
					border: none;
					grid-area: pic;
				}
				pic img{
					border: 1px solid #5271FF;
					border-radius: 10px;
				}
				.nested-main pic{
					border: none;
					padding: 0;
				}
				vid{
					grid-area: vid;
				}
				vid iframe{
					padding: 40px 0 0 0;
				}
				.nested-main vid{
					border: none;
					padding: 26px 10px 10px 10px;
					font-size: 120%;
				}
				vid2{
					grid-area: vid2;
				}
				.nested-main vid2{
					border: none;
				}
			}
			
																/*Desktop/Laptop*/
			@media screen and (min-width: 760px){
								
																		/* Navbar Start */
			ul.navbar {
				list-style-type: none;
				margin: 0px auto;
				padding: 0;
				overflow: hidden;
				background-color: #333;
				display: flex;
				justify-content: center;
				border: 1px solid #5271FF;
				border-radius: 10px;
			}
			li a, .dropbtn {
				display: inline-block;
				color: white;
				text-align: center;
				padding: 14px 20px;
				text-decoration: none;
			}
			li a:hover, .dropdown:hover .dropbtn {
				background-color: #5271FF;
			}
			li.dropdown {
				display: inline-block;
				border-right: 1px solid #5271FF;
			}
			li.dropdown:first-child{
				display: inline-block;
				border-left: 1px solid #5271FF;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #333333;
				min-width: 140px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			.dropdown-content a {
				color: white;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
				border: 1px solid #5271FF;
				border-bottom: none;
			}
			.dropdown-content a:last-child {
				border-bottom: 1px solid #5271FF;;
			}
			.dropdown-content a:hover {background-color: #5271FF;}

			.dropdown:hover .dropdown-content {
				display: block
			}
								
																		/* Navbar End */
				#content{
					display: grid;
					grid-template-columns: repeat(1, 1fr);
					grid-auto-rows: minmax(50px, auto);
					max-width: 960px;
					margin: 0 auto;
					grid-gap: 10px;
					grid-template-areas:
					"header"
					"nav"
					"section"
					"main"					
					"footer";
					}
				#content >*{
					padding: 20px;
				}
				header{
					grid-area: header;
				}
				nav{
					grid-area: nav;
				}
				#content nav{
					padding: 0;
				}
				section{
					grid-area: section;
					color: #5271FF;
				}
				main{
					background: #333;
					border: 1px solid #5271FF;
					border-radius: 10px;
					grid-area: main;
				}
				footer{
					grid-area: footer;
				}
				footer hr{
					border-color: #5271FF;
					width: 90%;
				}
				.nested-main{
					display: grid;
					grid-template-columns: repeat(2, 1fr);
					grid-auto-rows: minmax(50px, auto);
					grid-gap: 10px;
					grid-template-areas:
					"intro-text pic"
					"vid pic"
					"vid vid2";
				}
				.nested-main >*{
					border: 1px solid #5271FF;
					border-radius: 10px;
					padding: 10px;
					margin; 0;
				}
				intro-text{
					text-align: justify;
					grid-area: intro-text;
				}
				pic{
					border: none;
					grid-area: pic;
				}
				pic img{
					border: 1px solid #5271FF;
					border-radius: 10px;
				}
				.nested-main pic{
					border: none;
					padding: 0;
				}
				vid{
					grid-area: vid;
				}
				vid iframe{
					padding: 40px 0 0 0;
				}
				.nested-main vid{
					border: none;
					padding: 26px 0 0 0;
					font-size: 140%;
				}
				vid2{
					grid-area: vid2;
				}
				.nested-main vid2{
					border: none;
				}
			}
		</style>
	</head>
	<body>
		
		<div id="content">
		
			<header>
				<a href="homepage.html"><img src="images/Learn Supercross Logo.png" width="75%"></a>
			</header>
			
			<nav>
				<ul class ="navbar">
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">LEARN</a>
						<div class="dropdown-content">
						  <a href="event format.html">Event Format</a>
						  <a href="tracks.html">Tracks</a>
						  <a href="rider profiles.html">Rider Profiles</a>
						  <a href="bike tech.html">Bike Tech</a>
						</div>
					</li>
					<li class="dropdown"><a href="watch.html">WATCH</a></li>
					<li class="dropdown"><a href="compete.html">COMPETE</a></li>
					<li class="dropdown"><a href="follow.html">FOLLOW</a></li>
				</ul>
			</nav>
			
			<section>
				<h3>Supercross is arguably the most entertaining sport on the planet, as riders risk it all in the battle to be champion</h3>
			</section>
			
			<main class="nested-main">
				<intro-text>
					<p>This site gives newcomers to the sport a glimse of the action so you can have a better understanding of the crazy world of supercross. You can also discover how to get involved, be it as a spectator or a competitor! As well as finding links to the best supercross media outlets!</p>
				</intro-text>
				<pic>
					<img src="images/webb-roczen.png" width="100%"></img>
				</pic>
				<vid>
					<p class="highlights-text">Check out the highlights from the last race in Denver</p>
					<iframe class="iframe-container" width="100%" height="315" src="https://www.youtube.com/embed/_H99WQ6b0ec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</vid>
				<vid2>
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/Ylz5Ve5tmzM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</vid2>
			</main>
			
			<footer>
				<hr>
				<center><img src="images/TQS Logo.png" width="20%"></img></center>
			</footer>
		
		</div>
		
	</body>
</html>