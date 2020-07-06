<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.1.7
 * 
 * Default Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = language_school_theme_page_layout_scheme();


if (is_singular('lp_course')) {
	$cmsmasters_lpr_course_title = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_title', true);

	$cmsmasters_lpr_course_image = get_post_meta(get_the_ID(), 'cmsmasters_lpr_course_image', true);
}


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">';
}



if (have_posts()) : the_post();
	$content_start = substr(get_post_field('post_content', get_the_ID()), 0, 15);
	
	
	if (!is_singular('lp_course') && $cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
		echo '</div>' . 
		'</div>';
	}
	
	if (is_singular('lp_course')) {
		if ($cmsmasters_lpr_course_title == 'true') {
			the_title( '<h2 class="entry-title cmsmasters_course_title">', '</h2>' );
		}
		
		if ($cmsmasters_lpr_course_image == 'true' && has_post_thumbnail()) {
			language_school_thumb(get_the_ID(), 'post-thumbnail', false, true, true, false, true, true, false);
		}
	}
	
	the_content();
	
	echo '<div class="cl"></div>';
	
	
	if (!is_singular('lp_course') && $cmsmasters_layout == 'fullwidth' && $content_start === '[cmsmasters_row') {
		echo '<div class="content_wrap ' . $cmsmasters_layout . 
		((is_singular('project')) ? ' project_page' : '') . 
		((is_singular('profile')) ? ' profile_page' : '') . 
		'">' . "\n\n" . 
			'<div class="middle_content entry" role="main">';
	}
	
	
	wp_link_pages(array( 
		'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'language-school') . ':</strong>', 
		'after' => '</div>' . "\n", 
		'link_before' => '<span>', 
		'link_after' => '</span>' 
	));
	
	
	comments_template();
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

