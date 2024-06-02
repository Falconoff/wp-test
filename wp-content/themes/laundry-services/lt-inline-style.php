<?php 

	$laundry_services_custom_css = '';

	// Site Title Color
	$laundry_services_site_title_color = get_theme_mod('laundry_services_site_title_color');
	$laundry_services_custom_css .= '.logo h1 a, .logo p.site-title a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_services_site_title_color) . ';';
	$laundry_services_custom_css .= '}';

	// Site Tagline Color
	$laundry_services_site_tagline_color = get_theme_mod('laundry_services_site_tagline_color');
	$laundry_services_custom_css .= '.logo p.site-description {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_services_site_tagline_color) . ';';
	$laundry_services_custom_css .= '}';

	/*----------------Width Layout -------------------*/
    $laundry_services_theme_lay = get_theme_mod( 'laundry_services_width_options','Full Width');
    if($laundry_services_theme_lay == 'Full Width'){
		$laundry_services_custom_css .='body{';
			$laundry_services_custom_css .='max-width: 100%;';
		$laundry_services_custom_css .='}';
	}else if($laundry_services_theme_lay == 'Contained Width'){
		$laundry_services_custom_css .='body{';
			$laundry_services_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$laundry_services_custom_css .='}';
	}else if($laundry_services_theme_lay == 'Boxed Width'){
		$laundry_services_custom_css .='body{';
			$laundry_services_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$laundry_services_custom_css .='}';
	}

    //Submenu Dropdown Effect
	$laundry_services_dropdown_anim = get_theme_mod('laundry_services_dropdown_anim');
	$laundry_services_custom_css .='.primary-navigation ul ul{';
		$laundry_services_custom_css .='animation: '.esc_attr($laundry_services_dropdown_anim).' 1s ease;';
	$laundry_services_custom_css .='}';
	
	//Header

	$laundry_header_bg = get_theme_mod('laundry_header_bg');
	$laundry_services_custom_css .= '.header-box {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_header_bg) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_services_sticky_header_color = get_theme_mod('laundry_services_sticky_header_color');
	$laundry_services_custom_css .= '.page-template-home-custom .fixed-menubox {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_services_sticky_header_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_bg_brd = get_theme_mod('laundry_header_bg_brd');
	$laundry_services_custom_css .= '.header-box:after {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_header_bg_brd) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_menu_col = get_theme_mod('laundry_header_menu_col');
	$laundry_services_custom_css .= '.primary-navigation a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_menu_col) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_menuactivehover_col = get_theme_mod('laundry_header_menuactivehover_col');
	$laundry_services_custom_css .= '.primary-navigation .current_page_item a,.primary-navigation a:hover {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_menuactivehover_col) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_submenu_color = get_theme_mod('laundry_header_submenu_color');
	$laundry_services_custom_css .= '.primary-navigation ul ul a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_submenu_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_submenu_bg_col = get_theme_mod('laundry_header_submenu_bg_col');
	$laundry_services_custom_css .= '.primary-navigation ul ul a {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_header_submenu_bg_col) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_submenu_txthovercolor = get_theme_mod('laundry_header_submenu_txthovercolor');
	$laundry_services_custom_css .= '.primary-navigation ul ul a:hover {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_submenu_txthovercolor) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_submenubg_hover = get_theme_mod('laundry_header_submenubg_hover');
	$laundry_services_custom_css .= '.primary-navigation ul ul a:hover {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_header_submenubg_hover) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_btn_text_col = get_theme_mod('laundry_header_btn_text_col');
	$laundry_services_custom_css .= '#header .contactusbtn a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_btn_text_col) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_btn_bg_col = get_theme_mod('laundry_header_btn_bg_col');
	$laundry_services_custom_css .= '#header .contactusbtn a {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_header_btn_bg_col) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_header_btn_texthover_col = get_theme_mod('laundry_header_btn_texthover_col');
	$laundry_services_custom_css .= '#header .contactusbtn:hover a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_header_btn_texthover_col) . ';';
	$laundry_services_custom_css .= '}';

	// Slider
	$laundry_services_slider_hide_show = get_theme_mod('laundry_services_slider_hide_show',false);
	if($laundry_services_slider_hide_show == true){
		$laundry_services_custom_css .= '.page-template-home-custom .inner-head {';
			$laundry_services_custom_css .= 'display: none;';
		$laundry_services_custom_css .= '}';
	}

	$laundry_slider_title_color = get_theme_mod('laundry_slider_title_color');
	$laundry_services_custom_css .= '#slider .inner_carousel h1 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_slider_title_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_description_color = get_theme_mod('laundry_slider_description_color');
	$laundry_services_custom_css .= '#slider .inner_carousel p {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_slider_description_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_btntext_color = get_theme_mod('laundry_slider_btntext_color');
	$laundry_services_custom_css .= '#slider .read-btn a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_slider_btntext_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_btnbg_color = get_theme_mod('laundry_slider_btnbg_color');
	$laundry_services_custom_css .= '#slider .read-btn a {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_slider_btnbg_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_btntxthov_color = get_theme_mod('laundry_slider_btntxthov_color');
	$laundry_services_custom_css .= '#slider .read-btn a:hover {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_slider_btntxthov_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_btnbghov_color = get_theme_mod('laundry_slider_btnbghov_color');
	$laundry_services_custom_css .= '#slider .read-btn a:hover {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_slider_btnbghov_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_pagination_color = get_theme_mod('laundry_slider_pagination_color');
	$laundry_services_custom_css .= '#slider .sldot .dot1, #slider .sldot .dot3 {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_slider_pagination_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_slider_activepagination_color = get_theme_mod('laundry_slider_activepagination_color');
	$laundry_services_custom_css .= '#slider .sldot .dot2 {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_slider_activepagination_color) . ';';
	$laundry_services_custom_css .= '}';


	//feature
	$laundry_feature_subheading_color = get_theme_mod('laundry_feature_subheading_color');
	$laundry_services_custom_css .= '#feature .feature-head h4 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_subheading_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_heading_color = get_theme_mod('laundry_feature_heading_color');
	$laundry_services_custom_css .= '#feature .feature-head h3 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_heading_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_boxbg_color = get_theme_mod('laundry_feature_boxbg_color');
	$laundry_services_custom_css .= '#feature .feabxinn {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_feature_boxbg_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_number_color = get_theme_mod('laundry_feature_number_color');
	$laundry_services_custom_css .= '#feature .content h3 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_number_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_title_color = get_theme_mod('laundry_feature_title_color');
	$laundry_services_custom_css .= '#feature .content h1 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_title_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_icon_color = get_theme_mod('laundry_feature_icon_color');
	$laundry_services_custom_css .= '#feature .content i {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_icon_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_iconcle_color = get_theme_mod('laundry_feature_iconcle_color');
	$laundry_services_custom_css .= '#feature .content i:after {';
		$laundry_services_custom_css .= 'background-color: ' . esc_attr($laundry_feature_iconcle_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_bord_color = get_theme_mod('laundry_feature_bord_color');
	$laundry_services_custom_css .= '#feature .content p {';
		$laundry_services_custom_css .= 'border-top-color: ' . esc_attr($laundry_feature_bord_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_feature_description_color = get_theme_mod('laundry_feature_description_color');
	$laundry_services_custom_css .= '#feature .content p {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_feature_description_color) . ';';
	$laundry_services_custom_css .= '}';


	//service
	$laundry_service_subheading_color = get_theme_mod('laundry_service_subheading_color');
	$laundry_services_custom_css .= '#service-section .service-head h4 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_subheading_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_heading_color = get_theme_mod('laundry_service_heading_color');
	$laundry_services_custom_css .= '#service-section .service-head h3 {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_heading_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_boxbg_color = get_theme_mod('laundry_service_boxbg_color');
	$laundry_services_custom_css .= '#service-section .service-content {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_service_boxbg_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_title_color = get_theme_mod('laundry_service_title_color');
	$laundry_services_custom_css .= '#service-section .service-content .title {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_title_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_description_color = get_theme_mod('laundry_service_description_color');
	$laundry_services_custom_css .= '#service-section .service-content p {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_description_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_border_color = get_theme_mod('laundry_service_border_color');
	$laundry_services_custom_css .= '#service-section .service-content .title {';
		$laundry_services_custom_css .= 'border-bottom-color: ' . esc_attr($laundry_service_border_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_btntext_color = get_theme_mod('laundry_service_btntext_color');
	$laundry_services_custom_css .= '#service-section .button a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_btntext_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_btnbg_color = get_theme_mod('laundry_service_btnbg_color');
	$laundry_services_custom_css .= '#service-section .button a {';
		$laundry_services_custom_css .= 'background-color: ' . esc_attr($laundry_service_btnbg_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_btnhover_color = get_theme_mod('laundry_service_btnhover_color');
	$laundry_services_custom_css .= '#service-section .button a:hover {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_service_btnhover_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_service_btnhoverbg_color = get_theme_mod('laundry_service_btnhoverbg_color');
	$laundry_services_custom_css .= '#service-section .button a:hover {';
		$laundry_services_custom_css .= 'background-color: ' . esc_attr($laundry_service_btnhoverbg_color) . ';';
	$laundry_services_custom_css .= '}';

	//footer
	$laundry_footer_copyright_color = get_theme_mod('laundry_footer_copyright_color');
	$laundry_services_custom_css .= '#footer-section .copyright p {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_footer_copyright_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_footer_copyrightbg_color = get_theme_mod('laundry_footer_copyrightbg_color');
	$laundry_services_custom_css .= '.copyright {';
		$laundry_services_custom_css .= 'background: ' . esc_attr($laundry_footer_copyrightbg_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_footer_text_color = get_theme_mod('laundry_footer_text_color');
	$laundry_services_custom_css .= '#footer-section h1,#footer-section h2,
	#footer-section h3,#footer-section h4,#footer-section h5,
	#footer-section h6,#footer-section p,#footer-section a{';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_footer_text_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_footer_wedget_title_color = get_theme_mod('laundry_footer_wedget_title_color');
	$laundry_services_custom_css .= ' #footer-section h3.widget-title {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_footer_wedget_title_color) . ';';
	$laundry_services_custom_css .= '}';

	$laundry_footer_wedget_menu_color = get_theme_mod('laundry_footer_wedget_menu_color');
	$laundry_services_custom_css .= ' .widget li a {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_footer_wedget_menu_color) . ' !important;';
	$laundry_services_custom_css .= '}';

	$laundry_footer_wedget_menuicon_color = get_theme_mod('laundry_footer_wedget_menuicon_color');
	$laundry_services_custom_css .= ' #footer-section li:before {';
		$laundry_services_custom_css .= 'color: ' . esc_attr($laundry_footer_wedget_menuicon_color) . ' !important;';
	$laundry_services_custom_css .= '}';