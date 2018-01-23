
$(document).ready(function() {
  console.log('we in');

//wow, that is pretty cool:
  $('.box').draggable({
    cursor: 'move',
    containment: 'parent',
    snap: '.list'
  });
});
