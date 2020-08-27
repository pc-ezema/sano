<footer id="footer" class="footer bg-black-111">
		<div class="container pt-70 pb-40">
			<div class="row border-bottom-black">
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
						<p>SANO FOODS LIMITED is an organization with a mission aimed at providing healthier meals for the people and the nation at large.</p>
						<ul class="list-inline mt-5">
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> <a class="text-gray" href="#"> {{ config("app.address") }} </a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">{{ config("app.telephone_1") }}</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">{{ config("app.email") }}</a> </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">{{ config("app.web") }}</a> </li>
						</ul>
					</div>
					<div class="widget dark">
						<h5 class="widget-title mb-10">Connect With Us</h5>
						<ul class="styled-icons icon-dark icon-circled icon-sm">
						<li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook"></i></a></li>
						<li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter"></i></a></li>
						<li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Useful Links</h5>
						<ul class="list-border">
							<li><a href="/">Home</a></li>
							<li><a href="/about-us">About us</a></li>
							<li><a href="/contact-us">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
				<div class="widget dark">
						<h5 class="widget-title line-bottom">Other Links</h5>
						<ul class="list-border">
							<li><a href="/faq">FAQ</a></li>
							<!-- <li><a href="/services">Services</a></li> -->
							<li><a href="/our-products"> Products</a></li>
						</ul>
					</div>
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Call Us Now</h5>
						<div class="text-gray">
							{{ config("app.telephone_1") }} <br>
							{{ config("app.telephone_2") }}
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Opening Hours</h5>
						<div class="opening-hours">
							<ul class="list-border">
								<li class="clearfix"> <span> Mon - Wednes :  </span>
									<div class="value pull-right flip"> 9:00 am – 6:00 pm </div>
								</li>
								<li class="clearfix text-white"> <span> Thurs :</span>
									<div class="value pull-right flip"> 10:00 am – 6:00 pm </div>
								</li>
								<li class="clearfix"> <span> Fri : </span>
									<div class="value pull-right flip"> 9:00 am – 6:00 pm </div>
								</li>
								<li class="clearfix"> <span> Sat : </span>
									<div class="value pull-right flip"> 10:00 am – 6:00 pm </div>
								</li>
								<li class="clearfix"> <span> Sun : </span>
									<div class="value pull-right flip"> Closed </div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom bg-black-222">
			<div class="container pt-10 pb-0">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<p class="font-13 text-black-777 m-0">Copyright &copy;{{ date("Y")}} SANO FOODS. All Rights Reserved</p>
					</div>
					<div class="col-md-6 text-right flip sm-text-center">
						<div class="widget no-border m-0">
							<ul class="styled-icons icon-dark icon-circled icon-sm">
								<li><a href="{{ config('app.facebook') }}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{ config('app.twitter') }}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{ config('app.instagram') }}"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>