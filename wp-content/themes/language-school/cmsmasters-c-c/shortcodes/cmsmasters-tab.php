<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.1.7
 * 
 * Content Composer Tabs Shortcode
 * Created by CMSMasters
 * 
 */
 
 
 
extract(shortcode_atts($new_atts, $atts));


$unique_id = uniqid('', true);
$unique_id = strtr($unique_id, '.', '_');


$this->tabs_atts['tab_counter']++;

if ($custom_colors == 'true') { 
	$this->tabs_atts['style_tab'] .= "\n" . '#cmsmasters_tabs_list_item_' . $unique_id . '.current_tab:before { ' . 
		"\n\t" . cmsmasters_color_css('background-color', $bg_color) . 
	"\n" . '} ' . "\n";
}


$this->tabs_atts['out_tabs'] .= '<li id="cmsmasters_tabs_list_item_' . $unique_id . '" class="cmsmasters_tabs_list_item' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' current_tab' : '') . 
'">' . "\n" . 
	'<a href="#"' . 
	(($icon != '') ? ' class="' . $icon . '"' : '') . 
	'>' . "\n" . 
		'<span>' . $title . '</span>' . "\n" . 
	'</a>' . "\n" . 
'</li>';


$out = '<div id="cmsmasters_tab_' . $unique_id . '" class="cmsmasters_tab' . 
(($this->tabs_atts['tab_active'] == $this->tabs_atts['tab_counter']) ? ' active_tab' : '') . 
(($classes != '') ? ' ' . $classes : '') . 
'">' . "\n" . 
	cmsmasters_divpdel('<div class="cmsmasters_tab_inner">' . "\n" . 
		do_shortcode(wpautop($content)) . 
	'</div>' . "\n") . 
'</div>';


echo language_school_return_content($out);