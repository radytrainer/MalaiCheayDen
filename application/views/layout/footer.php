<!-- /#page-content-wrapper -->

	
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/prettify.js"></script>

<!-- Menu Toggle Script -->
<script>

					//jQuery for page scrolling feature - requires jQuery Easing plugin
					$(function() {
						$('.sidebar-nav a').bind('click', function(event) {
							var $anchor = $(this);
							$('html, body').stop().animate({
								scrollTop: $($anchor.attr('href')).offset().top - 100
							}, 1500, 'easeInOutExpo');
							event.preventDefault();
						});
					});
				</script>

</body>
</html>
