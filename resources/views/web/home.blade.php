@extends('layouts.web')
@section('content')
<!--Slider Start-->
<div class="ast_slider_wrapper">
	<div class="ast_banner_text">
		<div class="starfield">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<div class="ast_waves">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves2">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="ast_waves3">
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
			<div class="ast_wave"></div>
		</div>
		<div class="container">
			<div class="ast_bannertext_wrapper">
				<!--<h1>One stop solution<br> for all your astrological needs</h1>
				
				<a class="ast_btn">make it now</a>-->
			</div>
		</div>
	</div>
</div>
<!--Slider End-->
<!--About Us Start-->
<!--<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>about <span>Worship</span></h1>
					
				</div>
			</div>
			
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_about_info">
				<!--	<h4>know about astrology</h4>-->
			<!--		<p style="text-align:justify;">Worship is to honor God with a ritual act of Devotion. It is the most transformational and meaningful act performed by a person. There are numerous reasons for worshipping – submitting ourselves to God, thanking for what we have, creating positive vibes in our life, etc. – depending on individuals and situations, the reason differs. Temples and other sacred places have a perfectly designed setting to worship. In this age of nuclear families, employment-based migration, and fast-paced world, not everyone can perform their devotional rituals themselves.</p>
					<a href="about.php" class="ast_btn">know more</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!--About Us End-->
<!--Overview wrapper start -->
<!--<div class="ast_overview_wrapper ast_toppadder100 ast_bottompadder100">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_overview_info">
					<h1>About <span>eWorship</span></h1>
					<p>eWorship.in assists every individual to perform their Hindu religious ceremonies from the comfort of their home or workplace. Right from Horoscope generation and analysis to specific Pujas – we provide all aspects of Hindu religious practices. Guidance is provided on various religious facets of life based on your horoscope. Necessary sacred rituals are advised upon to sustain, overcome or advance your situation in life. We perform the rituals on their behalf at their preferred institutions.</p>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Overview wrapper end -->
<!--WeDo Start-->
<div class="ast_wedo_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Homam & <span>Parikaram</span></h1>
					
				</div>
			</div>


            @foreach ($homams->chunk(6) as $items)
                
            


			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology" style="background-color: #f05a25;">
							
							<ul>

                                @foreach ($items as $item)
                                    
                         
								<li style="border-top:none;">
									<a href="homam_parikkaram.php">
										
										<div class="ast_vedic_astro_info" style="padding-left: 2px;">
											<h5 style="color:#fff;font-size: 17px;">{{ $item->title}} </h5>
											
										</div>
									</a>
								</li>
                                @endforeach
								 
								 
						 
						 
								
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		 
	 
			@endforeach
			
		</div>
	</div>
</div>
<!--Services Start-->
<!--<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Homam & <span>Parikaram</span></h1>
					
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ast_service_slider">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
				<!--			<h4>Ganapathy Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
			<!--				<h4>Parvathy Suiamvaram Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
				<!--			<h4>Sudarsana Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for family wellness</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Long Life</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Navagraga Shanthi Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Satru Samhara Homam </h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Angaraha Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Hayagrivar Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
				<!--			<h4>Homam for Business Development</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Thanvanthiri Homam  </h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Child Birth</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Ragu Kethu Homam</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
					<!--	</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for 7 1/2 Sani</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Kandaga Sani</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Astamathu Sani</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
							<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Marriage</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
					<div class="item">
						<div class="ast_service_box">
						<!--	<img src="images/content/sv5.png" alt="Service">-->
					<!--		<h4>Homam for Education</h4>
							
							<div class="clearfix"></div>
							<!--<a href="homam_parikkaram.php" class="ast_btn">read more</a>-->
				<!--		</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>-->
