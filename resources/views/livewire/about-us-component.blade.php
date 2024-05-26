<div>
    <main id="main" class="main-site">

		<style>
			 #page-header {
				background-image: url({{asset('asset/porduct-page-banner.png')}});
				width: 100%;
				height: 30vh;
				background-size: cover;
				display: flex;
				justify-content: center;
				text-align: center;
				flex-direction: column;
				padding: 14px;
				color: rgb(50, 49, 49);
			}
			#page-header h1{
				font-weight: bold;
				font-size: 48px;
			}
		</style>

		<section id="page-header">
			<h1>About US</h1>
		</section>

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Home</a></li>
					<li class="item-link"><a href="/about-us" class="link">About Us</a></li>
				</ul>
			</div>
		</div>
		
		<div>
			<style>
				#blogs{
					padding: 20px 100px 0 100px;
				}

				#blogs .blog-box {
					display: flex;
					align-items: center;
					width: 100%;
					margin-bottom: 70px;
				}

				#blogs .blog-img {
					width: 50%;
					margin-right: 80px;	
				}

				#blogs .blog-img img{
					width: 600px;
				}

				#blogs .blog-details {
					width: 50%;
				}

				#blogs .blog-details h4, #blogs .blog-details p{
					color: #555555;
					text-align: justify;
				}

				#blogs .blog-details a{
					text-decoration: none;
					
					font-size: 13px;
					background-color: #325079;
					color: white;
					padding: 10px;
					border-radius: 6px;
				}

				#blogs .blog-details a:hover {
					background-color: #041e42;
				}
			</style>
			<hr>
			<section id="blogs">
				<div class="blog-box">
					<div class="blog-img">
						<img src="asset/bigganpur-logo.jpeg" alt="">
					</div>
					<div class="blog-details">
						<h4>What is Bigganpur?</h4>
						<p>BigganPur is a E-commerce Website that sells Robotics Components and Related Books. It is a low-cost, credit card sized computer that plugs into your Monitor and keyboard. It can be used for many of the things that your desktop PC does, like spreadsheets, word-processing, programming, playing games and browsing the internet.</p>
					</div>
				</div>
			</section>
			<hr>
		</div>

		<div class="container">
			<!-- <div class="main-content-area"> -->
				<div class="row equal-container">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">1000</b>
							<span class="sub-title">Items in Store</span>
							<p class="desc">We sell almost all types of Robotics Components</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">95%</b>
							<span class="sub-title">Our Customers comeback</span>
							<p class="desc">Most of our costomes again come to us for our premium services</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="aboutus-box-score equal-elem ">
							<b class="box-score-title">10000</b>
							<span class="sub-title">User of the site</span>
							<p class="desc">Thousand of Customers visit our Website everyday</p>
						</div>
					</div>
					
				</div>
				<hr>
				<div>
					<style>
						/* Feature */
						#feature {
							display: flex;
							align-items: center;
							justify-content: space-between;
							flex-wrap: wrap;
						}
		
						#feature img {
							/* width: 180px;
							height: 90px; */
						}
		
						#feature .fe-box{
							width: 235px;
							height: 140px;
							text-align: center;
							margin-top: 20px;
							margin-bottom: 20px;
							padding: 3px 10px;
							box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
							border: 2px solid rgb(72, 193, 240);
						}
		
						#feature .fe-box.fe-box.fe-box.fe-box:hover{
							box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
						}
		
						#feature .fe-box p{
							font-size: 11px;
							padding: 9px 8px 6px 8px;
							line-height: 1;
							color: #fafafa;
							font-weight: bold;
							background-color: #1A2C4D;
							background-size: 240px;
						}
					</style>

					<!-- Features -->
					<section id="feature" class="section-p1">
						<div class="fe-box">
							<img src="asset/fast-delivery.png" alt="">
							<p>Delivery within 48 Hours</p>
						</div>
						
						<div class="fe-box">
							<img src="asset/free-shiping.jpeg" alt=" ">
							<p>FREE SHIP-ON ORDER OVER ৳3000</p>
						</div>
						<div class="fe-box">
							<img src="asset\24_7.jpeg" alt="" >
							<p>24/7 Support</p>
						</div>
						<div class="fe-box">
							<img src="asset/gift.png" alt="" >
							<p style="margin-top: 10px;">GIFT ON ORDER OVER ৳2500</p>
						</div>
				
					</section>
				</div>

				<div class="our-team-info">
					<h4 class="title-box">Our team members</h4>
					<div class="our-staff">
						<div 
							class="slide-carousel owl-carousel style-nav-1 equal-container" 
							data-items="5" 
							data-loop="false" 
							data-nav="true" 
							data-dots="false"
							data-margin="30"
							data-responsive='{"0":{"items":"1"},"480":{"items":"3"},"768":{"items":"4"},"992":{"items":"4"},"1200":{"items":"4"}}' >

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="Md.Ebrahim Zain">
										<figure><img src="asset/zain.jpg" alt="Md.Ebrahim Zain" style="height: 220px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">Md.Ebrahim Zain</b>
									<span class="title">Director</span>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="Md.Mezbaul Rahman">
										<figure><img src="asset/mezba.jpg" alt="Md.Mezbaul Rahman" style="height: 220px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">Md.Mezbaul Rahman</b>
									<span class="title">Manager</span>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="Arghy Basak">
										<figure><img src="asset/arghy.jpg" alt="Arghy Basak" style="height: 220px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">Arghy Basak</b>
									<span class="title">Marketer</span>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="Raihan Rakib">
										<figure><img src="asset/raihan.jpg" alt="Raihan Rakib" style="height: 220px;"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">Raihan Rakib</b>
									<span class="title">Developer</span>
								</div>
							</div>

						</div>

					</div>

				</div>
			<!-- </div> -->
			

		</div><!--end container-->

	</main>
</div>
