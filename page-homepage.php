<?php
/*
Template Name: Homepage
*/
get_header(); ?>

	<div class="row no-padding hide-for-medium-up">
		<div class="small-12 columns no-padding">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/hero_mom_mobile.jpg">
		</div>
	</div>

<div class="hero content_block">
	<div class="row">
		<div class="small-12 medium-8 large-6 columns" role="main">
			<h1 class="site_intro">Time-tested child development techniques</h1>
			<div class="row no-padding">
				<div class="columns small-12 medium-8 large-12">
					<p class="hero-tagline">Maren offers advice and resources backed by over 30 years of experience working with young children.</p>
				</div>
			</div>
			<div class="row no-padding">
				<div class="columns small-12 show-for-medium-up">
					<a class="button radius large blue">Check out Maren’s Workshops</a>
				</div>
				<div class="columns small-12 large-12 hide-for-medium-up">
					<a class="button radius blue">Check out Maren’s Workshops</a>
				</div>				
			</div>			

			<ul class="arrows">
				<a href="#"><li>More about Maren</li></a>
				<a href="#"><li>Explore free resources</li></a>
			</ul>
		</div>
	</div>
</div>

<div class="email_signup content_block">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="row">
				<div class="cta-email small-12 large-7 columns">
					<h2>Get free weekly expert advice in your inbox</h2>
				</div>
				<div class="small-12 large-5 columns">
					<?php gravity_form(5, false, false, false, '', true, 12); ?>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="video_list content_block">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<div class="row">
				<div class="hide-for-small-only gear columns">
					<img src="<?php echo get_stylesheet_directory_uri()?>/images/cog.png" widt="50" height="56">
				</div>				
				<div class="small-12 medium-6 columns">
					<h2>Inside Maren’s <em>Kids Talk</em> You’ll Find:</h2>

					<ul>
						<li>Weekly tips on how to strengthen your relationships with children
</li>
						<li>A fun and comfortable way to get involved in your child’s learning</li>
						<li>Time-tested techniques you can use right away</li>
						<li>Three newsletter formats; <a href="#">choose the one that’s right for you</a></li>
						<li><a href="#">Over 400 articles</a> to reference</li>
						<li><a href="#">On-demand online workshops</a> to help you when you need it</li>
						<li>Put-it-into-action advice you can trust</li>
					</ul>			
				</div>
				<div class="small-12 medium-5 columns">
					<div class="flex-video"><iframe src="//player.vimeo.com/video/105395776?title=0&amp;byline=0&amp;portrait=0" width="570" height="428" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="features content_block">
	<div class="seperator_dots">&bull; &bull; &bull; &bull; &bull;</div>
		<div class="row">
		<div class="small-12 large-12 columns">
			<h2 class="center">Let Me Help You</h2>
			<div class="row feature_boxes">
				<div class="small-6 large-3 columns">
					<a href="/newsletters/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/circle-icon-newsletter.png">
					<h4>Newsletters</h4></a>
					<p>Weekly articles with tips and techniques.</p>
				</div>
				<div class="small-6 large-3 columns">
					<a href="/newsletters/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/circle_resources.png">
					<h4>Books & Resources</h4></a>
					<p>Recommended books and free resources for inspiration.</p>
				</div>
				<div class="small-6 large-3 columns">
					<a href="/newsletters/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/circle_devices.png">
					<h4>Online Workshops</h4></a>
					<p>When you need additional, more interactive support.</p>
				</div>
				<div class="small-6 large-3 columns">
					<a href="/newsletters/"><img src="<?php echo get_stylesheet_directory_uri()?>/images/circle_qa.png">
					<h4>Live Monthly Q&A</h4></a>
					<p>Have questions? Ask away in my live session held monthly.</p>
				</div>								
			</div>
		</div>
	</div>	
</div>


<!----- ABOUT SECTION ---->	

