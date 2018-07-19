@extends('layouts.base')

@section('content')

    <!-- Slider Revolution -->
    <div class="revolution-slider-container">
        <div class="revolution-slider">
            <ul style="display: none;">
                <!-- SLIDE 1 -->
                <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/slider/hero-img.jpg')}}" alt="slidebg1" data-bgfit="cover">
                    <!-- LAYERS -->
                    <!-- LAYER 01 -->
                    <div class="tp-caption"
                         data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="97"
                    >

                        <div class="hexagon"><div class="sl-small-car"></div></div>
                    </div>
                    <!-- LAYER 02 -->
                    <div class="tp-caption"
                         data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="262"
                    >

                        <h2><a target="_top" href="contact.html" title="MAKE YOUR CAR LAST LONGER">SCIENTIFIC APPROACH TO VEHICLE INSPECTION</a></h2>
                    </div>
                    <!-- LAYER 03 -->
                    <div class="tp-caption"
                         data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="343"
                    >

                        <p class="description">We'll be there to protect the interest of your vehicle all the time</p>
                    </div>
                    <!-- LAYER 04 -->
                    <div class="tp-caption"
                         data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'
                         data-x="center"
                         data-y="441"
                    >

                        <div class="align-center">
                            <a target="_top" class="more simple" href="contact.html" title="contact us"><span>CONTACT US</span></a>
                        </div>
                    </div>
                    <!-- / -->
                </li>
                <!-- SLIDE 2 -->
                <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/slider/01.jpg')}}" alt="slidebg2" data-bgfit="cover">
                    <!-- LAYERS -->
                    <!-- LAYER 01 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="97"
                    >

                        <div class="hexagon"><div class="sl-small-car-checklist"></div></div>
                    </div>
                    <!-- LAYER 02 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="262"
                    >

                        <h2><a target="_top" href="about/about.html" title="LEARN MORE ABOUT US">HAVE YOU INSPECTED IT? THEN WHY BUY IT.</a></h2>
                    </div>
                    <!-- LAYER 03 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="343"
                    >

                        <p class="description">Take advantage of our lowest prices and professional inspection services</p>
                    </div>
                    <!-- LAYER 04 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="441"
                    >

                        <div class="align-center">
                            <a target="_top" class="more simple" href="about/about.html" title="ABOUT US"><span>ABOUT US</span></a>
                        </div>
                    </div>
                    <!-- / -->
                </li>

                <!-- SLIDE 3 -->
                <li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/slider/02.jpg')}}" alt="slidebg3" data-bgfit="cover">
                    <!-- LAYERS -->
                    <!-- LAYER 01 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":500,"speed":1200,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="97"
                    >

                        <div class="hexagon"><div class="sl-small-car-oil"></div></div>
                    </div>
                    <!-- LAYER 02 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":900,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="262"
                    >

                        <h2><a target="_top" href="services/services.html" title="WE CARE ABOUT YOUR CAR">EXPERT TECHNICIANS, INVALUABLE SERVICES</a></h2>
                    </div>
                    <!-- LAYER 03 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1100,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="343"
                    >

                        <p class="description">We are committed to earning your trust by providing the expertise and value you expect.</p>
                    </div>
                    <!-- LAYER 04 -->
                    <div class="tp-caption customin customout"
                         data-frames='[{"delay":1300,"speed":1200,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'

                         data-x="center"
                         data-y="441"
                    >

                        <div class="align-center">
                            <a target="_top" class="more simple" href="services/services.html" title="OUR SERVICES"><span>OUR SERVICES</span></a>
                        </div>
                    </div>
                    <!-- / -->
                </li>
            </ul>
        </div>
    </div>
    <!--/-->

    <div class="theme-page">
        <div class="clearfix">
            <div class="row gray full-width">
                <div class="announcement clearfix">
                    <ul class="columns no-width">
                        <li class="column column-2-3">
                            <div class="vertical-align">
                                <div class="vertical-align-cell">
                                    <h3>BOOK AN APPOINTMENT	NOW WITH OUR ONLINE FORM</h3>
                                </div>
                            </div>
                        </li>
                        <li class="column column-1-3">
                            <div class="vertical-align">
                                <div class="vertical-align-cell">
                                    <a class="more" href="{{route('appointment')}}" title="MAKE AN APPOINTMENT"><span>BOOK AN APPOINTMENT</span></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row page-margin-top-section">
                <div class="row">
                    <h2 class="box-header">HOW IT WORKS</h2>
                    <p class="description align-center">We are the first vehicle inspection service provider to reckon with<br>All inspection services are performed by highly skilled inspectors with adequate technical know-how</p>
                    <div class="row page-margin-top">
                        <div class="column column-1-3">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon"><div class="sl-small-car"></div></div>
                                    <h4 class="box-header page-margin-top">HAVE YOU IDENTIFIED AN INTENDED VEHICLE?</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="column column-1-3">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon"><div class="sl-small-clock"></div></div>
                                    <h4 class="box-header page-margin-top">LETS INSPECT IT AND COME UP WITH A DETAILED REPORT</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="column column-1-3">
                            <ul class="features-list big">
                                <li>
                                    <div class="hexagon"><div class="sl-small-wrench-screwdriver"></div></div>
                                    <h4 class="box-header page-margin-top">MAKE AN EXCELLENT DECISION TOWARDS ITS PURCHASE</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="align-center margin-top-67 padding-bottom-20">
                        <a class="more" href="appointment/appointment.html" title="READ MORE"><span>GET STARTED</span></a>
                    </div>
                </div>
            </div>
            <div class="row full-width gray flex-box page-margin-top-section">
                <div class="column column-1-2 background-1">
                    <img src="images/samples/image_02.png" alt="">
                </div>
                <div class="column column-1-2 padding-bottom-66">
                    <div class="row padding-left-right-100">
                        <h2 class="box-header page-margin-top-section">VEHICLES INSPECTED</h2>
                        <p class="description align-center">We provide top notch inspection service for all types of vehicles.<br>We are certified to service and repair the following makes:</p>
                        <div class="row margin-top-30">
                            <div class="column column-1-2">
                                <ul class="list">
                                    <li class="template-bullet">Honda</li>
                                    <li class="template-bullet">Range Rover</li>
                                    <li class="template-bullet">Lexus</li>
                                    <li class="template-bullet">Toyota</li>
                                    <li class="template-bullet">KIA</li>
                                </ul>
                            </div>
                            <div class="column column-2-2">
                                <ul class="list">
                                    <li class="template-bullet">Mercedes - Benz</li>
                                    <li class="template-bullet">Hyundai</li>
                                    <li class="template-bullet">Mitsubishi</li>
                                    <li class="template-bullet">Nissan</li>
                                    <li class="template-bullet">Volvo</li>
                                </ul>
                            </div>

                        </div>
                        <div class="align-center margin-top-67 padding-bottom-20">
                            <a class="more simple" href="services/services.html" title="VIEW FULL LIST"><span>VIEW FULL LIST</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row full-width page-padding-top-section">
                <div class="row">
                    <h2 class="box-header">AUTOSPECT SERVICES</h2>
                    <p class="description align-center">We offer a wide range of inspection services to vehicle owners located in Nigeria.<br>Our professionals know how to handle a wide range of vehicle Inspection.</p>
                    <ul class="services-list clearfix page-margin-top">
                        <li>
                            <a href="services/pre-purchase-inspection.html" title="Pre-purchase inspection">
                                <img src="images/slider/01.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="services/pre-purchase-inspection.html" title="Pre-purchase inspection">PRE-PURCHASE INSPECTION<span class="template-arrow-menu"></span></a></h4>
                        </li>
                        <li>
                            <a href="services/vehicle-scan-and-check-up.html" title="Vehicle Scan and Check-up">
                                <img src="images/samples/02.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="services/vehicle-scan-and-check-up.html" title="Vehicle Scan and Check-up">VEHICLE SCAN AND CHECK-UP<span class="template-arrow-menu"></span></a></h4>
                        </li>
                        <li>
                            <a href="services/fleet-management.html" title="Fleet management">
                                <img src="images/samples/390x260/image_03.jpg" alt="">
                            </a>
                            <h4 class="box-header"><a href="services/fleet-management.html" title="Fleet management">FLEET MANAGEMENT<span class="template-arrow-menu"></span></a></h4>
                        </li>
                    </ul>
                    <div class="align-center margin-top-40 padding-bottom-87">
                        <a class="more" href="services/services.html" title="VIEW ALL SERVICES"><span>VIEW ALL SERVICES</span></a>
                    </div>
                </div>
            </div>
            <div class="row full-width padding-top-70 padding-bottom-66 parallax parallax-1">
                <div class="row testimonials-container">
                    <a href="#" class="slider-control left template-arrow-left-1"></a>
                    <ul class="testimonials-list">
                        <li>
                            <div class="hexagon small"><div class="sl-small-pen"></div></div>
                            <p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
                            <h6>MAZI AYOYINKA</h6>
                            <div class="author-details">CEO OF PAYSTACK</div>
                        </li>
                        <li>
                            <div class="hexagon small"><div class="sl-small-pen"></div></div>
                            <p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
                            <h6>MAZI AYOYINKA</h6>
                            <div class="author-details">CEO OF PAYSTACK</div>
                        </li>
                        <li>
                            <div class="hexagon small"><div class="sl-small-pen"></div></div>
                            <p>"I have taken several of the family cars here for the past several years and without exception the experiences have been outstanding.
                                I would highly recommend this place to any one who wants great service, honest value, and really great people."</p>
                            <h6>MAZI AYOYINKA</h6>
                            <div class="author-details">CEO OF PAYSTACK</div>
                        </li>
                    </ul>
                    <a href="#" class="slider-control right template-arrow-left-1"></a>
                </div>
            </div>
            <div class="row page-margin-top-section padding-bottom-61">
                <div class="row">
                    <h2 class="box-header">COMPANY OVERVIEW</h2>
                    <p class="description align-center">Have you seen a vehicle of your choice? <br>We are sure you won't like to buy it unless you're sure of its condition.
                        Just call or mail us, we'll be there to protect your interest hence will be present to physically inspect the vehicle and you're then assumed of a detailed report of its state in about 24 hours right in your mail.</p>
                </div>
                <div class="row page-margin-top-section">
                    <div class="column column-1-3">
                        <ul class="features-list">
                            <li>
                                <h5>CAR AUDIO CHECK</h5>
                                <div class="icon sl-small-car-audio"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                            <li>
                                <h5>CAR A/C CHECK</h5>
                                <div class="icon sl-small-air-conditioning"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="column column-1-3">
                        <ul class="features-list">
                            <li>
                                <h5>OIL GUAGING</h5>
                                <div class="icon sl-small-car-oil"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                            <li>
                                <h5>PARKING SENSORS CALIBRATION</h5>
                                <div class="icon sl-small-parking-sensor"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="column column-1-3">
                        <ul class="features-list">
                            <li>
                                <h5>ENGINE DIAGNOSTICS</h5>
                                <div class="icon sl-small-signal-warning"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                            <li>
                                <h5>CAR BATTERY CHECK</h5>
                                <div class="icon sl-small-car-battery"></div>
                                <p>Services consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec elite maecenas modern forte elementum vehicula.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row gray full-width padding-top-54 padding-bottom-61  align-center">
                <h3><span class="button-label">DO YOU LIKE WHAT YOU SEE</span> <a class="more" target="_top" href="contact/contact.html" title="CONTACT US"><span>CONTACT US</span></a></h3>
            </div>
            <div class="row page-margin-top-section">
                <div class="column column-1-2">
                    <h3 class="box-header">OUR MISSION</h3>
                    <p class="description">To provide excellent vehicle inspection service to our her service seekers.</p>
                    <h3 class="box-header margin-top-30">OUR VISION</h3>
                    <p class="description">Our vision is to be a company of first choice. Preferred by every individual, firm and government parastatals who seek vehicle inspection to aid decision making.</p>
                    <div class="page-margin-top">
                        <a class="more" href="about/about.html" title="READ MORE"><span>KNOW MORE</span></a>
                    </div>
                </div>
                <div class="column column-1-2">
                    <h3 class="box-header">POPULAR QUESTIONS</h3>
                    <ul class="accordion margin-top-40 clearfix">
                        <li>
                            <div id="accordion-using-synthetic">
                                <h4>Should I consider calling you to book and appointment or by mailing you?</h4>
                            </div>
                            <p>We have an online appointment form that you can fill to book an inspection with us. Feel free to call or mail us if you encounter any issues.</p>
                        </li>
                        <li>
                            <div id="accordion-parts-replacements">
                                <h4>After inspection, would you refer a mechanic to fix the issue?</h4>
                            </div>
                            <p>Yes, we have professional mechanics that will fix every issues that is observed from the inspection.</p>
                        </li>
                        <li>
                            <div id="accordion-track-routine">
                                <h4>How do I keep track of routine maintenance?</h4>
                            </div>
                            <p>We have an offer to keep your vehicle inspection record and offer periedic check-up at your own discretion</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row full-width top-border page-margin-top-section padding-bottom-50">
                <div class="row">
                    <div class="our-clients-list-container page-margin-top">
                        <ul class="our-clients-list">
                            <li>
                                <img src="images/logos/logo_01.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_02.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_03.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_04.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_05.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_06.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_07.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_08.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_09.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_10.png" alt="">
                            </li>
                            <li>
                                <img src="images/logos/logo_11.png" alt="">
                            </li>
                        </ul>
                        <div class="our-clients-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection