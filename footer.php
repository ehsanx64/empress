	</div>
</div>

<footer class="page-footer" id="the-footer">
	<!--
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Footer Content</h5>

				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
					content.</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
					<ul>
					<li>
						<a class="grey-text text-lighten-3" href="#!">Link 1</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="#!">Link 2</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="#!">Link 3</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="#!">Link 4</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	-->
	<div class="footer-copyright">
		<div class="container">
			<?php et('Ehsan Mohammadi &nbsp;&copy;&nbsp; 2023'); ?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
	<div class="back-to-top-wrapper animated ">
		<div class="btn-floating btn-large red">
			<i class="fa fa-angle-up"></i>
		</div>
	</div>

	<script type="text/javascript">
		<?php
		if (\empress\General::isPersian()) {
			printf("window.sideNavEdge = 'left';");
		} else {
			printf("window.sideNavEdge = 'right';");
		}
		?>
	</script>
</body>
</html>
