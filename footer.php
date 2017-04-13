<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top-foo">
					<div class="col-xs-12 col-md-3">
						<div class="about-foo">
							<div id="footer-sidebar" class="secondary">
								<div id="footer-sidebar1">
									<?php
									if(is_active_sidebar('footer-sidebar-1')){
										dynamic_sidebar('footer-sidebar-1');
									}
									?>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="menu-foo">
							<div id="footer-sidebar" class="secondary">
								<div id="footer-sidebar1">
									<?php
									if(is_active_sidebar('footer-sidebar-2')){
										dynamic_sidebar('footer-sidebar-2');
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-3">
						<div class="widget-foo">
							<div id="footer-sidebar" class="secondary">
								<div id="footer-sidebar1">
									<?php
									if(is_active_sidebar('footer-sidebar-3')){
										dynamic_sidebar('footer-sidebar-3');
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="social-foo">
							<h3>Get Social</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="bottom-foo">
					<p>Copyright &copy; 2017 all rights are f_cked</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="class">
	<div id="back-top">
		<a href="#top"><span></span><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	</div>
</div>

<?php wp_footer();?>

<script>
	new WOW().init();
</script>
<script>
	$('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: '.grid-sizer',
		percentPosition: true,
		stamp: ''

	});
</script>

</body>

</html>