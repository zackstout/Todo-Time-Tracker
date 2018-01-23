
$(document).ready(function() {
  console.log('we in');


//wow, that is pretty cool:
  $('.box').draggable({
    cursor: 'move',
    containment: 'parent',
    snap: '.list'
  });
});


//hmm, how do we get info about php variables over here in JS?
