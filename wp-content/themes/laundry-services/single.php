<?php
/**
 * Displaying all single posts.
 * @package Laundry Services
 */

get_header(); ?>

<main id="main" role="main">
	<?php do_action( 'laundry_services_single_header' ); ?>
		<div class="container">
		    <div class="wrapper">
			    <?php
			        $laundry_services_layout = get_theme_mod( 'laundry_services_theme_options','One Column');
			        if($laundry_services_layout == 'One Column'){?>
			        	<div class="singlebox" id="main-content">
							<?php if ( have_posts() ) :
				              	/* Start the Loop */
				                while ( have_posts() ) : the_post();
				                  get_template_part( 'template-parts/post/single-content' ); 
				                endwhile;
				                else :
				                  get_template_part( 'no-results' ); 
				                endif; 
		            		?>
				       	</div>
				    <?php }else if($laundry_services_layout == 'Three Columns'){?>
				   		<div class="row">
					    	<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
					       	<div class="col-lg-6 col-md-6 singlebox" id="main-content">
								<?php if ( have_posts() ) :
					              	/* Start the Loop */
					                while ( have_posts() ) : the_post();
					                  get_template_part( 'template-parts/post/single-content' ); 
					                endwhile;
					                else :
					                  get_template_part( 'no-results' ); 
					                endif; 
		            			?>
					       	</div>
							<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
						</div>
					<?php }else if($laundry_services_layout == 'Four Columns'){?>
						<div class="row">
					    	<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2'); ?></div>
					       	<div class="col-lg-3 col-md-3 singlebox" id="main-content">
								<?php if ( have_posts() ) :
					              	/* Start the Loop */
					                while ( have_posts() ) : the_post();
					                  get_template_part( 'template-parts/post/single-content' );
					                endwhile;
					                else :
					                  get_template_part( 'no-results' ); 
					                endif; 
			            		?>
					       	</div>
							<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2'); ?></div>
							<div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3'); ?></div>
						</div>
		       		<?php }else if($laundry_services_layout == 'Right Sidebar'){?>
		       			<div class="row">
					       	<div class="col-lg-8 col-md-8 singlebox" id="main-content">
								<?php if ( have_posts() ) :
					              	/* Start the Loop */
					                while ( have_posts() ) : the_post();
					                  get_template_part( 'template-parts/post/single-content' ); 
					                endwhile;
					                else :
					                  get_template_part( 'no-results' ); 
					                endif; 
			            		?>
					       	</div>
							<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
						</div>
					<?php }else if($laundry_services_layout == 'Left Sidebar'){?>
						<div class="row">
				       		<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
							<div class="col-lg-8 col-md-8 singlebox" id="main-content">
								<?php if ( have_posts() ) :
					              	/* Start the Loop */
					                while ( have_posts() ) : the_post();
					                  get_template_part( 'template-parts/post/single-content' ); 
					                endwhile;
					                else :
					                  get_template_part( 'no-results' ); 
					                endif; 
			            		?>
					       	</div>
					    </div>
					<?php }else if($laundry_services_layout == 'Grid Layout'){?>
						<div class="row">
					       	<div class="col-lg-8 col-md-8 singlebox" id="main-content">
								<?php if ( have_posts() ) :
					              	/* Start the Loop */
					                while ( have_posts() ) : the_post();
					                  get_template_part( 'template-parts/post/single-content' );
					                endwhile;
					                else :
					                  get_template_part( 'no-results' ); 
					                endif; 
			            		?>
					       	</div>
							<div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1'); ?></div>
						</div>
					<?php } ?>
		        <div class="clearfix"></div>
		    </div>
		</div>
	<?php do_action( 'laundry_services_single_footer' ); ?>
</main>

<?php get_footer(); ?>