<!--Services End-->
<!--WeDo Start-->
<div class="ast_wedo_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Archanai<span></span></h1>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology">
							<h4>Navagraga Temples </h4>
							<ul>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Sooryanar koil </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thingaloor </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Vaitheeswaran kovil </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thiruvenkadu </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thiru nageswaram </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Kanjanur </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thirunallaru  </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>ThiruNageswaram  </h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="navagraga_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Keezhaperumpallam </h5>
											
										</div>
									</a>
								</li>
								<a href="navagraga_temples.php" class="ast_btn pull-right">View More</a>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology">
							<h4>Murugan Arupadai Temples</h4>
							<ul>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thirupparankundram</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thiruchndur</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Palani</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Swamimalai</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Thiruthani</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="murugan_arupadai_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Pazamudhircholai</h5>
											
										</div>
									</a>
								</li>
								<a href="murugan_arupadai_temples.php" class="ast_btn pull-right">View More</a>
							</ul>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology">
							<h4>Wedding</h4>
							
							<div class="ast_vedic_astro_box">
							<!--	<h5>60 , 70 , 80 Age Kalyanam at Thirukadayur and other places</h5>-->
							<h5>Age 59 Ukra Ratha Shanthi</h5>
							<h5>Age 60 Sastiyaptha  Poorthi</h5>
							<h5>Age 70 Bhima Ratha Shanthi </h5>
							<h5>Age 80 Sadha  Abisekam</h5>
							<h5>Age 100 Poorna Abisekam</h5>
								
								<a href="https://eworship.in/wedding.php" class="ast_btn pull-right">know more</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology">
							<h4>Important Temples</h4>
							<ul>
								<li>
									<a href="important_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Guruvayur</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="important_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Chottanikkara</h5>
											
										</div>
									</a>
								</li>
								<li>
									<a href="important_temples.php">
										
										<div class="ast_vedic_astro_info">
											<h5>Kadampuzha</h5>
											
										</div>
									</a>
								</li>
								
								<a href="important_temples.php" class="ast_btn pull-right">View More</a>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="ast_vedic_astrology">
							<h4>vastu shastra</h4>
							<div class="ast_vedic_astro_box">
								<img src="{{ asset('assets/images/content/vdk_vst.jpg')}}" alt="vastu">
								
								<a href="vasthu.php" class="ast_btn pull-right">know more</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!--WeDo End-->
<!--Searchbox Start-->
<!--<div class="ast_searchbox_wrapper horoscope_search ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ast_search_box">
				<h1>Wedding</h1>
				<p style="color:#000;font-weight:bold;">60 , 70 , 80 Age Kalyanam at Thirukadayur and other places</p>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<button type="submit" class="ast_btn"><a href="wedding.php"> Book now </a></button>
				</div>
			</div>
			</div>
		</div>
	</div>
</div> -->
<!--Searchbox End-->
<!--WhyWe Us Start-->
<!--<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Why Choose   <span>Us</span></h1>
					
				</div>
			</div>
			
			
		<!--	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-push-7 col-md-push-7 col-sm-push-7 col-xs-push-0">
				<div class="ast_about_info_img">
					<img src="images/content/about.png" alt="About">
				</div>
			</div>-->
	<!--		<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_about_info">
					<h4>How You Benefit</h4>
					<p style="text-align:justify;">‘eWorship.in’ gives you an in-depth knowledge of an appropriate religious way of life. Comprehensive list of Temples and Sacred Rituals such as Archanas, Pariharams and Homams are provided by eWorship. eWorship understands the need to perform the Pujas and other Sacred rituals in its entirety and with the utmost purity to attain maximum realization of blessings for each person. Our team works closely with the wide network of Archakars (Temple Priests) to provide complete support in performing your religious rituals. eWorship.in can get Pujas conducted in major temples of South India including the Navagraha Temples in Thanjavur (Tamilnadu). You can choose your desired temple for performing the sacred rituals. If rituals are to be performed in any other temple, our team member would go directly and complete them.</p>
					
				</div>
			</div>
		
		<!--	<div class="ast_whywe_info">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_1.png" alt=""></span>
						<div class="ast_whywe_info_box_info">							
							<p>90+ Expert Astrologers</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_2.png" alt=""></span>
						<div class="ast_whywe_info_box_info">
							<p>24x7, 365 Days Availability</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_3.png" alt=""></span>
						<div class="ast_whywe_info_box_info">
							<p>Instant Access Worldwide</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_4.png" alt=""></span>
						<div class="ast_whywe_info_box_info">
							<p>Accurate Remedial Solutions</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_5.png" alt=""></span>
						<div class="ast_whywe_info_box_info">
							<p>Privacy Guaranteed</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="ast_whywe_info_box">
						<span><img src="images/content/ww_6.png" alt=""></span>
						<div class="ast_whywe_info_box_info">
							<p>Trusted by million clients</p>
						</div>
					</div>
				</div>
			</div> -->
	<!--	</div>
	</div>
