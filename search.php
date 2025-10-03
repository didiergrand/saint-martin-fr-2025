<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Commune_de_Saint-Martin_FR
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header">
				<h1 class="entry-title" style="background-image: url('https://www.saint-martin-fr.ch/wp-content/uploads/2023/05/cropped-20230505_154709-scaled-3.jpg')"><span>	
				<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Résultats de la recherche pour: %s', 'saint-martin-fr' ), '<span>' . get_search_query() . '</span>' );
				?></span></h1>	
			</header>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
