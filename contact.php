<?php include_once('./assests/header.php') ?>
    <div class="page-wraper">  
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/6.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Inspired design for people</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Contact us</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
             
            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80">
                <!-- LOCATION BLOCK-->
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-left text-black">
                        <h2 class="text-uppercase font-36">Where to Find us </h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-black"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->                
                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="wt-box">
                            <form class="contact-form cons-contact-form" method="post" action="form-handler.php">
                            	<div class="contact-one p-a40 p-r150">
                                    <div class="form-group">
                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                    </div>
                                
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="phone" type="number"  class="form-control " required placeholder="Phone Number"></textarea>
                                    </div>
                                
                                    <div class="form-group">
                                        <textarea name="message" type="text" rows="3" class="form-control " required placeholder="Message"></textarea>
                                    </div>
                                
                                    <button name="submit" type="submit" value="Submit" class="site-button black radius-no text-uppercase">
                                            <span class="font-12 letter-spacing-5">Submit</span>
                                    </button>
                                    
                                    <div class="contact-info bg-black text-white p-a30">
                                        <div class="wt-icon-box-wraper left p-b30">
                                            <div class="icon-sm"><i class="iconmoon-smartphone-1"></i></div>
                                            <div class="icon-content text-white ">
                                                <h5 class="m-t0 text-uppercase">Phone number</h5>
                                                <a href="tel:918590730714" target="_blank"><p>(+91) 85907 30714</p></a>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left p-b30">
                                            <div class="icon-sm"><i class="iconmoon-email"></i></div>
                                            <div class="icon-content text-white">
                                                <h5 class="m-t0  text-uppercase">Email address</h5>
                                                <a href="mailto:reachus@t4studio.in" target="_blank"><p>reachus@t4studio.in</p></a>
                                                <a href="mailtp:thanseem@t4studio.in" target="_blank"><p>thanseem@t4studio.in</p></a>
                                            </div>
                                        </div>
                                        
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-sm"><i class="iconmoon-travel"></i></div>
                                            <div class="icon-content text-white">
                                                <h5 class="m-t0  text-uppercase">Address info</h5>
                                                <p>First Floor, MES Centre, Mathew Paily Road, Near TownHall Ernakulam. Pin 682 018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
           
            <div class="section-full">
                <div class="gmap-outline">
                    <div id="gmap_canvas" class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin" width="600" height="450"></iframe>
                    </div>
                </div>
           </div>           
            <!-- SECTION CONTENT END -->
            
        </div>
        <!-- CONTENT END -->
<?php include_once('./assests/footer.php') ?>