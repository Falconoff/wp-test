<?php

/**
 * Displaying home page.
 *
 * This template display post by default.
 * @package Laundry Services
 */

get_header(); ?>

<?php do_action('laundry_services_index_header'); ?>

<div class="post-wrapper mt-5">
  <div class="container">
    <main id="main" role="main" class="content-with-sidebar">
      <?php
      $laundry_services_layout = get_theme_mod('laundry_services_theme_options', 'One Column');
      if ($laundry_services_layout == 'One Column') { ?>
        <div id="firstbox">
          <div class="row">
            <?php if (have_posts()) :
              /* Start the Loop */
              while (have_posts()) : the_post(); ?>
                <div class="col-lg-4 col-md-6">
                  <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                </div>
            <?php endwhile;
            else :
              get_template_part('no-results');
            endif;
            ?>
          </div>
          <div class="navigation">
            <?php
            // Previous/next page navigation.
            the_posts_pagination(array(
              'prev_text'          => esc_html__('Previous page', 'laundry-services'),
              'next_text'          => esc_html__('Next page', 'laundry-services'),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
            ));
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      <?php } else if ($laundry_services_layout == 'Three Columns') { ?>
        <div class="row">
          <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
          <div id="firstbox" class="col-lg-6 col-md-6">
            <?php if (have_posts()) :
              /* Start the Loop */
              while (have_posts()) : the_post();
                get_template_part('template-parts/post/content', get_post_format());
              endwhile;
            else :
              get_template_part('no-results');
            endif;
            ?>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        </div>
      <?php } else if ($laundry_services_layout == 'Four Columns') { ?>
        <div class="row">
          <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
          <div id="firstbox" class="col-lg-3 col-md-3">
            <?php if (have_posts()) :
              /* Start the Loop */
              while (have_posts()) : the_post();
                get_template_part('template-parts/post/content', get_post_format());
              endwhile;
            else :
              get_template_part('no-results');
            endif;
            ?>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
          <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
        </div>
      <?php } else if ($laundry_services_layout == 'Right Sidebar') { ?>
        <div class="row">
          <div id="firstbox" class="col-lg-8 col-md-8">
            <div class="row">
              <?php if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>
                  <div class="col-lg-6 col-md-6">
                    <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                  </div>
              <?php endwhile;
              else :
                get_template_part('no-results');
              endif;
              ?>
            </div>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
        </div>
      <?php } else if ($laundry_services_layout == 'Left Sidebar') { ?>
        <div class="row">
          <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
          <div id="firstbox" class="col-lg-8 col-md-8">
            <div class="row">
              <?php if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>
                  <div class="col-lg-6 col-md-6">
                    <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                  </div>
              <?php endwhile;
              else :
                get_template_part('no-results');
              endif;
              ?>
            </div>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      <?php } else if ($laundry_services_layout == 'Grid Layout') { ?>
        <div class="row">
          <div id="firstbox">
            <div class="row">
              <?php if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post();
                  get_template_part('template-parts/post/grid-layout');
                endwhile;
              else :
                get_template_part('no-results');
              endif;
              ?>
            </div>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="row">
          <div id="firstbox" class="col-lg-8 col-md-8">
            <div class="row">
              <?php if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>
                  <div class="col-lg-6 col-md-6">
                    <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                  </div>
              <?php endwhile;
              else :
                get_template_part('no-results');
              endif;
              ?>
            </div>
            <div class="navigation">
              <?php
              // Previous/next page navigation.
              the_posts_pagination(array(
                'prev_text'          => esc_html__('Previous page', 'laundry-services'),
                'next_text'          => esc_html__('Next page', 'laundry-services'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__('Page', 'laundry-services') . ' </span>',
              ));
              ?>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
        </div>
      <?php } ?>
    </main>
  </div>
</div>

<?php do_action('laundry_services_index_footer'); ?>

<?php get_footer(); ?>