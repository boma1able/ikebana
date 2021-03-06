<?php get_header();?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="archive-page">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>
				<div class="grid">
					<div class="grid-sizer col-xs-6 col-sm-4 col-md-3"></div>

					<?php if ( have_posts() ) : $count = 0; while ( have_posts() )  : the_post(); $count++; ?>

						<div class="grid-item col-xs-12 col-sm-4 col-md-3">
							<div class="archive-box grid-item-content">
								<div class="archive-post<?php if ($count % 2 == 0 ) echo ' two'; ?>">

									<?php get_template_part( 'template-parts/content', get_post_format() );?>



<!--									<a class="arc-read-more-btn" href="--><?php //get_permalink();?><!--">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>-->
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php endif; ?>




				</div>
			</div>
		</div>
	</div>
</div>



<?php get_footer();?>
