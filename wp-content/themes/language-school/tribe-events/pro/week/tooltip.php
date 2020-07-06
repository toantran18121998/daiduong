<?php

/**
 *
 * Please see single-event-hourly.php in this directory for detailed instructions on how to use and modify these templates.
 *
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.1.6
 *
 */

?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		[[ if(imageTooltipSrc.length) { ]]
		<div class="tribe-events-event-thumb preloader">
			<img class="full-width" src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
		<\/div>
		[[ } ]]
		<div class="tribe-events-event-body">
			<h3 class="entry-title summary">[[=raw title]]<\/h3>
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]] <\/abbr>
			<\/div>
			[[ if(excerpt.length) { ]]
			<p class="entry-summary description">[[=raw excerpt]]<\/p>
			[[ } ]]
			<span class="tribe-events-arrow"><\/span>
		<\/div>
	<\/div>
</script>

<script type="text/html" id="tribe_tmpl_tooltip_featured">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip tribe-event-featured">
		[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb preloader">
				<img class="full-width" src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
			<\/div>
		[[ } ]]
		<div class="tribe-events-event-body">
			<h3 class="entry-title summary">[[=raw title]]<\/h3>
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]] <\/abbr>
			<\/div>
			[[ if(excerpt.length) { ]]
			<p class="entry-summary description">[[=raw excerpt]]<\/p>
			[[ } ]]
			<span class="tribe-events-arrow"><\/span>
		<\/div>
	<\/div>
</script>
