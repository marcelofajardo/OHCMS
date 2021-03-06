<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

@include('_partial.header')
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Orion HealthCare Management System...</p>
		</div>
	</div>

	<!-- End top section -->
	
	<div class="clearfix"></div>
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Type something ann hit enter">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{ url('img/brand/logo-black.png') }}" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

           @include('_partial.navbar')
        </div>   
    </nav>
    <!-- End Navigation -->
	
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div id="slider_container" class="rev_slider_wrapper">
		<div id="rev-slider" class="rev_slider"  data-version="5.0">
			<ul> 
				<li data-transition="slideremoveright">
					<!-- MAIN IMAGE -->
					<img src="{{ url('img/slider/slide49.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-boxed capUppercase-title" 
						id="slide-1-layer-1" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['170','145','105','35']" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="nowrap"
						data-type="text" 
						data-fontsize="['42','32','24','14']"
						data-lineheight="['42','32','24','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 2; white-space: nowrap;">Orion HealthCare Hospital Management System
						
					</div>
					
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-boxed secondary-bg" 
						id="slide-1-layer-2" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['253','218','158','70']" 
						data-width="['600','530','400','250']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="normal"
						data-type="text" 
						data-fontsize="['14','14','11','9']"
						data-lineheight="['24','24','18','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">Orion HealthCare Hospital Management System is a web based and opensource Hospital Management System crafted with love and passion by MartDevelopers which targets low level and middle class health
																care corporations.
					</div>
					
					
				</li>
				
				<li data-transition="slideremoveright">
					<!-- MAIN IMAGE -->
					<img src="{{ url('img/slider/slide50.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-boxed capUppercase-title" 
						id="slide-2-layer-1" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['170','145','105','35']" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="nowrap"
						data-type="text" 
						data-fontsize="['42','32','24','14']"
						data-lineheight="['42','32','24','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;"><strong>Orion HealthCare Hospital Management System</strong>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-boxed secondary-bg" 
						id="slide-2-layer-2" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['253','218','158','70']" 
						data-width="['600','530','400','250']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="normal"
						data-type="text" 
						data-fontsize="['14','14','11','9']"
						data-lineheight="['24','24','18','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">Orion HealthCare Hospital Management System. We bring free and open source Management System to all HealthCare corporations.
					</div>
					
					
				</li>
				
				
				<li data-transition="slideremoveright">
					<!-- MAIN IMAGE -->
					<img src="{{ url('img/slider/slide51.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
					
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-boxed capUppercase-title" 
						id="slide-3-layer-1" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['170','145','105','35']" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="nowrap"
						data-type="text" 
						data-fontsize="['42','32','24','14']"
						data-lineheight="['42','32','24','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;"><strong>Orion HealthCare Hospital Management System</strong>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-boxed secondary-bg" 
						id="slide-3-layer-2" 
						data-x="left" data-hoffset="['60','60','60','20']" 
						data-y="top" data-voffset="['253','218','158','70']" 
						data-width="['600','530','400','250']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-textAlign="['left','left','left','left']"
						data-whitespace="normal"
						data-type="text" 
						data-fontsize="['14','14','11','9']"
						data-lineheight="['24','24','18','14']"
						data-paddingtop="[20,20,15,10]"
						data-paddingright="[20,20,20,10]"
						data-paddingbottom="[20,20,15,10]"
						data-paddingleft="[20,20,20,10]"
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">Help Orion HealthCare Hospital Management System to organize and regulate your clients medical records.
					</div>
					
					
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- END OF SLIDER WRAPPER -->
	
	<!-- Start contain wrapp -->
	<div class="contain-wrapp paddtop-clear padding-bot30">
		<div class="container">
			<div class="row margin-mintop110">
				<div class="col-md-12">
					<div class="col-icon column-5 bg1">
						<i class="fa fa-hospital-o fa-5x"></i>
						<h5><span>Departmental</span> Management</h5>
						<p>
							Orion HealthCare Hospital Management System Provies Departmental Module which Enables The  Corporation Stakeholders To Manage Their Departments.
						</p>
						
					</div>
					<div class="col-icon column-5 bg2">
						<i class="fa fa-flask fa-5x"></i>
						<h5><span>Laboratory</span> Management</h5>
						<p>
							Orion HealthCare Hospital Management System Provies Laboratory Management Module which Enables The Corporation Stakeholders To Manage Their Laboratory Records.
						</p>
						
					</div>
					<div class="col-icon column-5 bg3">
						<i class="fa fa-stethoscope fa-5x"></i>
						<h5><span>Modern</span> Technology</h5>
						<p>
							Orion HealthCare Hospital Management System Is Implemented With Opensource Technologies Which Makes It More Portable And Platform Independent.
						</p>
					</div>
					<div class="col-icon column-5 bg3">
						<i class="fa fa-medkit fa-5x"></i>
						<h5><span>Pharmacy</span> Management</h5>
						<p>
							Orion HealthCare Hospital Management System Provies Pharmacy Management Module Which Enables  Stakeholders To Manage Pharmaceuticals.
						</p>
						
					</div>

					<div class="col-icon column-5 bg5">
						<i class="fa fa-user-md fa-5x"></i>
						<h5><span>Front Desk</span> Services</h5>
						<p>
							Orion HealthCare Hospital Management System Provies Registration Desk | Front End Office Module Which Enables  Target Corporation To Manage Their Clients.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start footer -->
	@include('_partial.footer')
	<!-- End footer -->
	
	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->
	@include('_partial.scripts')
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    
</body>

</html>
