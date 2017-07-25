<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>


<footer class="footer">
      <div class="container">
      	<div class="row  h-100">
      		<div class="col-2 align-self-center">
      			<span class="texto">Escuchame en:</span>
      		</div>
      		<div class="col-1 align-self-center">
      			<span class="xl-icon ti-soundcloud"></span>
      		</div>
      		<div class="col-1 align-self-center">
      			<span class="xl-icon ti-youtube"></span>
      		</div>
      		<div class="col-2 align-self-center">
      			<span class="texto">Nos apoya:</span>
      		</div>
      		<div class="col-1 align-self-center">
      			<img src="">
      		</div>
      	</div>
      </div>

 </footer>
  <div class="sub">
      	<?php get_sidebar( 'footerfull' ); ?>	
  </div>


<!-- 




 -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