<div class="home_about content_block">
	<div class="seperator_dots">&bull; &bull; &bull; &bull; &bull;</div>
	<div class="row">
		<h2 class="center">Who is Maren Schmidt?</h2>
		<div class="small-12 large-12 columns">
			<div class="row">
				<div class="small-3 large-3 show-for-large-up columns">
					<a href='/about/'><img src="<?php echo get_stylesheet_directory_uri()?>/images/maren_profile_circle3.jpg" style="margin-top: -2rem;" class="bio_large"></a>
				</div>
				<div class="small-12 large-9 columns bio" style="padding-left: 2rem;">
					<p>
					<span class="hide-for-large-up"><img src="<?php echo get_stylesheet_directory_uri()?>/images/maren_profile_circle3.jpg" class="bio_mobile hide-for-large-up"></span>

						Maren Schmidt is a certified Montessori teacher with the Association Montessori Internationale (AMI) and holds a Masters in Education from Loyola College in Maryland, as well as a BA from the University of Arkansas in Interpersonal and Organizational Communications. Maren founded a Montessori school and has over thirty years experience working with children.</p>
					<span class="show-for-large-up"><a class="button radius blue inside-column" href="/about/">READ MORE ABOUT MAREN</a></span>
				</div>
					<span class="hide-for-large-up"><a class="button radius blue outside-column" href="/about/">READ MORE ABOUT MAREN</a></span>

			</div>
		</div>
	</div>	
</div>


<!----- OTHER PUBLICATIONS SECTION	 ---->

<div class="publications_row content_block">
	<div class="seperator_dots">&bull; &bull; &bull; &bull; &bull;</div>
<div class="row" style="max-width: 100%;">
	<div class="small-12 large-12 columns">
			<h2 class="center">Other Places To Find Maren's Advice</h2>
			<div class="row" data-equalizer>
				<div class="small-4 medium-2 medium-offset-3 columns" data-equalizer-watch>
					<a href="/publications/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/magazine_mockup_kids.jpg"></a>
				</div>
				<div class="small-4 medium-2  columns" data-equalizer-watch>
					<a href="/publications/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/magazine_mockup_tc.jpg"></a>
				</div>
				<div class="small-4 medium-2  columns" data-equalizer-watch>
					<a href="/publications/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/magazine_mockup_tc2.jpg"></a>
				</div>				
				<div class="small-12 medium-2 columns" style="float:left;" data-equalizer-watch>
					<a href="/publications/" class="publication_link">Check out Maren’s Other Publications and books <i class="fi-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class="testimonials_row content_block">
	<div class="seperator_dots">&bull; &bull; &bull; &bull; &bull;</div>
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="row">
				<div class="small-12 medium-6 columns">
					<div class="row testimonial_block">
						<div class="small-3 columns">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/Jenn-Edden.jpg">						
						</div>
						<div class="small-9 columns">
							<p class="testimonial_quote">”Maren has helped me better understand my children on so many levels. Her newsletters are thought provoking and have helped me get out of my own way so I can raise kind, loving, high self esteem children.”</p>
							<p class="author_attribute">Jenn Edden, CHHC, Speaker & Biz Coach<br>City, State</p>
						</div>							
					</div>
				</div>
				<div class="small-12 medium-6 columns">
					<div class="row testimonial_block">
						<div class="small-3 columns">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/claire-DeBerg.jpg">						
						</div>
						<div class="small-9 columns">
							<p class="testimonial_quote">”With all of the noise in today's world of social media Maren's Kids Talk newsletter has a musical, inviting tone. It is the one piece of mail to come across my inbox that is worthy of my time and attention.”</p>
							<p class="author_attribute">Claire DeBerg,Writer/Author<br>City, State</p>
						</div>							
					</div>
				</div>				
			</div>
		</div>
	</div>	
</div>


<!--
<div class="row">
	<div class="small-12 large-12 columns">

	<?php /* Start loop */ ?>
	<?php // while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<div class="entry-content">
				<?php // the_content(); ?>




			</div>
			<footer>
				<?php // wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</article>
	<?php // endwhile; // End the loop ?>

	</div>
</div>
-->

<?php get_footer(); ?>
