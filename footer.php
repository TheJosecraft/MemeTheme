  <div class="container">
	<div class="row">
	<div class="col-lg-3 col-md-6">
		<h3>Categorías</h3>
		<?php echo get_the_category_list(); ?>
	</div>
	<div class="col-lg-3 col-md-6">
		<h3>Contacto:</h3>
		<p>¿Alguna duda? No dudes en contactarnos</p>
		<p><a href="">Contáctanos</a></p>
	</div>
  </div>
  <footer>
	   <small>EAG © <?php echo date("Y") ?></small>
	</footer>
	<?php wp_footer(); ?>
  </div>
  </body>
  </html>
