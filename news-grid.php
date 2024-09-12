<?php include_once('./assests/header.php')  ?>
	<div class="page-wraper"> 	
        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide mobile-sider-drawer-menu">
            
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white p-t10">
                    <div class="container">
                        <div class="logo-header">
                        	<div class="logo-header-inner logo-header-one">
                            	<a href="index.html">
                                <img src="images/logo-dark.png" width="171" height="49" alt="" />
                            </a>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- ETRA Nav -->
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="javascript:;">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home-1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home-2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home-3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home-4</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home-5</a>
                                        </li>
                                    </ul>                                                    
                                </li>
                                <li>
                                    <a href="javascript:;">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="about-1.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact-1.html">Contact us</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news-grid.html">Grid</a></li>
                                        <li><a href="news-listing.html">Listing</a></li>
                                        <li><a href="news-masonry.html">Masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">Works</a>
                                    <ul class="sub-menu">
                                        <li><a href="work-grid.html">Grid</a></li>
                                        <li><a href="work-masonry.html">Masonry</a></li>
                                        <li><a href="work-carousel.html">Carousel</a></li>
                                        <li><a href="project-detail.html">Project Detail</a></li>                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">Post detail</a>
                                    <ul class="sub-menu">
                                        <li><a href="post-image.html">Image</a></li>
                                        <li><a href="post-gallery.html">Gallery</a></li>
                                        <li><a href="post-video.html">Video</a></li>
                                        <li><a href="post-right-sidebar.html">Right Sidebar</a></li>                                        
                                    </ul>                                    
                                </li>
                                <li class="submenu-direction">
                                    <a href="javascript:;">Shortcodes</a>
                                    <ul class="sub-menu">
                                        <li><a href="accordian.html">All Elements</a></li>
                                    </ul>                                    
                                </li>                                
                            </ul>
                        </div>


                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="extra-cell">
                                <div class="dropdown share-icon-btn">
                                     <a href="javascript:;" class="site-search-btn dropdown-toggle" title="Your Cart" data-bs-toggle="dropdown">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                    
                                     <div class="dropdown-menu bg-white">
                                        <div class="top-bar">
                                            <ul class="social-bx list-inline">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                 
                            </div>
                         </div>
                         
                         
                        <!-- SITE Search -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                                             
                        
                    </div>
                </div>
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(images/banner/5.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="text-white text-uppercase letter-spacing-5 font-18 font-weight-300">Exploring our clients goals, priorities, lifestyle, and tastes</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        <div class="p-tb20">
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>News grid</li>
                                </ul>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
			<!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
            	<div class="container">
                    <!-- PAGINATION START -->
                    <div class="filter-wrap p-b50">
                        <ul class="masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-1" href="#">House</a></li>
                            <li><a data-filter=".cat-2" href="#">Building</a></li>
                            <li><a data-filter=".cat-3" href="#">Office</a></li>
                            <li><a data-filter=".cat-4" href="#">Garden</a></li>
                            <li><a data-filter=".cat-5" href="#">Interior</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
            	</div>
                <!-- GALLERY CONTENT START -->
                 <div class="portfolio-wrap mfp-gallery news-grid clearfix">
                     <div class="container-fluid">
                 	      <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="masonry-item cat-1 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic1.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="masonry-item cat-2 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic2.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="masonry-item cat-3 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic3.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="masonry-item cat-4 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic4.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 5 -->
                                <div class="masonry-item cat-5 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic5.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 6 -->
                                <div class="masonry-item cat-4 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic6.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 7 -->
                                <div class="masonry-item cat-3 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic7.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 8 -->
                                <div class="masonry-item cat-2 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic1.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 9 -->
                                <div class="masonry-item cat-1 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic2.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 10 -->
                                <div class="masonry-item cat-1 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic3.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 11 -->
                                <div class="masonry-item cat-1 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic4.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 12 -->
                                <div class="masonry-item cat-1 col-xl-4 col-lg-6 col-md-6 m-b30">
                                    <div class="wt-img-effect ">
                                        <img src="images/gallery/pic5.jpg" alt="">
                                        <div class="overlay-bx-2 ">
                                            <div class="line-amiation  p-a40">
                                                <div class="wt-post-info text-white">
                                                    <div class="wt-post-title ">
                                                        <h2 class="post-title"><a href="post-right-sidebar.html" class="text-white font-18 letter-spacing-4 font-weight-600">Triangle Concrete House on lake</a></h2>
                                                    </div>
                                                    <div class="wt-post-meta ">
                                                      <ul>
                                                        <li class="post-date"><strong>20 Feb</strong> <span> 2023</span> </li>
                                                        <li class="post-author"><a href="post-right-sidebar.html">By <span>Admin</span></a> </li>
                                                      </ul>
                                                  </div>
                                                    
                                                    <div class="wt-post-text">
                                                        <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse</p> 
                                                    </div>
                                                    <a href="post-right-sidebar.html" class="v-button letter-spacing-4 font-12 text-uppercase p-l20">Read More</a>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>                                                                                                
                            </div>
            			</div>
                    </div>
                <!-- GALLERY CONTENT END -->
            
            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
         
        <!-- Footer -->
         <?php include_once('./assests/footer.php')  ?>