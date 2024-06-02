<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'laundry_services_above_slider' ); ?>

  <?php if( get_theme_mod('laundry_services_slider_hide_show', false) != ''){ ?> 

    <section id="slider" class="m-0 p-0 mw-100">
      <div class="s_b_line"></div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
         <div class="d-img">
            <?php 
                $dot_image = get_theme_mod('dot_image');
                if(!empty($dot_image)){
                  echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($dot_image).'" class="img-responsive secondry-bg-img" />';
                }else{
                  echo '<img src="'.get_template_directory_uri().'/assets/images/dot-gGrid.png" class="img-responsive" />';
                }
            ?>  
        </div>
        <?php $laundry_services_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'laundry_services_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $laundry_services_content_pages[] = $mod;
            }
          }
          if( !empty($laundry_services_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $laundry_services_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>             
              <div class="sliderbg-img">
                  <?php the_post_thumbnail(); ?>
                  <div class="slide-oly"></div>
              </div>
              <?php
                  $laundry_services_slider_animation = get_theme_mod('laundry_services_slider_animation', '')
                  ?>
              <div class="slider-content <?php echo($laundry_services_slider_animation); ?>">
                  <div class="inner_carousel">
                    <h1><?php the_title(); ?></h1>
                    <p>
                      <?php $laundry_services_excerpt = get_the_excerpt(); echo esc_html( laundry_services_string_limit_words( $laundry_services_excerpt,20 ) ); ?>
                    </p>
                    <div class="read-btn">
                      <a href="<?php echo esc_url(get_permalink()); ?>"><span><?php esc_html_e( 'Explore Now', 'laundry-services' ); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Explore Now', 'laundry-services' );?></span></a>
                    </div>
                  </div>
                
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>

           
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="sldot">
            <div class="dot dot1"></div>
            <div class="dot dot2"></div>
            <div class="dot dot3"></div>
        </div>
       

       <!--  <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-caret-left"></i></span><span class="screen-reader-text"></?php esc_html_e( 'Previous', 'laundry-services' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-caret-right"></i></span><span class="screen-reader-text"></?php esc_html_e( 'Next', 'laundry-services' );?></span>
        </a> -->
        
      </div>   
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'laundry_services_below_slider' ); ?>

    <section id="feature" >
      <div class="container">
      
        <!-- </?php if(get_theme_mod('laundry_services_btn_featureheading') != ''){ ?> -->
          <div class="feature-head">
            <h4>
              <?php echo esc_html(get_theme_mod('laundry_services_btn_featuresubheading')); ?>
            </h4>
            <h3>
              <?php echo esc_html(get_theme_mod('laundry_services_btn_featureheading')); ?>
            </h3>
          </div>
        <!-- </?php }?> -->
        <div class="featurebx">
            <!-- <div id="feature-con" >  -->
              <?php $laundry_services_content_pages_feature = array();
                for ( $count = 1; $count <= 4; $count++ ) {

                  $mod = intval( get_theme_mod( 'laundry_services_feature_page' . $count ));
                  if ( 'page-none-selected' != $mod ) {
                    $laundry_services_content_pages_feature[] = $mod;
                  }
                }
                if( !empty($laundry_services_content_pages_feature) ) :
                  $args = array(
                    'post_type' => 'page',
                    'post__in' => $laundry_services_content_pages_feature,
                    'orderby' => 'post__in'
                  );
                  $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  $i = 1;

              ?>     

              <div class="row mr-0">
                <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="col-lg-4 col-md-6 col-sm-6 feabx">
                      <div class="feabxinn">  
                          <div class="single-fea">               
                              <div class="imagebx">
                                  <?php the_post_thumbnail(); ?>
                              </div>
                              <div class="content">
                                  <div class="row m-0">
                                      <div class="col-lg-9 col-md-9 col-sm-12 pl-0">
                                          <h3><?php printf(esc_html__('%s', 'laundry-services'), '0' . $i); ?></h3>
                                          <h1><?php the_title(); ?></h1>
                                      </div>
                                      <div class="col-lg-3 col-md-3 col-sm-12 pd-0">
                                        <div class="icnbx">
                                          <i class="<?php echo esc_attr(get_theme_mod('laundry_services_feature_icon' . $i, 'fa fa-home')); ?>"></i>
                                        </div>
                                      </div>
                                  </div>
                                  <p>
                                    <?php $laundry_services_excerpt = get_the_excerpt(); echo esc_html( laundry_services_string_limit_words( $laundry_services_excerpt,20 ) ); ?>
                                  </p>
                              </div>
                            </div>
                      </div>
                  </div>
                <?php $i++; endwhile; 
                wp_reset_postdata();?>
              </div>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php endif;
              endif;?>
            <!-- </div>    -->
        </div>
        <div class="clearfix"></div>
      </div>
    </section>

  <?php if( get_theme_mod('laundry_services_service_category') != ''){ ?>

    <section id="service-section" >
      <div class="container">
        <!-- </?php if(get_theme_mod('laundry_services_btn_serviceheading') != ''){ ?> -->
          <div class="service-head">
            <h4>
              <?php echo esc_html(get_theme_mod('laundry_services_btn_servicesubheading')); ?>
            </h4>
            <h3>
              <?php echo esc_html(get_theme_mod('laundry_services_btn_serviceheading')); ?>
            </h3>
          </div>
        <!-- </?php }?> -->

        <div class="row mr-0">
          <?php $laundry_services_catData =  get_theme_mod('laundry_services_service_category');
          if($laundry_services_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($laundry_services_catData,'laundry-services'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>  
              
              <div class="col-lg-4 col-md-6 col-sm-6  serbx ">
                  <div class="service-box ">
                      <div class="service-img">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="service-content">
                          <a href="<?php echo esc_url( get_permalink() );?>">
                              <div class="title"><?php the_title();?></div>
                          </a>
                          <p>
                            <?php $laundry_services_excerpt = get_the_excerpt(); echo esc_html( laundry_services_string_limit_words( $laundry_services_excerpt,20 ) ); ?> 
                          </p>
                          <div class="button">
                              <a href="<?php the_permalink(); ?>"><?php echo esc_html('Read More', 'laundry-services'); ?> <i class="fa fa-angle-double-right" ></i></a></div>
                      </div>
                  </div>
                 <div class="clearfix"></div>
              </div>
              <!-- </div> -->
            <?php endwhile; 
            wp_reset_postdata();
          } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <?php do_action( 'laundry_services_below_best_sellers' ); ?>

  <div class="container entry-content py-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>
<?php get_footer(); ?>