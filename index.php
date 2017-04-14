<?php get_header();?>

<div class="container">
	<div class="grid">
		<div class="grid-sizer col-xs-6 col-sm-4 col-md-3"></div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<!-- add inner element for column content -->
			<div class="box1 grid-item-content">
				<h1 class="wow fadeInLeft"><?php bloginfo();?></h1>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-8 col-md-6">
			<div class="box2 grid-item-content grid-item-content--height2">
				<h2 class="wow fadeInUp">Our aim was to craft a clean theme with a wide range of applications, from agency portfolios and artistic showcases to personal blogs and Pinterest-type online collections.</h2>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box3 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>

				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box4 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/slide3.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/slide3.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="wow zoomInUp box5 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 1);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box6 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 2);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box7 grid-item-content">
				<quote><i class="fa fa-quote-left" aria-hidden="true"></i>
					<p class="wow fadeInLeft" data-wow-offset="100">We are not afraid to tell you if the initial concept needs being changed or revised</p>
				</quote>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box8 grid-item-content">
				<p class="wow fadeInRight" data-wow-delay=".1s" data-wow-offset="100">We’ve assembled a team of spark-eyed individuals who excel at what they do and love to exceed your expectations.</p>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box9 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-video"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 3);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-6">
			<div class="box10 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 4);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'large', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box11 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 5);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box12 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/8.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/8.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box13 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 6);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box14 grid-item-content">
				<div class="sl">
					<div class="wow fadeIn"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/slide2.jpg" alt=""></div>
					<div class="wow fadeIn"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/slide1.jpg" alt=""></div>
					<div class="wow fadeIn"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/slide3.jpg" alt=""></div>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-6">
			<div class="box15 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/10.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/10.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box16 grid-item-content">
				<p class="wow fadeInLeft">We strive to deliver the <a href="">best quality</a> we can possibly achieve for every single project. Even if it takes another overnight to perfect.</p>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box17 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 7);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box18 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 8);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box19 grid-item-content">
				<p class="wow fadeInRight" data-wow-delay=".1s">We like to experiment with the rules and norms of web development – we believe that it is the only way to progress</p>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-6">
			<div class="box20 grid-item-content grid-item-content--height2">
				<div class="wow fadeIn" data-wow-offset="300">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/13.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/13.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box21 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 9);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, array( 350, 279), array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box22 grid-item-content">
				<div class="wow fadeIn" data-wow-delay=".1s" >
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/15.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/15.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box23 grid-item-content">
				<div class="wow fadeIn" data-wow-delay=".2s">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/16.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/16.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box24 grid-item-content">
				<quote><i class="fa fa-quote-left" aria-hidden="true"></i>
					<p class="wow fadeInUp">Choose a job you love, and you will never have to work a day in your life.
					</p><p class="wow fadeInUp" data-wow-delay=".5s">Confucius</p>
				</quote>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-6">
			<div class="box25 grid-item-content grid-item-content--height2">
				<div class="wow fadeIn" data-wow-offset="300">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/17.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/17.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box26 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/18.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/18.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box27 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/19.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/19.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box28 grid-item-content grid-item-content--height2">
				<p class="wow fadeInUp">Web development is our specialty. We offer a full range of services including concept creation, design, development, testing, and deployment. Working with us, you get a fully functional product – polished and adapted for real use.</p>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box29 grid-item-content">
				<div class="overlay-video"></div>
				<?php
				global $post;
				$args = array('numberposts' => 1, 'offset' => 10);
				$myposts = get_posts( $args );
				foreach( $myposts as $post ){ setup_postdata($post);
					?>
					<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
					<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box30 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-post"></div>
					<?php
					global $post;
					$args = array('numberposts' => 1, 'offset' => 11);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<a href="<?php echo get_permalink();?>"><?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?></a>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box31 grid-item-content">
				<div class="wow fadeIn">
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/21.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/21.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box32 grid-item-content">
				<div class="wow fadeIn" data-wow-offset="200" >
					<div class="overlay-photo"></div>
					<a data-fancybox="gallery" class="img-responsive" href="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/22.jpg"><img src="<?php echo home_url('/wp-content/themes/ikebana/', 'http');?>img/22.jpg"></a>
				</div>
			</div>
		</div>
		<div class="grid-item col-xs-12 col-sm-4 col-md-3">
			<div class="box33 grid-item-content">
				<p>Follow me on <a href="https://github.com/boma1able/ikebana/">github</a></p>
				<div>
					<i class="fa fa-smile-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>