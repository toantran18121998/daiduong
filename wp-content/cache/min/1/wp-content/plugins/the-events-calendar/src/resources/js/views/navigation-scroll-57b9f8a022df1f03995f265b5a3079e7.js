tribe.events=tribe.events||{};tribe.events.views=tribe.events.views||{};tribe.events.views.navigationScroll={};(function($,obj){'use strict';var $document=$(document);var $window=$(window);obj.scrollUp=function(event,html,textStatus,qXHR){var $container=$(event.target);var windowTop=$window.scrollTop();var containerOffset=$container.offset();var scrollTopRequirement=windowTop*0.75;if(scrollTopRequirement>containerOffset.top){$window.scrollTop(containerOffset.top)}};obj.ready=function(){$document.on('afterAjaxSuccess.tribeEvents',tribe.events.views.manager.selectors.container,obj.scrollUp)};$document.ready(obj.ready)})(jQuery,tribe.events.views.navigationScroll)