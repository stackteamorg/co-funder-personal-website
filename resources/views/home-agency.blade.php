@extends('layout')


@section('content')
        <!-- == main content area starts == -->
        <div id="dtr-main-content"> 
        
            <!-- hero section starts
    ================================================== -->
    <section id="home" class="dtr-section dtr-hero-section-top-padding dtr-pb-100">
        <div class="container"> 
            
            <!--===== row 1 starts =====-->
            <div class="row"> 
                
                <!-- column 2 starts -->
                <div class="col-12 col-md-2 dtr-rounded-img"> <img src="http://homeily.ir/assets/images/me/slider/6.jpg" alt="image"> </div>
                <div class="col-12 col-md-2 dtr-rounded-img"> <img src="http://homeily.ir/assets/images/me/slider/1.jpg" alt="image"> </div>
                <div class="col-12 col-md-2 dtr-rounded-img"> <img src="http://homeily.ir/assets/images/me/slider/2.jpg" alt="image"> </div>
                <!-- column 2 ends -->                       
                <!-- column 1 starts -->
                <div class="col-12 col-md-6" dir="rtl"> 
                    <!-- intro text -->
                    <p class="text-size-xxl font-weight-300 color-dark">سلام</p>
                    <p class="text-size-xxl font-weight-300 color-dark"> من  <span class="font-weight-500">مهدی همیلی هستم</span></p>
                    <div class="spacer-20"></div>
                    <!-- animated text starts -->
                    <h3><span class="dtr-animated-headline push"> <span class="dtr-words-wrapper"> 
                        </span> </span></h3>
                    <!-- animated text ends --> 
                </div>
                <!-- column 1 ends --> 
                

                
                {{-- <!-- column 3 starts -->
                <div class="col-12 col-md-4 small-device-space"> 
                    
                    <!--=== img slider - 3col starts ===-->
                    <div class="dtr-slick-slider dtr-img-slider-1col dtr-rounded-img"> 
                        <!-- img 1 -->
                        <div> <img src="http://homeily.ir/assets/images/me/slider/1.jpg" alt="image"> </div>
                        <!-- img 2 -->
                        <div> <img src="http://homeily.ir/assets/images/me/slider/2.jpg" alt="image"> </div>
                        <!-- img 3 -->
                        <div> <img src="http://homeily.ir/assets/images/me/slider/3.jpg" alt="image"> </div>
                        <!-- img 4 -->
                        <div> <img src="http://homeily.ir/assets/images/me/slider/4.jpg"> </div>
                        <!-- img 5 -->
                        <div> <img src="http://homeily.ir/assets/images/me/slider/6.jpg"> </div>
                     </div>
                    <!--=== img slider - 3col ends ===--> 
                    
                </div>
                <!-- column 3 ends -->  --}}
                
            </div>
            <!--===== row 1 ends =====--> 
            <!--===== row 2 starts =====-->
            <div class="row dtr-mt-30"> 
                
                <!-- column 1 starts -->
                <div class="col-12 col-md-10"> 
                    
                    <!-- text -->
                    <p class="text-size-md"> سلام من <span class="font-weight-500 color-dark"> مهدی همیلی </span>, هستم <span class="font-weight-500 color-dark"> مهندس نرم افزار، مدرس برنامه نویسی </span> و <span class="font-weight-500 color-dark"> مشاور ارشد امور فنی </span>, به وبسایت شخصی بنده خوش‌آمدید از طریق لینک های زیر من را در ,<span class="font-weight-500 color-dark"> شبکه های اجتماعی </span> ,  دنبال کنید .</p>
                    
                    <!-- social starts -->
                    <ul class="dtr-social dtr-social-list dtr-styled-social text-left dtr-mt-30">
                        <li class="dtr-social-title font-weight-500 color-dark">{{ __('text.Follow Me on') }}</li>
                        <li><a href="#" class="dtr-social-button dtr-instagram" target="_blank" title="instagram"><span>{{ __('text.instagram') }}</span></a></li>
                        <li><a href="#" class="dtr-social-button dtr-facebook" target="_blank" title="facebook"><span>{{ __('text.facebook') }}</span></a></li>
                        <li><a href="#" class="dtr-social-button dtr-linkedin" target="_blank" title="linkedin"><span>{{ __('text.linkedin') }}</span></a></li>
                    </ul>
                    <!-- social ends --> 
                    
                </div>
                <!-- column 1 ends --> 
                
                <!-- column 2 starts -->
                <div class="col-12 col-md-2 dtr-rounded-img small-device-space"> <img src="http://homeily.ir/assets/images/instagram.png" alt="image"> </div>
                <!-- column 2 ends --> 
                
            </div>
            <!--===== row 2 ends =====--> 
            
        </div>
    </section>
            <!-- hero section ends
    ================================================== --> 
            
            <!-- about section starts
    ================================================== -->
            <section id="about" class="dtr-section dtr-py-100 bg-light-blue">
                <div class="container"> 
                    
                    <!--===== row 1 starts =====-->
                    <div class="row d-flex align-items-center"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6 small-device-space">
                            <div class="dtr-pr-30"> <img src="http://homeily.ir/assets/images/me/avatar.jpg" alt="image"> </div>
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6"> 
                            
                            <!-- heading starts -->
                            <div class="dtr-styled-heading">
                                <h2>{{ __('text.About me') }}</h2>
                            </div>
                            <!-- heading ends --> 
                            
                            <!-- text -->
                            <p class="dtr-mt-20 text-justify">
                                سلام من  <span class="font-weight-500 color-dark">مهدی همیلی</span> هستم <span class="font-weight-500 color-dark">مهندس نرم افزار</span> و متخصص در این حوزه، سال‌های فراوان تجربه در این حوزه به من انگیزه داده است که در زمینه     <span class="font-weight-500 color-dark">آموزش و تدریس برنامه نویسی</span>، فعالیت کنم و تجربیات خودم را با عشق 💜  به  دیگران منتقل کنم، همچنین با توجه به این که سال‌ها با شرکت‌های مختلف به عنوان <span class="font-weight-500 color-dark">مدیر‌فنی</span> همکاری داشتم تجربه‌های خودم رو در قالب <span class="font-weight-500 color-dark"> مشاور امور فنی</span> به شرکت ها ارائه میدم دامنه‌ این مشاوره از <span class="font-weight-500 color-dark">تامین نیروی انسانی و استخدام</span> تا <span class="font-weight-500 color-dark">رهبری و مدیریت فنی تیم</span> گسترده بوده است، <span class="font-weight-500 color-dark">مشاوره راه اندازی استارتاپ</span> در حوزه فنی و همچنین تولید <span class="font-weight-300 color-dark">وب سایت و سامانه های تحت وب و اپلیکیشن های موبایل، وب و دسکتاپ</span> به صورت <span class="font-weight-500 color-dark">برون سپاری</span> از جمله خدماتی هست که بنده و تیم پرافتخاری که در کنار ها به موفقیت رسیده ام، در این زمینه ها خودمان را متخصص می‌دانیم و  <span class="font-weight-500 color-dark">حرفی برای گفتن داریم</span>.
                            </p>
                            <ul class="dtr-list-inline dtr-list-left-spaced dtr-mt-20">
                                <li><i class="icon-envelope-fill dtr-mr-10 color-blue"></i><a href="mailto:contact@homeyli.ir" class="color-dark">Contact@homeyli.ir</a></li>
                                <li><i class="icon-telephone-fill dtr-mr-10 color-blue"></i><a href="tel:+989120186223" class="color-dark">+98 912 0186 223</a></li>
                            </ul>
                            <!-- link starts --> 
                            <a href="http://homeily.ir/dl/resume.pdf" class="dtr-btn btn-blue dtr-mt-30" download="">دانلود رزومه</a>
                            <a href="#ask-cooperation" class="dtr-btn btn-blue dtr-mt-30">درخواست همکاری</a>
                        </div><!-- column 2 ends -->                 
                    </div>
                    <!--===== row 1 ends =====--> 
                    
                </div>
            </section>
            <!-- about section ends
    ================================================== --> 
            
            <!-- services section starts
    ================================================== -->
    <section id="services" class="dtr-section dtr-py-100">
        <div class="container"> 
            
            <!-- heading starts -->
            <div class="dtr-styled-heading heading-center">
                <h2>زمینه های همکاری</h2>
                <p>باعث افتخار بنده است بتوانیم در زمینه همکاری مشترکی پیدا کنیم، موارد زیر رو مطالعه کنید و فقط با من تماس بگیرید تا بتونم راه‌نماییتون کنم</p>
            </div>
            <!-- heading ends -->
            
            <div class="row"> 
    
                            <!-- box consulting starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>1</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-consulting.png" alt="مشاوره امور فنی و تکنیکال">
                        <h4 class="dtr-service-heading">مشاوره امور فنی و تکنیکال</h4>
                                            <p class="service-subtitle">سال ها تجربه در این حوزه به من انگیزه داده تا از طریق عقد قرارداد های مشاوره به انتقال تجربیاتم در زمینه انتخاب تکنولوژی، عبور از بحران و یا ارائه بهترین راه کار ها و مسیر های پیشرفت بپردازم.</p>
                                        </div>
                </div>
                <!-- box consulting ends --> 
                            <!-- box cto starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>2</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-cto.png" alt="مدیریت فنی و رهبری تیم">
                        <h4 class="dtr-service-heading">مدیریت فنی و رهبری تیم</h4>
                                            <p class="service-subtitle">سال ها در استارتاپ های کوچک و بزرگی چون نت برگ چیلیوری و.. توسعه دهنده بودم، محیط استارتاپی را در کنار برنامه نویسی به خوبی درک کردم و خوشحال می‌شوم بتوانم در به صورت پاره وقت مدیریت و رهبری تیم های برنامه جوان ره به عهده بگیرم</p>
                                        </div>
                </div>
                <!-- box cto ends --> 
                            <!-- box recruitment starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>3</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-recruitment.png" alt="تامین نیروی فنی متخصص">
                        <h4 class="dtr-service-heading">تامین نیروی فنی متخصص</h4>
                                            <p class="service-subtitle">شرکت های زیادی قصد ورود به دنیای استارتاپ ها را دارند، اولین مشکل آنها نداشتن یک تیم قدرتمند در بخش تکنیکال است، من می‌توان بهترین تیم را متشکل از لیدر یا مدیرفنی و برنامه نویسان خبره را برای شما گزینش و استخدام کنم!</p>
                                        </div>
                </div>
                <!-- box recruitment ends --> 
                            <!-- box learning starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>4</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-learning.png" alt="آموزش و تدریس برنامه نویسی">
                        <h4 class="dtr-service-heading">آموزش و تدریس برنامه نویسی</h4>
                                            <p class="service-subtitle">شاید جذاب ترین بخش فعالیت های من همین آموزش و تدریس باشد، از این که تجربیات و علم خودم را به دیگران منتقل کنم به شدت لذت می‌برم و هیچ چیز در دنیا برای من بیش تر از تدریس برنامه نویسی لذت بخش نیست، در بخش درخواست همکاری پیام دهید تا در کلاس های آموزشی شما را ببینم</p>
                                        </div>
                </div>
                <!-- box learning ends --> 
                            <!-- box development starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>5</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-development.png" alt="برون سپاری، برنامه نویسی">
                        <h4 class="dtr-service-heading">برون سپاری، برنامه نویسی</h4>
                                            <p class="service-subtitle">
    یکی از خدماتی که تیم توسعه و برنامه نویسی بنده میتواند به شما ارائه دهد تولید اپلیکیشن های تحت وب و موبایل و هرگونه تولیدات نرم افزاری مانند نرم افزار های دسکتاپ(ویندوز، مک و لینوکس)</p>
                                        </div>
                </div>
                <!-- box development ends --> 
                            <!-- box writing starts -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="dtr-service-box bg-white">
                        <p class="dtr-service-number color-blue"><small>6</small></p>
                        <img src="http://homeily.ir/assets/images/services/icon-writing.png" alt="نگارش مقالات تخصصی در رسانه ها">
                        <h4 class="dtr-service-heading">نگارش مقالات تخصصی در رسانه ها</h4>
                                            <p class="service-subtitle">بنده با خبرگزاری ها و رسانه های برجسته کشور پیرامون نشر مقالات تخصصی و نقد های مربوط به حوزه ICT فعالیت گسترده دارم، در صورت تمایل به همکاری با رسانه شما در بخش درخواست همکاری پیام ارسال کنید</p>
                                        </div>
                </div>
                <!-- box writing ends --> 
                        </div>
        </div>
    </section>
            
            <!-- services section ends
    ================================================== --> 
            
            <!-- testimonial section starts
    ================================================== -->
            {{-- <section class="dtr-section overflow-hidden dtr-py-100 bg-light-blue">
                <div class="container"> 
                    
                    <!-- heading starts -->
                    <div class="dtr-styled-heading heading-center">
                        <h2>What people say</h2>
                        <p>Subheading or information goes here</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!--===== row 1 starts =====-->
                    <div class="row">
                        <div class="col-12"> 
                            
                            <!--===== testimonial slider starts =====-->
                            <div class="dtr-slick-slider dtr-slider-side-arrows dtr-testimonial-style-left"> 
                                
                                <!--== slide 1 starts ==-->
                                <div class="dtr-testimonial clearfix">
                                    <div class="dtr-testimonial-image color-blue"> <img src="assets/images/testimonial-user1.jpg" alt="image"> </div>
                                    <div class="dtr-testimonial-content-wrapper">
                                        <div class="dtr-testimonial-content">“Extremely professional, unique and enjoyable. The effort taken to ensure sed quia non numquam eius modi tempora incidunt ut labore voluptat relevance to our requirements ensured the optimum outcome.” </div>
                                        <div class="dtr-client-info">
                                            <h5 class="dtr-client-name">Hans Witherspoon</h5>
                                            <span class="dtr-client-job">ACME Inc.</span></div>
                                        <div class="dtr-testimonial-stars dtr-stars-5 color-blue"></div>
                                    </div>
                                </div>
                                <!--== slide 1 ends ==--> 
                                
                                <!--== slide 2 starts ==-->
                                <div class="dtr-testimonial clearfix">
                                    <div class="dtr-testimonial-image color-blue"> <img src="assets/images/testimonial-user2.jpg" alt="image"> </div>
                                    <div class="dtr-testimonial-content-wrapper">
                                        <div class="dtr-testimonial-content">“An absolutely phenomenal work and highly recommended services sed quia non numquam eius modi tempora incidunt ut labore voluptat if you want to make some lasting impression!” </div>
                                        <div class="dtr-client-info">
                                            <h5 class="dtr-client-name">Martha Weiner</h5>
                                            <span class="dtr-client-job">Moonblush Studio</span></div>
                                        <div class="dtr-testimonial-stars dtr-stars-5 color-blue"></div>
                                    </div>
                                </div>
                                <!--== slide 2 ends ==--> 
                                
                                <!--== slide 3 starts ==-->
                                <div class="dtr-testimonial clearfix">
                                    <div class="dtr-testimonial-image color-blue"> <img src="assets/images/testimonial-user3.jpg" alt="image"> </div>
                                    <div class="dtr-testimonial-content-wrapper">
                                        <div class="dtr-testimonial-content">“Helped us enormously in enabling to analyze and take a step forward and sed quia non numquam eius modi tempora incidunt ut labore voluptat explore different avenues.” </div>
                                        <div class="dtr-client-info">
                                            <h5 class="dtr-client-name">Jouri Wende</h5>
                                            <span class="dtr-client-job">Miami, Florida</span></div>
                                        <div class="dtr-testimonial-stars dtr-stars-5 color-blue"></div>
                                    </div>
                                </div>
                                <!--== slide 3 ends ==--> 
                                
                            </div>
                            <!--===== testimonial slider ends =====--> 
                            
                        </div>
                    </div>
                    <!--===== row 1 ends =====--> 
                    
                </div>
            </section> --}}
            <!-- testimonial section ends
    ================================================== --> 
            
            <!-- portfolio section starts
    ================================================== -->
            {{-- <section id="portfolio" class="dtr-section dtr-py-100">
                <div class="container"> 
                    
                    <!-- heading starts -->
                    <div class="dtr-styled-heading heading-center">
                        <h2>Some Inspiration</h2>
                        <p>Subheading or information goes here</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!-- portfolio filter starts -->
                    <ul class="dtr-filter-nav clearfix">
                        <li><a class="dtr-filter-all active" data-filter="*" href="#">All Work</a></li>
                        <li><a data-filter=".filter-product" href="#">Product</a></li>
                        <li><a data-filter=".filter-creative" href="#">Creative</a></li>
                        <li><a data-filter=".filter-design" href="#">Design</a></li>
                        <li><a data-filter=".filter-photography" href="#">Photography</a></li>
                    </ul>
                    <!-- portfolio filter ends --> 
                    
                    <!-- portfolio grid starts -->
                    <div class="dtr-portfolio-grid dtr-portfolio-grid-3col dtr-portfolio-style-2 dtr-rounded-img clearfix"> 
                        
                        <!-- portfolio item 1 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-creative all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img7.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img7.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 1 ends --> 
                        
                        <!-- portfolio item 2 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-product all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img13.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img13.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 2 ends--> 
                        
                        <!-- portfolio item 3 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-design filter-photography all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img9.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img9.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 3 ends --> 
                        
                        <!-- portfolio item 4 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-product filter-photography all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img6.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img6.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 4 ends --> 
                        
                        <!-- portfolio item 5 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-design all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img10.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img10.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 5 ends --> 
                        
                        <!-- portfolio item 6 starts -->
                        <div class="dtr-portfolio-item isotope-item filter-creative all">
                            <div class="dtr-portfolio-content dual-icons"> <img src="assets/images/photography_img8.jpg" alt="image">
                                <div class="dtr-portfolio-overlay"> <a class="media-link" href="#"></a> <a class="media-zoom popup-gallery" href="assets/images/photography_img8.jpg"></a> </div>
                            </div>
                        </div>
                        <!-- portfolio item 6 ends --> 
                        
                    </div>
                    <!-- portfolio grid ends --> 
                    
                </div>
            </section> --}}
            <!-- portfolio section ends
    ================================================== --> 
            
            <!-- team section starts
    ================================================== -->
            {{-- <section class="dtr-section dtr-py-100 bg-light-blue">
                <div class="container"> 
                    
                    <!-- heading starts -->
                    <div class="dtr-styled-heading heading-left">
                        <h2>Our Team</h2>
                        <p>Subheading or information goes here</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!-- row starts -->
                    <div class="row"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-sm-6 col-lg-3"> 
                            
                            <!-- member 1 starts -->
                            <div class="dtr-team dtr-rounded-img">
                                <div class="dtr-team-img"> <img src="assets/images/team-member1.jpg" alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="#" class="dtr-google" target="_blank" title="google"></a></li>
                                            <li><a href="#" class="dtr-instagram" target="_blank" title="instagram"></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-0">David Cottrell</h4>
                                    <p>CEO</p>
                                </div>
                            </div>
                            <!-- member 1 ends --> 
                            
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-sm-6 col-lg-3"> 
                            
                            <!-- member 1 starts -->
                            <div class="dtr-team dtr-rounded-img">
                                <div class="dtr-team-img"> <img src="assets/images/team-member2.jpg" alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="#" class="dtr-google" target="_blank" title="google"></a></li>
                                            <li><a href="#" class="dtr-instagram" target="_blank" title="instagram"></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-0">Roslyn Tryniski</h4>
                                    <p>Business Manager</p>
                                </div>
                            </div>
                            <!-- member 1 ends --> 
                            
                        </div>
                        <!-- column 2 ends --> 
                        
                        <!-- column 3 starts -->
                        <div class="col-12 col-sm-6 col-lg-3"> 
                            
                            <!-- member 1 starts -->
                            <div class="dtr-team dtr-rounded-img">
                                <div class="dtr-team-img"> <img src="assets/images/team-member3.jpg" alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="#" class="dtr-google" target="_blank" title="google"></a></li>
                                            <li><a href="#" class="dtr-instagram" target="_blank" title="instagram"></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-0">Tyrese Harper</h4>
                                    <p>Project Lead</p>
                                </div>
                            </div>
                            <!-- member 1 ends --> 
                            
                        </div>
                        <!-- column 3 ends --> 
                        
                        <!-- column 4 starts -->
                        <div class="col-12 col-sm-6 col-lg-3"> 
                            
                            <!-- member 1 starts -->
                            <div class="dtr-team dtr-rounded-img">
                                <div class="dtr-team-img"> <img src="assets/images/team-member4.jpg" alt="image"> </div>
                                <div class="dtr-team-content">
                                    <div class="dtr-social-circle dtr-team-social">
                                        <ul class="dtr-social dtr-social-list">
                                            <li><a href="#" class="dtr-twitter" target="_blank" title="twitter"></a></li>
                                            <li><a href="#" class="dtr-facebook" target="_blank" title="facebook"></a></li>
                                            <li><a href="#" class="dtr-google" target="_blank" title="google"></a></li>
                                            <li><a href="#" class="dtr-instagram" target="_blank" title="instagram"></a></li>
                                        </ul>
                                    </div>
                                    <h4 class="dtr-mb-0">Klara Reeves</h4>
                                    <p>Creative Head</p>
                                </div>
                            </div>
                            <!-- member 1 ends --> 
                            
                        </div>
                        <!-- column 4 ends --> 
                        
                    </div>
                    <!-- row ends --> 
                    
                </div>
            </section> --}}
            <!-- team section ends
    ================================================== --> 
            
            <!-- cta section starts
    ================================================== -->
            {{-- <section class="dtr-section parallax dtr-py-100" style="background-image: url(assets/images/background-cta.jpg);">
                <div class="container"> 
                    
                    <!--== row starts ==-->
                    <div class="row text-center">
                        <div class="col-12">
                            <h3 class="font-family-alt font-weight-700 color-dark">Want to work together!</h3>
                            <p class="color-dark text-size-md">We're available for freelance work.</p>
                            <!-- link starts --> 
                            <a href="#" class="dtr-btn btn-white dtr-mt-30">Hire Us <i class="icon-chevron-compact-right"></i></a> 
                            <!-- link ends --> 
                        </div>
                    </div>
                    <!--== row ends ==--> 
                    
                </div>
            </section> --}}
            <!-- cta section ends
    ================================================== --> 
            
            <!-- blog section starts
    ================================================== -->
            {{-- <section id="blog" class="dtr-section dtr-py-100">
                <div class="container"> 
                    
                    <!-- heading starts -->
                    <div class="dtr-styled-heading heading-center">
                        <h2>From The Blog</h2>
                        <p> Subheading or information goes here</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!--== row starts ==-->
                    <div class="row dtr-mt-50"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-4"> 
                            
                            <!-- blog item 1 starts -->
                            <div class="dtr-blog-item"> 
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="assets/images/blogpost-img1.jpg" alt="image"><span class="dtr-category bg-blue color-white">Marketing</span> </div>
                                <div class="dtr-post-content">
                                    <ul class="dtr-blog-meta color-grey">
                                        <li>March 24, 2020</li>
                                        <li>by Alycia</li>
                                    </ul>
                                    <h5>Essential social media tips for small business</h5>
                                    <a href="#" class="dtr-read-more">Continue Reading</a> </div>
                            </div>
                            <!-- blog item 1 ends --> 
                            
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-4"> 
                            
                            <!-- blog item 2 starts -->
                            <div class="dtr-blog-item"> 
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="assets/images/blogpost-img2.jpg" alt="image"> <span class="dtr-category bg-blue color-white">Branding</span></div>
                                <div class="dtr-post-content">
                                    <ul class="dtr-blog-meta color-grey">
                                        <li>August 16, 2020</li>
                                        <li>by Alycia</li>
                                    </ul>
                                    <h5>Tips to boost product based sale online</h5>
                                    <a href="#" class="dtr-read-more">Continue Reading</a> </div>
                            </div>
                            <!-- blog item 2 ends --> 
                            
                        </div>
                        <!-- column 2 ends --> 
                        
                        <!-- column 3 starts -->
                        <div class="col-12 col-md-4"> 
                            
                            <!-- blog item 3 starts -->
                            <div class="dtr-blog-item"> 
                                <!-- image -->
                                <div class="dtr-post-img"> <img src="assets/images/blogpost-img3.jpg" alt="image"> <span class="dtr-category bg-blue color-white">Creative</span></div>
                                <div class="dtr-post-content">
                                    <ul class="dtr-blog-meta color-grey">
                                        <li>September 30, 2020</li>
                                        <li>by Alycia</li>
                                    </ul>
                                    <h5>The art of effective storytelling</h5>
                                    <a href="#" class="dtr-read-more">Continue Reading</a> </div>
                            </div>
                            <!-- blog item 3 ends --> 
                            
                        </div>
                        <!-- column 3 ends --> 
                        
                    </div>
                    <!--== row starts ==--> 
                    
                </div>
            </section> --}}
            <!-- blog section ends
    ================================================== --> 
            
            <!-- contact section starts
    ================================================== -->
            <section id="contact" class="dtr-section  dtr-py-100   bg-light-blue">
                <div class="container"> 
                    <!-- heading starts -->
                    <div class="dtr-styled-heading">
                        <h2>درخواست همکاری</h2>
                        <p>از طریق فورم زیر زمینه ای که درخواست همکاری با بنده و تیم بنده را دارید را انتخاب کنید، مختصری در مورد درخواست خود بنویسید و در نهایت حتما ایمیل یا شماره همراه خود را وارد کنید تا با شما تماس بگیرم</p>
                    </div>
                    <!-- heading ends --> 
                    
                    <!--== row starts ==-->
                    <div class="row"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6"> 
                            
                            <!-- form starts -->
                            <div class="dtr-form">
                                <form method="post" action="http://homeily.ir/send/ask#ask-cooperation">
                                    <input type="hidden" name="_token" value="V8bVN2C6PmijAw5We5CIM6rEkKhRrachbVtUyNX1">                                <fieldset>
                                        <div class="dtr-form-row dtr-form-row-2col">
                                            <p class="dtr-form-column">
                                                <input name="emailorphone" value="" class="required email" type="text" placeholder="لطفا شماره تماس و یا ایمیل خود را وارد کنید">
                                            </p>
                                            <p class="dtr-form-column">
                                                <input name="fullname" value="" type="text" placeholder="نام خود را وارد کنید">
                                            </p>
                                        </div>

                                            <p>
                                                <select name="service" type="select">
                                                    <option selected="" disabled="">لطفا یک مورد از زمینه های همکاری موجود را انتخاب کنید</option>
                                                    
                                                    
                                                    <option value="1">مشاوره امور فنی و تکنیکال</option>
                                                    
                                                    
                                                    <option value="2">مدیریت فنی و رهبری تیم</option>
                                                    
                                                    
                                                    <option value="3">تامین نیروی فنی متخصص</option>
                                                    
                                                    
                                                    <option value="4">آموزش و تدریس برنامه نویسی</option>
                                                    
                                                    
                                                    <option value="5">برون سپاری، برنامه نویسی</option>
                                                    
                                                    
                                                    <option value="6">نگارش مقالات تخصصی در رسانه ها</option>
                                                                                                    <option value="0">موارد دیگر</option>
                                                </select>
                                            </p>
                                            <p>
                                                <input name="subject" value="" type="text" placeholder="عنوان درخواست">  
                                            </p>


                                        <p class="antispam">Leave this empty: <br>
                                            <input name="url">
                                        </p>
                                        <p>
                                            <textarea rows="6" name="message" id="message" class="required" placeholder="مختصری در مورد درخواست بنویسید"></textarea>
                                        </p>
                                        <p class="text-center">
                                            <button class="dtr-btn btn-blue dtr-mt-minus30" type="submit">ارسال درخواست همکاری<i class="icon-cursor dtr-ml-15"></i></button>
                                        </p>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- form ends --> 
                            
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6">
                            <div class="dtr-pl-30">
                                
                                <p class="d-flex align-items-center">
            <i class="icon-phone-fill dtr-ml-10 text-size-md color-blue"></i>
            <span class="font-weight-500 color-dark">جهت برقراری تماس مستقیم و گفتگو پیرامون زمینه های همکاری می‌توانید مستقیما با شماره زیر تماس بگیرد یا در واتساب به همین شماره پیام دهید</span>
        </p>
        <p class="text-align-left"><i class="icon-telephone-fill dtr-mr-10 color-blue"></i><a href="tel:+989120186223" class="color-dark">+98 912 0186 223</a></p>
        <div class="spacer-20"></div>
                                <p class="d-flex align-items-center">
            <i class="icon-envelope-fill dtr-ml-10 text-size-md color-blue"></i>
            <span class="font-weight-500 color-dark">جهت برقراری تماس مستقیم و گفتگو پیرامون زمینه های همکاری می‌توانید مستقیما به آدرس زیر ایمیل ارسال کنید</span>
        </p>
        <p class="text-align-left"><i class="icon-envelope-fill dtr-mr-10 color-blue"></i><a href="mailto:contact@homeyli.ir" class="color-dark">Contact@homeyli.ir</a></p>
        <div class="spacer-20"></div>
                                                                                                                            
                                
                                <!-- social starts -->
                                                    
                                <!-- social ends --> 
                                
                            </div>
                        </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                    <!--== row ends ==--> 
                    
                </div>
            </section>    
            <!-- contact section ends
    ================================================== --> 
@endsection