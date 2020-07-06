<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.1.4
 * 
 * Single Profile Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = language_school_get_global_options();


$cmsmasters_profile_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_profile_sharing_box', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" role="main">';


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">' . "\n";
	
	
	get_template_part('framework/postType/profile/post/standard');

	
	if ($cmsmasters_profile_sharing_box == 'true') {
		language_school_sharing_box(esc_html__('Share this profile?', 'language-school'), 'h3');
	}
	
	
	if ($cmsmasters_option['language-school' . '_profile_post_nav_box']) {
		language_school_prev_next_posts();
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

