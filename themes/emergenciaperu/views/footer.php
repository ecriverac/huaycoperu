	</div>
	<!-- / wrapper -->

	<div class="row brindar-ayuda-section red center">
		<p class="heading">Unidos somos <strong>#unasolafuerza</strong></p>
		<p>Juntos podemos dar apoyo a los que más necesitan</p>
		<a href="<?php echo url::site(); ?>voluntarios" class="btn btn-large" target="_blank">Brindar ayuda</a>
	</div>

	<div class="footer row center">
		<p>Está página ha sido hecha colaborativamente en Hackspace Perú. <a href="https://www.facebook.com/HackSpacePeru" target="_blank">CONTACTO</a></p>
	</div>

	<?php
	echo $footer_block;
	// Action::main_footer - Add items before the </body> tag
	Event::run('ushahidi_action.main_footer');
	?>
	<script type="text/javascript">
		$(".button-collapse").click(function() {
		  $("#mobile-demo").slideToggle('100');

		});
	</script>
</body>
</html>