</div>-->
<!--WhyWe Us End-->

<!--Services Start-->

<!--Services End-->

<!--Team Start-->
<div class="ast_team_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Team of  <span>Renowned Josiers</span></h1>
					<p>Our team of Josiers analyses your horoscope in detail and advises upon the required ritual practices in Vedic tradition. Based on your acceptance, these practices would be done by us on a cost-efficient manner. </p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="ast_team_box">	
					<img src="{{ asset('assets/images/sunil-astrologer.jpg')}}" alt="team">
					<h4><a href="sunil_a.php">A. SUNIL </a></h4>
					<p>astrologer</p>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		<!--	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="ast_team_box">	
					<img src="images/content/tm2.jpg" alt="team">
					<h4><a href="team_single.php">Marie J. Vela</a></h4>
					<p>tarot reader</p>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="ast_team_box">	
					<img src="images/content/tm3.jpg" alt="team">
					<h4><a href="team_single.php">Tim M. Hall</a></h4>
					<p>gemstonist</p>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="ast_team_box">	
					<img src="images/content/tm4.jpg" alt="team">
					<h4><a href="team_single.php">Judith Travis</a></h4>
					<p>astrologist</p>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div> -->
		</div>
	</div>
</div>
<!--Team end-->
<!--Timer Section start -->
<!--<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Daily <span>Horoscope</span></h1>
					
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Aries.png" alt="Service">
					<h4>Aries</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Taurus.png" alt="Service">
					<h4>Taurus</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Gemini.png" alt="Service">
					<h4>Gemini</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Cancer.png" alt="Service">
					<h4>Cancer</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Leo.png" alt="Service">
					<h4>Leo</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Virgo.png" alt="Service">
					<h4>Virgo</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Libra.png" alt="Service">
					<h4>Libra</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Scorpio.png" alt="Service">
					<h4>Scorpia</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Sagittarius.png" alt="Service">
					<h4>Sagittarius</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Capricorn.png" alt="Service">
					<h4>Capricon</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Aquarius.png" alt="Service">
					<h4>Aquarius</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<div class="ast_service_box">
					<img src="images/Pisces.png" alt="Service">
					<h4>Pisces</h4>
					<div class="clearfix"></div>
					<a href="" class="ast_btn">read more</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Timer Section end -->
<!--Price Start-->
<!--Searchbox Start-->
<div class="ast_searchbox_wrapper horoscope_search ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ast_search_box">
				<h1>get your horoscope for Rs.2000</h1>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<input type="text" placeholder="Name">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<input type="text" placeholder="Email">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<input type="text" placeholder="Mobile Number">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<input type="text" placeholder="Date of Birth">
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<select>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
					<button type="submit" class="ast_btn">Get now</button>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<!--Searchbox End-->
<!--Price End-->

<!-- Testimonials Start-->
<!--<div class="ast_testimonial_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>what client<span> says</span></h1>
					
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_testimonials_slider">
					<div class="owl-carousel owl-theme">
   					<div class="item">
   						<div class="ast_testimonials_slider_box">
							<img src="images/content/tm2.jpg" alt="Testimonial">
							<div class="ast_testimonials_slider_box_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution.</p>
								<h4>Charlyn Stewart, <span>astrologer</span></h4>
							</div>
   						</div>   					
   					</div>
   					<div class="item">
   						<div class="ast_testimonials_slider_box">
   							<img src="images/content/tm1.jpg" alt="Testimonial">
							<div class="ast_testimonials_slider_box_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution.</p>
								<h4>Kenneth Page, <span>tarot reader</span></h4>
							</div>					
   						</div>   					
   					</div>
   					<div class="item">
   						<div class="ast_testimonials_slider_box">
   							<img src="images/content/tm3.jpg" alt="Testimonial">
							<div class="ast_testimonials_slider_box_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution.</p>
								<h4>Louis Robinson, <span>horoscoper</span></h4>
							</div>
   						</div>
   					</div>
					<div class="item">
   						<div class="ast_testimonials_slider_box">
   							<img src="images/content/tm4.jpg" alt="Testimonial">
							<div class="ast_testimonials_slider_box_text">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution.</p>
								<h4>Judith Tierney, <span>psychologist</span></h4>
							</div>
   						</div>
   					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>-->
<!-- Testimonials End-->
<!-- Download wrapper start-->
@endsection