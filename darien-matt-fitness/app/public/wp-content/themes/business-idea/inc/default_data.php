<?php 
function business_idea_default_data(){
	$startdata = array(
		'business_idea_layout' => false,
		'theme_color' => '#00B2FF',
		'business_idea_copyright' => '',
		'business_idea_sidebarlayout' => 'right',
		'business_idea_btt_disable' => false,
		'business_idea_animation_disable' => false,
		'business_idea_googlefonts_disable' => false,
		'business_idea_singlepostmeta_disable' => false,
		'business_idea_singlepostthumb_disable' => false,
		
		'business_idea_hero_disable' => false,
		'business_idea_herofullscreen' => false,
		'business_idea_textanimation' => 'fadeInDown',
		'business_idea_slider_effect' => 'slide',
		'business_idea_slider_animation_speed' => '1500',
		'business_idea_slider_duration_speed' => '3000',
		'business_idea_hero_overlay_color' => 'rgba(0, 0, 0, 0.5)',
		'business_idea_hero_largetext' => esc_html__('Fast & Flexible WP Template','business-idea'),
		'business_idea_hero_largetextcolor' => '#ffffff',
		'business_idea_hero_smalltext' => esc_html__('Edit it in the customizer settings','business-idea'),
		'business_idea_hero_smalltextcolor' => '#ffffff',
		'business_idea_hero_buttontext' => esc_html__('Buy Theme','business-idea'),
		'business_idea_hero_buttonlink' => '',
		'business_idea_hero_buttontarget' => false,
		'business_idea_hero_buttontext2' => esc_html__('View Demo','business-idea'),
		'business_idea_hero_buttonlink2' => '',
		'business_idea_hero_buttontarget2' => false,
		'hero_media' => '',
		
		'business_idea_service_disable' => false,
		'business_idea_servicetitle' => '',
		'business_idea_servicesubtitle' => '',
		'business_idea_servicelayout' => '4',
		'business_idea_services' => '',
		
		'business_idea_about_disable' => false,
		'business_idea_abouttitle' => '',
		'business_idea_aboutsubtitle' => '',
		'business_idea_about_titleColor' => '#ffffff',
		'business_idea_about_subtitleColor' => '#ffffff',
		'business_idea_about_posttitlecolor' => '#ffffff',
		'business_idea_about_posttextcolor' => '#ffffff',
		'business_idea_aboutlayout' => '3',
		'business_idea_about_boxes' => '',
		'business_idea_about_content_source' => 'content',
		'business_idea_about_bgcolor' => '#ffffff',
		'business_idea_about_bgimage' => get_template_directory_uri() . '/images/about-bg.jpg',
		
		'business_idea_shop_disable' => false,
		'business_idea_shoptitle' => '',
		'business_idea_shopsubtitle' => '',
		'business_idea_shop_cat_hide' => false,
		'business_idea_shop_desc_hide' => false,
		'business_idea_shop_scroll_effect_hide' => false,
		'business_idea_shop_product_show' => 4,
		'business_idea_shop_product_align' => 'center',
		
		'business_idea_team_disable' => false,
		'business_idea_teamtitle' => '',
		'business_idea_teamsubtitle' => '',
		'business_idea_team_titleColor' => '#242424',
		'business_idea_team_subtitleColor' => '#999999',
		'business_idea_team' => '',
		'business_idea_team_posttitlecolor' => '',
		'business_idea_team_posttextcolor' => '',
		
		'business_idea_testimonial_disable' => false,
		'business_idea_testimonialtitle' => '',
		'business_idea_testimonialsubtitle' => '',
		'business_idea_testimonial' => '',
		
		'business_idea_project_disable' => false,
		'business_idea_projecttitle' => '',
		'business_idea_projectsubtitle' => '',
		
		'business_idea_contact_disable' => false,
		'business_idea_contacttitle' => '',
		'business_idea_contactsubtitle' => '',
		'business_idea_contact_titleColor' => '#ffffff',
		'business_idea_contact_subtitleColor' => '#ffffff',
		'business_idea_contactcontent' => '',
		'business_idea_contactaddress' => '',
		'business_idea_contactphone' => '',
		'business_idea_contactemail' => '',
		'business_idea_contactwebsite' => '',
		'business_idea_contactshortcode' => '',
		'business_idea_contact_bgcolor' => '#f3f3f3',
		'business_idea_contact_bgimage' => get_template_directory_uri() . '/images/contact-bg.jpg',
		
		'business_idea_blog_disable' => false,
		'business_idea_blogtitle' => '',
		'business_idea_blogsubtitle' => '',
		'business_idea_news_titleColor' => '#242424',
		'business_idea_news_subtitleColor' => '#999999',
		'business_idea_news_layout' => '4',
		'business_idea_news_no' => '3',
		'business_idea_news_cat' => 0,
		'business_idea_news_orderby' => 0,
		'business_idea_news_order' => 'desc',
		'business_idea_news_more_link' => '',
		'business_idea_news_more_text' => '',
		
		'business_idea_social_disable' => false,
		'business_idea_socialtitle' => '',
		'business_idea_social_titleColor' => '#242424',
		'business_idea_facebook_link' => '',
		'business_idea_twitter_link' => '',
		'business_idea_google_plus_link' => '',
		'business_idea_social_bgcolor' => '#FBFF0C',
		
		'error404_title' => '',
		'error404_subtitle' => '',
		'error404_content' => '',
		'error404_btntext' => '',
		
		'typo_p_fontsize' => '',		
		'typo_m_fontsize' => '',		
		'typo_h1_fontsize' => '',
		'typo_h2_fontsize' => '',
		'typo_h3_fontsize' => '',
		'typo_h4_fontsize' => '',
		'typo_h5_fontsize' => '',
		'typo_h6_fontsize' => '',
	);
	
	$startdata = apply_filters('business_idea_default_data',$startdata);
	return $startdata;
}