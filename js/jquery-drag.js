$(document).ready(
function(){
   
  //add visiblity equivalent of hide()
  //visibility equivalent of hide()
  jQuery.fn.visible = function() {
    return this.css('visibility', 'visible');
  };

  jQuery.fn.invisible = function() {
    return this.css('visibility', 'hidden');
  };

  jQuery.fn.visibilityToggle = function() {
    return this.css('visibility', function(i, visibility) {
      return (visibility == 'visible') ? 'hidden' : 'visible';
    });
  };
  
  //actual logic
  
  //setting variables
  let draggable = '.draggable';
  let droppable = '.droppable';
  let draggingSelector = '.student';
  let revertDuration = 300;
  
  function createDraggable(selector, parentObj){
    $(selector, parentObj).draggable({
      helper: 'clone',
      start: function(event, ui){
        ui.helper.css({
          'height': $(this).outerHeight(),
          'width': $(this).outerWidth()
        });
        $(this).invisible().slideUp().addClass('revert-to-me');
      },
      stop: function(event, ui){
        
        //recreate revert animation so it's in the right order
        $item = $('.revert-to-me');
        $ghost = ui.helper;
        
        $item.slideDown();
        $ghostClone = $ghost.clone();
        
        var moveClone = function(){
          var promise = $.Deferred();
          
          $ghostClone
            .css({
              'position': 'fixed'
            })
            .appendTo( $item.parent() )
            .animate({
              top: $item.offset().top,
              left: $item.offset().left
            })
            .queue(function(next){
              $(this).remove();
              promise.resolve();
              next();
            });
          return promise;
        }
        
        moveClone().done(function(){
          $item.visible().removeClass('revert-to-me');
        });
      }
    });
  };
  
  function createDroppable($droppableObj, acceptString, deactivateFunc = function(){}, dropInnerFunc = addToDroppable){
    $droppableObj.each(function(){
      let finalAccept = acceptString + ':not(#' + $(this).attr('id') + ') ' + draggingSelector;
      $(this).droppable({
        accept: finalAccept,
        activeClass: 'droppable-highlight',
        drop: function(event, ui){
          dropInnerFunc(event, ui);
          $droppableObj.each(function(){
            $(this).removeClass('droppable-highlight');
            $(this).removeClass('drag-within');
          });
        },
        over: function(event, ui){
          $(this).addClass('drag-within');
        },
        out: function(event,ui){
          $(this).removeClass('drag-within');
        },
        tolerance: 'pointer',
        deactivate: function(event, ui){
          deactivateFunc(event, ui)
        }
      });
    });
  };
  
  function addToDroppable(event, ui){
    $droppableContainer = event.target;
    $item = ui.draggable;
    $ghost = ui.helper;
    $parent = $item.parent();
    
    $item.detach().appendTo($droppableContainer);
    
  }
  
  createDraggable( draggingSelector, $(draggable) );
  createDroppable( $(droppable), droppable );
});