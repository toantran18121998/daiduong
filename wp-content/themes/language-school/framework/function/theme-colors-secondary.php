<?php
/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.1.7
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function language_school_theme_colors_secondary() {
	$cmsmasters_option = language_school_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Language School
 * @version 	1.1.7
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}.recurringinfo, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events * {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_left .tribe-events-event-meta .email:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_left .tribe-events-event-meta .tel:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_left .tribe-events-event-meta .url:before, 
	{$rule}.widget .type-tribe_events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.widget .tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .duration:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_left .url:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_left .tel:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_left .location:before,
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day-wrap [class^=\"cmsmasters_theme_icon_\"]:before, 
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day-wrap [class*=\" cmsmasters_theme_icon_\"]:before,
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .time-details:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_left .tribe-events-schedule > div:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info [class^=\"cmsmasters_theme_icon_\"]:before, 
	{$rule}.widget .tribe-mini-calendar-list-wrapper .type-tribe_events .cmsmasters_widget_event_info [class^=\"cmsmasters_theme_icon_\"]:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info [class*=\" cmsmasters_theme_icon_\"]:before, 
	{$rule}.widget .tribe-mini-calendar-list-wrapper .type-tribe_events .cmsmasters_widget_event_info [class*=\" cmsmasters_theme_icon_\"]:before,
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more:hover,
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:hover > a, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:hover > a,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a:hover, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-footer > a:hover, 
	{$rule}.recurringinfo a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a:hover, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder:hover, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover,  
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover, 
	{$rule}.widget .tribe-mini-calendar-list-wrapper .type-tribe_events .entry-title a:hover, 
	{$rule}.widget .tribe-mini-calendar-list-wrapper .type-tribe_events .cmsmasters_widget_event_venue_info_loc .cmsmasters_widget_event_venue_info a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a:hover, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-event, 
	{$rule}.widget.tribe-events-list-widget .tribe-event-featured, 
	{$rule}.widget.tribe-events-venue-widget .tribe-event-featured, 
	{$rule}.widget .tribe-mini-calendar-list-wrapper .tribe-event-featured, 
	{$rule}.widget.tribe-events-adv-list-widget .tribe-event-featured .tribe-mini-calendar-event,
	{$rule}#tribe-events-content-wrapper #tribe-events-content table.tribe-events-calendar .type-tribe_events.tribe-event-featured,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single,
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single:hover,
	{$rule}#tribe-events .tribe-events-list .tribe-events-loop .tribe-event-featured, 
	{$rule}#tribe-events-content-wrapper .tribe-events-list #tribe-events-day.tribe-events-loop .tribe-event-featured,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap,
	{$rule}#tribe-events-content-wrapper .type-tribe_events.tribe-events-photo-event.tribe-event-featured .tribe-events-photo-event-wrap:hover,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header, 
	{$rule}.tribe-events-sub-nav li a:hover,
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:hover:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:hover:before,
	{$rule}.tribe_events .cmsmasters_post_cont .cmsmasters_post_title:before, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5:before, 
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-list-event-title:before, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a:hover, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth:hover * {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
		}
	}
	
	{$rule}.tribe-events-grid .tribe-grid-body .tribe-event-featured.tribe-events-week-hourly-single,
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:hover:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:hover:before,
	{$rule}.tribe-events-sub-nav li a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a, 
	{$rule}.tribe-events-tooltip .tribe-events-event-body .duration, 
	{$rule}.cmsmasters_event_date .cmsmasters_event_month,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.recurringinfo a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-past div .tribe-mini-calendar-no-event {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.datepicker table thead th,
	{$rule}.datepicker table thead td,
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option.tribe-bar-active a,
	{$rule}.tribe-events-notices, 
	{$rule}.tribe-events-tooltip .entry-title,
	{$rule}.cmsmasters_event_date .cmsmasters_event_day, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.tribe-events-sub-nav li a,
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .tribe-events-address address .adr span:first-child, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta > div > div:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_info > div:before, 
	{$rule}.widget .vcalendar .type-tribe_events .cmsmasters_widget_event_venue_info_loc > div:before, 
	{$rule}.tribe-events-list-widget-events .tribe-events-list-widget-content-wrap .tribe-events-event-cost, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-cal-links a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item .cmsmasters_event_meta_info_item_title, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item dt, 
	{$rule}#tribe-events-footer > a, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details .author, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:before, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right a:hover:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right a:hover:before, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .duration:before,  
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .cmsmasters_widget_event_info > div:before,  
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .type-tribe_events .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth * {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
		}
	
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"] {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
		}
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day.this-week-today .tribe-this-week-widget-header-date, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}.tribe-events-sub-nav li a:hover, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:hover:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:hover:before,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today:hover * {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.datepicker table thead th,
	{$rule}.datepicker table thead td,
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	{$rule}.tribe-events-tooltip,
	{$rule}.cmsmasters_event_date,	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title,
	{$rule}.tribe-events-sub-nav li a,	
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present.tribe-events-has-events div .tribe-mini-calendar-day-link:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar,
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-present div .tribe-mini-calendar-day-link:hover:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-mini-calendar-today div .tribe-mini-calendar-day-link:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:before, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner label.button .cmsmasters_next_arrow:after, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link span:after {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-tooltip:after {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-month .tribe-events-tooltip:after {
		border-top-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . ", 1) !important;
		border-left-color:transparent !important;
		border-right-color:transparent !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:after {
		border-left-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:after {
		border-bottom-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . ", 1) !important;
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active *, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present * {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"],
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-events-past .tribe-week-event:hover > div:first-child a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=\"tribe-events-daynum-\"] {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"], 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.mobile-active div[id*=\"tribe-events-daynum-\"] a {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
		}
	}
	
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.cmsmasters_event_date .cmsmasters_event_month, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth,  
	{$rule}.tribe_events .cmsmasters_post_cont,  
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsmasters_events_img_placeholder,  
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday,  
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-today {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.bd_font_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events.tribe-events-past div .tribe-mini-calendar-day-link:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li, 
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}.tribe-events-tooltip, 
	{$rule}.tribe-events-tooltip:before, 
	{$rule}.cmsmasters_event_date,	
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title,
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5,
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_meta .tribe-events-meta-group .cmsmasters_event_meta_info .cmsmasters_event_meta_info_item,
	{$rule}.cmsmasters_events_img_placeholder,
	{$rule}ul.tribe-related-events > li .tribe-related-event-info,
	{$rule}#tribe-events-sub-nav .tribe-events-nav-previous:before, 
	{$rule}#tribe-events-sub-nav .tribe-events-nav-next:before,
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-scroller, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div:before, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile, 
	{$rule}.widget .vcalendar .type-tribe_events, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_event_date .cmsmasters_event_month,	
	{$rule}.tribe_events .cmsmasters_post_cont_info, 
	{$rule}.tribe_events .cmsmasters_post_footer_info {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe_events .cmsmasters_post_cont_info {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-tooltip.recurring-info-tooltip:before {
		border-bottom-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:before {
		border-right-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:before {
		border-left-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['language-school' . '_' . $scheme . '_border']) . ", 1) !important;
	}
	/* Finish Borders Color */
	
	/* Start Secondary Color */
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li.tribe-bar-active, 
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header .cmsmasters_events_venue_header_right .tribe-events-back a:before, 
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header .cmsmasters_events_organizer_header_right .tribe-events-back a:before, 
	{$rule}#tribe-events-content.tribe-events-single .cmsmasters_single_event_header .cmsmasters_single_event_header_right .tribe-events-back:before, 
	{$rule}#tribe-events-content.tribe-events-list .type-tribe_events .cmsmasters_events_list_event_wrap .cmsmasters_events_list_event_header .tribe-events-event-cost, 
	{$rule}.tribe-bar-views-open label.button {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day.this-week-today .tribe-this-week-widget-header-date, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading:before, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date:before,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-present, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:before,
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5:before,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month:before,
	{$rule}.cmsmasters_event_date:before,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}.tribe-events-notices:before, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.datepicker table tr td span.active,
	{$rule}.datepicker table tr td.active {
		background:" . $cmsmasters_option['language-school' . '_' . $scheme . '_link'] . " !important;
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
		}
	}
	
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views ul.tribe-bar-views-list li.tribe-bar-active, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child > .entry-title, 
	{$rule}.tribe-bar-views-open label.button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}


if (CMSMASTERS_TIMETABLE) {
			$custom_css .= "
/***************** Start {$title} Timetable Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover,
	{$rule}#tt_booking_popup_message a.tt_btn {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.hover_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Heading Color */
	{$rule}.tt_booking a.tt_btn,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a,
	{$rule}.tt_tabs_navigation li a.selected,
	{$rule}.tt_tabs_navigation li.ui-tabs-active a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tt_booking_popup_message a.tt_btn:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Heading Color */
	
	
	/* Start Secondary Color */
	{$rule}.tt_booking a.tt_btn:hover,
	{$rule}.second_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.tt_booking a.tt_btn:hover,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}ul.tt_upcoming_events li a.tt_upcoming_events_event_container {
		" . cmsmasters_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Headings Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:before, 
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container, 
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item .cmsmasters_tt_event_hours_item_title, 
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item .cmsmasters_tt_event_details_item_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Alternate Background Color */
	{$rule}ul.tt_items_list li:nth-child(2n+1) {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Start Alternate Background Color */
	
	
	/* Start Main Background Color */
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover:before,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover *,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover,
	{$rule}#tt_booking_popup_message a.tt_btn, 
	{$rule}#tt_booking_popup_message a.tt_btn:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tt_booking a.tt_btn,
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container,
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a, 
	{$rule}#tt_booking_popup_message .tt_booking_message_wrapper {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tt_booking a.tt_btn,
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_hours .cmsmasters_tt_event_hours_item, 
	{$rule}.cmsmasters_tt_event .cmsmasters_tt_event_details .cmsmasters_tt_event_details_item, 
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container, 
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} Timetable Color Scheme Rules ******************/


";
		}


if (CMSMASTERS_LEARNPRESS) {
			$custom_css .= "
/***************** Start {$title} LearnPress Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.learn-press-pagination .page-numbers li .page-numbers,
	{$rule}.quiz-result .quiz-result-summary .quiz-result-field,
	{$rule}#learn-press-course-curriculum .course-item.item-has-status .item-status:before,
	{$rule}#learn-press-course-curriculum .course-item.item-has-status .item-status,
	{$rule}.learn-press-tabs .ui-widget-content,
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav a,
	{$rule}.learn-press-user-profile .learn-press-tabs > li > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.learn-press-question-options > li.answer-option.answer-true label p, 
	{$rule}.learn-press-question-options > li.answer-option label input[type=checkbox] + p:after, 
	{$rule}.quiz-result .quiz-grade p span.passed, 
	{$rule}.learn-press-courses li.course .course-price, 
	{$rule}.widget_lp-widget-recent-courses .course-title:hover, 
	{$rule}.widget_lp-widget-popular-courses .course-title:hover, 
	{$rule}.widget_lp-widget-featured-courses .course-title:hover, 
	{$rule}.learn-press-pagination .page-numbers li .page-numbers:hover,
	{$rule}.learn-press-pagination .page-numbers li .page-numbers.current,
	{$rule}.learn-press-courses li.course h3:hover,
	{$rule}#learn-press-course-curriculum .course-item.item-has-status.item-completed .item-status,
	{$rule}#learn-press-course-curriculum .course-item.item-has-status.item-completed .item-status:before,
	{$rule}.course-students-list .students a.name:hover,
	{$rule}.complete-lesson-button.completed,
	{$rule}.question-results.correct .question-title:after, 
	{$rule}.learn-press-question-wrap.checked li.answer-true, 
	{$rule}.curriculum-sections .section-content > li [class^=\"cmsmasters_theme_icon_\"], 
	{$rule}.curriculum-sections .section-content > li [class*=\" cmsmasters_theme_icon_\"],
	{$rule}.single-quiz .quiz-result .quiz-result-summary .quiz-result-field.correct {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#lp-navigation .nav-link .course-item-title:hover:before, 
	{$rule}.learn-press-question-options > li.answer-option label input[type=radio] + p:after, 
	{$rule}#popup_container #popup_title, 
	{$rule}.learn-press-pagination .page-numbers li .page-numbers:before, 
	{$rule}#course-curriculum-popup #popup-main #popup-header .sidebar-hide-btn:hover, 
	{$rule}#course-curriculum-popup #popup-main #popup-header .sidebar-show-btn:hover,
	{$rule}#course-curriculum-popup #popup-main #popup-header .popup-close:hover, 
	{$rule}#course-curriculum-popup #popup-main #popup-header, 
	{$rule}#popup_title,
	{$rule}.learn-press-checkout-review-order-table thead,
	{$rule}.learn-press-cart-table thead,
	{$rule}.order_details thead,
	{$rule}.table-orders thead,
	{$rule}.lp-course-progress.passed .lp-progress-value,
	{$rule}.quiz-history thead th,
	{$rule}.question-explanation-content:before,
	{$rule}.question-hint-content:before,
	{$rule}.lp-course-progress .lp-passing-conditional,
	{$rule}#user_courses > h3:before,
	{$rule}.lp-label,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_price,
	{$rule}.single-quiz .quiz-questions > h3:before,
	{$rule}.single-quiz .quiz-summary .entry-title:before,
	{$rule}.course-review-head:before,
	{$rule}.course-curriculum-title:before,
	{$rule}.cmsmasters_course_title:before,
	{$rule}.students-list-title:before,
	{$rule}.learn-press-content-item-title:before,
	{$rule}.course-lesson-heading:before,
	{$rule}.course-curriculum-title:before,
	{$rule}.lp-course-progress-heading:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#lp-navigation .nav-link .course-item-title:hover:before, 
	{$rule}#learn-press-block-content span:before, 
	{$rule}#course-curriculum-popup #popup-main #popup-header, 
	{$rule}#course-curriculum-popup #popup-main #popup-header .popup-menu {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.lp-course-progress .lp-passing-conditional:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.lp-course-progress .lp-passing-conditional:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['language-school' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.review-stars > li span.dashicons-star-empty:before,
	{$rule}.review-stars-rated .review-stars:before,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_cource_cat a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Heading Color */
	{$rule}#lp-navigation .nav-link .course-item-title:before, 
	{$rule}#lp-navigation .nav-link .course-item-title, 
	{$rule}.learn-press-search-course-form .search-course-button:before, 
	{$rule}.user-basic-info .user-nicename, 
	{$rule}.single-lp_course .learn-press-course-results-progress .number, 
	{$rule}.single-lp_course .learn-press-course-results-progress .percentage-sign,
	{$rule}.quiz-questions-list .question-title, 
	{$rule}.single-lp_course .course-meta .course-price:before, 
	{$rule}.single-lp_course .course-meta .course-students:before, 
	{$rule}.single-lp_course .course-meta .learn-press-course-status:before, 
	{$rule}.single-lp_course .course-meta .course-author:before, 
	{$rule}#learn-press-course-curriculum .course-item.course-lesson:before, 
	{$rule}#learn-press-course-curriculum .course-item.course-quiz:before,
	{$rule}.course-students-list .students .name,
	{$rule}.single-quiz .quiz-sidebar .quiz-countdown #quiz-countdown-value,
	{$rule}.archive .lp_course .cmsmasters_lrp_archive_content .cmsmasters_lrp_archive_item_title,
	{$rule}.learn-press-user-profile .learn-press-tabs > li.current > a,
	{$rule}.learn-press-user-profile .learn-press-tabs > li > a:hover,
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active a,
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav a:hover,
	{$rule}.quiz-result-mark,
	{$rule}.quiz-result .quiz-result-summary .quiz-result-field > label,
	{$rule}#quiz-countdown {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.learn-press-content-item-title.content-item-quiz-title .quiz-countdown:before,
	{$rule}.learn-press-content-item-title.content-item-quiz-title .quiz-countdown:after,
	{$rule}.lp-group-heading-title .toggle-icon:before,
	{$rule}.lp-group-heading-title .toggle-icon:after,
	{$rule}#learn-press-course-curriculum .section-header .meta .collapse:before,
	{$rule}#learn-press-course-curriculum .section-header .meta .collapse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#learn-press-block-content:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Heading Color */
	
	
	/* Start Secondary Color */
	{$rule}.quiz-result .quiz-grade p span.failed,
	{$rule}#learn-press-course-curriculum .course-item.item-current:before,
	{$rule}.learn-press-subtabs li.current a,
	{$rule}.cart_item .remove,
	{$rule}.question-results.incorrect .question-title:after,
	{$rule}.learn-press-question-wrap.checked li.user-answer-false,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_cource_cat a,
	{$rule}.archive .lp_course .cmsmasters_lrp_archive_content .entry-footer .course-price,
	{$rule}.quiz-questions > ul li.current > h4,
	{$rule}.single-quiz .quiz-result .quiz-result-summary .quiz-result-field.wrong,
	{$rule}#review .review-fields > li > label .required {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.course-curriculum ul.curriculum-sections .section-content .course-item:before,
	{$rule}.learn-press-content-item-title.content-item-quiz-title .quiz-countdown:after,
	{$rule}#page .course-rate .review-bar .rating, 
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav:before, 
	{$rule}.learn-press-user-profile .learn-press-tabs > li:before, 
	{$rule}.learn-press-notice:before, 
	{$rule}.learn-press-message:before, 
	{$rule}.learn-press-error:before,
	{$rule}.lp-course-progress .lp-progress-bar .lp-progress-value,
	{$rule}.lp-label.lp-label-preview,
	{$rule}.lp-label-final,
	{$rule}#user_quizzes .quiz-result-mark:before,
	{$rule}.learn-press .message:before,
	{$rule}.learn-press .lp-message:before,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_free {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.course-curriculum ul.curriculum-sections .section-content .course-item.current, 
	{$rule}.learn-press-content-item-summary .learn-press-question-explanation, 
	{$rule}.learn-press-content-item-summary .learn-press-question-hint,
	{$rule}.learn-press-pagination .page-numbers li .page-numbers, 
	{$rule}.learn-press-content-item-title .lp-expand, 
	{$rule}.quiz-result .quiz-result-summary .quiz-result-field, 
	{$rule}#learn-press-course-curriculum .course-item.viewable:hover, 
	{$rule}#learn-press-course-curriculum .section-header, 
	{$rule}#page .course-rate .review-bar,
	{$rule}.lp-course-progress .lp-progress-bar,
	{$rule}.learn-press .message,
	{$rule}.learn-press .lp-message,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .img_placeholder,
	{$rule}.question-hint-wrap,
	{$rule}.single-quiz .quiz-question-nav .lp-question-wrap ul,
	{$rule}.quiz-result-mark {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Main Background Color */
	{$rule}#lp-navigation .nav-link .course-item-title:hover:before,
	{$rule}#popup_container #popup_title,
	{$rule}.learn-press-checkout-review-order-table thead,
	{$rule}.learn-press-cart-table thead,
	{$rule}.order_details thead,
	{$rule}.table-orders thead,
	{$rule}.quiz-history thead th,
	{$rule}.lp-label,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_price,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_free {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#course-item-content-header, 
	{$rule}#lp-navigation .nav-link .course-item-title:before, 
	{$rule}#lp-navigation, 
	{$rule}.learn-press-question-options > li.answer-option label p.single-lines:before, 
	{$rule}.learn-press-pagination .page-numbers li .page-numbers:hover, 
	{$rule}.learn-press-pagination .page-numbers li .page-numbers.current, 
	{$rule}.learn-press-courses li.course, 
	{$rule}#learn-press-course-curriculum .course-item.item-current:before, 
	{$rule}#learn-press-course-curriculum .course-item.course-lesson:before, 
	{$rule}#learn-press-course-curriculum .course-item.course-quiz:before,
	{$rule}#learn-press-course-curriculum .section-header:hover, 
	{$rule}.learn-press-notice, 
	{$rule}.learn-press-message, 
	{$rule}.learn-press-error,
	{$rule}.question-explanation-content,
	{$rule}.question-hint-content,
	{$rule}.lp-course-progress .lp-progress-value > span, 
	{$rule}.learn-press-user-profile .learn-press-tabs > li.current > a, 
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active a,
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_footer, 
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .lpr_course_inner,
	{$rule}.single-quiz .quiz-question-nav .lp-question-wrap, 
	{$rule}.curriculum-sections .section-content > li {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.lp-course-progress .lp-progress-value > span:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active a,
	{$rule}.learn-press-user-profile .learn-press-tabs > li.current > a {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['language-school' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}button[disabled] {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.course-curriculum ul.curriculum-sections .section-content .course-item.has-status.passed,
	{$rule}#course-item-content-header .toggle-content-item,
	{$rule}.course-curriculum ul.curriculum-sections .section-content .course-item,
	{$rule}#course-item-content-header,
	{$rule}.learn-press-user-profile .update-profile,
	{$rule}#lp-navigation .nav-link .course-item-title:before, 
	{$rule}#lp-navigation, 
	{$rule}.learn-press-question-options > li.answer-option label p.single-lines:before, 
	{$rule}button[disabled]:hover, 
	{$rule}.quiz-questions-list .question-title, 
	{$rule}.learn-press-courses li.course, 
	{$rule}.learn-press-content-item-title .lp-expand, 
	{$rule}.quiz-result .quiz-result-summary .quiz-result-field, 
	{$rule}#learn-press-course-curriculum .course-item.course-lesson:before, 
	{$rule}#learn-press-course-curriculum .course-item.course-quiz:before,
	{$rule}#learn-press-course-curriculum .section-header, 
	{$rule}.learn-press-user-profile .learn-press-tabs, 
	{$rule}.learn-press-tabs .learn-press-nav-tabs, 
	{$rule}.learn-press-wishlist-courses li, 
	{$rule}.learn-press-checkout-review-order-table tbody tr, 
	{$rule}.learn-press-checkout-review-order-table tfoot tr, 
	{$rule}.learn-press-cart-table tbody tr,
	{$rule}.order_details tbody tr,
	{$rule}.table-orders tbody tr,
	{$rule}.order_details tfoot tr,
	{$rule}.table-orders tfoot tr,
	{$rule}.quiz-history tbody tr,
	{$rule}.question-explanation-content,
	{$rule}.question-hint-content,
	{$rule}.learn-press-notice, 
	{$rule}.learn-press-message, 
	{$rule}.learn-press-error,
	{$rule}.lp-course-progress .lp-progress-value > span, 
	{$rule}.complete-lesson-button.completed, 
	{$rule}#learn_press_payment_form, 
	{$rule}.course-content-lesson-nav-text, 
	{$rule}#user_quizzes .quiz-result-mark, 
	{$rule}#user_courses > h3, 
	{$rule}.learn-press .message, 
	{$rule}.learn-press .lp-message, 
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .cmsmasters_course_footer, 
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .lpr_course_inner, 
	{$rule}.cmsmasters_learnpress_shortcode .lpr_course_post .img_placeholder, 
	{$rule}.archive .lp_course .cmsmasters_lrp_archive_content .cmsmasters_lrp_archive_item, 
	{$rule}.single-quiz .quiz-question-nav .lp-question-wrap > h4, 
	{$rule}.single-quiz .quiz-question-nav .lp-question-wrap, 
	{$rule}.single-quiz .quiz-result .quiz-result-summary .quiz-result-field, 
	{$rule}.single-quiz .quiz-questions > h3, 
	{$rule}.single-quiz .quiz-summary .entry-title, 
	{$rule}.curriculum-sections .section-content > li,
	{$rule}.course-reviews-list > li,
	{$rule}.course-review-head,
	{$rule}.course-curriculum-title,
	{$rule}.cmsmasters_course_title,
	{$rule}.course-curriculum-title,
	{$rule}.students-list-title,
	{$rule}.learn-press-content-item-title,
	{$rule}.course-lesson-heading,
	{$rule}.lp-course-progress-heading {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active a,
	{$rule}.learn-press-user-profile .learn-press-tabs > li.current > a {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#learn-press-course-tabs ul.learn-press-nav-tabs .course-nav.active a,
	{$rule}.learn-press-user-profile .learn-press-tabs > li.current > a {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['language-school' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} LearnPress Color Scheme Rules ******************/


";
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Middle Color Scheme Rules ******************/

	/* Start Header Middle Content Color */
	.header_mid,
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_color']) . "
	}
	/* Finish Header Middle Content Color */
	
	
	/* Start Header Middle Primary Color */
	.header_mid a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_link']) . "
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:before,
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_mid_link']) . "
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_mid_link']) . "
	}
	/* Finish Header Middle Primary Color */
	
	
	/* Start Header Middle Rollover Color */
	.header_mid a:hover, 
	.header_mid .social_wrap a:hover,
	.header_mid .search_wrap .search_bar_wrap .search_button button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_hover']) . "
	}
	
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button,
	.header_mid .header_mid_but {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_mid_hover']) . "
	}
	
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_mid textarea:focus,
	.header_mid select:focus,
	.header_mid .header_mid_but {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_mid_hover']) . "
	}
	/* Finish Header Middle Rollover Color */
	
	
	/* Start Header Middle Background Color */
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button,
	.header_mid .header_mid_but {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_bg']) . "
	}
	
	.header_mid,
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .header_mid_but:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Background Color */
	
	
	/* Start Header Middle Background Color on Scroll */
	.header_mid.header_mid_scroll {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_mid_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_mid_bg_scroll']) . "
		}
	}
	/* Finish Header Middle Background Color on Scroll */
	
	
	/* Start Header Middle Borders Color */
	.header_mid .resp_mid_nav_wrap,
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_mid_border']) . "
	}
	 
	.header_mid .search_wrap .search_bar_wrap .search_button button,
	.header_mid .social_wrap a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_border']) . "
	}
	/* Finish Header Middle Borders Color */
	
	
	/* Start Header Middle Custom Rules */
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Custom Rules */

/***************** Finish Header Middle Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_link']) . "
	}
	
	.header_bot .button:hover, 
	.header_bot input[type=submit]:hover, 
	.header_bot input[type=button]:hover, 
	.header_bot button:hover, 
	.header_bot .search_wrap .search_bar_wrap .search_button button:hover, 
	.header_bot .search_wrap.search_opened .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_bot_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_hover']) . "
	}
	
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_bot_hover']) . "
	}
	
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_bot textarea:focus,
	.header_bot select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_bot_hover']) . "
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button, 
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_bg']) . "
	}
	
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	.header_bot.header_bot_scroll {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_bot_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_bot_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Borders Color */
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot .header_bot_inner:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_bot_border']) . "
	}
	
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Navigation Color Scheme Rules ******************/

	/* Start Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_title_link']) . "
		}
	}
	/* Finish Navigation Title Link Color */
	
	
	/* Start Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a:hover,
		ul.navigation > li > a:hover .nav_subtitle,
		ul.navigation > li:hover > a,
		ul.navigation > li:hover > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_title_link_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Color */
	
	
	/* Start Navigation Title Link Current Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-item > a .nav_subtitle, 
		ul.navigation > li.menu-item.current-menu-ancestor > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_title_link_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Color */
	
	
	/* Start Navigation Title Link Subtitle Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_title_link_subtitle']) . "
		}
		
		ul.navigation > li > a .nav_tag {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_title_link_subtitle']) . "
		}
	}
	/* Finish Navigation Title Link Subtitle Color */
	
	
	/* Start Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_title_link_bg']) . "
		}
	}
	/* Finish Navigation Title Link Background Color */
	
	
	/* Start Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a:hover,
		ul.navigation > li:hover > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_title_link_bg_hover']) . "
		}
	}
	/* Finish Navigation Title Link Hover Background Color */
	
	
	/* Start Navigation Title Link Current Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_title_link_bg_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Background Color */
	
	
	/* Start Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_title_link_border']) . "
		}
	}
	/* Finish Navigation Title Link Border Color */
	
	
	/* Start Navigation Dropdown Text Color */
	.navigation li .menu-item-mega-description-container, 
	.navigation li .menu-item-mega-description-container * {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_text']) . "
	}
	/* Finish Navigation Dropdown Tex Color */
	
	
	/* Start Navigation Dropdown Background Color */ 
	ul.navigation li > a .nav_tag {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_bg']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		ul.navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_dropdown_bg']) . "
		}
	}
	/* Finish Navigation Dropdown Background Color */
	
	
	/* Start Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_navigation_dropdown_border']) . "
		}
	}
	/* Finish Navigation Dropdown Border Color */
	
	
	/* Start Navigation Dropdown Link Color */
	.navigation .cmsmasters_resp_nav_toggle,
	.navigation li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_link']) . "
	}
	/* Finish Navigation Dropdown Link Color */
	
	
	/* Start Navigation Dropdown Link Hover Color */
	.navigation .cmsmasters_resp_nav_toggle:hover,
	.navigation .cmsmasters_resp_nav_toggle.active,
	.navigation li > a:hover,
	.navigation li > a:hover .nav_subtitle,
	.navigation li.current-menu-item > a, 
	.navigation li.current-menu-item > a .nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		ul.navigation li:hover > a, 
		ul.navigation li:hover > a .nav_subtitle, 
		ul.navigation li.current-menu-ancestor > a, 
		ul.navigation li.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_hover']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation li > ul li:hover > a, 
		ul.navigation li > ul li:hover > a .nav_subtitle, 
		ul.navigation li > ul li.current-menu-ancestor > a, 
		ul.navigation li > ul li.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_hover']) . "
		}
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_hover']) . "
	}
	
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_hover']) . "
	}
	/* Finish Navigation Dropdown Link Hover Color */
	
	
	/* Start Navigation Dropdown Link Subtitle Color */
	.navigation li a .nav_subtitle {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_subtitle']) . "
	}
	
	.navigation li a .nav_tag {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_subtitle']) . "
	}
	/* Finish Navigation Dropdown Link Subtitle Color */
	
	
	/* Start Navigation Dropdown Link Hover Highlight Color */
	.navigation li > a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_highlight']) . "
	}
	/* Finish Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Navigation Dropdown Link Border Color */
	.navigation ul li > a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		#header nav li,
		#header .navigation .cmsmasters_resp_nav_toggle,
		#header .navigation {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_navigation_dropdown_link_border']) . "
		}
	}
	/* Finish Navigation Dropdown Link Border Color */

/***************** Finish Navigation Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a, 
	.header_top .header_top_but {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_link']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .responsive_top_nav {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_link']) . "
		}
		
		.header_top .responsive_top_nav:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_link']) . "
		}
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before,
	.header_top .responsive_top_nav {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top .header_top_inner,
	.header_top .header_top_but,
	.header_top .header_top_inner:before {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_border']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .top_nav_wrap nav,
		.header_top .top_nav_wrap {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_border']) . "
		}
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['language-school' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Top Navigation Color Scheme Rules ******************/

	/* Start Header Top Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_title_link']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Color */
	
	
	/* Start Header Top Navigation Title Link Hover Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_title_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Color */
	
	
	/* Start Header Top Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_title_link_bg']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Header Top Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_title_link_bg_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Background Color */
	
	
	/* Start Header Top Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_title_link_border']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Border Color */
	
	
	/* Start Header Top Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Background Color */
	
	
	/* Start Header Top Navigation Dropdown Border Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_dropdown_border']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Border Color */
	
	
	/* Start Header Top Navigation Dropdown Link Color */
	.top_line_nav li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_hover']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .responsive_top_nav:hover, 
		.header_top .responsive_top_nav.active {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_hover']) . "
		}
		
		.header_top .responsive_top_nav:hover:before, 
		.header_top .responsive_top_nav.active:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_hover']) . "
		}
	}
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a, 
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Highlight Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a,
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_highlight']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Header Top Navigation Dropdown Link Border Color */
	.top_line_nav li > a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['language-school' . '_header_top_dropdown_link_border']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Border Color */

/***************** Finish Header Top Navigation Color Scheme Rules ******************/

";
	
	
	return apply_filters('language_school_theme_colors_secondary_filter', $custom_css);
}
