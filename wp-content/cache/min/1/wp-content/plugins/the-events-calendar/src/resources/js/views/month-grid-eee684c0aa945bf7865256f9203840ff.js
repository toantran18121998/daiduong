tribe.events=tribe.events||{};tribe.events.views=tribe.events.views||{};tribe.events.views.monthGrid={};(function($,obj){'use strict';var $document=$(document);obj.selectors={grid:'[data-js="tribe-events-month-grid"]',row:'[data-js="tribe-events-month-grid-row"]',cell:'[data-js="tribe-events-month-grid-cell"]',focusable:'[tabindex]',focused:'[tabindex="0"]',};obj.keyCode={END:35,HOME:36,LEFT:37,UP:38,RIGHT:39,DOWN:40,};obj.isValidCell=function(grid,row,col){return(!isNaN(row)&&!isNaN(col)&&row>=0&&col>=0&&grid&&grid.length&&row<grid.length&&col<grid[row].length)};obj.getNextCell=function(grid,currentRow,currentCol,directionX,directionY){var row=currentRow+directionY;var col=currentCol+directionX;if(obj.isValidCell(grid,row,col)){return{row:row,col:col,}}
return{row:currentRow,col:currentCol,}};obj.setFocusPointer=function($grid,row,col){var state=$grid.data('tribeEventsState');if(obj.isValidCell(state.grid,row,col)){state.grid[state.currentRow][state.currentCol].attr('tabindex','-1');state.grid[row][col].attr('tabindex','0');state.currentRow=row;state.currentCol=col;$grid.data('tribeEventsState',state);return!0}
return!1};obj.focusCell=function($grid,row,col){if(obj.setFocusPointer($grid,row,col)){var state=$grid.data('tribeEventsState');state.grid[row][col].focus()}};obj.handleKeydown=function(event){var $grid=event.data.grid;var state=$grid.data('tribeEventsState');var key=event.which||event.keyCode;var row=state.currentRow;var col=state.currentCol;var nextCell;switch(key){case obj.keyCode.UP:nextCell=obj.getNextCell(state.grid,row,col,0,-1);row=nextCell.row;col=nextCell.col;break;case obj.keyCode.DOWN:nextCell=obj.getNextCell(state.grid,row,col,0,1);row=nextCell.row;col=nextCell.col;break;case obj.keyCode.LEFT:nextCell=obj.getNextCell(state.grid,row,col,-1,0);row=nextCell.row;col=nextCell.col;break;case obj.keyCode.RIGHT:nextCell=obj.getNextCell(state.grid,row,col,1,0);row=nextCell.row;col=nextCell.col;break;case obj.keyCode.HOME:if(event.ctrlKey){row=0}
col=0;break;case obj.keyCode.END:if(event.ctrlKey){row=state.grid.length-1}
col=state.grid[state.currentRow].length-1;break;default:return}
obj.focusCell($grid,row,col);event.preventDefault()};obj.handleClick=function(event){var $grid=event.data.grid;var state=$grid.data('tribeEventsState');var $clickedCell=$(event.target).closest(obj.selectors.focusable);for(var row=0;row<state.grid.length;row++){for(var col=0;col<state.grid[row].length;col++){if(state.grid[row][col].is($clickedCell)){obj.focusCell($grid,row,col);return}}}};obj.initState=function($grid){var state={grid:[],currentRow:0,currentCol:0,};$grid.data('tribeEventsState',state)};obj.setupGrid=function($grid){var state=$grid.data('tribeEventsState');$grid.find(obj.selectors.row).each(function(rowIndex,row){var gridRow=[];$(row).find(obj.selectors.cell).each(function(colIndex,cell){var $cell=$(cell);if($cell.is(obj.selectors.focusable)){if($cell.is(obj.selectors.focused)){state.currentRow=state.grid.length;state.currentCol=gridRow.length}
gridRow.push($cell)}else{var $focusableCell=$cell.find(obj.selectors.focusable);if($focusableCell.is(obj.selectors.focusable)){if($cell.is(obj.selectors.focused)){state.currentRow=state.grid.length;state.currentCol=gridRow.length}
gridRow.push($focusableCell)}}});if(gridRow.length){state.grid.push(gridRow)}});$grid.data('tribeEventsState',state)};obj.unbindEvents=function($grid){$grid.off()};obj.bindEvents=function($grid){$grid.on('keydown',{grid:$grid},obj.handleKeydown).on('click',{grid:$grid},obj.handleClick)};obj.deinit=function(event,jqXHR,settings){var $container=event.data.container;var $grid=$container.find(obj.selectors.grid);obj.unbindEvents($grid);$container.off('beforeAjaxSuccess.tribeEvents',obj.deinit)};obj.init=function(event,index,$container,data){var $grid=$container.find(obj.selectors.grid);if(!$grid.length){return}
obj.initState($grid);obj.setupGrid($grid);var state=$grid.data('tribeEventsState');obj.setFocusPointer($grid,state.currentRow,state.currentCol);obj.bindEvents($grid);$container.on('beforeAjaxSuccess.tribeEvents',{container:$container},obj.deinit)};obj.ready=function(){$document.on('afterSetup.tribeEvents',tribe.events.views.manager.selectors.container,obj.init)};$document.ready(obj.ready)})(jQuery,tribe.events.views.monthGrid)