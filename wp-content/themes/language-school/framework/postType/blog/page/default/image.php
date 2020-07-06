<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version		1.0.0
 * 
 * Blog Page Default Image Post Format Template
 * Created by CMSMasters
 * 
 */



$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_default_type'); ?>>
	<?php
		$date ? language_school_get_post_date('page', 'default') : '';
	?>
	<div class="cmsmasters_post_cont">
		<?php 
		if (!post_password_required()) {
			if ($cmsmasters_post_image_link != '') {
				language_school_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, $cmsmasters_post_image_link);
			} elseif (has_post_thumbnail()) {
				language_school_thumb(get_the_ID(), 'cmsmasters-masonry-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			}
		}
		
		
		language_school_post_heading(get_the_ID(), 'h2');
		
		language_school_post_exc_cont(); 
		
		
		if ($more) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? language_school_post_more(get_the_ID()) : '';
				
			echo '</footer>';
		}
		
		
		if ($author || $categories || $tags || $likes || $comments) {
			echo '<div class="cmsmasters_post_cont_info entry-meta' . ((!$more && theme_excerpt(20, false) == '') ? ' no_bdb' : '') . '">';
				
				if ($comments || $likes) {
					echo '<div class="cmsmasters_post_meta_info">';
						
						$comments ? language_school_get_post_comments('page') : '';
						
						$likes ? cmsmasters_get_post_like('page') : '';
						
					echo '</div>';
				}
				
				
				$author ? cmsmasters_post_author('page') : '';
				
				$categories ? language_school_get_post_category(get_the_ID(), 'category', 'page', 'default') : '';
				
				$tags ? language_school_get_post_tags('page') : '';
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

