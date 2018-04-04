<!-- Header
================================================== -->
<div id="main-header">
    <div class="container">
        <div class="row">
            <div class="header">

                <div class="col-md-2 col-sm-12">
                    <div id="logo" class="margin-top-25 margin-bottom-10">
                        <a href="/"><img src="/images/logo-image-30x30.png" class="img-thumbnail img-circle"></a>
                    </div>
                </div>

                <!-- Search Form -->
                <div class="search-container">
                    <form action="#" method="get">
                        <input type="text" name="s" id="s"
                               onblur="if(this.value==''){this.value='to search type and hit enter';
}"
                               onfocus="if(this.value=='to search type and hit enter'){this.value='';
}"
                               value="to search type and hit enter"/>
                    </form>
                    <div class="close-search"><a class="sl sl-icon-close" href="#"></a></div>
                </div>

                <div class="col-md-10 col-sm-12">

                    <!-- Mobile Navigation -->
                    <div class="menu-responsive">
                        <i class="fa fa-reorder menu-trigger"></i>
                        <i class="fa fa-search search-trigger"></i>
                        <form action="#" method="get" class="responsive-search">
                            <input type="text" onblur="if(this.value==''){this.value='to search type and hit enter';
}"
                                   onfocus="if(this.value=='to search type and hit enter'){this.value='';
}"
                                   value="to search type and hit enter"/>
                        </form>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul class="menu alt2" id="responsive">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('services')}}">Services</a></li>
                            <li><a href="{{route('projects')}}">Our Work</a></li>
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li><a href="{{route('account')}}t"><i class="fa fa-user fa-lg"></i></a></li>
                        </ul>
                    </nav>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
</div>
<div class="fullscreen video background" data-color="#1b3990" data-color-opacity="0.92">
    <section poster="images/code.jpg" id="bgvid"></section>
    <div class="parallax-content-container">
        <div class="parallax-content">
            <img class="" src="images/logo-hero.png">
            <h2>131 Studios</h2>
            <h3>Web Developoment &amp; IT Consulting</h3>
            <div class="scroll-to-content ln ln-icon-Down-3"></div>
        </div>
    </div>
</div>
<!--  Background / End  -->