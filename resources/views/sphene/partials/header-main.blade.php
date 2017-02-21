<!-- Header
================================================== -->
<div id="main-header" class="fullscreen-nav">
	<div class="container">

		<div class="row">
			<div class="header">

				<div class="col-md-2 col-sm-4">
					<div id="logo" class="margin-top-25">
						<a href="index.html"><img src="images/logo-image-55x55.png" class="img-thumbnail img-circle"></a>
					</div>
				</div>

				<div class="col-md-10 col-sm-8">

					<!-- Trigger Navigation -->
					<div class="fullscreen-nav-trigger">
						<span class="fullscreen-nav-trigger-box">
							<span class="fullscreen-nav-trigger-inner"></span>
						</span>
					</div>
					
					<!-- Menu -->
					<nav class="fullscreen-nav-container" data-nav-bg-color="#1b3990" data-nav-bg-opacity="0.96">
						<ul>
						@foreach($menu as $item)
							<li><a href="{{$item->link}}">{{$item->name}}</a></li>
						@endforeach
						</ul>
					</nav>

				</div>
				<div class="clearfix"></div>

			</div>
		</div>

	</div>
</div>


<!--  Background -->
<div class="fullscreen video background" data-color="#1b3990" data-color-opacity="0.92">

	<section poster="images/code.jpg" id="bgvid">
		
	</section>

    <div class="parallax-content-container">
        <div class="parallax-content">
        	<img class=" " src="images/logo-hero.png">
        	<h2>131 Studios</h2>
        	<h3>Web Developoment &amp; IT Consulting</h3>
           	<div class="scroll-to-content ln ln-icon-Down-3"></div>
        </div>
    </div>

</div>
<!--  Background / End  -->