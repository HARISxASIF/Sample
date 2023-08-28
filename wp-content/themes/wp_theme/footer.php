</div>
<footer>
<div class="container">
<div class="row">

	<div class="col-md-3">
		<div class="foo-logo">
			<?php dynamic_sidebar('f-logo'); ?>
		</div>
    </div><!--col-->
	
	<div class="col-md-3">
		<div class="foo-marketing">
			<?php dynamic_sidebar('f-marketing'); ?>
		</div>
    </div><!--col-->
	
	<div class="col-md-3">
		<div class="foo-consult">
			<?php dynamic_sidebar('f-consult'); ?>
		</div>
    </div><!--col-->
	
	<div class="col-md-3">
		<div class="foo-subscribe">
			<?php dynamic_sidebar('f-sub'); ?>
		</div>
    </div><!--col-->
    	
</div><!--row-->
</div><!--container-->
	<section class="foo-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright text-center">
						<?php dynamic_sidebar('f-copyright'); ?>
					</div>									
				</div>
			</div>
		</div>
	</section>
</footer>

<!-- JAVASCRIPT -->
<?php wp_footer(); ?>
</body>
</html>