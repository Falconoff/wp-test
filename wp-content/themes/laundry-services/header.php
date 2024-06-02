<?php

/**
 * Display Header.
 * @package Laundry Services
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	} ?>

	<?php
	get_template_part('my-content')
	?>

	<header role="banner" class="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e('Skip to content', 'laundry-services'); ?></a>
		<div id="header">
			<div class="container-fluid">
				<div class="header-box">
					<div class="row marrgin-0">
						<div class="col-lg-3 col-md-3 col-sm-12 logobx-out">
							<div class="logobx">
								<!-- <div class="logobxinn"></div> -->
								<?php get_template_part('template-parts/header/site', 'branding'); ?>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="row mr-0">
								<div class="col-lg-9 col-md-9 col-sm-12">
									<div class="menu-section text-lg-center">
										<div class="<?php if (get_theme_mod('laundry_services_sticky_header', false) != '') { ?>sticky-menubox<?php } else { ?>close-sticky <?php } ?>">
											<?php get_template_part('template-parts/navigation/site', 'nav'); ?>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-6 pd-0">
									<div class="contactusbtn">
										<?php if (get_theme_mod('laundry_services_btn_link') != '') { ?>
											<a href="<?php echo esc_html(get_theme_mod('laundry_services_btn_link')); ?>"><?php echo esc_html(get_theme_mod('laundry_services_btn_text')); ?></ /?php echo esc_html('Contact Us', 'laundry-services' ); ?> </a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if (is_singular()) { ?>
		<div class="inner-head">
			<img src="<?php if (get_header_image()) {
									echo esc_url(get_header_image());
								} else {
									echo esc_url(get_template_directory_uri()) ?>/assets/images/head-bg.jpg<?php } ?>" class="head-img" alt="<?php echo esc_html('Header Background Image', 'laundry-services'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<div class="header-content">
							<h1><?php single_post_title(); ?></h1>
							<div class="lt-breadcrumbs">
								<?php laundry_services_breadcrumb(); ?>
							</div>
						</div>
					</div>
					<?php if (has_post_thumbnail()) { ?>
						<div class="col-lg-6 col-md-6 align-self-end">

						</div>
					<?php } ?>
				</div>

			</div>
		</div>
	<?php } ?>